<?php

namespace App\Http\Controllers;

use App\Models\JoinIntern;
use Illuminate\Http\Request;

class JoinInternController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([

            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'city' => 'required|string|max:255',

            'status' => 'nullable|string',
            'institution' => 'nullable|string',

            'duration' => 'nullable|string',
            'availability' => 'nullable|string',
            'mode' => 'nullable|string',

            'interests' => 'nullable|array',
            'skills' => 'nullable|array',
            'preferences' => 'nullable|array',
            'traits' => 'nullable|array',

            'why_join' => 'nullable|string',
            'role_excitement' => 'nullable|string',
            'experience_details' => 'nullable|string',
            'learning_expectation' => 'nullable|string',

            'portfolio' => 'nullable|url',

            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Resume Upload
        if ($request->hasFile('resume')) {

            $resumePath = $request->file('resume')
                ->store('intern-resumes', 'public');

            $validated['resume'] = $resumePath;
        }

        JoinIntern::create($validated);

        return back()->with('success', 'Application submitted successfully!');
    }
}