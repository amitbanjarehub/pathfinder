<?php

namespace App\Livewire;

use Livewire\Component;

class AssignTest extends Component
{
    public $purchaseId;
    public $purchase;
    public $test;
    public $searchTerm = '';
    public $selectedStudent = null;

    public function mount($purchaseId)
    {
        $this->purchaseId = $purchaseId;
        $this->purchase = \App\Models\Purchase::with('test')->findOrFail($purchaseId);
        
        // Verify ownership
        if ($this->purchase->user_id !== auth()->id()) {
            abort(403);
        }
        
        $this->test = $this->purchase->test;
    }

    public function assignToStudents()
    {
        $this->validate([
            'selectedStudent' => 'required|exists:users,id',
        ]);

        // Check if already assigned
        // Check if this specific purchase is already assigned
        $alreadyAssigned = \App\Models\Assignment::where('purchase_id', $this->purchaseId)->exists();

        if ($alreadyAssigned) {
            session()->flash('error', "This test code has already been assigned.");
            return;
        }

        // Check if student is already assigned to this test (optional, but maybe we allow multiple assignments if they have multiple codes?)
        // The user said "assigning students to tests table's id... is a bad thing".
        // So we should allow assigning the same test to the same student IF it's a different purchase.
        // So we REMOVE the check for existing student assignment to the test ID.
        
        \App\Models\Assignment::create([
            'test_id' => $this->test->id,
            'assigner_id' => auth()->id(),
            'student_id' => $this->selectedStudent,
            'purchase_id' => $this->purchaseId,
            'status' => 'assigned',
        ]);

        // Mark purchase as used
        $this->purchase->update(['is_used' => true]);
        
        session()->flash('message', "Test assigned successfully!");

        return redirect()->route('my.tests');
    }

    public function render()
    {
        // Get all students
        $students = \App\Models\User::role('student')
            ->when($this->searchTerm, function($query) {
                $query->where(function($q) {
                    $q->where('name', 'like', '%' . $this->searchTerm . '%')
                      ->orWhere('email', 'like', '%' . $this->searchTerm . '%');
                });
            })
            ->orderBy('name')
            ->get();

        // Get already assigned student IDs for this test by this assigner
        // Get already assigned student IDs for this specific purchase
        $assignedStudentIds = \App\Models\Assignment::where('purchase_id', $this->purchaseId)
            ->pluck('student_id')
            ->toArray();

        return view('livewire.assign-test', [
            'students' => $students,
            'assignedStudentIds' => $assignedStudentIds
        ]);
    }
}
