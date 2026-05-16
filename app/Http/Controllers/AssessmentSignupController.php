<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AssessmentSignupController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile_no' => 'required|string|max:20',
            'qualification' => 'required|string|max:255',
        ]);

        $user = User::create([
            'name' => $request->name,
            'mobile_no' => $request->mobile_no,
            'qualification' => $request->qualification,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'User registered successfully',
            'user' => $user,
        ]);
    }
}