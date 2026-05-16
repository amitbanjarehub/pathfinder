<div class="min-h-screen bg-gray-100 dark:bg-zinc-900 p-4 flex items-center justify-center">
    <div class="max-w-2xl mx-auto bg-white dark:bg-zinc-800 rounded-lg shadow p-8 text-center">
        <div class="mb-6">
            <svg class="mx-auto h-16 w-16 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
        </div>
        <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">{{ __('Test Not Available') }}</h2>
        <p class="text-gray-600 dark:text-gray-400 mb-6">
            {{ __('This test has no questions yet. Please contact the administrator to add content before taking this test.') }}
        </p>
        <a href="{{ route('my.tests') }}"
            class="inline-block px-6 py-3 bg-primary-600 text-white rounded-full hover:bg-primary-700">
            {{ __('Back to My Tests') }}
        </a>
    </div>
</div>
