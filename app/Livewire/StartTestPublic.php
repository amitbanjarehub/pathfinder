<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;

class StartTestPublic extends Component
{
    public $testCode = '';

    public $test = null;

    public $guest_details = [];

    public function mount($testId = null)
    {
        if ($testId) {
            $this->test = \App\Models\Test::findOrFail($testId);
        }
    }

    public function findTestByCode()
    {
        $this->validate([
            'testCode' => 'required|exists:purchases,test_code',
        ]);

        $purchase = \App\Models\Purchase::where('test_code', $this->testCode)->firstOrFail();

        if ($purchase->is_used) {
            $this->addError('testCode', 'This test code has already been used.');

            return;
        }

        $this->test = $purchase->test;
    }

    public function startTest()
    {
        if (! $this->test) {
            return;
        }

        // Re-verify code before starting
        $purchase = \App\Models\Purchase::where('test_code', $this->testCode)->first();

        if (! $purchase || $purchase->is_used) {
            session()->flash('error', 'Invalid or used test code.');

            return;
        }

        // Check if test has content
        $hasQuestions = false;
        foreach ($this->test->sections as $section) {
            foreach ($section->parts as $part) {
                if ($part->questions()->count() > 0) {
                    $hasQuestions = true;
                    break 2;
                }
            }
        }

        if (! $hasQuestions) {
            session()->flash('error', 'This test has no questions yet. It cannot be started.');

            return;
        }

        // Validate guest details if not logged in
        // $guestDetails = null;
        // if (!auth()->check()) {
        //     $this->validate([
        //         'guest_details.name' => 'required|string|max:255',
        //         'guest_details.email' => 'required|email|max:255',
        //         'guest_details.mobile' => 'required|string|max:20',
        //         'guest_details.city' => 'required|string|max:255',
        //         'guest_details.school' => 'nullable|string|max:255',
        //     ]);
        //     $guestDetails = $this->guest_details;
        // }

        // Validate guest details if not logged in
        $guestDetails = null;

        if (! auth()->check()) {

            $this->validate([
                'guest_details.name' => 'required|string|max:255',
                'guest_details.email' => 'required|email|max:255|unique:users,email',
                'guest_details.mobile' => 'required|string|max:20',
                'guest_details.pincode' => 'required|string|max:20',
                'guest_details.address' => 'required|string|max:500',
                'guest_details.qualification' => 'required|string|max:255',
            ]);

            // ✅ Create User
            $user = User::create([
                'name' => $this->guest_details['name'],
                'email' => $this->guest_details['email'],
                'password' => Str::password(10),
                'mobile_no' => $this->guest_details['mobile'],
                'pincode' => $this->guest_details['pincode'],
                'address' => $this->guest_details['address'],
                'qualification' => $this->guest_details['qualification'],
            ]);

            // ✅ Assign Role
            $user->assignRole('student');

            // ✅ Login User
            Auth::login($user);

            $guestDetails = $this->guest_details;
        }

        // Create test attempt for guest (user_id = null or a specific guest user)
        $attempt = \App\Models\TestAttempt::create([
            'test_id' => $this->test->id,
            'user_id' => auth()->id(), // Will be null for guests
            'assignment_id' => null, // Could link to purchase if needed
            'status' => 'in_progress',
            'guest_details' => $guestDetails,
        ]);

        return redirect()->route('test.play.public', $attempt->id);
    }

    public function render()
    {
        return view('livewire.start-test-public');
    }
}
