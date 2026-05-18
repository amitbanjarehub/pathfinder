<x-layouts.public title="Career Pathways | Pathfinder">
    <div x-data="{ isCareerModalOpen: false, activeStage: '', qualificationValue: '' }" class="bg-white">

        <!-- Header Section -->
        <section class="py-16 bg-slate-50 text-center">
            <div class="max-w-4xl mx-auto px-4">
                <h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 mb-4">
                    PATHWAYS <span class="text-blue-600">(Career Stages)</span>
                </h1>
                <p class="text-lg text-slate-600">Discover the right path at every stage of your academic journey.</p>
            </div>
        </section>

        <!-- 1. Career Orientation (Class 7-8) -->
        <section class="py-20 border-b border-slate-100">
            <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1 space-y-6">
                    <span class="text-blue-600 font-bold tracking-widest uppercase text-sm italic">Stage 01</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 leading-tight">Career Orientation <br><span
                            class="text-slate-500 text-2xl">(Class 7 – 8)</span></h2>
                    <p class="text-slate-600 italic">Early Clarity for the Right Start. Help your child understand
                        strengths before making future choices.</p>

                    <div class="grid md:grid-cols-2 gap-6 bg-slate-50 p-6 rounded-2xl">
                        <div>
                            <h4 class="font-bold text-red-500 mb-2 text-sm">😟 Areas of Concern</h4>
                            <ul class="text-xs text-slate-500 space-y-1">
                                <li>• Many interests, no clarity</li>
                                <li>• Decisions based on marks</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-bold text-blue-600 mb-2 text-sm">✅ How We Help</h4>
                            <ul class="text-xs text-slate-500 space-y-1">
                                <li>• Psychometric assessment</li>
                                <li>• Strengths mapping</li>
                            </ul>
                        </div>
                    </div>

                    <button
                        @click="isCareerModalOpen = true; activeStage = 'Career Orientation (7-8)'; qualificationValue = 'Class 7-8'"class="bg-blue-600 text-white px-8 py-3 rounded-full font-bold shadow-lg hover:bg-blue-700 transition-all">Give
                        Your Child Early Career Clarity</button>
                </div>
                <div class="order-1 lg:order-2">
                    <img src="{{ asset('/assets/images/services/career_img1.png') }}"
                        class="w-full h-auto rounded-3xl shadow-2xl">
                </div>
            </div>
        </section>

        <!-- 2. Stream Selection (Class 9-10) - Reversed Layout -->
        <section class="py-20 bg-slate-50 border-b border-slate-100">
            <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-16 items-center">
                <div class="order-1">
                    <img src="{{ asset('/assets/images/services/career_img2.png') }}"
                        class="w-full h-auto rounded-3xl shadow-2xl">
                </div>
                <div class="order-2 space-y-6 text-right lg:text-left">
                    <span class="text-blue-600 font-bold tracking-widest uppercase text-sm italic">Stage 02</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 leading-tight">Stream Selection <br><span
                            class="text-slate-500 text-2xl">(Class 9 – 10)</span></h2>
                    <p class="text-slate-600 italic">Choose the Right Stream with Confidence. Move beyond opinions -
                        choose based on real strengths.</p>

                    <div class="bg-white p-6 rounded-2xl shadow-sm inline-block text-left">
                        <h4 class="font-bold text-slate-900 mb-2 text-sm">🎯 Recommended Module: <span
                                class="text-blue-600 italic">Direction Module</span></h4>
                        <p class="text-xs text-slate-500">Includes Aptitude + Psychometric testing & Expert counselling.
                        </p>
                    </div>

                    <div class="flex justify-end lg:justify-start">
                        <button
                            @click="isCareerModalOpen = true; activeStage = 'Stream Selection (9-10)'; qualificationValue = 'Class 9-10'"
                            class="bg-slate-900 text-white px-8 py-3 rounded-full font-bold shadow-lg hover:bg-blue-600 transition-all">Make
                            the Right Stream Choice</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Career Planning after 12th -->
        <section class="py-20 border-b border-slate-100">
            <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1 space-y-6">
                    <span class="text-blue-600 font-bold tracking-widest uppercase text-sm italic">Stage 03</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 leading-tight">Career Planning <br><span
                            class="text-slate-500 text-2xl">after 12th (Class 11 – 12)</span></h2>
                    <p class="text-slate-600 italic">Explore the right courses, colleges, and entrance exams based on
                        your strengths - not confusion.</p>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="border-l-4 border-blue-600 pl-4">
                            <p class="text-xs font-bold text-slate-900 italic">WHAT YOU GET</p>
                            <p class="text-xs text-slate-500 mt-1">Course & College Guidance, Entrance exam clarity.</p>
                        </div>
                    </div>

                    <button
                        @click="isCareerModalOpen = true; activeStage = 'Career Planning (11-12)'; qualificationValue = 'Class 11-12'"
                        class="bg-blue-600 text-white px-8 py-3 rounded-full font-bold shadow-lg hover:bg-blue-700 transition-all">Get
                        Clarity on Your Career Path</button>
                </div>
                <div class="order-1 lg:order-2">
                    <img src="{{ asset('/assets/images/services/career_img3.png') }}"
                        class="w-full h-auto rounded-3xl shadow-2xl">
                </div>
            </div>
        </section>

        <!-- 4. Profile Building -->
        <section class="py-20 bg-slate-900 text-white rounded-t-[3rem]">
            <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-16 items-center">
                <div class="order-1">
                    <img src="{{ asset('/assets/images/services/career_img4.png') }}"
                        class="w-full h-auto rounded-3xl shadow-2xl opacity-90">
                </div>
                <div class="order-2 space-y-6">
                    <span class="text-blue-400 font-bold tracking-widest uppercase text-sm italic">Stage 04</span>
                    <h2 class="text-3xl md:text-4xl font-bold leading-tight italic">Profile Building & Mentoring</h2>
                    <p class="text-slate-300">Go beyond academics—develop the right skills and experiences for top
                        college selection.</p>

                    <div class="bg-slate-800 p-6 rounded-2xl border border-slate-700">
                        <p class="text-sm italic"><span class="text-blue-400 font-bold">✓</span> Continuous mentoring
                        </p>
                        <p class="text-sm italic mt-2"><span class="text-blue-400 font-bold">✓</span> Activity & skill
                            recommendations</p>
                    </div>

                    <button
                        @click="isCareerModalOpen = true; activeStage = 'Profile Building & Mentoring'; qualificationValue = 'Graduate'"
                        class="bg-white text-slate-900 px-8 py-3 rounded-full font-bold shadow-lg hover:bg-blue-400 transition-all">Start
                        Building Your Career Profile</button>
                </div>
            </div>
        </section>

        <!-- SHARED CAREER MODAL -->
        <div x-show="isCareerModalOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" class="fixed inset-0 z-50 overflow-y-auto" x-cloak>

            <div class="fixed inset-0 bg-slate-900/80 backdrop-blur-sm" @click="isCareerModalOpen = false"></div>

            <div class="relative min-h-screen flex items-center justify-center p-4">
                <div x-show="isCareerModalOpen" x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 scale-95 translate-y-10"
                    class="relative bg-white w-full max-w-lg rounded-[2rem] shadow-2xl p-8 md:p-10">

                    <button @click="isCareerModalOpen = false"
                        class="absolute top-6 right-6 text-slate-400 hover:text-slate-900">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>

                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-slate-900">Get Started</h3>
                        <p class="text-blue-600 text-sm font-semibold mt-1" x-text="'Interest in: ' + activeStage"></p>
                    </div>

                    @if (session('success'))
                        <div class="bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded-xl mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('career.submit') }}" method="POST" class="space-y-4">
                        @csrf
                        <input type="hidden" name="stage" x-model="activeStage">
                        <input type="hidden" name="qualification" x-model="qualificationValue">
                        <input type="text" name="name" placeholder="Student/Parent Name" required
                            class="w-full px-5 py-3.5 rounded-xl bg-slate-50 border-none focus:ring-2 focus:ring-blue-500 outline-none">
                        <input type="tel" name="phone" placeholder="Phone Number" required
                            class="w-full px-5 py-3.5 rounded-xl bg-slate-50 border-none focus:ring-2 focus:ring-blue-500 outline-none">
                        <input type="email" name="email" placeholder="Email Address" required
                            class="w-full px-5 py-3.5 rounded-xl bg-slate-50 border-none focus:ring-2 focus:ring-blue-500 outline-none">
                        <textarea rows="3" name="message" placeholder="Any specific questions?"
                            class="w-full px-5 py-3.5 rounded-xl bg-slate-50 border-none focus:ring-2 focus:ring-blue-500 outline-none"></textarea>

                        <button type="submit"
                            class="w-full bg-blue-600 text-white font-bold py-4 rounded-xl shadow-lg hover:bg-blue-700 transition-all transform active:scale-95">
                            Submit Request
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</x-layouts.public>
