<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    @include('partials.head')
    <title>Pathfinder - Test Management System</title>
</head>

<body class="min-h-screen bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-900">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="p-6">
            <div class="max-w-7xl mx-auto flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <x-app-logo />
                </div>
                <div class="flex gap-4">
                    @auth
                        <a href="{{ route('dashboard') }}"
                            class="px-4 py-2 bg-white/10 backdrop-blur-sm text-white rounded-lg hover:bg-white/20 transition-all">
                            {{ __('Dashboard') }}
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="px-4 py-2 bg-white/10 backdrop-blur-sm text-white rounded-lg hover:bg-white/20 transition-all">
                            {{ __('Login') }}
                        </a>
                        <a href="{{ route('register') }}"
                            class="px-4 py-2 bg-primary-600 text-white rounded-lg hover:bg-primary-700 transition-all">
                            {{ __('Register') }}
                        </a>
                    @endauth
                </div>
            </div>
        </header>

        <!-- Hero Section -->
        <div class="flex-1 flex items-center justify-center p-6">
            <div class="max-w-4xl w-full">
                <div class="text-center mb-12">
                    <h1 class="text-5xl md:text-6xl font-bold text-white mb-4">
                        {{ __('Welcome to Pathfinder') }}
                    </h1>
                    <p class="text-xl text-white/80">
                        {{ __('Your comprehensive test management system for aptitude and psychometric assessments') }}
                    </p>
                </div>

                <!-- Test Code Entry Card -->
                <div class="bg-white/10 backdrop-blur-md rounded-2xl shadow-2xl p-8 border border-white/20">
                    <livewire:start-test-public />
                </div>

                <!-- Features -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                        <div class="text-3xl mb-4">📊</div>
                        <h3 class="text-lg font-semibold text-white mb-2">{{ __('Aptitude Tests') }}</h3>
                        <p class="text-white/70 text-sm">{{ __('Comprehensive aptitude assessments') }}</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                        <div class="text-3xl mb-4">🧠</div>
                        <h3 class="text-lg font-semibold text-white mb-2">{{ __('Psychometric Tests') }}</h3>
                        <p class="text-white/70 text-sm">{{ __('Professional psychological assessments') }}</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                        <div class="text-3xl mb-4">📈</div>
                        <h3 class="text-lg font-semibold text-white mb-2">{{ __('Detailed Reports') }}</h3>
                        <p class="text-white/70 text-sm">{{ __('Get comprehensive result analysis') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="p-6 text-center text-white/60 text-sm">
            <p>&copy; {{ date('Y') }} Pathfinder. {{ __('All rights reserved.') }}</p>
        </footer>
    </div>

    @fluxScripts
</body>

</html>
