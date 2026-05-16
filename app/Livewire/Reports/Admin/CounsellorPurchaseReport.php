<?php

namespace App\Livewire\Reports\Admin;

use App\Models\Purchase;
use Livewire\Component;
use Livewire\WithPagination;

class CounsellorPurchaseReport extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function getPurchasesProperty()
    {
        return Purchase::with(['user', 'test'])
            ->whereHas('user', function ($q) {
                $q->role(['counsellor', 'professional', 'institute'])
                    ->where('name', 'like', '%' . $this->search . '%');
            })
            ->orWhereHas('test', function ($q) {
                $q->where('title', 'like', '%' . $this->search . '%');
            })
            ->whereHas('user', function ($q) {
                $q->role(['counsellor', 'professional', 'institute']);
            })
            ->latest()
            ->paginate(10);
    }

    public function render()
    {
        return view('livewire.reports.admin.counsellor-purchase-report', [
            'purchases' => $this->getPurchasesProperty()
        ]);
    }
}
