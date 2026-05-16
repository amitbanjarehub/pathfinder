<div class="space-y-6">
    <div class="flex justify-between items-center">
        <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">My Results</h2>
        <div class="w-full max-w-md">
            <x-input icon="magnifying-glass" wire:model.live.debounce.300ms="search" placeholder="Search tests..." />
        </div>
    </div>

    <div class="bg-white dark:bg-zinc-800 shadow rounded-lg overflow-hidden border border-gray-200 dark:border-zinc-700">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-zinc-700">
                <thead class="bg-gray-50 dark:bg-zinc-900">
                    <tr>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Test</th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Score</th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Status</th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Date</th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-zinc-800 divide-y divide-gray-200 dark:divide-zinc-700">
                    @forelse ($attempts as $attempt)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900 dark:text-white">
                                    {{ $attempt->test->title }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="text-sm font-bold {{ $attempt->score >= 70 ? 'text-green-600' : ($attempt->score >= 40 ? 'text-yellow-600' : 'text-red-600') }}">
                                    {{ $attempt->score ?? 'N/A' }}%
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $attempt->status === 'completed' ? 'bg-green-100 text-green-800' : 'bg-blue-100 text-blue-800' }}">
                                    {{ ucfirst($attempt->status) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                {{ $attempt->created_at->format('M d, Y H:i') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                @if ($attempt->status === 'completed')
                                    <div class="flex gap-2">
                                        <a href="{{ route('test.result', $attempt->id) }}"
                                            class="inline-flex items-center px-3 py-1.5 bg-primary-600 hover:bg-primary-700 text-white text-xs font-medium rounded-md transition-colors"
                                            wire:navigate>
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                            View
                                        </a>
                                        @if ($this->canDownload($attempt))
                                            <a href="{{ route('test.result.pdf', $attempt->id) }}"
                                                class="inline-flex items-center px-3 py-1.5 bg-purple-600 hover:bg-purple-700 text-white text-xs font-medium rounded-md transition-colors">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                </svg>
                                                Download
                                            </a>
                                        @endif
                                    </div>
                                @else
                                    <a href="{{ route('test.play', $attempt->id) }}"
                                        class="inline-flex items-center px-3 py-1.5 bg-yellow-500 hover:bg-yellow-600 text-white text-xs font-medium rounded-md transition-colors"
                                        wire:navigate>
                                        Resume
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                                No results found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="px-6 py-4 border-t border-gray-200 dark:border-zinc-700">
            {{ $attempts->links() }}
        </div>
    </div>
</div>
