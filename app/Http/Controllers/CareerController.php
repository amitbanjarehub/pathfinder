<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CareerController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'qualification' => 'required|string',
            'message' => 'nullable|string',
        ]);

        User::create([
            'name' => $request->name,
            'mobile_no' => $request->phone,
            'email' => $request->email,
            'qualification' => $request->qualification,
            'querry' => $request->message,
            'password' => bcrypt('12345678'),
        ]);

        return back()->with('success', 'Request submitted successfully!');
    }
}