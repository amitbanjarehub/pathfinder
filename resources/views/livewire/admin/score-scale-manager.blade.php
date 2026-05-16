<div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200">Score Scales Manager</h2>
        <button wire:click="createScale" class="px-4 py-2 bg-primary-600 text-white rounded-lg hover:bg-primary-700">
            Create New Scale
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- List of Scales -->
        <div class="col-span-1 border-r border-gray-200 dark:border-gray-700 pr-4">
            <h3 class="text-lg font-semibold mb-4 text-gray-700 dark:text-gray-300">Available Scales</h3>
            <div class="space-y-2">
                @foreach ($scales as $scale)
                    <div wire:click="selectScale({{ $scale->id }})"
                        class="p-3 rounded-lg cursor-pointer transition-colors {{ $selectedScale && $selectedScale->id === $scale->id ? 'bg-primary-50 dark:bg-primary-900/20 border border-primary-200 dark:border-primary-800' : 'hover:bg-gray-50 dark:hover:bg-zinc-800 border border-transparent' }}">
                        <div class="font-medium text-gray-800 dark:text-gray-200">{{ $scale->name }}</div>
                        <div class="text-sm text-gray-500">{{ $scale->ranges->count() }} ranges defined</div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Edit Area -->
        <div class="col-span-2">
            @if ($isCreating)
                <div class="bg-gray-50 dark:bg-zinc-800 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold mb-4">Create New Scale</h3>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Scale Name</label>
                            <input wire:model="scaleName" type="text"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:bg-zinc-900 dark:border-gray-600">
                            @error('scaleName')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300">Description</label>
                            <textarea wire:model="scaleDescription"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:bg-zinc-900 dark:border-gray-600"></textarea>
                        </div>
                        <button wire:click="saveScale"
                            class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">Save Scale</button>
                    </div>
                </div>
            @elseif($selectedScale)
                <div class="space-y-6">
                    <!-- Scale Details -->
                    <div class="bg-gray-50 dark:bg-zinc-800 p-6 rounded-lg">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-lg font-semibold">Edit Scale Details</h3>
                            <button wire:click="deleteScale({{ $selectedScale->id }})" wire:confirm="Are you sure?"
                                class="text-red-600 hover:text-red-800 text-sm">Delete Scale</button>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                                <input wire:model="scaleName" type="text"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:bg-zinc-900 dark:border-gray-600">
                            </div>
                            <div>
                                <label
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">Description</label>
                                <input wire:model="scaleDescription" type="text"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:bg-zinc-900 dark:border-gray-600">
                            </div>
                        </div>
                        <button wire:click="updateScale"
                            class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm">Update
                            Details</button>
                    </div>

                    <!-- Ranges -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Score Ranges</h3>

                        <!-- Add Range Form -->
                        <div class="flex gap-4 items-end mb-4 p-4 bg-gray-50 dark:bg-zinc-800 rounded-lg">
                            <div>
                                <label class="block text-xs font-medium text-gray-500">Min Score</label>
                                <input wire:model="minScore" type="number"
                                    class="w-24 rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:bg-zinc-900 dark:border-gray-600">
                            </div>
                            <div>
                                <label class="block text-xs font-medium text-gray-500">Max Score</label>
                                <input wire:model="maxScore" type="number"
                                    class="w-24 rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:bg-zinc-900 dark:border-gray-600">
                            </div>
                            <div class="flex items-center pb-2 text-gray-400">→</div>
                            <div>
                                <label class="block text-xs font-medium text-gray-500">Sten Score (1-10)</label>
                                <input wire:model="stenScore" type="number" min="1" max="10"
                                    class="w-24 rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:bg-zinc-900 dark:border-gray-600">
                            </div>
                            <button wire:click="addRange"
                                class="px-4 py-2 bg-primary-600 text-white rounded-lg hover:bg-primary-700">Add</button>
                        </div>
                        @error('minScore')
                            <span class="text-red-500 text-sm block">{{ $message }}</span>
                        @enderror
                        @error('maxScore')
                            <span class="text-red-500 text-sm block">{{ $message }}</span>
                        @enderror

                        <!-- Ranges List -->
                        <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-zinc-800">
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Range</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Sten Score</th>
                                        <th
                                            class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-zinc-900 divide-y divide-gray-200 dark:divide-gray-700">
                                    @foreach ($selectedScale->ranges->sortBy('min_score') as $range)
                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                                {{ $range->min_score }} - {{ $range->max_score }}
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                                <span
                                                    class="px-2 py-1 bg-primary-100 text-primary-800 rounded-full text-xs font-semibold">{{ $range->sten_score }}</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <button wire:click="deleteRange({{ $range->id }})"
                                                    class="text-red-600 hover:text-red-900">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @else
                <div class="flex items-center justify-center h-full text-gray-500">
                    Select a scale to edit or create a new one.
                </div>
            @endif
        </div>
    </div>
</div>
