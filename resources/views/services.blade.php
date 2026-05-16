<x-layouts.public title="Services - PATH finder">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-16 animate-fade-in overflow-x-hidden">

        <div class="flex flex-col lg:flex-row justify-between items-center gap-8 lg:gap-12 py-6 sm:py-10 border-b border-gray-100">
            <div class="flex-1 space-y-4 sm:space-y-6 text-center lg:text-left w-full">
                <div class="inline-flex items-center gap-2 bg-accent/10 text-accent px-3 py-1 sm:px-4 sm:py-1.5 rounded-full text-xs sm:text-sm font-semibold tracking-wide uppercase">
                    Our Services
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight">
                    What We Do
                </h1>
                <p class="text-xl sm:text-2xl font-medium text-accent italic">
                    “From Discovery to Direction to Destination.”
                </p>
                <p class="text-base sm:text-lg text-gray-600 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                    At <span class="font-bold text-slate-900">PATH finder</span>, we offer a complete Career Guidance
                    Ecosystem — combining scientific assessments, experienced human counsellors, and long-term
                    mentoring. Our services are carefully chosen based on age, need, and career stage, ensuring every
                    student gets relevant guidance, not unnecessary testing & reports.
                </p>

                <div class="flex flex-wrap justify-center lg:justify-start gap-2.5 pt-2">
                    <a href="#discovery" class="bg-gray-50 hover:bg-accent/5 text-gray-700 hover:text-accent font-medium text-xs sm:text-sm px-3 py-2 rounded-xl border border-gray-200 transition-all duration-300 whitespace-nowrap">🔹 1. Discovery</a>
                    <a href="#direction" class="bg-gray-50 hover:bg-accent/5 text-gray-700 hover:text-accent font-medium text-xs sm:text-sm px-3 py-2 rounded-xl border border-gray-200 transition-all duration-300 whitespace-nowrap">🔹 2. Direction</a>
                    <a href="#destination" class="bg-gray-50 hover:bg-accent/5 text-gray-700 hover:text-accent font-medium text-xs sm:text-sm px-3 py-2 rounded-xl border border-gray-200 transition-all duration-300 whitespace-nowrap">🔹 3. Destination</a>
                </div>
            </div>

            <div class="flex-1 w-full max-w-md lg:max-w-xl group">
                <div class="relative overflow-hidden rounded-2xl bg-gradient-to-tr from-accent/10 to-transparent p-1.5 sm:p-2">
                    <img src="{{ asset('/assets/images/services/img1.png') }}" alt="From Discovery to Destination"
                        class="rounded-xl shadow-md w-full transform group-hover:scale-[1.02] transition-transform duration-500 ease-out">
                </div>
            </div>
        </div>

        <div class="space-y-16 sm:space-y-24 py-12 sm:py-20">

            <div id="discovery" class="flex flex-col lg:flex-row items-center gap-8 sm:gap-12 scroll-mt-24">
                <div class="w-full lg:flex-1 max-w-sm sm:max-w-md lg:max-w-none order-1">
                    <img src="{{ asset('/assets/images/services/img2.png') }}" alt="Discovery Module"
                        class="rounded-2xl shadow-md hover:shadow-lg transition-shadow duration-300 w-full mx-auto transform hover:-translate-y-1 transition-transform duration-300">
                </div>
                <div class="w-full lg:flex-1 space-y-4 sm:space-y-6 order-2 text-center lg:text-left">
                    <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-2 sm:gap-3">
                        <span class="text-accent bg-accent/10 w-9 h-9 sm:w-10 sm:h-10 rounded-xl flex items-center justify-center text-lg sm:text-xl font-bold shrink-0">1</span>
                        <span>Discovery Module <span class="text-gray-400 text-lg sm:text-xl font-normal block sm:inline-block mt-1 sm:mt-0">(Career Counselling)</span></span>
                    </h2>
                    <p class="text-lg sm:text-xl font-semibold text-gray-800 italic">“Understand Yourself Before You Decide”</p>
                    <div class="space-y-3 sm:space-y-4 text-gray-600 text-sm sm:text-base md:text-lg leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        <p>The Discovery Module helps students and parents gain clear insights and self-awareness through scientifically designed psychometric tests (assessments).</p>
                        <p>Students receive a beautifully structured, self-explanatory PDF report with narrative and graphical representations — simple enough for any student or parent to understand without counsellor support.</p>
                        <p>The report clearly reveals personality traits, interests, strengths, and best-fit career choices, empowering informed academic and career decisions. Delivered at a highly accessible fee, this best-in-class PDF report has raised the bar and set a gold standard in the career counselling industry.</p>
                    </div>
                    <div class="bg-slate-50 p-3.5 sm:p-4 rounded-xl border-l-4 border-accent font-medium text-slate-800 text-sm sm:text-base text-left max-w-2xl mx-auto lg:mx-0">
                        ❓ This module answers: <span class="italic text-accent">“What am I truly suited for?”</span>
                    </div>
                    <div class="pt-2">
                        <a href="#" class="inline-flex items-center justify-center gap-2 bg-accent text-white font-semibold text-sm sm:text-base px-5 py-3 rounded-xl shadow-md hover:bg-accent/90 w-full sm:w-auto transform hover:translate-x-0.5 transition-all duration-300">
                            <span>👉 Start Your Discovery Process</span>
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div id="direction" class="flex flex-col lg:flex-row items-center gap-8 sm:gap-12 scroll-mt-24">
                <div class="w-full lg:flex-1 max-w-sm sm:max-w-md lg:max-w-none order-1 lg:order-2">
                    <img src="{{ asset('/assets/images/services/img3.png') }}" alt="Direction Module"
                        class="rounded-2xl shadow-md hover:shadow-lg transition-shadow duration-300 w-full mx-auto transform hover:-translate-y-1 transition-transform duration-300">
                </div>
                <div class="w-full lg:flex-1 space-y-4 sm:space-y-6 order-2 lg:order-1 text-center lg:text-left">
                    <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-2 sm:gap-3">
                        <span class="text-accent bg-accent/10 w-9 h-9 sm:w-10 sm:h-10 rounded-xl flex items-center justify-center text-lg sm:text-xl font-bold shrink-0">2</span>
                        <span>Direction Module <span class="text-gray-400 text-lg sm:text-xl font-normal block sm:inline-block mt-1 sm:mt-0">(Counselling + Mentoring)</span></span>
                    </h2>
                    <p class="text-lg sm:text-xl font-semibold text-gray-800 italic">“Turn Clarity into Confident Decisions”</p>
                    <div class="space-y-3 sm:space-y-4 text-gray-600 text-sm sm:text-base md:text-lg leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        <p>The Direction Module builds on the Discovery insights and adds expert counselling, goal setting, and a clear action plan.</p>
                        <p>It includes one-to-one discussions with the student and/or parents, a detailed report interpretation session, and a complete academic and career roadmap — from daily routines and study plans to long-term vision and milestones.</p>
                        <p>A follow-up session by our expert career counsellor after 21 days ensures the plan is implemented, not just discussed.</p>
                    </div>
                    <div class="bg-slate-50 p-3.5 sm:p-4 rounded-xl border-l-4 border-accent font-medium text-slate-800 text-sm sm:text-base text-left max-w-2xl mx-auto lg:mx-0">
                        ❓ This module answers: <span class="italic text-accent">“Now that I understand myself, what should I do next?”</span>
                    </div>
                    <div class="pt-2">
                        <a href="#" class="inline-flex items-center justify-center gap-2 bg-accent text-white font-semibold text-sm sm:text-base px-5 py-3 rounded-xl shadow-md hover:bg-accent/90 w-full sm:w-auto transform hover:translate-x-0.5 transition-all duration-300">
                            <span>👉 Get Expert Career Direction</span>
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div id="destination" class="flex flex-col lg:flex-row items-center gap-8 sm:gap-12 scroll-mt-24">
                <div class="w-full lg:flex-1 max-w-sm sm:max-w-md lg:max-w-none order-1">
                    <img src="{{ asset('/assets/images/services/img4.png') }}" alt="Destination Module"
                        class="rounded-2xl shadow-md hover:shadow-lg transition-shadow duration-300 w-full mx-auto transform hover:-translate-y-1 transition-transform duration-300">
                </div>
                <div class="w-full lg:flex-1 space-y-4 sm:space-y-6 order-2 text-center lg:text-left">
                    <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-2 sm:gap-3">
                        <span class="text-accent bg-accent/10 w-9 h-9 sm:w-10 sm:h-10 rounded-xl flex items-center justify-center text-lg sm:text-xl font-bold shrink-0">3</span>
                        <span>Destination Module <span class="text-gray-400 text-lg sm:text-xl font-normal block sm:inline-block mt-1 sm:mt-0">(Mentoring + Profiling)</span></span>
                    </h2>
                    <p class="text-lg sm:text-xl font-semibold text-gray-800 italic">“Convert Clarity into Achievement”</p>
                    <div class="space-y-4 text-gray-600 text-sm sm:text-base md:text-lg leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        <p>The Destination Module is designed for students who require long-term mentoring and sustained, structured guidance.</p>
                        <p>Over six months, students receive regular one-to-one mentoring to stay motivated, disciplined, and perfectly aligned with their career goals.</p>

                        <div class="bg-gray-50 rounded-xl p-4 sm:p-5 space-y-3 border border-gray-100 text-left">
                            <p class="font-bold text-slate-800 text-xs sm:text-sm uppercase tracking-wider">Comprehensive Guidance Includes:</p>
                            <ul class="space-y-2.5 text-xs sm:text-sm md:text-base">
                                <li class="flex items-start gap-2.5">
                                    <span class="text-accent font-bold mt-0.5">✔</span> <span>Helping the student focus intensely on academics and smart study strategies.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-accent font-bold mt-0.5">✔</span> <span>Guiding the student in Profile Building by recommending high-impact activities, internships, and certifications.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-accent font-bold mt-0.5">✔</span> <span>Preparing the student's mindset systematically for future college selections and entrance exams.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="bg-slate-50 p-3.5 sm:p-4 rounded-xl border-l-4 border-accent font-medium text-slate-800 text-sm sm:text-base text-left max-w-2xl mx-auto lg:mx-0">
                        ❓ This module answers: <span class="italic text-accent">“How do I stay on track and prepare for long-term success?”</span>
                    </div>
                    <div class="pt-2">
                        <a href="#" class="inline-flex items-center justify-center gap-2 bg-accent text-white font-semibold text-sm sm:text-base px-5 py-3 rounded-xl shadow-md hover:bg-accent/90 w-full sm:w-auto transform hover:translate-x-0.5 transition-all duration-300">
                            <span>👉 Explore Long-Term Mentorship</span>
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="bg-slate-950 text-white rounded-3xl p-5 sm:p-8 md:p-12 my-12 sm:my-16 shadow-2xl relative overflow-hidden">
            <div class="absolute right-0 top-0 w-72 h-72 sm:w-96 sm:h-96 bg-accent/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-16 space-y-3 sm:space-y-4">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold tracking-tight px-2">What Makes PATH finder Special & Unique!</h2>
                <div class="h-1 w-16 sm:w-20 bg-accent mx-auto rounded"></div>
                <p class="text-lg sm:text-xl text-slate-300 italic font-medium px-4">
                    "Our Counsellors' 360-degree holistic approach is our strongest USP"
                </p>
            </div>

            <div class="space-y-16 sm:space-y-20 max-w-6xl mx-auto py-6 sm:py-12">

                <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-16 group">
                    <div class="w-full lg:w-1/2 flex justify-center order-1">
                        <div class="relative bg-slate-900/40 border border-slate-800/80 p-5 sm:p-8 rounded-3xl shadow-2xl transition-all duration-300 hover:border-accent/30 max-w-sm sm:max-w-md w-full">
                            <span class="absolute -top-3 left-6 text-[10px] font-bold tracking-widest text-accent uppercase bg-accent/10 border border-accent/20 px-3 py-1 rounded-full backdrop-blur-md">
                                Reason #01
                            </span>
                            <div class="w-full h-48 sm:h-64 flex items-center justify-center overflow-hidden rounded-2xl bg-slate-950/40 p-4">
                                <img src="/assets/images/services/img6.png" class="max-w-full max-h-full object-contain group-hover:scale-105 transition-transform duration-500" alt="Experienced Counsellors Visual">
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 space-y-3 text-center lg:text-left order-2">
                        <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-white group-hover:text-accent transition-colors duration-300">
                            Experienced Counsellors
                        </h3>
                        <p class="text-slate-400 text-sm sm:text-base leading-relaxed max-w-xl mx-auto lg:mx-0">
                            Our counsellors believe meaningful guidance begins with depth, patience, and clarity. They bring deep, real-world experience across academic stages, entrance exams, cut-offs, college ecosystems, and practical job markets.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-16 group">
                    <div class="w-full lg:w-1/2 flex justify-center order-1 lg:order-2">
                        <div class="relative bg-slate-900/40 border border-slate-800/80 p-5 sm:p-8 rounded-3xl shadow-2xl transition-all duration-300 hover:border-accent/30 max-w-sm sm:max-w-md w-full">
                            <span class="absolute -top-3 left-6 text-[10px] font-bold tracking-widest text-accent uppercase bg-accent/10 border border-accent/20 px-3 py-1 rounded-full backdrop-blur-md">
                                Reason #02
                            </span>
                            <div class="w-full h-48 sm:h-64 flex items-center justify-center overflow-hidden rounded-2xl bg-slate-950/40 p-4">
                                <img src="/assets/images/services/img7.png" class="max-w-full max-h-full object-contain group-hover:scale-105 transition-transform duration-500" alt="Emerging Careers Visual">
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 space-y-3 text-center lg:text-left order-2 lg:order-1">
                        <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-white group-hover:text-accent transition-colors duration-300">
                            Emerging Careers
                        </h3>
                        <p class="text-slate-400 text-sm sm:text-base leading-relaxed max-w-xl mx-auto lg:mx-0">
                            We stay deeply informed about emerging fields, the absolute impact of AI and advanced technology, and the actual skills shaping the work environment. Grounded in real trends, not just buzzwords.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-16 group">
                    <div class="w-full lg:w-1/2 flex justify-center order-1">
                        <div class="relative bg-slate-900/40 border border-slate-800/80 p-5 sm:p-8 rounded-3xl shadow-2xl transition-all duration-300 hover:border-accent/30 max-w-sm sm:max-w-md w-full">
                            <span class="absolute -top-3 left-6 text-[10px] font-bold tracking-widest text-accent uppercase bg-accent/10 border border-accent/20 px-3 py-1 rounded-full backdrop-blur-md">
                                Reason #03
                            </span>
                            <div class="w-full h-48 sm:h-64 flex items-center justify-center overflow-hidden rounded-2xl bg-slate-950/40 p-4">
                                <img src="/assets/images/services/img8.png" class="max-w-full max-h-full object-contain group-hover:scale-105 transition-transform duration-500" alt="Global Perspective Visual">
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 space-y-3 text-center lg:text-left order-2">
                        <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-white group-hover:text-accent transition-colors duration-300">
                            Global Perspective
                        </h3>
                        <p class="text-slate-400 text-sm sm:text-base leading-relaxed max-w-xl mx-auto lg:mx-0">
                            Career opportunities today are shaped globally. Our counsellors help students understand how international developments, cross-border education paths, and tech flows affect future industries.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-16 group">
                    <div class="w-full lg:w-1/2 flex justify-center order-1 lg:order-2">
                        <div class="relative bg-slate-900/40 border border-slate-800/80 p-5 sm:p-8 rounded-3xl shadow-2xl transition-all duration-300 hover:border-accent/30 max-w-sm sm:max-w-md w-full">
                            <span class="absolute -top-3 left-6 text-[10px] font-bold tracking-widest text-accent uppercase bg-accent/10 border border-accent/20 px-3 py-1 rounded-full backdrop-blur-md">
                                Reason #04
                            </span>
                            <div class="w-full h-48 sm:h-64 flex items-center justify-center overflow-hidden rounded-2xl bg-slate-950/40 p-4">
                                <img src="/assets/images/services/img9.png" class="max-w-full max-h-full object-contain group-hover:scale-105 transition-transform duration-500" alt="Balanced Approach Visual">
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 space-y-3 text-center lg:text-left order-2 lg:order-1">
                        <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-white group-hover:text-accent transition-colors duration-300">
                            Balanced Approach
                        </h3>
                        <p class="text-slate-400 text-sm sm:text-base leading-relaxed max-w-xl mx-auto lg:mx-0">
                            We combine modern psychometric science with deep insights drawn from ancient Indian Vedic wisdom to offer a balanced, grounded approach that fully respects data points alongside core human nature.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-16 group">
                    <div class="w-full lg:w-1/2 flex justify-center order-1">
                        <div class="relative bg-slate-900/40 border border-slate-800/80 p-5 sm:p-8 rounded-3xl shadow-2xl transition-all duration-300 hover:border-accent/30 max-w-sm sm:max-w-md w-full">
                            <span class="absolute -top-3 left-6 text-[10px] font-bold tracking-widest text-accent uppercase bg-accent/10 border border-accent/20 px-3 py-1 rounded-full backdrop-blur-md">
                                Reason #05
                            </span>
                            <div class="w-full h-48 sm:h-64 flex items-center justify-center overflow-hidden rounded-2xl bg-slate-950/40 p-4">
                                <img src="/assets/images/services/img10.png" class="max-w-full max-h-full object-contain group-hover:scale-105 transition-transform duration-500" alt="Long Term Focus Visual">
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 space-y-3 text-center lg:text-left order-2">
                        <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-white group-hover:text-accent transition-colors duration-300">
                            Long Term Focus
                        </h3>
                        <p class="text-slate-400 text-sm sm:text-base leading-relaxed max-w-xl mx-auto lg:mx-0">
                            Clarity is a long journey, not a single one-time event. Our model focuses entirely on sustained development, continuous mentorship, and deliberate follow-ups that grow right alongside the student.
                        </p>
                    </div>
                </div>

                <div class="relative bg-gradient-to-br from-slate-900 to-slate-950 border border-slate-800 p-6 sm:p-8 lg:p-12 rounded-3xl overflow-hidden max-w-4xl mx-auto text-center shadow-2xl">
                    <div class="absolute -right-16 -bottom-16 w-40 h-40 bg-accent/10 rounded-full blur-3xl"></div>
                    <div class="absolute -left-16 -top-16 w-40 h-40 bg-accent-dark/10 rounded-full blur-3xl"></div>
                    
                    <div class="space-y-4 max-w-2xl mx-auto relative z-10">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 bg-accent/10 text-accent border border-accent/20 rounded-xl sm:rounded-2xl flex items-center justify-center text-xl sm:text-2xl mx-auto transform group-hover:rotate-6 transition-all duration-300 shadow-md">
                            💡
                        </div>
                        <div class="space-y-2.5">
                            <h4 class="text-[11px] sm:text-xs font-bold uppercase tracking-widest text-accent">Our Core Philosophy</h4>
                            <p class="text-white text-base sm:text-lg lg:text-xl font-medium leading-relaxed italic px-1 sm:px-4">
                                "CAREER DECISIONS SHOULD BE GUIDED BY DEEP SELF-AWARENESS, NOT SOCIAL PRESSURE OR SHORT-TERM TRENDS."
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="text-center py-6 border-t border-gray-100">
            <a class="inline-flex items-center gap-2 text-accent font-bold text-base sm:text-lg hover:text-accent-dark underline decoration-dotted transition-colors" href="#">
                <span>Meet the Mentor Behind PATH finder</span>
                <svg class="w-4 h-4 sm:w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>
        </div>

    </div>

    <style>
        .animate-fade-in {
            animation: fadeIn 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</x-layouts.public>