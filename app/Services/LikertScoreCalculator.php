<?php

namespace App\Services;

use App\Models\TestAttempt;
use App\Models\TraitResult;

class LikertScoreCalculator
{
    // Question mapping based on your 20 questions
    protected $traitMapping = [
        'extraversion' => [355, 364, 369, 374],  // Social, outgoing
        'openness' => [356, 365, 370, 372],       // Open to new experiences
        'conscientiousness' => [357, 360, 362, 367], // Organized, disciplined
        'agreeableness' => [358, 361, 366, 371],  // Compassionate, cooperative
        'neuroticism' => [359, 363, 368, 373],    // Anxiety, emotional stability
    ];
    
    // Questions that need reverse scoring (negatively worded)
    // Jab question ulta ho (e.g., "I don't like...")
    protected $reverseScored = [365, 366, 367, 368, 371, 373, 374];
    
    public function calculateAndSave(TestAttempt $attempt)
    {
        // Delete old results if any
        $attempt->traitResults()->delete();
        
        $scores = [];
        
        foreach ($this->traitMapping as $trait => $questions) {
            $totalScore = 0;
            $answeredCount = 0;
            
            foreach ($questions as $questionId) {
                $answer = $attempt->answers()
                    ->where('question_id', $questionId)
                    ->first();
                
                if ($answer && $answer->likert_value !== null) {
                    $score = $answer->likert_value;
                    
                    // Reverse scoring (1 becomes 7, 2 becomes 6, etc.)
                    if (in_array($questionId, $this->reverseScored)) {
                        $score = 8 - $score;
                    }
                    
                    $totalScore += $score;
                    $answeredCount++;
                }
            }
            
            if ($answeredCount > 0) {
                // Min possible score = questions count * 1
                // Max possible score = questions count * 7
                $minScore = $answeredCount * 1;
                $maxScore = $answeredCount * 7;
                $percentage = (($totalScore - $minScore) / ($maxScore - $minScore)) * 100;
                
                $level = $this->getLevel($percentage);
                $description = $this->getDescription($trait, $level);
                
                TraitResult::create([
                    'test_attempt_id' => $attempt->id,
                    'trait_name' => ucfirst($trait),
                    'raw_score' => $totalScore,
                    'percentage' => round($percentage, 2),
                    'level' => $level,
                    'description' => $description,
                ]);
                
                $scores[$trait] = [
                    'score' => $totalScore,
                    'percentage' => round($percentage, 2),
                    'level' => $level,
                ];
            }
        }
        
        return $scores;
    }
    
    private function getLevel($percentage)
    {
        if ($percentage < 33) return 'Low';
        if ($percentage < 66) return 'Medium';
        return 'High';
    }
    
    private function getDescription($trait, $level)
    {
        $descriptions = [
            'extraversion' => [
                'Low' => 'You prefer solitary activities and need time alone to recharge. You may be seen as reserved in social situations, but this allows you to focus deeply on tasks.',
                'Medium' => 'You enjoy social interactions but also value your alone time. You strike a healthy balance between socializing and independent work.',
                'High' => 'You are outgoing, energetic, and thrive in social situations. You enjoy meeting new people and working in teams.',
            ],
            'openness' => [
                'Low' => 'You prefer familiar routines and traditional approaches. You like concrete information and practical solutions over abstract ideas.',
                'Medium' => 'You balance between tradition and novelty. You are open to new ideas but prefer some structure and predictability.',
                'High' => 'You are creative, curious, and enjoy new experiences. You appreciate art, adventure, and innovative approaches to problems.',
            ],
            'conscientiousness' => [
                'Low' => 'You prefer flexibility and spontaneity over strict schedules. You work well in dynamic environments but may need help with organization.',
                'Medium' => 'You are generally organized but can adapt when needed. You balance task completion with enjoying the moment.',
                'High' => 'You are highly organized, reliable, and disciplined. You set high standards, plan effectively, and consistently meet deadlines.',
            ],
            'agreeableness' => [
                'Low' => 'You are competitive and value truth and logic over harmony. You are willing to challenge others\' ideas for the sake of improvement.',
                'Medium' => 'You balance cooperation with assertiveness. You can maintain relationships while standing your ground on important issues.',
                'High' => 'You are compassionate, trusting, and cooperative. You excel in team settings and prioritize maintaining positive relationships.',
            ],
            'neuroticism' => [
                'Low' => 'You are emotionally stable and resilient. You handle stress well, stay calm under pressure, and recover quickly from setbacks.',
                'Medium' => 'You experience normal emotional fluctuations but generally cope well with stress and maintain perspective.',
                'High' => 'You are sensitive to stress and may experience anxiety or mood swings. You benefit from emotional support and stress management techniques.',
            ],
        ];
        
        return $descriptions[$trait][$level] ?? 'Description not available.';
    }
}