<div class="max-w-4xl mx-auto p-6">
    <div class="bg-white dark:bg-zinc-800 rounded-lg shadow p-8">
        <h2 class="text-3xl font-semibold mb-6 text-gray-800 dark:text-gray-200">{{ __('Assign Test to Students') }}</h2>

        <!-- Test Details -->
        <div class="bg-gray-50 dark:bg-zinc-900 rounded-lg p-6 mb-8">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-2">{{ $test->title }}</h3>
            <p class="text-gray-600 dark:text-gray-400">{{ $test->description }}</p>
            <div class="mt-4 flex gap-4 text-sm text-gray-500 dark:text-gray-400">
                <span>{{ __('Type') }}: <strong class="capitalize">{{ $test->type }}</strong></span>
                <span>{{ __('Code') }}: <strong class="font-mono">{{ $test->code }}</strong></span>
            </div>
        </div>

        <!-- Student Selection -->
        <div class="mb-8">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ __('Select Students') }}</h3>

                <!-- Search -->
                <div class="w-64">
                    <flux:input wire:model.live.debounce.300ms="searchTerm" type="search"
                        placeholder="{{ __('Search students...') }}" icon="magnifying-glass" />
                </div>
            </div>

            @if ($students->isEmpty())
                <div class="text-center py-8 border-2 border-dashed border-gray-200 dark:border-gray-700 rounded-lg">
                    <p class="text-gray-500 dark:text-gray-400">{{ __('No students found matching your search.') }}</p>
                </div>
            @else
                <div class="border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden">
                    <div class="max-h-96 overflow-y-auto">
                        <table class="w-full text-left text-sm">
                            <thead class="bg-gray-50 dark:bg-zinc-900 text-gray-500 dark:text-gray-400">
                                <tr>
                                    <th class="px-6 py-3 font-medium">{{ __('Select') }}</th>
                                    <th class="px-6 py-3 font-medium">{{ __('Name') }}</th>
                                    <th class="px-6 py-3 font-medium">{{ __('Email') }}</th>
                                    <th class="px-6 py-3 font-medium">{{ __('Status') }}</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700 bg-white dark:bg-zinc-800">
                                @foreach ($students as $student)
                                    @php
                                        $isAssigned = in_array($student->id, $assignedStudentIds);
                                    @endphp
                                    <tr wire:key="student-{{ $student->id }}"
                                        class="hover:bg-gray-50 dark:hover:bg-zinc-700/50 transition-colors {{ $selectedStudent == $student->id ? 'bg-indigo-50 dark:bg-indigo-900/20' : '' }}">
                                        <td class="px-6 py-4">
                                            @if ($isAssigned)
                                                <span class="text-green-600 dark:text-green-400">
                                                    <flux:icon name="check-circle" class="w-5 h-5" />
                                                </span>
                                            @else
                                                <input type="radio" wire:model.live="selectedStudent"
                                                    value="{{ $student->id }}"
                                                    class="rounded-full border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-zinc-700 dark:border-zinc-600">
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-gray-100">
                                            {{ $student->name }}
                                        </td>
                                        <td class="px-6 py-4 text-gray-500 dark:text-gray-400">
                                            {{ $student->email }}
                                        </td>
                                        <td class="px-6 py-4">
                                            @if ($isAssigned)
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">
                                                    {{ __('Assigned') }}
                                                </span>
                                            @else
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300">
                                                    {{ __('Available') }}
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif

            @error('selectedStudent')
                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <!-- Actions -->
        <div class="flex items-center justify-between pt-6 border-t border-gray-200 dark:border-gray-700">
            <a href="{{ route('my.tests') }}"
                class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-200" wire:navigate>
                {{ __('Cancel') }}
            </a>

            <div class="flex items-center gap-4">
                @if ($selectedStudent)
                    @php
                        $selectedStudentModel = $students->firstWhere('id', $selectedStudent);
                    @endphp
                    <span class="text-sm text-gray-500 dark:text-gray-400">
                        {{ __('Selected:') }} <strong
                            class="text-indigo-600 dark:text-indigo-400">{{ $selectedStudentModel ? $selectedStudentModel->name : '' }}</strong>
                    </span>
                @endif
                <flux:button wire:click="assignToStudents" variant="primary" wire:loading.attr="disabled"
                    :disabled="!$selectedStudent">
                    {{ __('Assign Test') }}
                </flux:button>
            </div>
        </div>
    </div>
</div>
