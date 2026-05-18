<?php

namespace App\Http\Controllers;

use App\Models\JoinFranchise;
use Illuminate\Http\Request;

class JoinFranchiseController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([

            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'city' => 'required|string|max:255',

            'profession' => 'nullable|string|max:255',

            'reason' => 'nullable|string',

            'query' => 'nullable|string',
        ]);

        JoinFranchise::create($validated);

        return back()->with('success', 'Franchise application submitted successfully!');
    }
}