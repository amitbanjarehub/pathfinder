<?php

namespace App\Livewire\Reports\Counsellor;

use App\Models\Purchase;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class PurchaseReport extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function getPurchasesProperty()
    {
        return Purchase::with('test')
            ->where('user_id', Auth::id())
            ->whereHas('test', function ($q) {
                $q->where('title', 'like', '%' . $this->search . '%');
            })
            ->latest()
            ->paginate(10);
    }

    public function render()
    {
        return view('livewire.reports.counsellor.purchase-report', [
            'purchases' => $this->getPurchasesProperty()
        ]);
    }
}
