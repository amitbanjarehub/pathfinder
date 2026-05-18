<x-layouts.public title="Join Our Team | Pathfinder">
    <div x-data="{ isModalOpen: false }" class="bg-white">

        <!-- Hero Section -->
        <section class="relative bg-slate-50 py-16 lg:py-24 overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-12 items-center">
                <!-- Content Left -->
                <div class="order-2 lg:order-1 space-y-6" x-data="{ shown: false }" x-init="setTimeout(() => shown = true, 100)" x-show="shown"
                    x-transition:enter="transition ease-out duration-1000"
                    x-transition:enter-start="opacity-0 -translate-x-10">
                    <span class="text-blue-600 font-semibold tracking-wide uppercase text-sm italic">Work with
                        Purpose</span>
                    <h1 class="text-4xl lg:text-6xl font-extrabold text-slate-900 leading-tight">
                        Join as <span class="text-blue-600">Team Member</span>
                    </h1>
                    <p class="text-lg text-slate-600 leading-relaxed max-w-xl">
                        Become part of our mission to guide students toward meaningful careers and brighter futures. We
                        are looking for builders, not just employees.
                    </p>
                    <!-- Modal Trigger Button -->
                    <button @click="isModalOpen = true"
                        class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-full font-bold transition-all transform hover:scale-105 shadow-lg">
                        Apply to Join Pathfinder 🚀
                    </button>
                </div>

                <!-- Image Right (Mobile: Top) -->
                <div class="order-1 lg:order-2 relative" x-data="{ shown: false }" x-init="setTimeout(() => shown = true, 300)" x-show="shown"
                    x-transition:enter="transition ease-out duration-1000"
                    x-transition:enter-start="opacity-0 translate-x-10">
                    <div class="absolute -z-10 top-10 right-10 w-72 h-72 bg-blue-100 rounded-full blur-3xl opacity-50">
                    </div>
                    <img src="{{ asset('/assets/images/services/team_img1.png') }}" alt="Team Collaboration"
                        class="w-full h-auto rounded-2xl shadow-2xl transform hover:-rotate-2 transition-transform duration-500">
                </div>
            </div>
        </section>

        <!-- Founder's Message Section -->
        <section class="py-20 bg-white">
            <div class="max-w-5xl mx-auto px-4">
                <div
                    class="bg-slate-900 rounded-3xl overflow-hidden shadow-2xl flex flex-col md:flex-row border border-slate-800">
                    <div class="md:w-1/3 bg-slate-800">
                        <img src="{{ asset('/assets/images/services/about_img3.png') }}" alt="Shyam Verma"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700">
                    </div>
                    <div class="md:w-2/3 p-8 lg:p-12">
                        <svg class="w-12 h-12 text-blue-500 mb-6 opacity-30" fill="currentColor" viewBox="0 0 32 32">
                            <path
                                d="M10 8v8H6v2a2 2 0 002 2h2v4H8a6 6 0 01-6-6v-8a2 2 0 012-2h6zm16 0v8h-4v2a2 2 0 002 2h2v4h-2a6 6 0 01-6-6v-8a2 2 0 012-2h6z">
                            </path>
                        </svg>
                        <h2 class="text-2xl font-bold text-white mb-4">Dear Future Builders!</h2>
                        <div class="space-y-4 text-slate-300 leading-relaxed italic text-sm md:text-base">
                            <p>Pathfinder is not just an organization - it is a vision to transform how individuals
                                discover and shape their careers.</p>
                            <p>If you have the hunger to grow, the courage to take ownership, and the intent to build
                                something meaningful, I am personally looking forward to having you on this journey.</p>
                        </div>
                        <div class="mt-8 border-t border-slate-700 pt-6">
                            <p class="text-white font-bold text-lg">Shyam Verma</p>
                            <p class="text-blue-400 text-sm italic">Founder Director, PATH finder</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Values Grid -->
        <section class="py-16 bg-slate-50">
            <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Standardizing the cards -->
                <template
                    x-for="(item, index) in [
                    {title: 'What You Will Do', color: 'blue', items: ['Meaningful projects', 'Cross-functional collab', 'Ideas & execution']},
                    {title: 'What We Look For', color: 'green', items: ['Purpose-driven', 'Strong communication', 'Passionate about impact']},
                    {title: 'Why Join Us', color: 'purple', items: ['Growing ecosystem', 'Values initiative', 'Personal growth']},
                    {title: 'Growth', color: 'orange', items: ['Beyond designation', 'Leadership roles', 'Long-term journey']}
                ]">
                    <div
                        class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 transition-all hover:shadow-md">
                        <div
                            :class="`w-10 h-10 bg-${item.color}-50 text-${item.color}-600 rounded-lg flex items-center justify-center mb-4 font-bold`
                            font - bold">
                            🔹</div>
                        <h3 class="font-bold text-slate-900 mb-3" x-text="item.title"></h3>
                        <ul class="text-slate-500 text-xs space-y-2 leading-relaxed">
                            <template x-for="bullet in item.items">
                                <li x-text="'• ' + bullet"></li>
                            </template>
                        </ul>
                    </div>
                </template>
            </div>
        </section>

        <!-- APPLICATION MODAL -->
        <div x-show="isModalOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 z-50 overflow-y-auto" x-cloak>

            <!-- Backdrop -->
            <div class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm" @click="isModalOpen = false"></div>

            <!-- Modal Content -->
            <div class="relative min-h-screen flex items-center justify-center p-4">
                <div x-show="isModalOpen" x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 scale-95 translate-y-4"
                    x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                    class="relative bg-white w-full max-w-2xl rounded-3xl shadow-2xl overflow-hidden"
                    @click.away="isModalOpen = false">

                    <!-- Close Button -->
                    <button @click="isModalOpen = false"
                        class="absolute top-4 right-4 text-slate-400 hover:text-slate-600 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>

                    <div class="p-8 md:p-12">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-slate-900">Application Form</h2>
                            <p class="text-slate-500 mt-2">Become a part of the Pathfinder journey.</p>
                        </div>
                        @if (session('success'))
                            <div class="bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded-xl mb-6">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('join.team.apply') }}" method="POST" class="space-y-5">
                            @csrf
                            <div class="grid md:grid-cols-2 gap-5">
                                <div class="space-y-1">
                                    <label class="text-xs font-semibold text-slate-700 uppercase">Name</label>
                                    <input type="text" name="name" required
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all bg-slate-50">
                                </div>
                                <div class="space-y-1">
                                    <label class="text-xs font-semibold text-slate-700 uppercase">Email</label>
                                    <input type="email" name="email" required
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all bg-slate-50">
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-5">
                                <div class="space-y-1">
                                    <label class="text-xs font-semibold text-slate-700 uppercase">Phone</label>
                                    <input type="tel" name="phone" required
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all bg-slate-50">
                                </div>
                                <div class="space-y-1">
                                    <label class="text-xs font-semibold text-slate-700 uppercase">City</label>
                                    <input type="text" name="city" required
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all bg-slate-50">
                                </div>
                            </div>

                            <div class="space-y-1">
                                <label class="text-xs font-semibold text-slate-700 uppercase">Current
                                    Profession</label>
                                <input type="text" name="profession"
                                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all bg-slate-50">
                            </div>

                            <div class="space-y-1">
                                <label class="text-xs font-semibold text-slate-700 uppercase">Position Applying
                                    For</label>
                                <input type="text" name="role" required
                                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all bg-slate-50">
                            </div>

                            <div class="space-y-1">
                                <label class="text-xs font-semibold text-slate-700 uppercase">Why do you want to join
                                    PATH finder?</label>
                                <textarea rows="3" name="reason"
                                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all bg-slate-50"></textarea>
                            </div>

                            <button type="submit"
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-xl shadow-lg transition-all transform active:scale-95">
                                Submit Application
                            </button>
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

        /* Smooth scrolling for the whole page */
        html {
            scroll-behavior: smooth;
        }
    </style>
</x-layouts.public>
