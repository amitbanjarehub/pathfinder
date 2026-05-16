<?php

namespace App\Livewire;

use Livewire\Component;

class MyTests extends Component
{
    public function render()
    {
        $user = auth()->user();
        $tests = collect();

        // Students see their assigned tests
        if ($user->hasRole('student')) {
            $assignments = \App\Models\Assignment::where('student_id', $user->id)
                ->with(['test', 'assigner'])
                ->latest()
                ->get();
            
            foreach ($assignments as $assignment) {
                $attempt = \App\Models\TestAttempt::where('test_id', $assignment->test_id)
                    ->where('user_id', $user->id)
                    ->where('assignment_id', $assignment->id)
                    ->first();
                
                $tests->push([
                    'test' => $assignment->test,
                    'assigned_by' => $assignment->assigner->name,
                    'assignment_id' => $assignment->id,
                    'attempt' => $attempt,
                ]);
            }
        }
        
        // Counsellors/Institutes see purchased tests
        if ($user->hasRole(['counsellor', 'institute', 'professional'])) {
            $purchases = \App\Models\Purchase::where('user_id', $user->id)
                ->where('status', 'completed')
                ->with('test')
                ->latest()
                ->get();
            
            foreach ($purchases as $purchase) {
                $assignedStudent = null;
                if ($purchase->is_used) {
                    $assignment = \App\Models\Assignment::where('purchase_id', $purchase->id)->with('student')->first();
                    if ($assignment && $assignment->student) {
                        $assignedStudent = $assignment->student->name;
                    }
                }

                $tests->push([
                    'test' => $purchase->test,
                    'purchased_at' => $purchase->created_at,
                    'purchase_id' => $purchase->id,
                    'test_code' => $purchase->test_code,
                    'is_used' => $purchase->is_used,
                    'assigned_student' => $assignedStudent,
                ]);
            }
        }

        return view('livewire.my-tests', [
            'tests' => $tests
        ]);
    }
}
