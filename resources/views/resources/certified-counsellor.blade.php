<x-layouts.public title="Become a Certified Counsellor - PATH finder">

    <!-- HERO SECTION -->
    <div class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-slate-950 overflow-hidden">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-accent/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-20">
            <div class="flex flex-col-reverse lg:flex-row items-center gap-12 lg:gap-8">

                <div class="w-full lg:w-1/2 text-left space-y-6 z-10">
                    <span class="inline-block text-accent font-semibold tracking-widest uppercase text-xs bg-accent/10 px-4 py-1.5 rounded-full border border-accent/20">
                        Partnership & Opportunities
                    </span>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white leading-tight">
                        Join as <span class="text-accent">Certified Counsellor</span>
                    </h1>
                    <p class="text-lg sm:text-xl text-slate-300 leading-relaxed max-w-xl">
                        Become a certified career counsellor and help students make informed career decisions with India's trusted mentorship platform.
                    </p>
                    <div class="pt-4">
                        <!-- Updated Route Here -->
                       <a href="/certificate"
                            class="w-full sm:w-auto text-center bg-accent text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-opacity-90 transition-all shadow-lg inline-block transform hover:-translate-y-1">
                            Begin Your Journey as a PATH finder Certified Counsellor →
                        </a>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 flex justify-center lg:justify-end">
                    <div class="relative w-full max-w-md lg:max-w-xl aspect-[4/3] sm:aspect-video lg:aspect-auto lg:h-[450px] rounded-3xl overflow-hidden shadow-2xl border border-white/10">
                        <img src="{{ asset('/assets/images/services/cc_img1.png') }}" alt="Partnership & Opportunities"
                            class="w-full h-full object-cover object-center transform hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/40 via-transparent to-transparent">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- FOUNDER'S MESSAGE SECTION -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 border-b border-gray-100">
        <div class="flex flex-col lg:flex-row gap-12 items-start">
            <div class="w-full lg:w-7/12 order-2 lg:order-1">
                <h2 class="text-accent font-bold text-sm uppercase tracking-widest mb-2">Inspirational Message</h2>
                <h3 class="text-3xl md:text-4xl font-bold mb-8 text-gray-900">Founder’s Message to Aspiring Certified Counsellors</h3>

                <div class="text-gray-700 space-y-6 text-lg leading-relaxed">
                    <!-- ... (Content remain same) ... -->
                    <p class="font-semibold text-xl text-gray-900">Hello Changemakers!</p>
                    <p class="italic text-accent font-medium">Welcome to the world of opportunities! Welcome to the world of purpose! Welcome to PATH finder!</p>
                    <p>Becoming a Pathfinder Certified Counsellor is not just a job, and not merely a career - it is a meaningful opportunity to shape lives.</p>
                    
                    <div class="pt-6">
                        <p class="text-2xl font-bold text-gray-900">— Shyam Verma</p>
                        <p class="text-gray-500 italic">Founder Director, PATH finder</p>
                    </div>

                   
                </div>
            </div>
            <div class="w-full lg:w-5/12 order-1 lg:order-2 lg:sticky lg:top-8">
                <div class="relative max-w-md mx-auto lg:max-w-none">
                    <div class="absolute -inset-4 bg-accent/10 rounded-3xl rotate-2"></div>
                    <img src="{{ asset('/assets/images/services/cc_img2.png') }}" alt="Shyam Verma"
                        class="relative rounded-2xl shadow-2xl w-full object-cover">
                </div>
            </div>
        </div>
    </div>

</x-layouts.public>