<div class="p-6 bg-white dark:bg-zinc-800 ">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Tests</h2>
        <a href="{{ route('tests.create') }}"
            class="px-6 py-4 bg-primary-600 text-white rounded-full hover:bg-primary-700" wire:navigate>Create Test</a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-50 dark:bg-gray-700">
                <tr>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        Title</th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        Code</th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        Type</th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        Status</th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-zinc-800 divide-y divide-gray-200 dark:divide-gray-700">
                @forelse($tests as $test)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">
                            {{ $test->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                            {{ $test->code }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                            {{ ucfirst($test->type) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $test->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ $test->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="{{ route('tests.edit', $test) }}"
                                class="text-indigo-600 hover:text-indigo-900 mr-3" wire:navigate>Edit</a>
                            <button wire:click="delete({{ $test->id }})" wire:confirm="Are you sure?"
                                class="text-red-600 hover:text-red-900">Delete</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">No tests
                            found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $tests->links() }}
    </div>
</div>
