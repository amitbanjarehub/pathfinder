<?php

namespace App\Livewire\Reports\Admin;

use App\Models\Assignment;
use Livewire\Component;
use Livewire\WithPagination;

class AssignmentReport extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function getAssignmentsProperty()
    {
        return Assignment::with(['student', 'assigner', 'test', 'purchase'])
            ->where(function ($query) {
                $query->whereHas('student', function ($q) {
                    $q->where('name', 'like', '%' . $this->search . '%');
                })
                    ->orWhereHas('assigner', function ($q) {
                        $q->where('name', 'like', '%' . $this->search . '%');
                    })
                    ->orWhereHas('test', function ($q) {
                        $q->where('title', 'like', '%' . $this->search . '%');
                    });
            })
            ->latest()
            ->paginate(10);
    }

    public function render()
    {
        return view('livewire.reports.admin.assignment-report', [
            'assignments' => $this->getAssignmentsProperty()
        ]);
    }
}
