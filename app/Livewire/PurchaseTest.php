<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;

class PurchaseTest extends Component
{
    public $testId;
    public $test;
    public $price;
    public $isStudent = false;

    public function mount($testId)
    {
        $this->testId = $testId;
        $this->test = \App\Models\Test::findOrFail($testId);

        $user = auth()->user();
        $userRole = $user->roles->first()->name ?? 'student';
        $this->isStudent = $user->hasRole('student');

        // Get price for user's role
        $priceModel = $this->test->prices()->where('role', $userRole)->first();
        $this->price = $priceModel ? $priceModel->price : 0;
    }

    public function purchase()
    {
        $user = auth()->user();

        // Generate unique test code
        do {
            $testCode = strtoupper(Str::random(8));
        } while (\App\Models\Purchase::where('test_code', $testCode)->exists());

        // Create purchase record
        $purchaseData = [
            'user_id' => auth()->id(),
            'test_id' => $this->testId,
            'test_code' => $testCode,
            'is_used' => false,
            'price_paid' => $this->price,
            'transaction_id' => 'TXN-' . strtoupper(uniqid()),
            'status' => 'completed',
        ];

        // If student, set purchased_by_student_id for direct purchase
        if ($user->hasRole('student')) {
            $purchaseData['purchased_by_student_id'] = $user->id;
            $purchaseData['is_used'] = true; // Mark as used immediately for student self-purchase
        }

        $purchase = \App\Models\Purchase::create($purchaseData);

        // For students, create self-assignment so they can take the test
        if ($user->hasRole('student')) {
            \App\Models\Assignment::create([
                'test_id' => $this->testId,
                'assigner_id' => $user->id, // Student assigns to themselves
                'student_id' => $user->id,
                'purchase_id' => $purchase->id,
                'status' => 'assigned',
            ]);

            session()->flash('message', 'Test purchased successfully! Your unique test code is: ' . $testCode . '. You can now take the test from My Tests.');
        } else {
            session()->flash('message', 'Test purchased successfully! Your unique test code is: ' . $testCode);
        }

        return redirect()->route('my.tests');
    }

    public function render()
    {
        return view('livewire.purchase-test');
    }
}

