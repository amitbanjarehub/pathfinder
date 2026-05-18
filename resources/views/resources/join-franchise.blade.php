<x-layouts.public title="Franchise Opportunity | Pathfinder">
    <div x-data="{ isFranchiseModalOpen: false }" class="bg-white">

        <!-- Hero Section -->
        <section class="relative bg-gradient-to-br from-slate-50 to-blue-50 py-16 lg:py-24 overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-12 items-center">
                <!-- Content Left -->
                <div class="order-2 lg:order-1 space-y-8" x-data="{ shown: false }" x-init="setTimeout(() => shown = true, 100)" x-show="shown"
                    x-transition:enter="transition ease-out duration-1000"
                    x-transition:enter-start="opacity-0 -translate-x-10">
                    <div
                        class="inline-flex items-center space-x-2 bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-bold tracking-wide uppercase">
                        <span class="relative flex h-2 w-2">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-600"></span>
                        </span>
                        <span>Business Opportunity</span>
                    </div>
                    <h1 class="text-4xl lg:text-6xl font-extrabold text-slate-900 leading-tight">
                        Join as <span class="text-blue-600">Franchisee Partner</span>
                    </h1>
                    <p class="text-xl text-slate-600 leading-relaxed max-w-xl">
                        Partner with us to bring structured career guidance and psychometric counselling to your region.
                        Combine purpose with entrepreneurship.
                    </p>
                    <button @click="isFranchiseModalOpen = true"
                        class="inline-block bg-slate-900 hover:bg-blue-600 text-white px-10 py-5 rounded-xl font-bold transition-all transform hover:scale-105 shadow-2xl">
                        Be a Pathfinder Franchise Partner 🚀
                    </button>
                </div>

                <!-- Image Right -->
                <div class="order-1 lg:order-2 relative" x-data="{ shown: false }" x-init="setTimeout(() => shown = true, 300)" x-show="shown"
                    x-transition:enter="transition ease-out duration-1000"
                    x-transition:enter-start="opacity-0 translate-x-10">
                    <div
                        class="absolute -z-10 -bottom-10 -left-10 w-64 h-64 bg-blue-200 rounded-full blur-3xl opacity-30">
                    </div>
                    <img src="{{ asset('/assets/images/services/franchise.png') }}" alt="Franchise Partnership"
                        class="w-full h-auto rounded-[2rem] shadow-2xl border-8 border-white">
                </div>
            </div>
        </section>

        <!-- Founder's Message -->
        <section class="py-24 bg-white relative">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex flex-col lg:flex-row items-center gap-16">
                    <div class="lg:w-1/3">
                        <div class="relative">
                            <img src="{{ asset('/assets/images/services/about_img3.png') }}" alt="Shyam Verma"
                                class="rounded-2xl shadow-2xl z-10 relative border-b-8 border-blue-600">
                            <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-blue-600/10 -z-0 rounded-full"></div>
                        </div>
                    </div>
                    <div class="lg:w-2/3 space-y-6">
                        <h2 class="text-3xl font-bold text-slate-900 flex items-center gap-3">
                            <span class="w-12 h-[2px] bg-blue-600"></span>
                            Dear Visionary Leaders!
                        </h2>
                        <div class="text-lg text-slate-600 leading-relaxed space-y-4 italic">
                            <p>"Pathfinder is more than a brand - it is a vision to make career clarity accessible to
                                every student."</p>
                            <p>"As we expand, we are looking for partners who don’t just want to run a centre, but want
                                to build a meaningful presence in their city and create real impact in students’ lives."
                            </p>
                        </div>
                        <div class="pt-6 border-t border-slate-100">
                            <p class="text-xl font-extrabold text-slate-900">Shyam Verma</p>
                            <p class="text-blue-600 font-medium tracking-widest uppercase text-xs mt-1">Founder
                                Director, PATH finder</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Benefits Grid -->
        <section class="py-20 bg-slate-900 text-white">
            <div class="max-w-7xl mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold">Why Partner with Pathfinder?</h2>
                    <p class="text-slate-400 mt-4">A proven, scalable model in the fast-growing career guidance
                        industry.</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Cards -->
                    <div
                        class="bg-slate-800 p-8 rounded-2xl hover:bg-slate-700 transition-colors border border-slate-700">
                        <div class="text-blue-400 mb-4 font-bold text-2xl tracking-tighter italic">01. What You Get
                        </div>
                        <p class="text-slate-300 text-sm leading-relaxed">Everything required to launch: Psychometric
                            tools, counselling frameworks, training, and marketing support.</p>
                    </div>
                    <div
                        class="bg-slate-800 p-8 rounded-2xl hover:bg-slate-700 transition-colors border border-slate-700">
                        <div class="text-blue-400 mb-4 font-bold text-2xl tracking-tighter italic">02. Your Role</div>
                        <p class="text-slate-300 text-sm leading-relaxed">Represent Pathfinder, drive student outreach,
                            build school relationships, and lead local growth.</p>
                    </div>
                    <div
                        class="bg-slate-800 p-8 rounded-2xl hover:bg-slate-700 transition-colors border border-slate-700">
                        <div class="text-blue-400 mb-4 font-bold text-2xl tracking-tighter italic">03. Support</div>
                        <p class="text-slate-300 text-sm leading-relaxed">Continuous upskilling, centralized guidance,
                            and access to evolving tools. You are never alone.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Business Opportunities Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-12">
                <div class="bg-blue-600 p-10 rounded-[2.5rem] text-white">
                    <h3 class="text-2xl font-bold mb-6 italic">🔹 Growth Potential</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3"><span class="mt-1">✅</span> <span>Scale within your city
                                and beyond</span></li>
                        <li class="flex items-start gap-3"><span class="mt-1">✅</span> <span>Multiple revenue streams
                                (tests, workshops, programs)</span></li>
                        <li class="flex items-start gap-3"><span class="mt-1">✅</span> <span>Increasing demand among
                                students and parents</span></li>
                    </ul>
                </div>
                <div class="bg-slate-50 p-10 rounded-[2.5rem] border border-slate-200">
                    <h3 class="text-2xl font-bold mb-6 text-slate-900 italic">🔹 Who Can Apply</h3>
                    <ul class="space-y-4 text-slate-600">
                        <li class="flex items-center gap-3">👉 Educators, counsellors, and trainers</li>
                        <li class="flex items-center gap-3">👉 Entrepreneurs looking for a meaningful venture</li>
                        <li class="flex items-center gap-3">👉 Professionals with strong local networks</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- FRANCHISE MODAL -->
        <div x-show="isFranchiseModalOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 z-50 overflow-y-auto" x-cloak>

            <div class="fixed inset-0 bg-slate-900/80 backdrop-blur-md" @click="isFranchiseModalOpen = false"></div>

            <div class="relative min-h-screen flex items-center justify-center p-4">
                <div x-show="isFranchiseModalOpen" x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 scale-95 translate-y-8"
                    x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                    class="relative bg-white w-full max-w-2xl rounded-[2rem] shadow-2xl overflow-hidden">

                    <button @click="isFranchiseModalOpen = false"
                        class="absolute top-6 right-6 text-slate-400 hover:text-slate-900 transition-colors">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>

                    <div class="p-8 md:p-12">
                        <div class="mb-8">
                            <h2 class="text-3xl font-bold text-slate-900">Franchise Application</h2>
                            <p class="text-slate-500 mt-2">Start your journey as a visionary leader with Pathfinder.
                            </p>
                        </div>
                        @if (session('success'))
                            <div class="bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded-xl mb-6">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('join.franchise.apply') }}" method="POST" class="space-y-5">
                            @csrf
                            <div class="grid md:grid-cols-2 gap-5">
                                <div>
                                    <label class="text-xs font-bold text-slate-500 uppercase ml-1">Full Name</label>
                                    <input type="text" name="name" required
                                        class="w-full mt-1 px-5 py-4 rounded-2xl border border-slate-200 focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none transition-all">
                                </div>
                                <div>
                                    <label class="text-xs font-bold text-slate-500 uppercase ml-1">Email
                                        Address</label>
                                    <input type="email" name="email" required
                                        class="w-full mt-1 px-5 py-4 rounded-2xl border border-slate-200 focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none transition-all">
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-5">
                                <div>
                                    <label class="text-xs font-bold text-slate-500 uppercase ml-1">Phone Number</label>
                                    <input type="tel" name="phone" required
                                        class="w-full mt-1 px-5 py-4 rounded-2xl border border-slate-200 focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none transition-all">
                                </div>
                                <div>
                                    <label class="text-xs font-bold text-slate-500 uppercase ml-1">City/Region</label>
                                    <input type="text" name="city" required
                                        class="w-full mt-1 px-5 py-4 rounded-2xl border border-slate-200 focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none transition-all">
                                </div>
                            </div>

                            <div>
                                <label class="text-xs font-bold text-slate-500 uppercase ml-1">Current Profession /
                                    Business</label>
                                <input type="text" name="profession"
                                    class="w-full mt-1 px-5 py-4 rounded-2xl border border-slate-200 focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none transition-all">
                            </div>

                            <div>
                                <label class="text-xs font-bold text-slate-500 uppercase ml-1">Why do you want to join
                                    PATH finder?</label>
                                <textarea rows="3" name="reason"
                                    class="w-full mt-1 px-5 py-4 rounded-2xl border border-slate-200 focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none transition-all"></textarea>
                            </div>

                            <div>
                                <label class="text-xs font-bold text-slate-500 uppercase ml-1">Any other Query?</label>
                                <input type="text" name="query"
                                    class="w-full mt-1 px-5 py-4 rounded-2xl border border-slate-200 focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none transition-all">
                            </div>

                            <button type="submit"
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-5 rounded-2xl shadow-xl transition-all transform active:scale-95">
                                Submit Franchise Application
                            </button>

                            <p class="text-center text-sm text-slate-400">
                                Team Pathfinder will contact you shortly after submission.
                            </p>
                        </form>
                    </div>
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
