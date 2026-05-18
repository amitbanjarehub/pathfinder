<?php

namespace App\Http\Controllers;

use App\Models\Counsellor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CounsellorController extends Controller
{
    // Show application form
    public function showForm()
    {
        return view('resources.certificate');
    }

    // Store application
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:counsellors,email',
            'phone' => 'required|string|max:20',
            'city' => 'required|string|max:100',
            'profession' => 'required|string|max:255',
            'why_join' => 'required|string|min:20|max:1000',
        ], [
            'name.required' => 'Please enter your full name',
            'email.required' => 'Email address is required',
            'email.unique' => 'This email has already been submitted. Please use a different email address.',
            'phone.required' => 'Phone number is required',
            'city.required' => 'City is required',
            'profession.required' => 'Please enter your current profession',
            'why_join.required' => 'Please tell us why you want to join',
            'why_join.min' => 'Please provide at least 20 characters explaining your motivation',
        ]);

        try {
            // Create new counsellor application
            $counsellor = Counsellor::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'city' => $validated['city'],
                'profession' => $validated['profession'],
                'why_join' => $validated['why_join'],
                'status' => 'pending',
            ]);

            // Redirect back with success message
            return redirect()->back()->with('success', 'Application submitted successfully!');

        } catch (\Exception $e) {
            Log::error('Application submission failed: '.$e->getMessage());

            // Redirect back with error message
            return redirect()->back()->withErrors(['error' => 'Failed to submit application. Please try again.'])->withInput();
        }
    }

    // Admin: List all applications
    public function index()
    {
        $applications = Counsellor::latest()->paginate(15);

        return view('admin.counsellors.index', compact('applications'));
    }

    // Admin: View single application
    public function show(Counsellor $counsellor)
    {
        return view('admin.counsellors.show', compact('counsellor'));
    }

    // Admin: Update application status
    public function updateStatus(Request $request, Counsellor $counsellor)
    {
        $request->validate([
            'status' => 'required|in:pending,reviewed,accepted,rejected',
            'admin_notes' => 'nullable|string|max:500',
        ]);

        $counsellor->update([
            'status' => $request->status,
            'admin_notes' => $request->admin_notes,
        ]);

        return redirect()->back()->with('success', 'Application status updated successfully!');
    }

    // Admin: Delete application
    public function destroy(Counsellor $counsellor)
    {
        $counsellor->delete();

        return redirect()->route('admin.counsellors.index')->with('success', 'Application deleted successfully!');
    }
}
