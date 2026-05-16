<div x-data="{}" wire:poll.10s>
    <div class="space-y-6">
        <!-- Welcome Section -->
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
                    {{ __('Welcome back,') }} {{ auth()->user()->name }}
                </h1>
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    {{ __('Here is what is happening with your account today.') }}
                </p>
            </div>
            <div class="flex gap-3">
                @role('student')
                    <x-button href="{{ route('test.start') }}"
                        class="bg-primary-600 hover:bg-primary-700 px-6 py-4 !rounded-full" primary label="Start New Test"
                        wire:navigate />
                @endrole
                @role('counsellor|professional|institute')
                    <x-button href="{{ route('test.marketplace') }}"
                        class="bg-primary-600 hover:bg-primary-700 px-6 py-4 !rounded-full" primary label="Purchase Tests"
                        wire:navigate />
                @endrole
                @role('admin')
                    <x-button href="{{ route('tests.create') }}"
                        class="bg-primary-600 hover:bg-primary-700 px-6 py-4 !rounded-full" primary label="Create Test"
                        wire:navigate />
                @endrole
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($stats as $stat)
                <div
                    class="bg-white dark:bg-zinc-800 rounded-xl p-6 border-2 border-dashed border-gray-300 dark:border-zinc-700">
                    <div class="flex items-center justify-between mb-4">
                        <div
                            class="p-2 rounded-lg bg-{{ $stat['color'] }}-50 dark:bg-{{ $stat['color'] }}-900/20 text-{{ $stat['color'] }}-600 dark:text-{{ $stat['color'] }}-400">
                            <x-icon name="{{ $stat['icon'] }}" class="w-6 h-6" />
                        </div>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ $stat['label'] }}</p>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mt-1">{{ $stat['value'] }}</h3>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Chart Section -->
            <div
                class="lg:col-span-2 bg-white dark:bg-zinc-800 rounded-xl p-6 border-2 border-dashed border-gray-300 dark:border-zinc-700">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-6">{{ __('Analytics') }}</h3>
                <div class="relative h-64 w-full" x-data="{
                    init() {
                        new Chart(this.$refs.canvas, {
                            type: '{{ auth()->user()->hasRole('counsellor|professional|institute') ? 'doughnut' : 'bar' }}',
                            data: @js($chartData),
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        display: '{{ !auth()->user()->hasRole('counsellor|professional|institute') }}'
                                    }
                                }
                            }
                        });
                    }
                }">
                    <canvas x-ref="canvas"></canvas>
                </div>
            </div>

            <!-- Recent Activity -->
            <div
                class="bg-white dark:bg-zinc-800 rounded-xl p-6 border-2 border-dashed border-gray-300 dark:border-zinc-700">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">{{ __('Recent Activity') }}</h3>
                <div class="space-y-4">
                    @forelse ($recentActivity as $activity)
                        <div
                            class="flex items-start gap-3 pb-4 border-b border-gray-100 dark:border-zinc-700 last:border-0 last:pb-0">
                            <div class="w-2 h-2 mt-2 rounded-full bg-indigo-500"></div>
                            <div>
                                <p class="text-sm font-medium text-gray-900 dark:text-white">
                                    @if (auth()->user()->hasRole('admin'))
                                        {{-- {{ $activity->user->name }} completed {{ $activity->test->title }} --}}
                                        {{ $activity->user->name ?? 'Guest User' }} completed {{ $activity->test->title ?? 'Test' }}                                        
                                    @elseif(auth()->user()->hasRole('student'))
                                        You completed {{ $activity->test->title }}
                                    @else
                                        Test Assigned/Purchased
                                    @endif
                                </p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">
                                    {{ $activity->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    @empty
                        <p class="text-sm text-gray-500 dark:text-gray-400">{{ __('No recent activity.') }}</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js CDN (Temporary until build process is confirmed) -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</div>
