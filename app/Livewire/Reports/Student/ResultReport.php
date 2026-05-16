<?php

namespace App\Livewire\Reports\Student;

use App\Models\TestAttempt;
use App\Models\Purchase;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ResultReport extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    /**
     * Check if download is allowed for a test attempt
     */
    public function canDownload(TestAttempt $attempt): bool
    {
        $user = Auth::user();

        if ($attempt->assignment) {
            // Check if this is a student's own purchase (self-assignment)
            $purchase = $attempt->assignment->purchase;
            if ($purchase && $purchase->purchased_by_student_id === $user->id) {
                // Student purchased directly - always allow download
                return true;
            }
            // Assigned by counsellor - check if download is allowed
            return $purchase && $purchase->allow_student_download;
        } else {
            // Check if student purchased directly (no assignment)
            return Purchase::where('purchased_by_student_id', $user->id)
                ->where('test_id', $attempt->test_id)
                ->exists();
        }
    }

    public function getAttemptsProperty()
    {
        return TestAttempt::with(['test', 'assignment.purchase'])
            ->where('user_id', Auth::id())
            ->whereHas('test', function ($q) {
                $q->where('title', 'like', '%' . $this->search . '%');
            })
            ->latest()
            ->paginate(10);
    }

    public function render()
    {
        return view('livewire.reports.student.result-report', [
            'attempts' => $this->getAttemptsProperty()
        ]);
    }
}

