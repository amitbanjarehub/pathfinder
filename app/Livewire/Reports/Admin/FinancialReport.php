<?php

namespace App\Livewire\Reports\Admin;

use App\Models\Purchase;
use Livewire\Component;
use Livewire\WithPagination;

class FinancialReport extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function getStatsProperty()
    {
        return [
            'total_revenue' => Purchase::sum('price_paid'),
            'total_sales' => Purchase::count(),
            'avg_sale' => Purchase::avg('price_paid'),
        ];
    }

    public function getPurchasesProperty()
    {
        return Purchase::with(['user', 'test'])
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
        return view('livewire.reports.admin.financial-report', [
            'purchases' => $this->getPurchasesProperty(),
            'stats' => $this->getStatsProperty()
        ]);
    }
}
