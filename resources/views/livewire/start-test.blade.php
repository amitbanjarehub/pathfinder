<div class="max-w-2xl mx-auto p-6">
    <div class="bg-white dark:bg-zinc-800 rounded-lg shadow p-8">
        <h2 class="text-2xl font-semibold mb-6 text-gray-800 dark:text-gray-200 text-center">{{ __('Start Test') }}</h2>

        @if (session('error'))
            <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative dark:bg-red-900/30 dark:border-red-600 dark:text-red-400"
                role="alert">
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        @endif

        @if (!$test)
            <div class="mb-6">
                <p class="text-gray-600 dark:text-gray-400 mb-4 text-center">{{ __('Enter your test code to begin') }}
                </p>
                <form wire:submit="findTestByCode">
                    <div class="mb-4">
                        <x-input wire:model="testCode" placeholder="{{ __('Enter Test Code') }}"
                            class="text-center text-2xl font-mono tracking-wider uppercase" />
                    </div>
                    <x-button type="submit" primary label="{{ __('Find Test') }}" class="w-full py-3" />
                </form>
            </div>
        @else
            <div class="mb-6">
                <div class="text-center mb-6">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-2">{{ $test->title }}</h3>
                    <p class="text-gray-600 dark:text-gray-400">{{ $test->description }}</p>
                </div>

                <div class="bg-gray-50 dark:bg-zinc-900 rounded-lg p-4 mb-6">
                    <div class="grid grid-cols-2 gap-4 text-center">
                        <div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Type') }}</p>
                            <p class="text-lg font-semibold text-gray-900 dark:text-gray-100">{{ ucfirst($test->type) }}
                            </p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Sections') }}</p>
                            <p class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                                {{ $test->sections->count() }}</p>
                        </div>
                    </div>
                </div>

                <!-- Instructions -->
                <div class="mb-8">
                    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-3">{{ __('Instructions') }}
                    </h4>
                    <ul class="list-disc list-inside space-y-2 text-gray-600 dark:text-gray-400 text-sm">
                        <li>{{ __('Ensure you have a stable internet connection before starting.') }}</li>
                        <li>{{ __('Once started, the timer will continue even if you close the window.') }}</li>
                        <li>{{ __('You cannot pause the test once it has begun.') }}</li>
                        <li>{{ __('Answer all questions to the best of your ability.') }}</li>
                        <li>{{ __('Unanswered questions will be marked as skipped.') }}</li>
                        <li>{{ __('Do not refresh the page frequently to avoid data loss.') }}</li>
                    </ul>
                </div>

                <div class="flex gap-3">
                    <x-button wire:click="$set('test', null)" label="{{ __('Cancel') }}" class="flex-1 py-3" />
                    <x-button wire:click="startTest" positive label="{{ __('Start Test') }}"
                        class="flex-1 py-3 bg-accent" />
                </div>
            </div>
        @endif
    </div>
</div>
