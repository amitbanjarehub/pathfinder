<?php

namespace App\Services;

use App\Models\TestAttempt;
use Barryvdh\DomPDF\Facade\Pdf;

class TestResultPdf
{
    public function generate(TestAttempt $attempt)
    {
        $attempt->load(['test.sections.parts.questions', 'test.sections.scoreScale.ranges', 'answers.question', 'user']);

        // Calculate section scores
        $sectionScores = [];
        $totalScore = 0;
        $maxTotalScore = 0;

        foreach ($attempt->test->sections as $section) {
            $sectionScore = 0;
            $sectionMaxScore = 0;

            foreach ($section->parts as $part) {
                foreach ($part->questions as $question) {
                    $sectionMaxScore += $question->marks;
                    
                    $answer = $attempt->answers->where('question_id', $question->id)->first();
                    if ($answer && $answer->option && $answer->option->is_correct) {
                        $sectionScore += $question->marks;
                    }
                }
            }

            // Calculate Sten Score
            $stenScore = null;
            if ($section->scoreScale) {
                foreach ($section->scoreScale->ranges as $range) {
                    if ($sectionScore >= $range->min_score && $sectionScore <= $range->max_score) {
                        $stenScore = $range->sten_score;
                        break;
                    }
                }
            }

            $sectionScores[] = [
                'name' => $section->title,
                'score' => $sectionScore,
                'max_score' => $sectionMaxScore,
                'sten_score' => $stenScore,
                'percentage' => $sectionMaxScore > 0 ? ($sectionScore / $sectionMaxScore) * 100 : 0,
            ];

            $totalScore += $sectionScore;
            $maxTotalScore += $sectionMaxScore;
        }

        // Prepare user details
        $userDetails = [];
        if ($attempt->user) {
            $profileData = $attempt->user->profile_data ?? [];
            $userDetails = array_merge([
                'name' => $attempt->user->name,
                'email' => $attempt->user->email,
                'role' => $attempt->user->getRoleNames()->first(),
            ], is_array($profileData) ? $profileData : []);
        } elseif ($attempt->guest_details) {
            $userDetails = $attempt->guest_details;
            $userDetails['role'] = 'Guest';
        }

        $pdf = Pdf::loadView('pdf.test-result', [
            'attempt' => $attempt,
            'test' => $attempt->test,
            'sectionScores' => $sectionScores,
            'totalScore' => $totalScore,
            'maxTotalScore' => $maxTotalScore,
            'userDetails' => $userDetails,
        ]);

        return $pdf;
    }
}
