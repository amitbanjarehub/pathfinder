<?php

namespace App\Livewire;

use Livewire\Component;

class TestMarketplace extends Component
{
    public function render()
    {
        $user = auth()->user();
        $userRole = $user->roles->first()->name ?? 'student';
        
        // Get tests with prices for the user's role
        $tests = \App\Models\Test::where('is_active', true)
            ->with(['prices' => function($query) use ($userRole) {
                $query->where('role', $userRole);
            }])
            ->latest()
            ->get();

        return view('livewire.test-marketplace', [
            'tests' => $tests,
            'userRole' => $userRole
        ]);
    }
}
