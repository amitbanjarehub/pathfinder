{{-- <x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <!-- My Tests Card -->
            @role('counsellor|professional|institute')
                <a href="{{ route('my.tests') }}" wire:navigate
                    class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-gradient-to-br from-indigo-500 to-purple-600 p-6 hover:shadow-lg transition-shadow">
                    <div class="relative z-10 text-white">
                        <h3 class="text-xl font-bold mb-2">{{ __('My Tests') }}</h3>
                        <p class="text-sm opacity-90">{{ __('View and manage your tests') }}</p>
                    </div>
                </a>
            @endrole

            @role('student')
                <!-- Start Test Card (Students Only) -->
                <a href="{{ route('test.start') }}" wire:navigate
                    class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-gradient-to-br from-green-500 to-emerald-600 p-6 hover:shadow-lg transition-shadow">
                    <div class="relative z-10 text-white">
                        <h3 class="text-xl font-bold mb-2">{{ __('Start Test') }}</h3>
                        <p class="text-sm opacity-90">{{ __('Enter test code to begin') }}</p>
                    </div>
                </a>
            @endrole

            @role('counsellor|professional|institute')
                <!-- Purchase Tests Card -->
                <a href="{{ route('test.marketplace') }}" wire:navigate
                    class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-gradient-to-br from-purple-500 to-pink-600 p-6 hover:shadow-lg transition-shadow">
                    <div class="relative z-10 text-white">
                        <h3 class="text-xl font-bold mb-2">{{ __('Purchase Tests') }}</h3>
                        <p class="text-sm opacity-90">{{ __('Browse and buy tests') }}</p>
                    </div>
                </a>
            @endrole

            @role('admin')
                <!-- Admin Tests Card -->
                <a href="{{ route('tests') }}" wire:navigate
                    class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-gradient-to-br from-orange-500 to-red-600 p-6 hover:shadow-lg transition-shadow">
                    <div class="relative z-10 text-white">
                        <h3 class="text-xl font-bold mb-2">{{ __('Manage Tests') }}</h3>
                        <p class="text-sm opacity-90">{{ __('Create and edit tests') }}</p>
                    </div>
                </a>
            @endrole
        </div>

        <div
            class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-zinc-800 p-6">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4">{{ __('Welcome to Pathfinder') }}</h2>
            <p class="text-gray-600 dark:text-gray-400">
                {{ __('Your comprehensive test management system for aptitude and psychometric assessments.') }}</p>
        </div>
    </div>
</x-layouts.app> --}}
