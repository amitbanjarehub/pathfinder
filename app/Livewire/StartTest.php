<?php

namespace App\Livewire;

use Livewire\Component;

class StartTest extends Component
{
    public $testCode = '';
    public $test = null;
    public $assignmentId = null;

    public function mount($testId = null, $assignmentId = null)
    {
        if ($testId) {
            $this->test = \App\Models\Test::findOrFail($testId);
        }
        $this->assignmentId = $assignmentId;
    }

    public function findTestByCode()
    {
        $this->validate([
            'testCode' => 'required|exists:purchases,test_code'
        ]);

        $purchase = \App\Models\Purchase::where('test_code', $this->testCode)->firstOrFail();
        
        if ($purchase->is_used) {
            $this->addError('testCode', 'This test code has already been used.');
            return;
        }

        $this->test = $purchase->test;
    }

    public function startTest()
    {
        if (!$this->test) {
            return;
        }

        // If assignment ID is present, verify assignment
        if ($this->assignmentId) {
            $assignment = \App\Models\Assignment::find($this->assignmentId);
            
            if (!$assignment || $assignment->student_id !== auth()->id()) {
                session()->flash('error', 'Invalid assignment.');
                return;
            }
            
            // If assignment is linked to a purchase, check if purchase is valid (optional, but good for consistency)
            // But if assignment exists, it means it was assigned.
            // We should check if the assignment is already "completed" or "in_progress" via attempts?
            // The attempt creation logic below handles "in_progress".
            
        } else {
            // Code-based access (legacy or direct)
            // Re-verify code before starting
            $purchase = \App\Models\Purchase::where('test_code', $this->testCode)->first();
            
            if (!$purchase || $purchase->is_used) {
                session()->flash('error', 'Invalid or used test code.');
                return;
            }
        }

        // Check if test has content
        $hasQuestions = false;
        foreach ($this->test->sections as $section) {
            foreach ($section->parts as $part) {
                if ($part->questions()->count() > 0) {
                    $hasQuestions = true;
                    break 2;
                }
            }
        }

        if (!$hasQuestions) {
            session()->flash('error', 'This test has no questions yet. It cannot be started.');
            return;
        }

        // Create test attempt
        $attempt = \App\Models\TestAttempt::create([
            'test_id' => $this->test->id,
            'user_id' => auth()->id(),
            'assignment_id' => $this->assignmentId,
            'status' => 'in_progress',
        ]);

        return redirect()->route('test.play', $attempt->id);
    }

    public function render()
    {
        return view('livewire.start-test');
    }
}
