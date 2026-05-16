<?php

namespace App\Livewire;

use App\Models\QuestionAnswer;
use App\Models\Test;
use App\Models\TestAttempt;
use App\Services\LikertScoreCalculator;
use Livewire\Component;

class FreeTestPlayer extends Component
{
    public $test;

    public $allSections = [];

    public $allQuestions = [];

    public $currentSectionIndex = 0;

    public $currentPartIndex = 0;

    public $currentQuestionIndex = 0;

    public $selectedAnswer = null;

    public $answers = [];

    public $sectionStartIndex = 0;

    public $sectionEndIndex = 0;

    public $isTimedSection = false;

    public $totalQuestions = 0;

    public $likertBatchSize = 5;

    public $likertStartIndex = 0;

    public $likertQuestions = [];

    public $timeRemaining = null;

    public $likertTotalBatches = 0;

    public $likertCurrentBatch = 0;

    public function mount()
    {
        $this->test = Test::where('is_free', 1)
            ->with(['sections.parts.questions.options'])
            ->firstOrFail();

        $this->allSections = $this->test->sections;
        $this->allQuestions = [];
        $addedQuestionIds = [];

        foreach ($this->allSections as $section) {
            foreach ($section->parts as $part) {
                foreach ($part->questions as $question) {
                    if (! in_array($question->id, $addedQuestionIds)) {
                        $this->allQuestions[] = $question;
                        $addedQuestionIds[] = $question->id;
                    }
                }
            }
        }

        $this->totalQuestions = count($this->allQuestions);
        $this->isTimedSection = false;
        $this->sectionStartIndex = 0;
        $this->sectionEndIndex = $this->totalQuestions - 1;
        $this->timeRemaining = null;

        if (empty($this->allQuestions)) {
            session()->flash('error', 'This test has no questions yet.');
        }

        $this->likertQuestions = collect($this->allQuestions)
            ->filter(fn ($q) => $q->question_type === 'likert')
            ->values()
            ->all();

        $this->likertTotalBatches = ceil(count($this->likertQuestions) / $this->likertBatchSize);
        $this->likertCurrentBatch = 0;
        $this->likertStartIndex = 0;

        logger()->info('Likert Questions Loaded', [
            'total_questions' => count($this->likertQuestions),
        ]);
    }

    public function checkTime()
    {
        // Not needed for free test
    }

    private function saveCurrentAnswerIfSelected()
    {
        $questionId = $this->allQuestions[$this->currentQuestionIndex]->id;

        if ($this->selectedAnswer !== null) {
            $this->answers[$questionId] = [
                'option_id' => $this->selectedAnswer,
                'status' => 'answered',
            ];
        }
    }

    public function goToQuestion($index)
    {
        $this->saveCurrentAnswerIfSelected();
        $this->currentQuestionIndex = $index;
        $this->loadCurrentAnswer();
    }

    public function loadCurrentAnswer()
    {
        $questionId = $this->allQuestions[$this->currentQuestionIndex]->id;

        if (isset($this->answers[$questionId])) {
            $this->selectedAnswer = $this->answers[$questionId]['option_id'];
        } else {
            $this->selectedAnswer = null;
        }
    }

    private function saveAnswer($status, $forceStatus = false)
    {
        $question = $this->allQuestions[$this->currentQuestionIndex];
        $questionId = $question->id;

        $finalStatus = $status;

        if (! $forceStatus && ! $this->selectedAnswer && $status !== 'skipped') {
            $finalStatus = 'skipped';
        }

        $this->answers[$questionId] = [
            'option_id' => $this->selectedAnswer,
            'status' => $finalStatus,
        ];
    }

    public function saveAndNext()
    {
        $this->saveAnswer('answered');

        if ($this->currentQuestionIndex < $this->totalQuestions - 1) {
            $this->currentQuestionIndex++;
            $this->loadCurrentAnswer();
        }
    }

    public function markForReview()
    {
        $this->saveAnswer('review', true);

        if ($this->currentQuestionIndex < $this->totalQuestions - 1) {
            $this->currentQuestionIndex++;
            $this->loadCurrentAnswer();
        }
    }

