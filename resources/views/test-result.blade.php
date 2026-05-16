<x-layouts.app :title="__('Test Result')">
    <div class="max-w-4xl mx-auto p-6">
        <div class="bg-white dark:bg-zinc-800 rounded-lg shadow p-8">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-2">Test Completed!</h1>
                <p class="text-gray-600 dark:text-gray-400">{{ $attempt->test->title }}</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-blue-50 dark:bg-blue-900/30 rounded-lg p-6 text-center">
                    <div class="text-4xl font-bold text-blue-600 dark:text-blue-400 mb-2">{{ $attempt->score }}</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400">Total Score</div>
                </div>
                <div class="bg-green-50 dark:bg-green-900/30 rounded-lg p-6 text-center">
                    <div class="text-4xl font-bold text-green-600 dark:text-green-400 mb-2">
                        {{ $attempt->answers()->where('status', 'answered')->count() }}
                    </div>
                    <div class="text-sm text-gray-600 dark:text-gray-400">Answered</div>
                </div>
                <div class="bg-red-50 dark:bg-red-900/30 rounded-lg p-6 text-center">
                    <div class="text-4xl font-bold text-red-600 dark:text-red-400 mb-2">
                        {{ $attempt->answers()->where('status', 'skipped')->count() }}
                    </div>
                    <div class="text-sm text-gray-600 dark:text-gray-400">Skipped</div>
                </div>
            </div>

            <div class="text-center">
                <a href="{{ route('dashboard') }}"
                    class="px-6 py-4 bg-primary-600 text-white rounded-full hover:bg-primary-700 inline-block"
                    wire:navigate>
                    Back to Dashboard
                </a>
                @php
                    $user = auth()->user();
                    $canDownload = false;

                    // Admins and counsellors can always download
                    if ($user->hasAnyRole(['admin', 'counsellor', 'professional', 'institute'])) {
                        $canDownload = true;
                    }
                    // Students need to check purchase permissions
                    elseif ($user->hasRole('student')) {
                        if ($attempt->assignment) {
                            // Check if this is a student's own purchase (self-assignment)
        $purchase = $attempt->assignment->purchase;
        if ($purchase && $purchase->purchased_by_student_id === $user->id) {
            // Student purchased directly - always allow download
            $canDownload = true;
        } else {
            // Assigned by counsellor - check if download is allowed
            $canDownload = $purchase && $purchase->allow_student_download;
        }
    } else {
        // Check if student purchased directly (no assignment)
        $canDownload = \App\Models\Purchase::where('purchased_by_student_id', $user->id)
            ->where('test_id', $attempt->test_id)
                                ->exists();
                        }
                    }
                @endphp
                @if ($canDownload)
                    <a href="{{ route('test.result.pdf', $attempt->id) }}"
                        class="px-6 py-4 bg-white border-2 border-primary-600 text-primary-600 rounded-full hover:bg-gray-50 inline-block ml-4">
                        Download Report
                    </a>
                @endif
            </div>
        </div>
    </div>
</x-layouts.app>
