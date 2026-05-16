<div class="max-w-3xl mx-auto p-6">
    <div class="bg-white dark:bg-zinc-800 rounded-lg shadow p-8">
        <h2 class="text-3xl font-semibold mb-6 text-gray-800 dark:text-gray-200">{{ __('Purchase Test') }}</h2>

        <!-- Test Details -->
        <div class="bg-gray-50 dark:bg-zinc-900 rounded-lg p-6 mb-6">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-3">{{ $test->title }}</h3>
            <p class="text-gray-600 dark:text-gray-400 mb-4">{{ $test->description }}</p>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-4">
                <div class="text-center p-3 bg-white dark:bg-zinc-800 rounded-lg">
                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Type') }}</p>
                    <p class="text-lg font-semibold text-gray-900 dark:text-gray-100">{{ ucfirst($test->type) }}</p>
                </div>
                <div class="text-center p-3 bg-white dark:bg-zinc-800 rounded-lg">
                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Code') }}</p>
                    <p class="text-lg font-semibold font-mono text-gray-900 dark:text-gray-100">{{ $test->code }}</p>
                </div>
                <div class="text-center p-3 bg-white dark:bg-zinc-800 rounded-lg">
                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Sections') }}</p>
                    <p class="text-lg font-semibold text-gray-900 dark:text-gray-100">{{ $test->sections->count() }}</p>
                </div>
                <div class="text-center p-3 bg-white dark:bg-zinc-800 rounded-lg">
                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Questions') }}</p>
                    <p class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                        {{ $test->sections->sum(function ($section) {
                            return $section->parts->sum(function ($part) {
                                return $part->questions->count();
                            });
                        }) }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Pricing -->
        <div
            class="bg-indigo-50 dark:bg-indigo-900/30 rounded-lg p-6 mb-6 border-2 border-indigo-200 dark:border-indigo-700">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">{{ __('Total Amount') }}</p>
                    <p class="text-4xl font-bold text-indigo-900 dark:text-indigo-100">INR
                        {{ number_format($price, 2) }}</p>
                </div>
                <div class="text-right">
                    <p class="text-xs text-gray-500 dark:text-gray-400">{{ __('One-time purchase') }}</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">{{ __('Lifetime access') }}</p>
                </div>
            </div>
        </div>

        <!-- Purchase Info -->
        <div
            class="bg-yellow-50 dark:bg-yellow-900/20 border border-yellow-200 dark:border-yellow-700 rounded-lg p-4 mb-6">
            <p class="text-sm text-yellow-800 dark:text-yellow-200">
                <strong>{{ __('Note') }}:</strong>
                {{ __('This is a simplified purchase flow. In production, this would integrate with a payment gateway.') }}
            </p>
        </div>

        <!-- Actions -->
        <div class="flex gap-4">
            <a href="{{ route('test.marketplace') }}"
                class="flex-1 px-6 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300 dark:bg-zinc-700 dark:text-gray-300 text-center"
                wire:navigate>
                {{ __('Back to Marketplace') }}
            </a>
            <button wire:click="purchase"
                class="flex-1 px-6 py-3 bg-primary-600 text-white rounded-full hover:bg-primary-700 font-semibold">
                {{ __('Complete Purchase') }}
            </button>
        </div>
    </div>
</div>