    public function skip()
    {
        $this->saveAnswer('skipped');

        if ($this->currentQuestionIndex < $this->totalQuestions - 1) {
            $this->currentQuestionIndex++;
            $this->loadCurrentAnswer();
        }
    }

    // public function submitTest()
    // {
    //     // Last selected answer bhi save ho jaye
    //     $this->saveCurrentAnswerIfSelected();

    //     // ✅ Step 1: Unanswered questions ko bhi include kar (optional but recommended)
    //     foreach ($this->allQuestions as $question) {
    //         if (! isset($this->answers[$question->id])) {
    //             $this->answers[$question->id] = [
    //                 'option_id' => null,
    //                 'status' => 'skipped',
    //             ];
    //         }
    //     }

    //     // ✅ Step 2: Convert associative → required array format
    //     $formattedAnswers = [];

    //     foreach ($this->answers as $questionId => $data) {
    //         $formattedAnswers[] = [
    //             'question_id' => $questionId,
    //             'option_id' => $data['option_id'],
    //             'status' => $data['status'],
    //         ];
    //     }

    //     // ✅ Step 3: Browser (JS) me bhejna

    //     session()->put('free_test_answers', $formattedAnswers);
    //     session()->put('free_test_id', $this->test->id);

    //     $this->dispatch('open-submit-modal', answers: $formattedAnswers);

    //     // ✅ Step 4: Backend log Office phuch cukhe hv
    //     logger()->info('Free Test Submission', [
    //         'answers' => $formattedAnswers,
    //         'total_questions' => $this->totalQuestions,
    //     ]);
    // }

    // public function submitTest()
    // {
    //     $this->saveCurrentAnswerIfSelected();

    //     foreach ($this->allQuestions as $question) {
    //         if (! isset($this->answers[$question->id])) {
    //             $this->answers[$question->id] = [
    //                 'option_id' => null,
    //                 'status' => 'skipped',
    //             ];
    //         }
    //     }

    //     // =========================
    //     // CREATE TEST ATTEMPT
    //     // =========================

    //     $attempt = TestAttempt::create([
    //         'test_id' => $this->test->id,
    //         'user_id' => auth()->id(),
    //         'status' => 'completed',
    //         'start_time' => now(),
    //         'end_time' => now(),
    //     ]);

    //     // =========================
    //     // SAVE ANSWERS
    //     // =========================

    //     foreach ($this->answers as $questionId => $data) {

    //         $question = collect($this->allQuestions)
    //             ->firstWhere('id', $questionId);

    //         // QuestionAnswer::create([
    //         //     'test_attempt_id' => $attempt->id,
    //         //     'question_id' => $questionId,
    //         //     'option_id' => $data['option_id'],
    //         //     'likert_value' => $question->question_type === 'likert'
    //         //         ? $data['option_id']
    //         //         : null,
    //         // ]);

    //         QuestionAnswer::create([
    //             'test_attempt_id' => $attempt->id,
    //             'question_id' => $questionId,

    //             // MCQ me real option_id save hoga
    //             'option_id' => $question->question_type === 'mcq'
    //                 ? $data['option_id']
    //                 : null,

    //             // Likert me scale value save hoga
    //             'likert_value' => $question->question_type === 'likert'
    //                 ? $data['option_id']
    //                 : null,
    //         ]);
    //     }

    //     // =========================
    //     // CALCULATE LIKERT RESULT
    //     // =========================

    //     $hasLikert = collect($this->allQuestions)
    //         ->contains(fn ($q) => $q->question_type === 'likert');

    //     if ($hasLikert) {

    //         app(LikertScoreCalculator::class)
    //             ->calculateAndSave($attempt);
    //     }

    //     // =========================
    //     // SESSION OPTIONAL
    //     // =========================

    //     session()->flash('success', 'Test submitted successfully.');

    //     return redirect()->route('test.result', $attempt->id);
    // }

