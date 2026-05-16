<?php

namespace App\Livewire\Reports\Admin;

use App\Models\TestAttempt;
use Livewire\Component;
use Livewire\WithPagination;

class ActivityReport extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function getAttemptsProperty()
    {
        return TestAttempt::with(['user', 'test'])
            ->whereHas('user', function ($q) {
                $q->where('name', 'like', '%' . $this->search . '%');
            })
            ->orWhereHas('test', function ($q) {
                $q->where('title', 'like', '%' . $this->search . '%');
            })
            ->latest()
            ->paginate(10);
    }

    public function render()
    {
        return view('livewire.reports.admin.activity-report', [
            'attempts' => $this->getAttemptsProperty()
        ]);
    }
}
