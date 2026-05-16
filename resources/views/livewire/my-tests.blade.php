<div class="p-6 bg-white dark:bg-zinc-800 ">
    @if (session('error'))
        <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative dark:bg-red-900/30 dark:border-red-600 dark:text-red-400"
            role="alert">
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    @endif

    @if (session('message'))
        <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative dark:bg-green-900/30 dark:border-green-600 dark:text-green-400"
            role="alert">
            <span class="block sm:inline">{{ session('message') }}</span>
        </div>
    @endif

    <h2 class="text-2xl font-semibold mb-6 text-gray-800 dark:text-gray-200">{{ __('My Tests') }}</h2>

    @if ($tests->isEmpty())
        <div class="text-center py-12">
            <p class="text-gray-500 dark:text-gray-400 mb-4">{{ __('No tests available') }}</p>
            @role('student')
                <p class="text-sm text-gray-400">
                    {{ __('Tests will appear here when assigned to you by your counsellor or institute') }}</p>
            @else
                <p class="text-sm text-gray-400">{{ __('Purchase tests to get started') }}</p>
            @endrole
        </div>
    @else
        <div class="flex flex-col gap-4">
            @foreach ($tests as $item)
                <div
                    class="bg-white dark:bg-zinc-800 border-2 border-gray-300 dark:border-gray-700 rounded-lg p-6 transition-all border-dashed hover:border-solid transition-shadow">
                    <div class="flex flex-col md:flex-row gap-6 justify-between items-start md:items-center">
                        <!-- Left: Info -->
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-2">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                                    {{ $item['test']->title }}</h3>
                                <span
                                    class="px-2 py-1 rounded-full text-xs bg-indigo-100 text-indigo-800 dark:bg-indigo-900 dark:text-indigo-200">
                                    {{ ucfirst($item['test']->type) }}
                                </span>
                            </div>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">
                                {{ Str::limit($item['test']->description, 150) }}</p>

                            @if (isset($item['assigned_by']))
                                <p class="text-xs text-gray-500 dark:text-gray-400">{{ __('Assigned by') }}:
                                    {{ $item['assigned_by'] }}</p>
                            @endif

                            @if (isset($item['purchased_at']))
                                <p class="text-xs text-gray-500 dark:text-gray-400">{{ __('Purchased') }}:
                                    {{ $item['purchased_at']->format('M d, Y') }}</p>
                                @if (isset($item['assigned_student']))
                                    <p class="text-xs text-primary-600 dark:text-primary-400 font-medium mt-1">
                                        {{ __('Assigned to') }}: {{ $item['assigned_student'] }}</p>
                                @endif
                            @endif
                        </div>

                        <!-- Middle: Code (if purchased) -->
                        @if (isset($item['purchased_at']))
                            <div
                                class="flex flex-col items-end md:items-center bg-gray-50 dark:bg-zinc-700/30 p-3 rounded-lg border border-gray-100 dark:border-gray-600/50 min-w-[150px]">
                                <span
                                    class="text-xs text-gray-500 dark:text-gray-400 mb-1">{{ __('Unique Test Code') }}</span>
                                <code
                                    class="text-lg font-mono font-bold text-indigo-600 dark:text-indigo-400 select-all">{{ $item['test_code'] }}</code>
                                @if ($item['is_used'])
                                    <span class="text-xs text-red-500 font-medium">{{ __('Used') }}</span>
                                @else
                                    <span class="text-xs text-green-500 font-medium">{{ __('Unused') }}</span>
                                @endif
                            </div>
                        @endif

                        <!-- Right: Actions -->
                        <div class="flex flex-col gap-2 w-full md:w-auto min-w-[200px]">
                            @if (isset($item['assigned_by']))
                                @if (isset($item['attempt']))
                                    @if ($item['attempt']->status === 'completed')
                                        <a href="{{ route('test.result', $item['attempt']->id) }}"
                                            class="w-full text-center px-6 py-4 bg-green-600 text-white rounded-full hover:bg-green-700 transition-colors">
                                            {{ __('View Result') }} ({{ $item['attempt']->score }})
                                        </a>
                                    @else
                                        <a href="{{ route('test.play', $item['attempt']->id) }}"
                                            class="w-full text-center px-6 py-4 bg-yellow-600 text-white rounded-full hover:bg-yellow-700 transition-colors">
                                            {{ __('Resume Test') }}
                                        </a>
                                    @endif
                                @else
                                    <a href="{{ route('test.start', ['testId' => $item['test']->id, 'assignmentId' => $item['assignment_id']]) }}"
                                        class="w-full text-center px-6 py-4 bg-primary-600 text-white rounded-full hover:bg-primary-700 transition-colors">
                                        {{ __('Start Test') }}
                                    </a>
                                @endif
                            @endif

                            @if (isset($item['purchased_at']))
                                @if ($item['is_used'])
                                    <button disabled
                                        class="w-full text-center px-6 py-4 bg-gray-100 text-gray-400 rounded-full cursor-not-allowed dark:bg-zinc-700 dark:text-gray-500">
                                        {{ __('Assigned') }}
                                    </button>
                                @else
                                    <a href="{{ route('assign.test', $item['purchase_id']) }}"
                                        class="w-full text-center px-6 py-4 bg-primary-600 text-white rounded-full hover:bg-primary-700 transition-colors"
                                        wire:navigate>
                                        {{ __('Assign to Students') }}
                                    </a>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
