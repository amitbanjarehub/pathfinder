<div class="p-6 bg-white dark:bg-zinc-800 rounded-lg shadow">
    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-6">Test Structure</h3>

    <!-- Add New Section Form -->
    <div class="mb-8 p-4 bg-gray-50 dark:bg-zinc-700/50 rounded-lg border border-gray-200 dark:border-gray-600">
        <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">{{ __('Add New Section') }}</h4>
        <form wire:submit="addSection">
            <div class="flex flex-col md:flex-row gap-4 items-start">
                <div class="flex-1 w-full">
                    <flux:input wire:model="newSectionTitle" placeholder="{{ __('Section Title') }}" />
                    @error('newSectionTitle')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex-1 w-full">
                    <flux:input wire:model="newSectionDescription" placeholder="{{ __('Description (optional)') }}" />
                </div>
                <div class="w-full md:w-32">
                    <flux:input type="number" wire:model="newSectionTimeLimit" placeholder="{{ __('Time (min)') }}"
                        min="1" />
                </div>
                <flux:button type="submit" variant="primary" icon="plus">{{ __('Add') }}</flux:button>
            </div>
        </form>
    </div>

    <!-- Sections List -->
    <div class="space-y-6">
        @forelse($sections as $section)
            <div class="border border-gray-300 dark:border-gray-600 rounded-lg p-4 bg-white dark:bg-zinc-700">
                <!-- Section Header / Edit Mode -->
                @if ($editingSectionId === $section->id)
                    <div
                        class="mb-4 p-4 bg-indigo-50 dark:bg-indigo-900/20 rounded-lg border border-indigo-100 dark:border-indigo-800">
                        <div class="flex flex-col gap-3">
                            <flux:input wire:model="editingSectionTitle" label="Title" />
                            <flux:input wire:model="editingSectionDescription" label="Description" />
                            <flux:input type="number" wire:model="editingSectionTimeLimit" label="Time Limit (min)"
                                min="1" />

                            <div class="flex flex-col gap-1">
                                <label class="text-sm font-medium text-gray-700 dark:text-gray-300">Score Scale</label>
                                <select wire:model="editingSectionScoreScaleId"
                                    class="rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-800 dark:border-gray-600 dark:text-gray-200">
                                    <option value="">None (Raw Score)</option>
                                    @foreach ($scoreScales as $scale)
                                        <option value="{{ $scale->id }}">{{ $scale->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="flex gap-2 justify-end mt-2">
                                <flux:button wire:click="$set('editingSectionId', null)" size="sm">
                                    {{ __('Cancel') }}</flux:button>
                                <flux:button wire:click="updateSection" variant="primary" size="sm">
                                    {{ __('Save Changes') }}</flux:button>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100">{{ $section->title }}
                            </h4>
                            @if ($section->description)
                                <p class="text-sm text-gray-500 dark:text-gray-400">{{ $section->description }}</p>
                            @endif
                            @if ($section->time_limit)
                                <div
                                    class="flex items-center gap-1 mt-1 text-xs font-medium text-indigo-600 dark:text-indigo-400">
                                    <flux:icon name="clock" class="w-3 h-3" />
                                    <span>{{ $section->time_limit }} {{ __('mins') }}</span>
                                </div>
                            @endif
                        </div>
                        <div class="flex gap-2">
                            <button wire:click="editSection({{ $section->id }})"
                                class="text-gray-500 hover:text-indigo-600 dark:hover:text-indigo-400">
                                <flux:icon name="pencil-square" class="w-5 h-5" />
                            </button>
                            <button wire:click="deleteSection({{ $section->id }})" wire:confirm="Delete this section?"
                                class="text-gray-500 hover:text-red-600 dark:hover:text-red-400">
                                <flux:icon name="trash" class="w-5 h-5" />
                            </button>
                        </div>
                    </div>
                @endif

                <!-- Parts -->
                <div class="pl-4 border-l-2 border-gray-100 dark:border-gray-600 space-y-3">
                    @foreach ($section->parts as $part)
                        <div
                            class="flex justify-between items-center p-3 bg-gray-50 dark:bg-zinc-800 rounded border border-gray-200 dark:border-gray-600">
                            <span class="font-medium text-gray-700 dark:text-gray-300">{{ $part->title }}</span>
                            <div class="flex gap-2">
                                <a href="{{ route('questions.manage', $part->id) }}"
                                    class="text-xs px-2 py-1 bg-indigo-100 text-indigo-700 rounded hover:bg-indigo-200 dark:bg-indigo-900 dark:text-indigo-300"
                                    wire:navigate>
                                    {{ __('Questions') }} ({{ $part->questions->count() }})
                                </a>
                                <button wire:click="deletePart({{ $part->id }})" wire:confirm="Delete part?"
                                    class="text-red-500 hover:text-red-700">
                                    <flux:icon name="trash" class="w-4 h-4" />
                                </button>
                            </div>
                        </div>
                    @endforeach

                    <button wire:click="addPart({{ $section->id }})"
                        class="text-sm text-indigo-600 hover:text-indigo-700 font-medium flex items-center gap-1 mt-2">
                        <flux:icon name="plus" class="w-4 h-4" /> {{ __('Add Part') }}
                    </button>
                </div>
            </div>
        @empty
            <div class="text-center py-8 text-gray-500 dark:text-gray-400">
                {{ __('No sections yet. Add one above.') }}
            </div>
        @endforelse
    </div>
</div>