    public function submitTest()
    {
        // 1. Last selected answer save karein
        $this->saveCurrentAnswerIfSelected();

        // 2. Unanswered questions ko handle karein
        foreach ($this->allQuestions as $question) {
            if (! isset($this->answers[$question->id])) {
                $this->answers[$question->id] = [
                    'option_id' => null,
                    'status' => 'skipped',
                ];
            }
        }

        // 3. Database mein Attempt create karein (Taaki Likert Calculator ko ID mil sake)
        $attempt = \App\Models\TestAttempt::create([
            'test_id' => $this->test->id,
            'user_id' => auth()->id() ?? null, // Agar user guest hai toh null, registration ke baad update ho jayega
            'status' => 'completed',
            'start_time' => now(), // Aap chahein toh session se real start time le sakte hain
            'end_time' => now(),
        ]);

        // 4. Answers ko format aur save dono karein
        $formattedAnswers = [];
        foreach ($this->answers as $questionId => $data) {
            $question = collect($this->allQuestions)->firstWhere('id', $questionId);

            // Database mein save karein (Important for Likert Calculator)
            \App\Models\QuestionAnswer::create([
                'test_attempt_id' => $attempt->id,
                'question_id' => $questionId,
                'option_id' => ($question->question_type === 'mcq') ? $data['option_id'] : null,
                'likert_value' => ($question->question_type === 'likert') ? $data['option_id'] : null,
            ]);

            $formattedAnswers[] = [
                'question_id' => $questionId,
                'option_id' => $data['option_id'],
                'status' => $data['status'],
            ];
        }

        // 5. Likert Calculation Logic (Sirf agar test likert type ka hai)
        $hasLikert = collect($this->allQuestions)->contains(fn ($q) => $q->question_type === 'likert');
        if ($hasLikert) {
            app(\App\Services\LikertScoreCalculator::class)->calculateAndSave($attempt);
        }

        // 6. Session aur Modal Dispatch
        session()->put('free_test_answers', $formattedAnswers);
        session()->put('free_test_id', $this->test->id);
        session()->put('last_attempt_id', $attempt->id); // Is ID ko session mein rakhein

        $this->dispatch('open-submit-modal', answers: $formattedAnswers, attemptId: $attempt->id);

        logger()->info('Free Test Submission with Likert Check', [
            'attempt_id' => $attempt->id,
            'has_likert' => $hasLikert,
        ]);
    }

    public function render()
    {

        $this->dispatch('questions-loaded', total: count($this->likertQuestions));

        return view('livewire.free-test-player', [
            'currentQuestion' => $this->allQuestions[$this->currentQuestionIndex] ?? null,
            'answers' => $this->answers,
            'sectionStartIndex' => $this->sectionStartIndex,
            'sectionEndIndex' => $this->sectionEndIndex,
            'isTimedSection' => $this->isTimedSection,
            'totalQuestions' => $this->totalQuestions,
            'allSections' => $this->allSections,
            'currentSectionIndex' => $this->currentSectionIndex,
            'currentPartIndex' => $this->currentPartIndex,
            'timeRemaining' => $this->timeRemaining,
        ])->layout('components.layouts.public');

    }

    public function getCurrentLikertBatch()
    {
        return array_slice(
            $this->likertQuestions,
            $this->likertStartIndex,
            $this->likertBatchSize
        );
    }

    public function nextLikertBatch()
    {
        if (($this->likertStartIndex + $this->likertBatchSize) < count($this->likertQuestions)) {
            $this->likertStartIndex += $this->likertBatchSize;
            $this->likertCurrentBatch++;
        }
    }

    public function prevLikertBatch()
    {
        if ($this->likertStartIndex > 0) {
            $this->likertStartIndex -= $this->likertBatchSize;
            $this->likertCurrentBatch--;
        }
    }

    public function getLikertProgressPercent()
    {
        if ($this->likertTotalBatches === 0) {
            return 0;
        }

        return (($this->likertCurrentBatch + 1) / $this->likertTotalBatches) * 100;
    }
}
