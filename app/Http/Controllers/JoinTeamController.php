<?php

namespace App\Http\Controllers;

use App\Models\JoinTeam;
use Illuminate\Http\Request;

class JoinTeamController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([

            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'city' => 'required|string|max:255',

            'profession' => 'nullable|string|max:255',
            'role' => 'required|string|max:255',

            'reason' => 'nullable|string',
        ]);

        JoinTeam::create($validated);

        return back()->with('success', 'Application submitted successfully!');
    }
}