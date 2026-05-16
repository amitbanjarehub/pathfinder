<?php

namespace App\Livewire;

use App\Models\Assignment;
use App\Models\Purchase;
use App\Models\Test;
use App\Models\TestAttempt;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard')]
class Dashboard extends Component
{
    public $stats = [];
    public $recentActivity = [];
    public $chartData = [];

    public function mount()
    {
        $user = Auth::user();

        if ($user->hasRole('admin')) {
            $this->loadAdminStats();
        } elseif ($user->hasRole('student')) {
            $this->loadStudentStats($user);
        } elseif ($user->hasAnyRole(['counsellor', 'professional', 'institute'])) {
            $this->loadCounsellorStats($user);
        }
    }

    public function loadAdminStats()
    {
        $this->stats = [
            ['label' => 'Total Tests', 'value' => Test::count(), 'icon' => 'clipboard-document-list', 'color' => 'blue'],
            ['label' => 'Active Users', 'value' => User::count(), 'icon' => 'users', 'color' => 'green'],
            ['label' => 'Tests Taken', 'value' => TestAttempt::where('status', 'completed')->count(), 'icon' => 'check-circle', 'color' => 'purple'],
            ['label' => 'Revenue', 'value' => '₹' . number_format(Purchase::sum('price_paid'), 2), 'icon' => 'currency-rupee', 'color' => 'yellow'],
        ];

        $this->recentActivity = TestAttempt::with(['user', 'test'])
            ->latest()
            ->take(5)
            ->get();

        // Chart Data: Tests Created vs Taken (Last 6 Months)
        // Simplified for demo - just static or basic dynamic data
        $this->chartData = [
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            'datasets' => [
                [
                    'label' => 'Tests Taken',
                    'data' => [12, 19, 3, 5, 2, 3], // Replace with real aggregation if needed
                    'borderColor' => '#4f46e5',
                    'backgroundColor' => '#4f46e5',
                ]
            ]
        ];
    }

    public function loadStudentStats($user)
    {
        $attempts = TestAttempt::where('user_id', $user->id)->get();
        $completed = $attempts->where('status', 'completed');
        
        $this->stats = [
            ['label' => 'Assigned Tests', 'value' => Assignment::where('student_id', $user->id)->count(), 'icon' => 'clipboard-document', 'color' => 'blue'],
            ['label' => 'Completed', 'value' => $completed->count(), 'icon' => 'check-badge', 'color' => 'green'],
            ['label' => 'Avg Score', 'value' => $completed->avg('score') ? round($completed->avg('score'), 1) : 'N/A', 'icon' => 'academic-cap', 'color' => 'purple'],
        ];

        $this->recentActivity = $attempts->sortByDesc('created_at')->take(5);
        
        // Chart Data: Performance Trend
        $this->chartData = [
            'labels' => $completed->pluck('test.title')->take(5)->toArray(),
            'datasets' => [
                [
                    'label' => 'Score',
                    'data' => $completed->pluck('score')->take(5)->toArray(),
                    'borderColor' => '#10b981',
                    'backgroundColor' => '#10b981',
                ]
            ]
        ];
    }

    public function loadCounsellorStats($user)
    {
        $purchases = Purchase::where('user_id', $user->id)->get();
        $assignments = Assignment::where('assigner_id', $user->id)->get();

        $this->stats = [
            ['label' => 'Tests Purchased', 'value' => $purchases->count(), 'icon' => 'shopping-cart', 'color' => 'blue'],
            ['label' => 'Assigned', 'value' => $assignments->count(), 'icon' => 'user-plus', 'color' => 'green'],
            ['label' => 'Students', 'value' => $assignments->unique('student_id')->count(), 'icon' => 'users', 'color' => 'purple'],
        ];
        
        // Chart Data: Test Usage
        $used = $purchases->where('is_used', true)->count();
        $unused = $purchases->where('is_used', false)->count();

        $this->chartData = [
            'labels' => ['Used', 'Unused'],
            'datasets' => [
                [
                    'data' => [$used, $unused],
                    'backgroundColor' => ['#10b981', '#e5e7eb'],
                ]
            ]
        ];
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
