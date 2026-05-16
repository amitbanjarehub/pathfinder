<div class="p-6 bg-white dark:bg-zinc-800">
    @if (session('success'))
        <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative dark:bg-green-900/30 dark:border-green-600 dark:text-green-400"
            role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">{{ __('Available Tests') }}</h2>
        <span class="text-sm text-gray-600 dark:text-gray-400">{{ __('Your Role') }}: <strong
                class="capitalize">{{ $userRole }}</strong></span>
    </div>

    @if ($tests->isEmpty())
        <div class="text-center py-12">
            <p class="text-gray-500 dark:text-gray-400 mb-4">{{ __('No tests available for purchase') }}</p>
            <p class="text-sm text-gray-400">
                {{ __('All available tests have been purchased or there are no tests yet.') }}</p>
        </div>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($tests as $test)
                @php
                    $price = $test->prices->first();
                @endphp
                <div
                    class="border-2 border-dashed border-gray-400 dark:border-gray-600 rounded-lg p-6 hover:border-solid transition-shadow flex flex-col">
                    <div class="flex-1">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-2">{{ $test->title }}</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                            {{ Str::limit($test->description, 100) }}</p>

                        <div class="mb-4 space-y-2">
                            <div class="flex items-center text-sm">
                                <span class="text-gray-600 dark:text-gray-400">{{ __('Type') }}:</span>
                                <span
                                    class="ml-2 inline-flex items-center px-2 py-1 rounded-full text-xs bg-indigo-100 text-indigo-800 dark:bg-indigo-900 dark:text-indigo-200">
                                    {{ ucfirst($test->type) }}
                                </span>
                            </div>
                            {{-- <div class="flex items-center text-sm">
                                <span class="text-gray-600 dark:text-gray-400">{{ __('Code') }}:</span>
                                <span
                                    class="ml-2 font-mono text-gray-900 dark:text-gray-100">{{ $test->code }}</span>
                            </div> --}}
                            <div class="flex items-center text-sm">
                                <span class="text-gray-600 dark:text-gray-400">{{ __('Sections') }}:</span>
                                <span
                                    class="ml-2 text-gray-900 dark:text-gray-100">{{ $test->sections->count() }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-gray-200 dark:border-gray-600 pt-4 mt-4">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-sm text-gray-600 dark:text-gray-400">{{ __('Price') }}</span>
                            <span class="text-2xl font-bold text-gray-900 dark:text-gray-100">
                                {{ $price ? $price->currency . ' ' . number_format($price->price, 2) : 'N/A' }}
                            </span>
                        </div>
                        <a href="{{ route('test.purchase', $test->id) }}"
                            class="block w-full text-center px-6 py-4 bg-primary-600 text-white rounded-full hover:bg-primary-700 transition-colors"
                            wire:navigate>
                            {{ __('Purchase Test') }}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
