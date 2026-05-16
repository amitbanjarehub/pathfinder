<?php

namespace App\Livewire\Reports\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserReport extends Component
{
    use WithPagination;

    public $roleFilter = 'counsellor'; // 'counsellor' or 'student'
    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function updatedRoleFilter()
    {
        $this->resetPage();
    }

    public function getUsersProperty()
    {
        $query = User::query()
            ->where('name', 'like', '%' . $this->search . '%');

        if ($this->roleFilter === 'counsellor') {
            $query->role(['counsellor', 'professional', 'institute']);
        } else {
            $query->role('student');
        }

        return $query->paginate(10);
    }

    public function render()
    {
        return view('livewire.reports.admin.user-report', [
            'users' => $this->getUsersProperty()
        ]);
    }
}
