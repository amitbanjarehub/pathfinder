<div class="space-y-6">
    <div>
        <div class="px-4 mb-3 text-xs font-bold text-white/50 uppercase tracking-wider">
            {{ __('Platform') }}
        </div>
        <div class="space-y-2">
            <a href="{{ route('dashboard') }}" wire:navigate
                class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-xl transition-all duration-200 {{ request()->routeIs('dashboard') ? 'bg-white text-primary-600 shadow-lg shadow-black/10' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                <x-icon name="home" class="w-5 h-5" />
                {{ __('Dashboard') }}
            </a>

            @role('student')
                <a href="{{ route('my.tests') }}" wire:navigate
                    class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-xl transition-all duration-200 {{ request()->routeIs('my.tests') ? 'bg-white text-primary-600 shadow-lg shadow-black/10' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                    <x-icon name="clipboard-document-check" class="w-5 h-5" />
                    {{ __('My Tests') }}
                </a>
                <a href="{{ route('test.marketplace') }}" wire:navigate
                    class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-xl transition-all duration-200 {{ request()->routeIs('test.marketplace') || request()->routeIs('test.purchase') ? 'bg-white text-primary-600 shadow-lg shadow-black/10' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                    <x-icon name="shopping-cart" class="w-5 h-5" />
                    {{ __('Marketplace') }}
                </a>
                <a href="{{ route('test.start') }}" wire:navigate
                    class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-xl transition-all duration-200 {{ request()->routeIs('test.start') ? 'bg-white text-primary-600 shadow-lg shadow-black/10' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                    <x-icon name="play" class="w-5 h-5" />
                    {{ __('Start Test') }}
                </a>
            @endrole

            @role('counsellor|professional|institute')
                <a href="{{ route('my.tests') }}" wire:navigate
                    class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-xl transition-all duration-200 {{ request()->routeIs('my.tests') || request()->routeIs('test.*') ? 'bg-white text-primary-600 shadow-lg shadow-black/10' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                    <x-icon name="clipboard-document-check" class="w-5 h-5" />
                    {{ __('My Tests') }}
                </a>
                <a href="{{ route('test.marketplace') }}" wire:navigate
                    class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-xl transition-all duration-200 {{ request()->routeIs('test.marketplace') || request()->routeIs('test.purchase') ? 'bg-white text-primary-600 shadow-lg shadow-black/10' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                    <x-icon name="shopping-cart" class="w-5 h-5" />
                    {{ __('Marketplace') }}
                </a>
            @endrole
        </div>
    </div>

    @role('admin')
        <div>
            <div class="px-4 mb-3 text-xs font-bold text-white/50 uppercase tracking-wider">
                {{ __('Admin') }}
            </div>
            <div class="space-y-2">
                <a href="{{ route('tests') }}" wire:navigate
                    class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-xl transition-all duration-200 {{ request()->routeIs('tests*') || request()->routeIs('questions*') ? 'bg-white text-primary-600 shadow-lg shadow-black/10' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                    <x-icon name="clipboard-document-list" class="w-5 h-5" />
                    {{ __('Tests') }}
                </a>

                <a href="{{ route('admin.score-scales') }}" wire:navigate
                    class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-xl transition-all duration-200 {{ request()->routeIs('admin.score-scales*') ? 'bg-white text-primary-600 shadow-lg shadow-black/10' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                    <x-icon name="chart-bar-square" class="w-5 h-5" />
                    {{ __('Score Scales') }}
                </a>

                <a href="{{ route('admin.site-settings') }}" wire:navigate
                    class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-xl transition-all duration-200 {{ request()->routeIs('admin.site-settings*') ? 'bg-white text-primary-600 shadow-lg shadow-black/10' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                    <x-icon name="cog-6-tooth" class="w-5 h-5" />
                    {{ __('Site Settings') }}
                </a>

                <!-- Admin Reports -->
                <div x-data="{ open: {{ request()->routeIs('reports.admin.*') ? 'true' : 'false' }} }">
                    <button @click="open = !open" type="button"
                        class="w-full flex items-center justify-between gap-3 px-4 py-3 text-sm font-medium rounded-xl transition-all duration-200 text-gray-300 hover:bg-white/10 hover:text-white">
                        <div class="flex items-center gap-3">
                            <x-icon name="chart-bar" class="w-5 h-5" />
                            {{ __('Reports') }}
                        </div>
                        <x-icon name="chevron-down" class="w-4 h-4 transition-transform duration-200" ::class="{ 'rotate-180': open }" />
                    </button>
                    <div x-show="open" x-collapse class="pl-11 mt-1 space-y-1">
                        <a href="{{ route('reports.admin.users') }}" wire:navigate
                            class="block px-4 py-2 text-sm rounded-lg transition-colors {{ request()->routeIs('reports.admin.users') ? 'text-white font-semibold bg-white/10' : 'text-gray-400 hover:text-white hover:bg-white/5' }}">
                            {{ __('Users') }}
                        </a>
                        <a href="{{ route('reports.admin.financial') }}" wire:navigate
                            class="block px-4 py-2 text-sm rounded-lg transition-colors {{ request()->routeIs('reports.admin.financial') ? 'text-white font-semibold bg-white/10' : 'text-gray-400 hover:text-white hover:bg-white/5' }}">
                            {{ __('Financial') }}
                        </a>
                        <a href="{{ route('reports.admin.activity') }}" wire:navigate
                            class="block px-4 py-2 text-sm rounded-lg transition-colors {{ request()->routeIs('reports.admin.activity') ? 'text-white font-semibold bg-white/10' : 'text-gray-400 hover:text-white hover:bg-white/5' }}">
                            {{ __('Activity') }}
                        </a>
                        <a href="{{ route('reports.admin.counsellor-purchases') }}" wire:navigate
                            class="block px-4 py-2 text-sm rounded-lg transition-colors {{ request()->routeIs('reports.admin.counsellor-purchases') ? 'text-white font-semibold bg-white/10' : 'text-gray-400 hover:text-white hover:bg-white/5' }}">
                            {{ __('Counsellor Purchases') }}
                        </a>
                        <a href="{{ route('reports.admin.student-purchases') }}" wire:navigate
                            class="block px-4 py-2 text-sm rounded-lg transition-colors {{ request()->routeIs('reports.admin.student-purchases') ? 'text-white font-semibold bg-white/10' : 'text-gray-400 hover:text-white hover:bg-white/5' }}">
                            {{ __('Student Purchases') }}
                        </a>
                        <a href="{{ route('reports.admin.assignments') }}" wire:navigate
                            class="block px-4 py-2 text-sm rounded-lg transition-colors {{ request()->routeIs('reports.admin.assignments') ? 'text-white font-semibold bg-white/10' : 'text-gray-400 hover:text-white hover:bg-white/5' }}">
                            {{ __('Counsellor Assignments') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endrole

    @role('counsellor|professional|institute')
        <!-- Counsellor Reports -->
        <div x-data="{ open: {{ request()->routeIs('reports.counsellor.*') ? 'true' : 'false' }} }">
            <button @click="open = !open" type="button"
                class="w-full flex items-center justify-between gap-3 px-4 py-3 text-sm font-medium rounded-xl transition-all duration-200 text-gray-300 hover:bg-white/10 hover:text-white">
                <div class="flex items-center gap-3">
                    <x-icon name="chart-pie" class="w-5 h-5" />
                    {{ __('Reports') }}
                </div>
                <x-icon name="chevron-down" class="w-4 h-4 transition-transform duration-200" ::class="{ 'rotate-180': open }" />
            </button>
            <div x-show="open" x-collapse class="pl-11 mt-1 space-y-1">
                <a href="{{ route('reports.counsellor.students') }}" wire:navigate
                    class="block px-4 py-2 text-sm rounded-lg transition-colors {{ request()->routeIs('reports.counsellor.students') ? 'text-white font-semibold bg-white/10' : 'text-gray-400 hover:text-white hover:bg-white/5' }}">
                    {{ __('My Students') }}
                </a>
                <a href="{{ route('reports.counsellor.purchases') }}" wire:navigate
                    class="block px-4 py-2 text-sm rounded-lg transition-colors {{ request()->routeIs('reports.counsellor.purchases') ? 'text-white font-semibold bg-white/10' : 'text-gray-400 hover:text-white hover:bg-white/5' }}">
                    {{ __('My Purchases') }}
                </a>
            </div>
        </div>
    @endrole

    @role('student')
        <!-- Student Reports -->
        <a href="{{ route('reports.student.results') }}" wire:navigate
            class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-xl transition-all duration-200 {{ request()->routeIs('reports.student.results') ? 'bg-white text-primary-600 shadow-lg shadow-black/10' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
            <x-icon name="document-chart-bar" class="w-5 h-5" />
            {{ __('My Results') }}
        </a>
    @endrole
</div>
