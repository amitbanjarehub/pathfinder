<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Miracles - Career Counselling Like Never Before' }}</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#1a1a1a",
                        accent: "#f35a4c",
                        kraft: "#c4a574",
                        'kraft-light': "#d4bc94",
                        'kraft-dark': "#b09060",
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Inter', 'serif'],
                    },
                },
            },
        };
    </script>
    <style>
        .material-symbols-rounded {
            font-variation-settings: "FILL" 1, "wght" 400, "GRAD" 0, "opsz" 24;
        }

        /* Kraft paper texture background */
        .kraft-bg {
            background-color: #c4a574;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.15'/%3E%3C/svg%3E");
        }

        .hero-arrow {
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .hero-arrow:hover {
            transform: scale(1.2);
            opacity: 0.8;
        }
    </style>
    @fluxAppearance
    <wireui:styles />
    @livewireStyles
    @stack('styles')
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
</head>

<body class="font-sans antialiased text-slate-800 bg-slate-50 overflow-x-hidden">

    <!-- Navigation -->
    <header class="w-full bg-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex items-center gap-3">
                    <a href="{{ route('home.new') }}">
                        <img src="{{ asset('logo.png') }}" alt="Miracles" class="h-12" />
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center gap-8">
                    <a href="{{ route('about') }}"
                        class="text-sm font-medium text-white hover:text-kraft transition-colors">ABOUT</a>
                    <a href="{{ route('services') }}#services"
                        class="text-sm font-medium text-white hover:text-kraft transition-colors">SERVICES</a> 
                        <a href="{{ route('home.new') }}#services"
                    class="block text-sm font-medium text-white hover:text-kraft transition-colors">CAREER</a>
                    <a href="{{ route('process') }}#process"
                        class="text-sm font-medium text-white hover:text-kraft transition-colors">PROCESS</a>
                    <a href="{{ route('stories') }}#stories"
                        class="text-sm font-medium text-white hover:text-kraft transition-colors">STORIES</a>
                    <a href="{{ route('assessment') }}#assessment"
                        class="text-sm font-medium text-white hover:text-kraft transition-colors">GET STARTED</a>
                    {{-- <a href="{{ route('resources') }}#resources"
                        class="text-sm font-medium text-white hover:text-kraft transition-colors">RESOURCES</a> --}}

                    {{-- RESOURCES MEGA MENU --}}
                    {{-- RESOURCES MEGA MENU --}}
                    <div class="relative group">

                        {{-- MENU BUTTON --}}
                        <button
                            class="text-sm font-medium text-white hover:text-kraft transition-colors flex items-center gap-1 py-6">

                            RESOURCES

                            <span
                                class="material-symbols-rounded text-[18px] transition duration-300 group-hover:rotate-180">
                                expand_more
                            </span>
                        </button>

                        {{-- DROPDOWN WRAPPER --}}
                        <div class="absolute top-full right-[-20px] pt-3 hidden group-hover:block z-50">

                            {{-- INNER CARD --}}
                            <div
                                class="w-[620px] bg-white/95 backdrop-blur-xl rounded-3xl border border-gray-100 p-5 shadow-[0_20px_60px_rgba(0,0,0,0.18)]">

                                <div class="grid grid-cols-2 gap-5">

                                    {{-- LEFT COLUMN --}}
                                    <div class="space-y-5">

                                        {{-- Learn & Explore --}}
                                        <div>

                                            <h3 class="text-[11px] font-bold text-accent uppercase tracking-[2px] mb-2">
                                                Learn & Explore
                                            </h3>

                                            <div class="space-y-1">

                                                <a href="{{ route('career.videos') }}"
                                                    class="flex items-center gap-2 px-3 py-2 rounded-xl hover:bg-gray-50 transition duration-200">

                                                    <span class="material-symbols-rounded text-accent text-[20px]">
                                                        smart_display
                                                    </span>

                                                    <span class="text-[13px] font-medium text-gray-700">
                                                        Career Videos
                                                    </span>
                                                </a>

                                                <a href="{{ route('career.articles') }}"
                                                    class="flex items-center gap-2 px-3 py-2 rounded-xl hover:bg-gray-50 transition duration-200">

                                                    <span class="material-symbols-rounded text-accent text-[20px]">
                                                        article
                                                    </span>

                                                    <span class="text-[13px] font-medium text-gray-700">
                                                        Career Articles
                                                    </span>
                                                </a>

                                                <a href="{{ route('career.library') }}"
                                                    class="flex items-center gap-2 px-3 py-2 rounded-xl hover:bg-gray-50 transition duration-200">

                                                    <span class="material-symbols-rounded text-accent text-[20px]">
                                                       article
                                                    </span>

                                                    <span class="text-[13px] font-medium text-gray-700">
                                                        Career Library
                                                    </span>
                                                </a>

                                               
                                                <a href="{{ route('parenting.community') }}"
                                                    class="flex items-center gap-2 px-3 py-2 rounded-xl hover:bg-gray-50 transition duration-200">

                                                    <span class="material-symbols-rounded text-accent text-[20px]">
                                                        smart_display
                                                    </span>

                                                    <span class="text-[13px] font-medium text-gray-700">
                                                        Parenting Community
                                                    </span>
                                                </a>

                                                <a href="{{ route('students.corner') }}"
                                                    class="flex items-center gap-2 px-3 py-2 rounded-xl hover:bg-gray-50 transition duration-200">

                                                    <span class="material-symbols-rounded text-accent text-[20px]">
                                                        article
                                                    </span>

                                                    <span class="text-[13px] font-medium text-gray-700">
                                                       Students's Corner
                                                    </span>
                                                </a>

                                            </div>

                                        </div>

                                        

                                        {{-- Plan & Prepare --}}
                                        <div>

                                            <h3 class="text-[11px] font-bold text-accent uppercase tracking-[2px] mb-2">
                                                Plan & Prepare
                                            </h3>

                                            <div class="space-y-1">

                                                <a href="{{ route('exam.calendar') }}"
                                                    class="flex items-center gap-2 px-3 py-2 rounded-xl hover:bg-gray-50 transition duration-200">

                                                    <span class="material-symbols-rounded text-accent text-[20px]">
                                                        calendar_month
                                                    </span>

                                                    <span class="text-[13px] font-medium text-gray-700">
                                                        Entrance Exams Calendar
                                                    </span>
                                                </a>

                                                <a href="{{ route('faqs') }}"
                                                    class="flex items-center gap-2 px-3 py-2 rounded-xl hover:bg-gray-50 transition duration-200">

                                                    <span class="material-symbols-rounded text-accent text-[20px]">
                                                        help
                                                    </span>

                                                    <span class="text-[13px] font-medium text-gray-700">
                                                        FAQs
                                                    </span>
                                                </a>

                                                <a href="{{ route('events.gallery') }}"
                                                    class="flex items-center gap-2 px-3 py-2 rounded-xl hover:bg-gray-50 transition duration-200">

                                                    <span class="material-symbols-rounded text-accent text-[20px]">
                                                        photo_library
                                                    </span>

                                                    <span class="text-[13px] font-medium text-gray-700">
                                                        Events Gallery
                                                    </span>
                                                </a>

                                            </div>

                                        </div>

                                    </div>

                                    {{-- RIGHT COLUMN --}}
                                    <div class="space-y-5">

                                        {{-- Partnership --}}
                                        <div>

                                            <h3 class="text-[11px] font-bold text-accent uppercase tracking-[2px] mb-2">
                                                Partnership & Opportunities
                                            </h3>

                                            <div class="space-y-1">

                                                <a href="{{ route('certified.counsellor') }}"
                                                    class="flex items-center gap-2 px-3 py-2 rounded-xl hover:bg-gray-50 transition duration-200">

                                                    <span class="material-symbols-rounded text-accent text-[20px]">
                                                        workspace_premium
                                                    </span>

                                                    <span class="text-[13px] font-medium text-gray-700">
                                                        Certified Counsellor
                                                    </span>
                                                </a>

                                                <a href="{{ route('join.intern') }}"
                                                    class="flex items-center gap-2 px-3 py-2 rounded-xl hover:bg-gray-50 transition duration-200">

                                                    <span class="material-symbols-rounded text-accent text-[20px]">
                                                        school
                                                    </span>

                                                    <span class="text-[13px] font-medium text-gray-700">
                                                        Join as Intern
                                                    </span>
                                                </a>

                                                <a href="{{ route('join.team') }}"
                                                    class="flex items-center gap-2 px-3 py-2 rounded-xl hover:bg-gray-50 transition duration-200">

                                                    <span class="material-symbols-rounded text-accent text-[20px]">
                                                        groups
                                                    </span>

                                                    <span class="text-[13px] font-medium text-gray-700">
                                                        Join as Team Member
                                                    </span>
                                                </a>

                                                <a href="{{ route('join.franchise') }}"
                                                    class="flex items-center gap-2 px-3 py-2 rounded-xl hover:bg-gray-50 transition duration-200">

                                                    <span class="material-symbols-rounded text-accent text-[20px]">
                                                        storefront
                                                    </span>

                                                    <span class="text-[13px] font-medium text-gray-700">
                                                        Join as Franchisee
                                                    </span>
                                                </a>

                                                <a href="{{ route('institutional.tieups') }}"
                                                    class="flex items-center gap-2 px-3 py-2 rounded-xl hover:bg-gray-50 transition duration-200">

                                                    <span class="material-symbols-rounded text-accent text-[20px]">
                                                        handshake
                                                    </span>

                                                    <span class="text-[13px] font-medium text-gray-700">
                                                        Institutional Tie-ups
                                                    </span>
                                                </a>

                                            </div>

                                        </div>

                                        {{-- Account --}}
                                        <div>

                                            <h3
                                                class="text-[11px] font-bold text-accent uppercase tracking-[2px] mb-2">
                                                Account
                                            </h3>

                                            <div class="space-y-1">

                                                <a href="{{ route('register') }}"
                                                    class="flex items-center gap-2 px-3 py-2 rounded-xl hover:bg-gray-50 transition duration-200">

                                                    <span class="material-symbols-rounded text-accent text-[20px]">
                                                        person_add
                                                    </span>

                                                    <span class="text-[13px] font-medium text-gray-700">
                                                        Sign Up
                                                    </span>
                                                </a>

                                                <a href="{{ route('login') }}"
                                                    class="flex items-center gap-2 px-3 py-2 rounded-xl hover:bg-gray-50 transition duration-200">

                                                    <span class="material-symbols-rounded text-accent text-[20px]">
                                                        login
                                                    </span>

                                                    <span class="text-[13px] font-medium text-gray-700">
                                                        Sign In
                                                    </span>
                                                </a>

                                                <a href="{{ route('test.code') }}"
                                                    class="flex items-center gap-2 px-3 py-2 rounded-xl hover:bg-gray-50 transition duration-200">

                                                    <span class="material-symbols-rounded text-accent text-[20px]">
                                                        qr_code
                                                    </span>

                                                    <span class="text-[13px] font-medium text-gray-700">
                                                        Test Code
                                                    </span>
                                                </a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <a href="{{ route('contact') }}#contact"
                        class="text-sm font-medium text-white hover:text-kraft transition-colors">CONTACT</a>
                    <a href="{{ route('login') }}"
                        class="text-sm font-medium text-white hover:text-kraft transition-colors">LOGIN</a>
                </nav>

                <!-- Mobile Menu Button -->
                <button class="md:hidden text-white" onclick="toggleMobileMenu()">
                    <span class="material-symbols-rounded text-2xl">menu</span>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden md:hidden bg-black border-t border-gray-800">
            <nav class="px-4 py-4 space-y-3">
                <a href="{{ route('about') }}"
                    class="block text-sm font-medium text-white hover:text-kraft transition-colors">ABOUT</a>
                <a href="{{ route('home.new') }}#services"
                    class="block text-sm font-medium text-white hover:text-kraft transition-colors">SERVICES</a>
                <a href="{{ route('home.new') }}#process"
                    class="block text-sm font-medium text-white hover:text-kraft transition-colors">PROCESS</a>
                <a href="{{ route('home.new') }}#stories"
                    class="block text-sm font-medium text-white hover:text-kraft transition-colors">STORIES</a>
                <a href="{{ route('home.new') }}#assessment"
                    class="block text-sm font-medium text-white hover:text-kraft transition-colors">GET STARTED</a>
                {{-- <a href="{{ route('home.new') }}#resources"
                    class="block text-sm font-medium text-white hover:text-kraft transition-colors">RESOURCES</a> --}}
                {{-- MOBILE RESOURCES MENU --}}
                <div x-data="{ openResources: false }" class="border-b border-gray-800 pb-2">

                    <button @click="openResources = !openResources"
                        class="w-full flex items-center justify-between text-sm font-medium text-white hover:text-kraft transition-colors py-2">

                        <span>RESOURCES</span>

                        <span class="material-symbols-rounded transition duration-300"
                            :class="{ 'rotate-180': openResources }">
                            expand_more
                        </span>
                    </button>

                    {{-- Dropdown Content --}}
                    <div x-show="openResources" x-transition class="pl-4 mt-3 space-y-5">

                        {{-- Learn --}}
                        <div>
                            <h4 class="text-kraft text-xs uppercase mb-2 font-semibold">
                                Learn & Explore
                            </h4>

                            <div class="space-y-2">
                                <a href="#" class="block text-sm text-gray-300">Career Videos</a>
                                <a href="#" class="block text-sm text-gray-300">Career Articles (Blogs)</a>
                                <a href="#" class="block text-sm text-gray-300">Career Library</a>
                            </div>
                        </div>

                        {{-- Plan --}}
                        <div>
                            <h4 class="text-kraft text-xs uppercase mb-2 font-semibold">
                                Plan & Prepare
                            </h4>

                            <div class="space-y-2">
                                <a href="#" class="block text-sm text-gray-300">Entrance Exams Calendar</a>
                                <a href="#" class="block text-sm text-gray-300">FAQs</a>
                                <a href="#" class="block text-sm text-gray-300">Events (Gallery)</a>
                            </div>
                        </div>

                        {{-- Partnership --}}
                        <div>
                            <h4 class="text-kraft text-xs uppercase mb-2 font-semibold">
                                Partnership & Opportunities
                            </h4>

                            <div class="space-y-2">
                                <a href="#" class="block text-sm text-gray-300">Join as Certified Counsellor</a>
                                <a href="#" class="block text-sm text-gray-300">Join as Intern</a>
                                <a href="#" class="block text-sm text-gray-300">Join as Team Member</a>
                                <a href="#" class="block text-sm text-gray-300">Join as Franchisee</a>
                                <a href="#" class="block text-sm text-gray-300">Institutional Tie-ups</a>
                            </div>
                        </div>

                        {{-- Account --}}
                        <div>
                            <h4 class="text-kraft text-xs uppercase mb-2 font-semibold">
                                Account
                            </h4>

                            <div class="space-y-2">
                                <a href="{{ route('register') }}" class="block text-sm text-gray-300">Sign Up</a>
                                <a href="{{ route('login') }}" class="block text-sm text-gray-300">Sign In</a>
                                <a href="#" class="block text-sm text-gray-300">Test Code</a>
                            </div>
                        </div>

                    </div>
                </div>
                <a href="{{ route('home.new') }}#contact"
                    class="block text-sm font-medium text-white hover:text-kraft transition-colors">CONTACT</a>
            </nav>
        </div>
    </header>

    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-black text-gray-300 pt-16 pb-8 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">

                <div class="col-span-1">
                    <div class="flex items-center gap-2 mb-6">
                        <img src="{{ asset('logo.png') }}" alt="Miracles" class="h-10" />
                    </div>
                    <p class="text-sm leading-relaxed text-gray-400">
                        COUNSELLING | MENTORING | PROFILING<br />
                        Where MAGIC happens.
                    </p>
                </div>

                <div>
                    <h4 class="font-bold text-white mb-4">Services</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#" class="hover:text-kraft transition-colors">Career Counselling</a></li>
                        <li><a href="#" class="hover:text-kraft transition-colors">Psychometric Tests</a></li>
                        <li><a href="#" class="hover:text-kraft transition-colors">Mentoring Programs</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-white mb-4">Company</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="{{ route('about') }}" class="hover:text-kraft transition-colors">About Us</a>
                        </li>
                        <li><a href="#" class="hover:text-kraft transition-colors">Our Process</a></li>
                        <li><a href="#" class="hover:text-kraft transition-colors">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-white mb-4">Contact</h4>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li>📞 9329113593</li>
                        <li>📍 Shankar Nagar, Raipur</li>
                    </ul>
                </div>

            </div>

            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm text-gray-500">© 2024 Miracles. All Rights Reserved.</p>
                <div class="flex gap-4">
                    <a href="#" class="text-gray-400 hover:text-kraft transition-colors">Facebook</a>
                    <a href="#" class="text-gray-400 hover:text-kraft transition-colors">Instagram</a>
                    <a href="#" class="text-gray-400 hover:text-kraft transition-colors">LinkedIn</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>

    @stack('scripts')
    @fluxScripts
</body>

</html>
