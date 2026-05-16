<x-layouts.public title="Career Assessment - PATH finder">
    <div class="bg-slate-50 min-h-screen font-sans antialiased selection:bg-accent selection:text-white">

        {{-- <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-12">
            <div class="bg-gradient-to-br from-slate-900 to-indigo-950 rounded-3xl overflow-hidden shadow-2xl relative border border-slate-800">
                <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px]"></div>
                
                <div class="flex flex-col lg:flex-row items-center justify-between p-8 sm:p-12 lg:p-16 gap-12 relative z-10">
                    <div class="flex flex-col max-w-2xl text-center lg:text-left">
                        <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold bg-amber-500/10 text-amber-400 border border-amber-500/20 mb-6 w-max mx-auto lg:mx-0 uppercase tracking-widest">
                            ✨ Get Started
                        </span>
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight mb-4 leading-tight">
                            Let science reveal your <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 to-amber-200">true calling!</span>
                        </h1>
                        <p class="text-lg sm:text-xl text-slate-300 font-medium max-w-xl">
                            Discover Your Dream Career in 3 Steps using scientific data, deep psychometrics, and tailored guidance.
                        </p>
                        <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                            <a href="#signup-section" class="px-8 py-4 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-bold rounded-xl shadow-lg shadow-amber-500/20 hover:shadow-amber-600/30 transition-all duration-300 transform hover:-translate-y-0.5 text-center text-lg">
                                Start Your Assessment →
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 flex justify-center">
                        <div class="relative group">
                            <div class="absolute -inset-1 bg-gradient-to-r from-amber-500 to-indigo-500 rounded-2xl blur opacity-25 group-hover:opacity-40 transition duration-1000"></div>
                            <img src="{{ asset('/assets/images/services/img11.jpg') }}" alt="Diverse Professionals Showcase"
                                class="rounded-2xl shadow-2xl w-full max-w-xl object-cover transform hover:scale-[1.01] transition-transform duration-500 relative bg-slate-900 border border-slate-700">
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-14 select-none bg-white">
            <div class="relative overflow-hidden bg-white px-6 py-12 sm:px-12 sm:py-16 lg:px-16 lg:py-16 text-center">

                <div class="text-red-600 text-3xl sm:text-4xl font-black tracking-wide uppercase mb-4">
                    GET STARTED
                </div>

                <p class="italic text-slate-800 text-lg sm:text-xl font-medium mb-3">
                    Let science reveal your true calling !
                </p>

                <h1
                    class="text-4xl sm:text-5xl xl:text-5xl font-extrabold leading-tight text-red-600 max-w-3xl mx-auto mb-8">
                    Discover Your Dream Career <br>
                    <span>in 3 Steps</span>
                </h1>

                <div class="flex justify-center mb-16">
                    <div class="w-full max-w-4xl">
                        <img src="{{ asset('/assets/images/services/img11.jpg') }}" alt="Career Guidance Professionals"
                            class="w-full h-auto object-contain max-h-[350px]">
                    </div>
                </div>
            </div>
        </div>



        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 bg-white">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">

                <div class="flex flex-col items-center text-center group w-full max-w-sm mx-auto">
                    <span
                        class="px-6 py-2 rounded-full bg-amber-400 text-slate-900 font-extrabold text-lg tracking-wider mb-4 shadow-sm">
                        STEP 1
                    </span>
                    <h3 class="text-xl font-black text-slate-900 mb-3">Sign Up</h3>
                    <p class="text-slate-600 text-sm leading-relaxed max-w-xs mb-6 min-h-[40px]">
                        Create your account in seconds to begin discovering the Career Path that suits you best.
                    </p>
                    <div
                        class="h-44 md:h-64 flex items-center justify-center p-2 w-full transition-transform duration-300 group-hover:scale-105">
                        <img src="{{ asset('/assets/images/services/img12.png') }}" alt="Sign Up Illustration"
                            class="w-full h-full object-contain">
                    </div>
                </div>

                <div class="flex flex-col items-center text-center group w-full max-w-sm mx-auto">
                    <span
                        class="px-6 py-2 rounded-full bg-orange-400 text-slate-900 font-extrabold text-lg tracking-wider mb-4 shadow-sm">
                        STEP 2
                    </span>
                    <h3 class="text-xl font-black text-slate-900 mb-3">Take the Test</h3>
                    <p class="text-slate-600 text-sm leading-relaxed max-w-xs mb-6 min-h-[40px]">
                        Be yourself and answer honestly to find out your Right Career Path matching your personality
                        type.
                    </p>
                    <div
                        class="h-44 md:h-64 flex items-center justify-center p-2 w-full transition-transform duration-300 group-hover:scale-105">
                        <img src="{{ asset('/assets/images/services/img14.png') }}" alt="Take the Test Illustration"
                            class="w-full h-full object-contain">
                    </div>
                </div>

                <div class="flex flex-col items-center text-center group w-full max-w-sm mx-auto">
                    <span
                        class="px-6 py-2 rounded-full bg-[#5cb85c] text-white font-extrabold text-lg tracking-wider mb-4 shadow-sm">
                        STEP 3
                    </span>
                    <h3 class="text-xl font-black text-slate-900 mb-3">Step into Success</h3>
                    <p class="text-slate-600 text-sm leading-relaxed max-w-xs mb-6 min-h-[40px]">
                        Receive your personalized Career insights and guidance to confidently move towards a future that
                        fits you best.
                    </p>
                    <div
                        class="h-44 md:h-64 flex items-center justify-center p-2 w-full transition-transform duration-300 group-hover:scale-105">
                        <img src="{{ asset('/assets/images/services/img13.png') }}" alt="Success Illustration"
                            class="w-full h-full object-contain">
                    </div>
                </div>

            </div>

            <!-- SIGNUP BUTTON -->
            <div class="mt-16 flex justify-center">
                <button id="openSignupModal"
                    class="inline-flex items-center justify-center px-10 py-5 text-xl sm:text-2xl font-black tracking-wide text-white bg-red-600 rounded-2xl shadow-xl shadow-red-600/20 hover:bg-red-700 hover:shadow-red-700/40 hover:-translate-y-1 transition-all duration-300 transform w-full max-w-md text-center">

                    Sign Up

                    <svg class="w-6 h-6 ml-3 transition-transform duration-300 group-hover:translate-x-1" fill="none"
                        stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>

                    </svg>
                </button>
            </div>



            <!-- SIGNUP MODAL -->
            <!-- SIGNUP MODAL -->
            <div id="signupModal"
                class="fixed inset-0 z-50 hidden items-center justify-center bg-black/70 backdrop-blur-sm p-3 sm:p-0 overflow-y-auto">

                <!-- Modal Box -->
                <div
                    class="relative w-full max-w-md sm:max-w-lg lg:max-w-xl bg-white rounded-2xl sm:rounded-3xl shadow-2xl overflow-hidden animate-fadeIn my-6">

                    <!-- Close Button -->
                    <button id="closeSignupModal"
                        class="absolute top-3 right-3 sm:top-4 sm:right-4 w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-700 flex items-center justify-center transition text-sm sm:text-base z-10">
                        ✕
                    </button>

                    <!-- Header -->
                    <div
                        class="bg-gradient-to-r from-accent to-indigo-900 px-5 py-3 sm:px-8 sm:py-3 text-center text-white">

                        <h2 class="text-lg sm:text-xl font-bold leading-tight">
                            Sign Up to PATH finder
                        </h2>

                        <p class="text-indigo-200 text-xs sm:text-sm mt-2 max-w-md mx-auto">
                            Unlock precise career scientific evaluations tailored for you
                        </p>

                    </div>

                    <!-- FORM -->
                    <form id="signupForm" class="p-5 sm:p-0 md:p-8 space-y-2.5">

                        <!-- Full Name -->
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">
                                Full Name
                                <span class="text-red-500">*</span>
                            </label>

                            <input type="text" id="fullName" required placeholder="Enter full name"
                                class="w-full px-4 py-3 text-sm sm:text-base bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-accent focus:border-transparent transition-all outline-none text-slate-800">
                        </div>

                        <!-- Mobile -->
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">
                                WhatsApp Number
                                <span class="text-red-500">*</span>
                            </label>

                            <div
                                class="flex rounded-xl shadow-sm bg-slate-50 border border-slate-200 overflow-hidden focus-within:ring-2 focus-within:ring-accent focus-within:bg-white transition-all">

                                <span
                                    class="inline-flex items-center px-3 sm:px-4 bg-slate-100 border-r border-slate-200 text-slate-600 font-medium text-sm whitespace-nowrap">
                                    🇮🇳 +91
                                </span>

                                <input type="tel" id="mobile" required placeholder="Enter mobile number"
                                    class="w-full px-4 py-3 text-sm sm:text-base bg-transparent border-none outline-none focus:ring-0 text-slate-800">
                            </div>
                        </div>

                        <!-- Status -->
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">
                                Present Status
                                <span class="text-red-500">*</span>
                            </label>

                            <select id="status" required
                                class="w-full px-4 py-3 text-sm sm:text-base bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-accent focus:border-transparent transition-all outline-none text-slate-800 font-medium">

                                <option value="" disabled selected>
                                    Select your current profile status
                                </option>

                                <option value="7th-8th">
                                    7th – 8th Standard
                                </option>

                                <option value="9th-10th">
                                    9th – 10th Standard
                                </option>

                                <option value="11th-12th">
                                    11th – 12th Standard
                                </option>

                                <option value="ug-pg">
                                    UG / PG Student
                                </option>

                                <option value="working-professional">
                                    Working Professional
                                </option>

                            </select>
                        </div>

                        <!-- Submit -->
                        <button type="submit"
                            class="w-full py-3.5 sm:py-4 bg-accent hover:bg-indigo-700 text-white font-bold text-sm sm:text-base lg:text-lg rounded-xl shadow-lg shadow-accent/20 hover:shadow-accent/30 transition-all duration-300 transform hover:-translate-y-0.5 uppercase tracking-wide">

                            Continue Setup

                        </button>

                        <!-- Divider -->
                        <div class="relative flex py-1 items-center justify-center">

                            <div class="flex-grow border-t border-slate-200"></div>

                            <span
                                class="flex-shrink mx-4 text-slate-400 text-[11px] uppercase font-bold tracking-wider">
                                or
                            </span>

                            <div class="flex-grow border-t border-slate-200"></div>

                        </div>

                        <!-- Google -->
                        <button type="button"
                            class="w-full py-3 px-4 border border-slate-200 rounded-xl bg-white hover:bg-slate-50 text-slate-700 font-semibold text-sm sm:text-base transition-all duration-200 flex items-center justify-center gap-3 shadow-sm">

                            <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24">
                                <path fill="#EA4335"
                                    d="M12 5.04c1.64 0 3.12.56 4.28 1.67l3.2-3.2C17.52 1.58 14.96 1 12 1 7.35 1 3.39 3.65 1.44 7.5l3.8 2.94C6.13 7.21 8.82 5.04 12 5.04z" />
                                <path fill="#4285F4"
                                    d="M23.49 12.27c0-.81-.07-1.59-.2-2.36H12v4.47h6.44c-.28 1.47-1.11 2.71-2.36 3.54l3.66 2.84c2.14-1.98 3.39-4.89 3.39-8.49z" />
                                <path fill="#FBBC05"
                                    d="M5.24 14.56c-.23-.69-.36-1.43-.36-2.2s.13-1.51.36-2.2L1.44 7.22C.52 9.07 0 11.13 0 13.3c0 2.17.52 4.23 1.44 6.08l3.8-2.82z" />
                                <path fill="#34A853"
                                    d="M12 23c3.24 0 5.97-1.08 7.96-2.91l-3.66-2.84c-1.01.68-2.31 1.09-4.3 1.09-3.18 0-5.87-2.17-6.83-5.4L1.37 15.76C3.31 19.59 7.27 22 12 23z" />
                            </svg>

                            <span class="text-center leading-snug">
                                Continue with Google
                            </span>

                        </button>

                    </form>

                </div>

            </div>
        </div>





        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <h2 class="text-3xl font-extrabold text-slate-900">Choose the Depth of Guidance Plan</h2>
                <p class="text-slate-600 mt-2">Select the roadmap strategy matching your professional expectations</p>
            </div>

            <div class="bg-white rounded-3xl shadow-xl border border-slate-100 overflow-hidden max-w-5xl mx-auto">
                <div class="overflow-x-auto">
                    <table class="w-full table-fixed min-w-[768px]">
                        <thead>
                            <tr class="bg-slate-900 text-white">
                                <th class="w-2/5 p-6 text-left text-base font-bold tracking-wider">Features Matrix</th>
                                <th class="w-1/5 p-6 text-center text-sm font-bold tracking-wider bg-slate-800/50">
                                    DISCOVERY</th>
                                <th
                                    class="w-1/5 p-6 text-center text-sm font-bold tracking-wider bg-accent border-x border-accent relative">
                                    <span
                                        class="absolute -top-1 left-1/2 transform -translate-x-1/2 bg-amber-500 text-slate-950 font-black text-[10px] uppercase px-3 py-0.5 rounded-full tracking-widest whitespace-nowrap shadow-md">Best
                                        Value Plan</span>
                                    DIRECTION
                                </th>
                                <th class="w-1/5 p-6 text-center text-sm font-bold tracking-wider bg-slate-800/50">
                                    DISTINCTION</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 font-medium text-slate-700 text-sm">
                            <tr class="hover:bg-slate-50/70 transition-colors">
                                <td class="p-5 pl-6 font-semibold text-slate-900">Psychometric Test Evaluation</td>
                                <td class="p-5 text-center text-emerald-500 font-bold text-lg">✓</td>
                                <td
                                    class="p-5 text-center text-emerald-500 font-bold text-lg bg-indigo-50/30 border-x border-slate-100">
                                    ✓</td>
                                <td class="p-5 text-center text-emerald-500 font-bold text-lg">✓</td>
                            </tr>
                            <tr class="hover:bg-slate-50/70 transition-colors">
                                <td class="p-5 pl-6 font-semibold text-slate-900">Detailed Analytics PDF Report</td>
                                <td class="p-5 text-center text-emerald-500 font-bold text-lg">✓</td>
                                <td
                                    class="p-5 text-center text-emerald-500 font-bold text-lg bg-indigo-50/30 border-x border-slate-100">
                                    ✓</td>
                                <td class="p-5 text-center text-emerald-500 font-bold text-lg">✓</td>
                            </tr>
                            <tr class="hover:bg-slate-50/70 transition-colors">
                                <td class="p-5 pl-6 font-semibold text-slate-900">Expert Consultant Report
                                    Interpretation</td>
                                <td class="p-5 text-center text-rose-400 font-bold text-lg">✕</td>
                                <td
                                    class="p-5 text-center text-emerald-500 font-bold text-lg bg-indigo-50/30 border-x border-slate-100">
                                    ✓</td>
                                <td class="p-5 text-center text-emerald-500 font-bold text-lg">✓</td>
                            </tr>
                            <tr class="hover:bg-slate-50/70 transition-colors">
                                <td class="p-5 pl-6 font-semibold text-slate-900">One-to-One Counsellor Live
                                    Interaction</td>
                                <td class="p-5 text-center text-rose-400 font-bold text-lg">✕</td>
                                <td
                                    class="p-5 text-center text-emerald-500 font-bold text-lg bg-indigo-50/30 border-x border-slate-100">
                                    ✓</td>
                                <td class="p-5 text-center text-emerald-500 font-bold text-lg">✓</td>
                            </tr>
                            <tr class="hover:bg-slate-50/70 transition-colors">
                                <td class="p-5 pl-6 font-semibold text-slate-900">Case History Structural Discussion
                                </td>
                                <td class="p-5 text-center text-rose-400 font-bold text-lg">✕</td>
                                <td
                                    class="p-5 text-center text-emerald-500 font-bold text-lg bg-indigo-50/30 border-x border-slate-100">
                                    ✓</td>
                                <td class="p-5 text-center text-emerald-500 font-bold text-lg">✓</td>
                            </tr>
                            <tr class="hover:bg-slate-50/70 transition-colors">
                                <td class="p-5 pl-6 font-semibold text-slate-900">Personalized Study Plan & Routine
                                    Matrix</td>
                                <td class="p-5 text-center text-rose-400 font-bold text-lg">✕</td>
                                <td
                                    class="p-5 text-center text-emerald-500 font-bold text-lg bg-indigo-50/30 border-x border-slate-100">
                                    ✓</td>
                                <td class="p-5 text-center text-emerald-500 font-bold text-lg">✓</td>
                            </tr>
                            <tr class="hover:bg-slate-50/70 transition-colors">
                                <td class="p-5 pl-6 font-semibold text-slate-900">Strategic Career Roadmap Creation
                                </td>
                                <td class="p-5 text-center text-rose-400 font-bold text-lg">✕</td>
                                <td
                                    class="p-5 text-center text-emerald-500 font-bold text-lg bg-indigo-50/30 border-x border-slate-100">
                                    ✓</td>
                                <td class="p-5 text-center text-emerald-500 font-bold text-lg">✓</td>
                            </tr>
                            <tr class="hover:bg-slate-50/70 transition-colors">
                                <td class="p-5 pl-6 font-semibold text-slate-900">Follow-Up Accountability Call (After
                                    21 Days)</td>
                                <td class="p-5 text-center text-rose-400 font-bold text-lg">✕</td>
                                <td
                                    class="p-5 text-center text-emerald-500 font-bold text-lg bg-indigo-50/30 border-x border-slate-100">
                                    ✓</td>
                                <td class="p-5 text-center text-emerald-500 font-bold text-lg">✓</td>
                            </tr>
                            <tr class="hover:bg-slate-50/70 transition-colors">
                                <td class="p-5 pl-6 font-semibold text-slate-900">Mode of Delivery Parameters</td>
                                <td class="p-5 text-center font-medium text-slate-600">Online Only</td>
                                <td
                                    class="p-5 text-center font-medium text-accent bg-indigo-50/30 border-x border-slate-100">
                                    Hybrid (Online/Offline)</td>
                                <td class="p-5 text-center font-medium text-slate-600">Hybrid (Online/Offline)</td>
                            </tr>
                            <tr class="hover:bg-slate-50/70 transition-colors">
                                <td class="p-5 pl-6 font-semibold text-slate-900">Monthly Mentoring & Profiling (6
                                    Months)</td>
                                <td class="p-5 text-center text-rose-400 font-bold text-lg">✕</td>
                                <td
                                    class="p-5 text-center text-rose-400 font-bold text-lg bg-indigo-50/30 border-x border-slate-100">
                                    ✕</td>
                                <td class="p-5 text-center text-emerald-500 font-bold text-lg">✓</td>
                            </tr>
                            <tr class="bg-slate-50">
                                <td class="p-6 pl-6 font-bold text-slate-900 text-base">Investment Fee</td>
                                <td class="p-6 text-center">
                                    <span class="block text-xl font-black text-slate-900">₹749</span>
                                    <button
                                        class="mt-3 px-4 py-2 bg-white border border-slate-200 hover:border-slate-400 text-slate-800 font-bold text-xs rounded-lg transition-all shadow-sm">Choose
                                        Discovery</button>
                                </td>
                                <td class="p-6 text-center bg-indigo-50/50 border-x border-slate-200">
                                    <span class="block text-2xl font-black text-accent">₹5,999</span>
                                    <button
                                        class="mt-3 px-5 py-2.5 bg-accent hover:bg-indigo-700 text-white font-bold text-xs rounded-lg transition-all shadow-md transform hover:-translate-y-0.5">Select
                                        Direction</button>
                                </td>
                                <td class="p-6 text-center">
                                    <span class="block text-xl font-black text-slate-900">₹17,999</span>
                                    <button
                                        class="mt-3 px-4 py-2 bg-white border border-slate-200 hover:border-slate-400 text-slate-800 font-bold text-xs rounded-lg transition-all shadow-sm">Choose
                                        Distinction</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mt-8 flex justify-center">
                <a href="tel:+918744987449"
                    class="inline-flex items-center gap-3 px-6 py-3 bg-white hover:bg-slate-50 text-slate-700 font-bold rounded-2xl shadow-md border border-slate-100 transition-all group">
                    <div
                        class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.72.59.59 0 00.74.24l.85-.17a1 1 0 011.23.63l1.17 3.51a1 1 0 01-.4 1.15l-1.3 1.04a11.042 11.042 0 005.51 5.51l1.04-1.3a1 1 0 011.15-.4l3.51 1.17a1 1 0 01.63 1.23l-.17.85a.59.59 0 00.24.74 1 1 0 01.72.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <span>Need immediate expert clarity? <span class="text-accent underline">Call us for any
                            help!</span></span>
                </a>
            </div>
        </div>



    </div>

    <!-- SCRIPT -->
    <!-- SCRIPT -->
    <script>
        const signupModal = document.getElementById('signupModal');
        const openSignupModal = document.getElementById('openSignupModal');
        const closeSignupModal = document.getElementById('closeSignupModal');
        const signupForm = document.getElementById('signupForm');

        // OPEN MODAL
        openSignupModal.addEventListener('click', () => {

            signupModal.classList.remove('hidden');
            signupModal.classList.add('flex');

            document.body.classList.add('overflow-hidden');

        });

        // CLOSE MODAL
        closeSignupModal.addEventListener('click', () => {

            signupModal.classList.add('hidden');
            signupModal.classList.remove('flex');

            document.body.classList.remove('overflow-hidden');

        });

        // CLOSE ON OUTSIDE CLICK
        signupModal.addEventListener('click', (e) => {

            if (e.target === signupModal) {

                signupModal.classList.add('hidden');
                signupModal.classList.remove('flex');

                document.body.classList.remove('overflow-hidden');

            }

        });

        // FORM SUBMIT
        signupForm.addEventListener('submit', async function(e) {

            e.preventDefault();

            // BUTTON DISABLE DURING REQUEST
            const submitBtn = signupForm.querySelector('button[type="submit"]');

            submitBtn.disabled = true;
            submitBtn.innerText = 'Please wait...';

            const formData = {

                name: document.getElementById('fullName').value.trim(),

                mobile_no: document.getElementById('mobile').value.trim(),

                qualification: document.getElementById('status').value,

            };

            try {

                const response = await fetch("{{ route('assessment.signup') }}", {

                    method: "POST",

                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },

                    body: JSON.stringify(formData)

                });

                const data = await response.json();

                if (response.ok && data.success) {

                    alert('User registered successfully!');

                    // RESET FORM
                    signupForm.reset();

                    // CLOSE MODAL
                    signupModal.classList.add('hidden');
                    signupModal.classList.remove('flex');

                    document.body.classList.remove('overflow-hidden');

                } else {

                    if (data.errors) {

                        // VALIDATION ERRORS
                        let errorMessages = '';

                        Object.values(data.errors).forEach(error => {

                            errorMessages += error[0] + '\n';

                        });

                        alert(errorMessages);

                    } else {

                        alert(data.message || 'Something went wrong!');

                    }

                }

            } catch (error) {

                console.error('Error:', error);

                alert('Server error!');

            } finally {

                // BUTTON ENABLE AGAIN
                submitBtn.disabled = false;
                submitBtn.innerText = 'Continue Setup';

            }

        });
    </script>



    <!-- OPTIONAL ANIMATION -->
    <style>
        @keyframes fadeIn {

            from {
                opacity: 0;
                transform: translateY(20px) scale(0.98);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }

        }

        .animate-fadeIn {
            animation: fadeIn 0.3s ease;
        }
    </style>
</x-layouts.public>
