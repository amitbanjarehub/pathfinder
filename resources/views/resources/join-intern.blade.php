<x-layouts.public title="Join as an Intern | Pathfinder">

    <!-- Main Container -->
    <div class="bg-white" x-data="{ activeTab: 'all', openModal: false }">

        <!-- Hero Section -->
        <div class="relative bg-slate-900 overflow-hidden">
            <div
                class="absolute top-0 right-0 -translate-y-12 translate-x-12 w-96 h-96 bg-blue-600/20 blur-[120px] rounded-full">
            </div>

            <div class="max-w-7xl mx-auto px-4 py-12 md:py-24">
                <div class="flex flex-col md:flex-row items-center gap-12">

                    <!-- Right Side Image -->
                    <div class="w-full md:w-1/2 order-first md:order-last animate-fade-in-right">
                        <div class="relative">
                            <div
                                class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-teal-500 rounded-2xl blur opacity-30">
                            </div>

                            <img src="{{ asset('/assets/images/services/intern_img1.png') }}"
                                class="relative rounded-2xl shadow-2xl w-full h-[300px] md:h-[500px] object-cover border border-slate-700"
                                alt="Internship at Pathfinder">

                            <div
                                class="absolute -bottom-6 -left-6 bg-white p-4 rounded-xl shadow-xl hidden md:block animate-bounce">
                                <div class="flex items-center gap-3">
                                    <div class="p-2 bg-blue-100 rounded-lg">
                                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                            </path>
                                        </svg>
                                    </div>

                                    <div>
                                        <p class="text-xs text-slate-500 font-medium">Opportunities</p>
                                        <p class="text-sm font-bold text-slate-800">Learn by Doing</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Left Side Content -->
                    <div class="w-full md:w-1/2 text-left space-y-6 md:space-y-8">

                        <div
                            class="inline-flex items-center space-x-2 px-3 py-1 bg-blue-500/10 border border-blue-500/20 rounded-full">
                            <span class="relative flex h-2 w-2">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                            </span>

                            <span class="text-blue-400 text-xs font-bold uppercase tracking-widest">
                                Real Situations. Real Execution.
                            </span>
                        </div>

                        <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight">
                            Learn by
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-teal-400">
                                Doing
                            </span>
                        </h1>

                        <p class="text-slate-400 text-lg md:text-xl leading-relaxed">
                            This is not theoretical learning. Gain confidence by working, experimenting,
                            and executing in real situations. Turn your potential into capability.
                        </p>

                        <div class="flex flex-col sm:flex-row items-center gap-4 pt-4">

                            <!-- OPEN MODAL BUTTON -->
                            <button @click="openModal = true"
                                class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-xl font-bold transition-all transform hover:scale-105 text-center">
                                Start Your Journey
                            </button>

                            <a href="#who-this-is-for"
                                class="w-full sm:w-auto text-slate-300 hover:text-white px-8 py-4 font-semibold flex items-center justify-center gap-2">
                                Check Eligibility

                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Who This Is For Section -->
        <div id="who-this-is-for" class="py-20 bg-slate-50">

            <div class="max-w-7xl mx-auto px-4">

                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">
                        Who This Is For
                    </h2>

                    <p class="text-slate-600 max-w-2xl mx-auto">
                        If you are ready to learn, explore, and grow,
                        this opportunity is designed for you.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                    @php
                        $targetAudience = [
                            [
                                'icon' => '🎓',
                                'title' => 'Students & Freshers',
                                'desc' =>
                                    'School (11–12), UG, PG students, and freshers looking for early real-world exposure.',
                            ],
                            [
                                'icon' => '🌱',
                                'title' => 'Curious Learners',
                                'desc' =>
                                    'Individuals eager to explore beyond academics and discover their true strengths.',
                            ],
                            [
                                'icon' => '🚀',
                                'title' => 'Aspiring Professionals',
                                'desc' =>
                                    'Those wanting to build a strong foundation and practical skills for future careers.',
                            ],
                            [
                                'icon' => '💡',
                                'title' => 'Creative & Driven',
                                'desc' =>
                                    'Interested in content, communication, marketing, or contributing fresh initiatives.',
                            ],
                        ];
                    @endphp

                    @foreach ($targetAudience as $item)
                        <div
                            class="bg-white p-8 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow">

                            <div class="text-4xl mb-4">{{ $item['icon'] }}</div>

                            <h3 class="text-xl font-bold text-slate-800 mb-2">
                                {{ $item['title'] }}
                            </h3>

                            <p class="text-slate-600 text-sm leading-relaxed">
                                {{ $item['desc'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Founder's Message -->
        <div id="founder-message" class="max-w-7xl mx-auto px-4 py-20">

            <div
                class="bg-white rounded-3xl p-8 md:p-12 flex flex-col md:flex-row items-center gap-12 border border-slate-200 shadow-sm">

                <div class="w-full md:w-1/3">
                    <div class="relative">

                        <div class="absolute -inset-4 bg-blue-100 rounded-full blur-2xl opacity-50"></div>

                        <img src="{{ asset('/assets/images/services/about_img3.png') }}"
                            class="relative rounded-2xl shadow-xl w-full object-cover border-4 border-white"
                            alt="Shyam Verma">
                    </div>
                </div>

                <div class="w-full md:w-2/3">

                    <h2 class="text-3xl font-bold text-slate-800 mb-6">
                        Founder’s Message
                    </h2>

                    <div class="space-y-4 text-slate-600 italic text-lg leading-relaxed">
                        <p>
                            "At Pathfinder, an internship is about discovering yourself while
                            contributing to something meaningful. Every experience here is
                            designed to help you build clarity, confidence, and capability."
                        </p>
                    </div>

                    <div class="mt-8">
                        <h4 class="font-bold text-slate-900 text-xl">
                            - Shyam Verma
                        </h4>

                        <p class="text-blue-600 font-medium text-sm">
                            Founder Director, PATHFINDER
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why Join Pathfinder -->
        <div class="bg-slate-900 py-20 text-white">

            <div class="max-w-7xl mx-auto px-4">

                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">
                        Why Join Pathfinder as an Intern?
                    </h2>

                    <p class="text-slate-400">
                        Be part of a growing vision in career guidance.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

                    <div class="space-y-8">

                        <div class="flex gap-4">
                            <div class="text-blue-400 text-2xl">🌱</div>

                            <div>
                                <h3 class="text-xl font-bold mb-2">
                                    Be Part of Something Meaningful
                                </h3>

                                <p class="text-slate-400">
                                    Contributing to a mission that helps students make
                                    better career decisions.
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="text-blue-400 text-2xl">💡</div>

                            <div>
                                <h3 class="text-xl font-bold mb-2">
                                    Growth-Driven Environment
                                </h3>

                                <p class="text-slate-400">
                                    We encourage curiosity, initiative, and independent thinking.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-8">

                        <div class="flex gap-4">
                            <div class="text-blue-400 text-2xl">🔥</div>

                            <div>
                                <h3 class="text-xl font-bold mb-2">
                                    Potential into Capability
                                </h3>

                                <p class="text-slate-400">
                                    Transition from Thinking to Doing.
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="text-blue-400 text-2xl">🚀</div>

                            <div>
                                <h3 class="text-xl font-bold mb-2">
                                    Build a Foundation Early
                                </h3>

                                <p class="text-slate-400">
                                    Starting early gives you an edge.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Growth -->
        <div class="bg-white py-20">

            <div class="max-w-7xl mx-auto px-4">

                <div
                    class="bg-blue-600 rounded-3xl p-8 md:p-16 text-white flex flex-col md:flex-row items-center justify-between gap-10">

                    <div class="md:w-1/2">

                        <h2 class="text-3xl font-bold mb-6">
                            🏆 Growth & Opportunities
                        </h2>

                        <p class="text-blue-100 mb-8">
                            We value long-term relationships.
                        </p>

                        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                            <li class="flex items-center gap-2">✅ Extended Roles</li>
                            <li class="flex items-center gap-2">✅ Mentorship</li>
                            <li class="flex items-center gap-2">✅ Pre-placement Offers</li>
                            <li class="flex items-center gap-2">✅ Long-term Association</li>

                        </ul>
                    </div>

                    <div class="md:w-1/3 text-center">

                        <div class="inline-block p-6 bg-blue-500 rounded-2xl border border-blue-400">

                            <p class="text-sm font-medium mb-1">
                                Ready to explore?
                            </p>

                            <p class="text-2xl font-bold">
                                Join the Ecosystem
                            </p>

                            <!-- OPEN MODAL BUTTON -->
                            <button @click="openModal = true"
                                class="mt-5 bg-white text-blue-600 px-6 py-3 rounded-xl font-bold hover:bg-slate-100 transition">
                                Apply Now
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL -->
        <div x-show="openModal" x-transition
            class="fixed inset-0 z-50 flex items-center justify-center bg-black/70 p-4" style="display: none;">

            <!-- Modal Box -->
            <div @click.away="openModal = false"
                class="bg-white w-full max-w-5xl max-h-[90vh] overflow-hidden rounded-3xl shadow-2xl relative">

                <!-- CLOSE -->
                <button @click="openModal = false"
                    class="absolute top-4 right-4 bg-slate-100 hover:bg-slate-200 w-10 h-10 rounded-full flex items-center justify-center text-lg font-bold">
                    ✕
                </button>

                <!-- HEADER -->
                <div class="bg-slate-900 p-8 text-center text-white rounded-t-3xl">

                    <h2 class="text-3xl font-bold">
                        Internship Application Form
                    </h2>

                    <p class="mt-2 text-slate-400">
                        If you are eager to grow, join us and take your first step.
                    </p>
                </div>

                <!-- FORM -->
                <div class="max-h-[75vh] overflow-y-auto">
                    @if (session('success'))
                        <div class="bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded-xl mb-6">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('join.intern.apply') }}" method="POST" enctype="multipart/form-data"
                        class="p-8 md:p-12 space-y-10">
                        @csrf

                        <!-- Section 1: Basic Details -->
                        <div>
                            <h3
                                class="text-lg font-bold text-slate-800 border-l-4 border-blue-600 pl-3 mb-6 uppercase tracking-wider">
                                01. Basic Details</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2">Full Name</label>
                                    <input type="text" name="name"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none"
                                        required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2">Email Address</label>
                                    <input type="email" name="email"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none"
                                        required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2">Phone Number
                                        (WhatsApp)</label>
                                    <input type="tel" name="phone"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none"
                                        required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2">City</label>
                                    <input type="text" name="city"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none"
                                        required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2">Current Status</label>
                                    <select name="status"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none">
                                        <option>Class 11–12</option>
                                        <option>Undergraduate</option>
                                        <option>Postgraduate</option>
                                        <option>Fresher</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2">College / School
                                        Name</label>
                                    <input type="text" name="institution"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none">
                                </div>
                            </div>
                        </div>

                        <!-- Section 2: Commitment -->
                        <div class="pt-6 border-t border-slate-100">
                            <h3
                                class="text-lg font-bold text-slate-800 border-l-4 border-blue-600 pl-3 mb-6 uppercase tracking-wider">
                                02. Availability & Commitment</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2">Duration</label>
                                    <select name="duration"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 outline-none">
                                        <option>1 month</option>
                                        <option>2 months</option>
                                        <option>3 months</option>
                                        <option>More</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2">Availability /
                                        Day</label>
                                    <select name="availability"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 outline-none">
                                        <option>1–2 hours</option>
                                        <option>2–4 hours</option>
                                        <option>4+ hours</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2">Preferred Mode</label>
                                    <select name="mode"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 outline-none">
                                        <option>Online</option>
                                        <option>Offline</option>
                                        <option>Hybrid</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Section 3: Interests -->
                        <div class="pt-6 border-t border-slate-100">
                            <h3
                                class="text-lg font-bold text-slate-800 border-l-4 border-blue-600 pl-3 mb-6 uppercase tracking-wider">
                                03. Area of Interest</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                @foreach (['Content Creation (Design, Video)', 'Social Media Management', 'Marketing & Outreach', 'Event Management', 'Career Counselling Support', 'Research & Analysis'] as $interest)
                                    <label
                                        class="flex items-center space-x-3 p-4 border border-slate-100 rounded-xl hover:bg-blue-50 cursor-pointer transition-colors">
                                        <input type="checkbox" name="interests[]" value="{{ $interest }}"
                                            class="w-5 h-5 text-blue-600 rounded">
                                        <span class="text-slate-700 text-sm font-medium">{{ $interest }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <!-- Section 4: Skills & Exposure -->
                        <div class="pt-6 border-t border-slate-100">
                            <h3
                                class="text-lg font-bold text-slate-800 border-l-4 border-blue-600 pl-3 mb-6 uppercase tracking-wider">
                                04. Skills & Exposure</h3>
                            <p class="text-sm text-slate-500 mb-4 font-medium">Which of the following skills do you
                                have?
                            </p>
                            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
                                @foreach (['Canva', 'CorelDraw', 'Illustrator', 'Photoshop', 'Video editing', 'Writing / Content', 'Social media handling', 'Digital Marketing', 'Google Ads', 'Communication', 'Public speaking', 'Research & analysis'] as $skill)
                                    <label
                                        class="flex items-center space-x-2 p-3 border border-slate-100 rounded-lg hover:border-blue-200 cursor-pointer group">
                                        <input type="checkbox" name="skills[]" value="{{ $skill }}"
                                            class="w-4 h-4 text-blue-600 rounded">
                                        <span
                                            class="text-slate-600 text-xs font-semibold group-hover:text-blue-600 transition-colors">{{ $skill }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <!-- Section 5: Short Answer (Most Important) -->
                        <div class="pt-6 border-t border-slate-100 space-y-6">
                            <h3
                                class="text-lg font-bold text-slate-800 border-l-4 border-blue-600 pl-3 mb-6 uppercase tracking-wider">
                                05. Short Answer (Most Important)</h3>

                            <div class="grid grid-cols-1 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2">1. Why do you want to
                                        join
                                        Pathfinder as an intern?</label>
                                    <textarea name="why_join" rows="3"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-blue-500"
                                        placeholder="Your answer..."></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2">2. Which role excites
                                        you
                                        the most and why?</label>
                                    <textarea name="role_excitement" rows="3"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-blue-500"
                                        placeholder="Your answer..."></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2">3. Tell us about any
                                        project, activity, or experience you have done (if any).</label>
                                    <textarea name="experience_details" rows="3"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-blue-500"
                                        placeholder="Your answer..."></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2">4. What do you expect
                                        to
                                        learn from this internship?</label>
                                    <textarea name="learning_expectation" rows="3"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-blue-500"
                                        placeholder="Your answer..."></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Section 6: Personality & Work Style -->
                        <div class="pt-6 border-t border-slate-100 space-y-8">
                            <h3
                                class="text-lg font-bold text-slate-800 border-l-4 border-blue-600 pl-3 mb-6 uppercase tracking-wider">
                                06. Personality & Work Style</h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div>
                                    <p class="text-sm font-bold text-slate-700 mb-4">Do you prefer:</p>
                                    <div class="space-y-3">
                                        @foreach (['Creative work', 'Analytical work', 'People interaction'] as $pref)
                                            <label class="flex items-center space-x-3">
                                                <input type="checkbox" name="preferences[]"
                                                    value="{{ $pref }}"
                                                    class="w-5 h-5 text-blue-600 rounded">
                                                <span class="text-slate-600 text-sm">{{ $pref }}</span>
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-slate-700 mb-4">How would you describe yourself?
                                    </p>
                                    <div class="grid grid-cols-2 gap-3">
                                        @foreach (['Creative', 'Organized', 'Leader', 'Team player', 'Fast learner'] as $trait)
                                            <label class="flex items-center space-x-3">
                                                <input type="checkbox" name="traits[]" value="{{ $trait }}"
                                                    class="w-5 h-5 text-blue-600 rounded">
                                                <span class="text-slate-600 text-sm">{{ $trait }}</span>
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Section 7: Resume -->
                        <div class="pt-6 border-t border-slate-100">
                            <h3
                                class="text-lg font-bold text-slate-800 border-l-4 border-blue-600 pl-3 mb-6 uppercase tracking-wider">
                                07. Links & Resume</h3>
                            <div class="space-y-4">
                                <input type="file" name="resume"
                                    class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                                <input type="url" name="portfolio"
                                    placeholder="Portfolio Link (G-Drive / YouTube / LinkedIn)"
                                    class="w-full px-4 py-3 rounded-xl border border-slate-200 outline-none">
                            </div>
                        </div>

                        <div class="flex items-start space-x-3 bg-amber-50 p-4 rounded-xl border border-amber-100">
                            <input type="checkbox" required class="mt-1 w-5 h-5 text-blue-600 rounded">
                            <p class="text-sm text-amber-800 font-medium italic">I confirm that I am genuinely
                                interested
                                in learning and contributing during this internship.</p>
                        </div>

                        <button type="submit"
                            class="w-full bg-blue-600 text-white py-5 rounded-2xl font-extrabold text-xl hover:bg-blue-700 transition-all shadow-xl shadow-blue-500/30">
                            Submit Application 🚀
                        </button>
                        </form>

                </div>
            </div>
        </div>

    </div>

</x-layouts.public>
