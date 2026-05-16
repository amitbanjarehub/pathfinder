<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800">
    <!-- Mobile Sidebar Overlay -->
    <div x-data="{ open: false }" class="lg:hidden">
        <div x-show="open" @click="open = false"
            class="fixed inset-0 z-40 bg-gray-900/50 backdrop-blur-sm transition-opacity"></div>

        <div x-show="open"
            class="fixed inset-y-0 left-0 z-50 w-64 bg-[#3f2668] dark:bg-[#2a1a45] text-white shadow-lg transform transition-transform"
            x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full">

            <div class="flex items-center justify-between p-6 border-b border-white/10">
                <x-app-logo />
                <button @click="open = false" class="text-gray-300 hover:text-white transition-colors">
                    <x-icon name="x-mark" class="w-6 h-6" />
                </button>
            </div>

            <nav class="p-4 space-y-1">
                @include('components.layouts.app.nav-items')
            </nav>
        </div>

        <!-- Mobile Header -->
        <header
            class="flex items-center justify-between p-4 bg-white dark:bg-zinc-900 border-b border-gray-200 dark:border-zinc-700 lg:hidden">
            <button @click="open = true"
                class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                <x-icon name="bars-3" class="w-6 h-6" />
            </button>

            <x-dropdown class="w-64">
                <x-slot name="trigger">
                    <div
                        class="flex items-center gap-2 cursor-pointer p-1 rounded-lg hover:bg-gray-100 dark:hover:bg-zinc-800 transition-colors">
                        <div class="relative">
                            <div
                                class="w-8 h-8 rounded-full bg-gradient-to-br from-indigo-400 to-purple-500 flex items-center justify-center text-xs font-bold text-white shadow-sm">
                                {{ auth()->user()->initials() }}
                            </div>
                            <div
                                class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zinc-900 rounded-full">
                            </div>
                        </div>
                        <x-icon name="chevron-down" class="w-4 h-4 text-gray-500" />
                    </div>
                </x-slot>

                <div class="p-1 border-gray-900 dark:border-zinc-700 bg-gray-50 dark:bg-zinc-800">
                    <div
                        class="px-4 py-3 border-b border-gray-100 dark:border-zinc-700 bg-gray-50 dark:bg-zinc-800 rounded-t-lg">
                        <div class="flex items-center gap-3 mb-2">
                            <div
                                class="w-8 h-8 rounded-full bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-xs font-bold text-primary-700 dark:text-primary-300">
                                {{ auth()->user()->initials() }}
                            </div>
                            <div class="overflow-hidden">
                                <div class="text-sm font-semibold text-gray-900 dark:text-white truncate">
                                    {{ auth()->user()->name }}</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400 truncate">
                                    {{ auth()->user()->email }}</div>
                            </div>
                        </div>
                        <div
                            class="inline-flex items-center px-2 py-1 rounded-md bg-indigo-50 dark:bg-indigo-900/20 border border-indigo-100 dark:border-indigo-800/30">
                            <span class="w-1.5 h-1.5 rounded-full bg-indigo-500 mr-2"></span>
                            <span
                                class="text-[10px] font-semibold text-indigo-700 dark:text-indigo-300 uppercase tracking-wider">
                                {{ auth()->user()->getRoleNames()->first() }}
                            </span>
                        </div>
                    </div>

                    <div class="p-1 space-y-0.5  ">
                        <x-dropdown.item label="Settings" href="{{ route('profile.edit') }}" icon="cog"
                            class="rounded-md hover:bg-gray-100 dark:hover:bg-zinc-700 text-gray-700 dark:text-gray-200"
                            wire:navigate />

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown.item label="Log Out" icon="arrow-right-start-on-rectangle"
                                class="rounded-md hover:bg-red-50 dark:hover:bg-red-900/20 text-red-600 dark:text-red-400 hover:text-red-700 dark:hover:text-red-300"
                                onclick="event.preventDefault(); this.closest('form').submit();" />
                        </form>
                    </div>
                </div>
            </x-dropdown>
        </header>
    </div>

    <!-- Desktop Sidebar -->
    <aside
        class="hidden lg:flex flex-col w-64 h-screen fixed inset-y-0 left-0 bg-[#3f2668] dark:bg-[#2a1a45] border-r border-white/10 text-white">
        <div class="p-6 border-b border-white/10 flex items-center gap-3">
            <a href="{{ route('dashboard') }}" wire:navigate>
                <x-app-logo />
            </a>
        </div>

        <nav class="flex-1 overflow-y-auto p-4 space-y-6">
            @include('components.layouts.app.nav-items')
        </nav>

        <div class="p-4 border-t border-white/10">
            <x-dropdown position="top-start" class="w-full">
                <x-slot name="trigger">
                    <div
                        class="group flex items-center gap-3 p-3 rounded-xl hover:bg-white/10 cursor-pointer transition-all duration-200 w-full border border-transparent hover:border-white/5">
                        <div class="relative">
                            <div
                                class="w-10 h-10 rounded-full bg-gradient-to-br from-indigo-400 to-purple-500 flex items-center justify-center text-sm font-bold text-white shadow-lg ring-2 ring-white/20 group-hover:ring-white/40 transition-all">
                                {{ auth()->user()->initials() }}
                            </div>
                            <div
                                class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 border-2 border-[#3f2668] rounded-full">
                            </div>
                        </div>

                        <div class="flex-1 text-left overflow-hidden">
                            <div
                                class="text-sm font-semibold text-white truncate group-hover:text-indigo-200 transition-colors">
                                {{ auth()->user()->name }}</div>
                            <div class="text-xs text-gray-400 truncate group-hover:text-gray-300 transition-colors">
                                {{ auth()->user()->email }}</div>
                        </div>
                        <x-icon name="chevron-up-down"
                            class="w-4 h-4 text-gray-500 group-hover:text-white transition-colors" />
                    </div>
                </x-slot>

                <div class="p-1 border-gray-900 dark:border-zinc-700 bg-gray-50 dark:bg-zinc-800">
                    <div
                        class="px-4 py-3 border-b border-gray-100 dark:border-zinc-700 bg-gray-50 dark:bg-zinc-800 rounded-t-lg">
                        <div class="flex items-center gap-3 mb-2">
                            <div
                                class="w-8 h-8 rounded-full bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-xs font-bold text-primary-700 dark:text-primary-300">
                                {{ auth()->user()->initials() }}
                            </div>
                            <div class="overflow-hidden">
                                <div class="text-sm font-semibold text-gray-900 dark:text-white truncate">
                                    {{ auth()->user()->name }}</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400 truncate">
                                    {{ auth()->user()->email }}</div>
                            </div>
                        </div>
                        <div
                            class="inline-flex items-center px-2 py-1 rounded-md bg-indigo-50 dark:bg-indigo-900/20 border border-indigo-100 dark:border-indigo-800/30">
                            <span class="w-1.5 h-1.5 rounded-full bg-indigo-500 mr-2"></span>
                            <span
                                class="text-[10px] font-semibold text-indigo-700 dark:text-indigo-300 uppercase tracking-wider">
                                {{ auth()->user()->getRoleNames()->first() }}
                            </span>
                        </div>
                    </div>

                    <div class="p-1 space-y-0.5">
                        <x-dropdown.item label="Settings" href="{{ route('profile.edit') }}" icon="cog"
                            class="rounded-md hover:bg-gray-100 dark:hover:bg-zinc-700 text-gray-700 dark:text-gray-200"
                            wire:navigate />

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown.item label="Log Out" icon="arrow-right-start-on-rectangle"
                                class="rounded-md hover:bg-red-50 dark:hover:bg-red-900/20 text-red-600 dark:text-red-400 hover:text-red-700 dark:hover:text-red-300"
                                onclick="event.preventDefault(); this.closest('form').submit();" />
                        </form>
                    </div>
                </div>
            </x-dropdown>
        </div>
    </aside>

    <!-- Main Content Wrapper -->
    <div class="lg:pl-64 flex flex-col min-h-screen">
        <!-- Desktop Header (optional, if needed for breadcrumbs etc) -->
        <!-- Content -->
        <main class="flex-1 p-6">

            {{ $slot }}

            @fluxScripts
            <wireui:scripts />
</body>

</html>
