<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TieupEnquiry;

class TieupEnquiryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'institution_name' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'city_state' => 'required|string|max:255',
            'requirements' => 'nullable|string',
        ]);

        TieupEnquiry::create([
            'institution_name' => $request->institution_name,
            'contact_person' => $request->contact_person,
            'phone' => $request->phone,
            'email' => $request->email,
            'city_state' => $request->city_state,
            'requirements' => $request->requirements,
        ]);

        return back()->with('success', 'Enquiry submitted successfully!');
    }
}