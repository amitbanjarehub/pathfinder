<?php

namespace App\Livewire\Reports\Counsellor;

use App\Models\Assignment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class StudentReport extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function toggleDownload($assignmentId)
    {
        $assignment = Assignment::with('purchase')
            ->where('assigner_id', Auth::id())
            ->findOrFail($assignmentId);

        if ($assignment->purchase) {
            $assignment->purchase->update([
                'allow_student_download' => !$assignment->purchase->allow_student_download
            ]);
        }
    }

    public function getStudentsProperty()
    {
        return Assignment::with(['student', 'test', 'testAttempt', 'purchase'])
            ->where('assigner_id', Auth::id())
            ->whereHas('student', function ($q) {
                $q->where('name', 'like', '%' . $this->search . '%');
            })
            ->latest()
            ->paginate(10);
    }

    public function render()
    {
        return view('livewire.reports.counsellor.student-report', [
            'assignments' => $this->getStudentsProperty()
        ]);
    }
}

