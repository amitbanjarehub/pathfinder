<x-layouts.public title="Institutional Tie-ups | Pathfinder">
    <div x-data="{ isTieupModalOpen: false }" class="bg-white">

        <!-- Hero Section -->
        <section class="relative bg-white py-16 lg:py-24 overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-12 items-center">
                <!-- Content Left -->
                <div class="order-2 lg:order-1 space-y-6" x-data="{ shown: false }" x-init="setTimeout(() => shown = true, 100)" x-show="shown"
                    x-transition:enter="transition ease-out duration-1000"
                    x-transition:enter-start="opacity-0 -translate-x-10">
                    <div
                        class="inline-block px-4 py-1.5 bg-blue-50 text-blue-600 rounded-full text-sm font-bold tracking-wide uppercase border border-blue-100">
                        Collaboration Opportunity
                    </div>
                    <h1 class="text-4xl lg:text-6xl font-extrabold text-slate-900 leading-tight">
                        Institutional <span class="text-blue-600">Tie-ups</span>
                    </h1>
                    <p class="text-lg text-slate-600 leading-relaxed max-w-xl">
                        Empower your students with structured career guidance. Schools, colleges, and organizations can
                        collaborate with us for Seminars, Expert Talks, and assessments.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <button @click="isTieupModalOpen = true"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-xl font-bold transition-all shadow-lg hover:-translate-y-1">
                            Request a Call Back 📞
                        </button>
                    </div>
                </div>

                <!-- Image Right -->
                <div class="order-1 lg:order-2 relative" x-data="{ shown: false }" x-init="setTimeout(() => shown = true, 300)" x-show="shown"
                    x-transition:enter="transition ease-out duration-1000"
                    x-transition:enter-start="opacity-0 scale-95 translate-x-10">
                    <div class="absolute inset-0 bg-blue-600/5 rounded-[3rem] -rotate-3 scale-105"></div>
                    <img src="{{ asset('/assets/images/services/tieup_img1.png') }}" alt="Institutional Collaboration"
                        class="w-full h-auto rounded-[2.5rem] shadow-2xl relative z-10 border-4 border-white">
                </div>
            </div>
        </section>

        <!-- What We Offer Section -->
        <section class="py-20 bg-slate-50">
            <div class="max-w-7xl mx-auto px-4">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-3xl font-bold text-slate-900 italic">🔹 What We Offer</h2>
                    <p class="text-slate-600 mt-4 italic text-sm md:text-base">Equip your institution with advanced
                        psychometric assessments and high-impact sessions that bring confidence and smiles to students'
                        faces.</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Offerings List Items as Cards -->
                    <div
                        class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:border-blue-200 transition-all group">
                        <div
                            class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all">
                            🎓</div>
                        <h3 class="font-bold text-xl mb-3 text-slate-900 tracking-tight leading-none">Expert Talks</h3>
                        <p class="text-slate-500 text-sm">Career awareness and emerging opportunities for students and
                            parents.</p>
                    </div>
                    <div
                        class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:border-blue-200 transition-all group">
                        <div
                            class="w-12 h-12 bg-green-100 text-green-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-green-600 group-hover:text-white transition-all">
                            📊</div>
                        <h3 class="font-bold text-xl mb-3 text-slate-900 tracking-tight leading-none">Assessments</h3>
                        <p class="text-slate-500 text-sm">Scientifically designed tools for students (class-wise &
                            need-based).</p>
                    </div>
                    <div
                        class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:border-blue-200 transition-all group">
                        <div
                            class="w-12 h-12 bg-purple-100 text-purple-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-purple-600 group-hover:text-white transition-all">
                            🤝</div>
                        <h3 class="font-bold text-xl mb-3 text-slate-900 tracking-tight leading-none">Counselling</h3>
                        <p class="text-slate-500 text-sm">One-on-one and group support for stream selection and
                            planning.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Value & Why Choose Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-16">
                <div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-8 border-l-4 border-blue-600 pl-4 italic">🔹 Value
                        for Your Institution</h3>
                    <ul class="space-y-4">
                        <li class="flex gap-3 text-slate-600 text-sm leading-relaxed">
                            <span class="text-blue-600 font-bold">✓</span> Helps students make informed academic
                            choices.
                        </li>
                        <li class="flex gap-3 text-slate-600 text-sm leading-relaxed">
                            <span class="text-blue-600 font-bold">✓</span> Enhances your institution's guidance
                            ecosystem.
                        </li>
                        <li class="flex gap-3 text-slate-600 text-sm leading-relaxed">
                            <span class="text-blue-600 font-bold">✓</span> Positions your institution as future-ready.
                        </li>
                    </ul>
                </div>
                <div class="bg-slate-900 text-white p-10 rounded-[2.5rem]">
                    <h3 class="text-2xl font-bold mb-8 italic text-blue-400">🔹 Why Choose Pathfinder</h3>
                    <ul class="space-y-4 text-sm text-slate-300">
                        <li class="flex gap-3">• Simple, self-explanatory reports (No confusion)</li>
                        <li class="flex gap-3">• Blend of technology + human expertise</li>
                        <li class="flex gap-3">• Scalable solutions for any size organization</li>
                        <li class="flex gap-3">• Research-backed scientific tools</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Who Can Partner -->
        <section class="py-16 border-y border-slate-100">
            <div class="max-w-7xl mx-auto px-4 overflow-hidden">
                <div
                    class="flex flex-wrap items-center justify-center gap-10 opacity-50 grayscale hover:grayscale-0 transition-all duration-500">
                    <span class="text-xl font-bold text-slate-400 italic">Schools (7th-12th)</span>
                    <span class="text-xl font-bold text-slate-400 italic">Colleges & Universities</span>
                    <span class="text-xl font-bold text-slate-400 italic">Coaching Institutes</span>
                    <span class="text-xl font-bold text-slate-400 italic">NGOs & Corporates</span>
                </div>
            </div>
        </section>

        <!-- INSTITUTIONAL ENQUIRY MODAL -->
        <div x-show="isTieupModalOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 z-50 overflow-y-auto" x-cloak>

            <!-- Backdrop -->
            <div class="fixed inset-0 bg-slate-900/70 backdrop-blur-sm" @click="isTieupModalOpen = false"></div>

            <!-- Modal Content -->
            <div class="relative min-h-screen flex items-center justify-center p-4">
                <div x-show="isTieupModalOpen" x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 scale-95 translate-y-10"
                    x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                    class="relative bg-white w-full max-w-2xl rounded-[2.5rem] shadow-2xl overflow-hidden">

                    <!-- Close Button -->
                    <button @click="isTieupModalOpen = false"
                        class="absolute top-6 right-6 text-slate-400 hover:text-slate-600 transition-colors">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>

                    <div class="p-8 md:p-12">
                        <div class="mb-10">
                            <h2 class="text-3xl font-extrabold text-slate-900 leading-none">Let's Collaborate</h2>
                            <p class="text-slate-500 mt-2 font-medium italic">Bring structured guidance, clarity &
                                confidence to your students.</p>
                        </div>
                        @if (session('success'))
                            <div class="mb-4 bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded-xl">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('tieup.enquiry.submit') }}" method="POST" class="space-y-4">
                            @csrf
                            <div class="space-y-4">
                                <h4 class="text-xs font-bold text-blue-600 uppercase tracking-widest">Institution
                                    Details</h4>
                                <div class="grid md:grid-cols-2 gap-4">
                                    <input type="text" name="institution_name" placeholder="Institution Name"
                                        required
                                        class="w-full px-5 py-3.5 rounded-xl bg-slate-50 border-transparent focus:bg-white focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 outline-none transition-all">
                                    <input type="text" name="contact_person" placeholder="Contact Person Name"
                                        required
                                        class="w-full px-5 py-3.5 rounded-xl bg-slate-50 border-transparent focus:bg-white focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 outline-none transition-all">
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-4">
                                <input type="tel" name="phone" placeholder="Phone Number" required
                                    class="w-full px-5 py-3.5 rounded-xl bg-slate-50 border-transparent focus:bg-white focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 outline-none transition-all">
                                <input type="email" name="email" placeholder="Email Address" required
                                    class="w-full px-5 py-3.5 rounded-xl bg-slate-50 border-transparent focus:bg-white focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 outline-none transition-all">
                            </div>

                            <input type="text" name="city_state" placeholder="City & State" required
                                class="w-full px-5 py-3.5 rounded-xl bg-slate-50 border-transparent focus:bg-white focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 outline-none transition-all">

                            <div class="space-y-2">
                                <label class="text-xs font-bold text-slate-500 uppercase ml-1">Requirement
                                    Details</label>
                                <textarea rows="3" name="requirements" placeholder="Tell us how we can help your institution..."
                                    class="w-full px-5 py-3.5 rounded-xl bg-slate-50 border-transparent focus:bg-white focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 outline-none transition-all"></textarea>
                            </div>

                            <button type="submit"
                                class="w-full bg-slate-900 hover:bg-blue-600 text-white font-bold py-4 rounded-xl shadow-xl transition-all transform active:scale-95">
                                Submit Enquiry 🚀
                            </button>

                            <p class="text-center text-xs text-slate-400 italic">
                                Tip: After submission, our team will contact you shortly.
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
