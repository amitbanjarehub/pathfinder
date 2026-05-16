<div class="space-y-6">
    <div class="flex justify-between items-center">
        <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">My Students</h2>
        <div class="w-full max-w-md">
            <x-input icon="magnifying-glass" wire:model.live.debounce.300ms="search" placeholder="Search students..." />
        </div>
    </div>

    <div class="bg-white dark:bg-zinc-800 shadow rounded-lg overflow-hidden border border-gray-200 dark:border-zinc-700">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-zinc-700">
                <thead class="bg-gray-50 dark:bg-zinc-900">
                    <tr>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Student</th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Test Assigned</th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Test Status</th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Assigned Date</th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Allow Download</th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-zinc-800 divide-y divide-gray-200 dark:divide-zinc-700">
                    @forelse ($assignments as $assignment)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900 dark:text-white">
                                    {{ $assignment->student->name ?? 'Pending Registration' }}</div>
                                <div class="text-xs text-gray-500">
                                    {{ $assignment->student->email ?? $assignment->student_email }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 dark:text-white">{{ $assignment->test->title }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if ($assignment->testAttempt && $assignment->testAttempt->status === 'completed')
                                    <span
                                        class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">
                                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Completed
                                    </span>
                                @elseif ($assignment->testAttempt && $assignment->testAttempt->status === 'in_progress')
                                    <span
                                        class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-400">
                                        <svg class="w-3.5 h-3.5 animate-spin" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10"
                                                stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor"
                                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                            </path>
                                        </svg>
                                        In Progress
                                    </span>
                                @else
                                    <span
                                        class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-400">
                                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Not Started
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                {{ $assignment->created_at->format('M d, Y') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                @if ($assignment->purchase)
                                    <div class="flex items-center gap-2">
                                        <button wire:click="toggleDownload({{ $assignment->id }})"
                                            class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 {{ $assignment->purchase->allow_student_download ? 'bg-green-500' : 'bg-gray-300 dark:bg-gray-600' }}"
                                            role="switch"
                                            aria-checked="{{ $assignment->purchase->allow_student_download ? 'true' : 'false' }}">
                                            <span
                                                class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out {{ $assignment->purchase->allow_student_download ? 'translate-x-5' : 'translate-x-0' }}"></span>
                                        </button>
                                        <span
                                            class="text-xs {{ $assignment->purchase->allow_student_download ? 'text-green-600 dark:text-green-400' : 'text-gray-500 dark:text-gray-400' }}">
                                            {{ $assignment->purchase->allow_student_download ? 'Enabled' : 'Disabled' }}
                                        </span>
                                    </div>
                                @else
                                    <span class="text-xs text-gray-400 dark:text-gray-500 italic">No purchase
                                        linked</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                @if ($assignment->testAttempt && $assignment->testAttempt->status === 'completed')
                                    <a href="{{ route('test.result.pdf', $assignment->testAttempt) }}"
                                        class="inline-flex items-center px-3 py-1.5 bg-purple-600 hover:bg-purple-700 text-white text-xs font-medium rounded-md transition-colors">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        Download PDF
                                    </a>
                                @else
                                    <span class="text-gray-400 dark:text-gray-500">-</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                                No students found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="px-6 py-4 border-t border-gray-200 dark:border-zinc-700">
            {{ $assignments->links() }}
        </div>
    </div>
</div>
