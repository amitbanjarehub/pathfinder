<div class="space-y-6">
    <div class="flex justify-between items-center">
        <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">Counsellor Assignment Report</h2>
        <div class="w-full max-w-md">
            <x-input icon="magnifying-glass" wire:model.live.debounce.300ms="search"
                placeholder="Search student, counsellor or test..." />
        </div>
    </div>

    <div class="bg-white dark:bg-zinc-800 shadow rounded-lg overflow-hidden border border-gray-200 dark:border-zinc-700">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-zinc-700">
                <thead class="bg-gray-50 dark:bg-zinc-900">
                    <tr>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Counsellor
                        </th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Student
                        </th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Test (Course)
                        </th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Price
                        </th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Status
                        </th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Date
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-zinc-800 divide-y divide-gray-200 dark:divide-zinc-700">
                    @forelse ($assignments as $assignment)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900 dark:text-white">
                                    {{ $assignment->assigner->name }}
                                </div>
                                <div class="text-xs text-gray-500">{{ $assignment->assigner->email }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900 dark:text-white">
                                    {{ $assignment->student->name }}
                                </div>
                                <div class="text-xs text-gray-500">{{ $assignment->student->email }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 dark:text-white">{{ $assignment->test->title }}</div>
                                <div class="text-xs text-gray-500 font-mono">
                                    {{ $assignment->purchase?->test_code ?? 'N/A' }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">
                                ₹{{ number_format($assignment->purchase?->price_paid ?? 0, 2) }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                    {{ $assignment->status === 'completed'
                                        ? 'bg-green-100 text-green-800'
                                        : ($assignment->status === 'started'
                                            ? 'bg-blue-100 text-blue-800'
                                            : 'bg-yellow-100 text-yellow-800') }}">
                                    {{ ucfirst($assignment->status) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                {{ $assignment->created_at->format('M d, Y H:i') }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                                No assignments found.
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
