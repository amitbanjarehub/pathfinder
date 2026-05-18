{{-- <x-layouts.public title="About Us - Miracles">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <div class="flex flex-wrap sm:flex-nowrap justify-center items-center py-6">
            <div class="flex flex-col">
                <h1 class="text-3xl font-bold mb-4 text-accent">About Us (Who We Are)</h1>
                <p class=" text-xl max-w-2xl text-gray-700 mb-8 ">PATH finder is India’s one of the oldest career
                    counselling and mentoring platforms founded by Shyam Verma, with 20+ years of experience guiding
                    20,000+ students towards clarity, confidence, and meaningful careers.</p>
            </div>
            <img src="{{ asset('/assets/images/about.png') }}" alt="About Us"
                class="rounded-xl shadow-lg w-full max-w-xl mx-auto">
        </div>



        <div class="py-8">
            <h1 class="text-3xl font-bold mb-4 text-accent">Know Our Philosophy</h1>
            <p class=" text-xl  text-gray-700 mb-8 ">At PATH finder, we believe <strong class>
                    CAREER DECISIONS SHOULD BE
                    GUIDED BY DEEP SELF-AWARENESS, NOT SOCIAL PRESSURE OR SHORT-TERM TRENDS.
                </strong>
            </p>
        </div>

        <div class="flex  flex-wrap sm:flex-nowrap gap-8 py-8 justify-end items-end">
            <div class="flex flex-col">
                <h1 class="text-3xl font-bold mb-4 text-accent">More about Us</h1>
                <img src="{{ asset('/assets/images/more-about-us.jpeg') }}" alt="About Us"
                    class="rounded-xl shadow-lg w-full max-w-xl mx-auto">
            </div>

            <div class="flex flex-col">
                <p class=" text-xl max-w-2xl text-gray-700 mb-8 ">We help students understand their aptitudes,
                    personality traits, interests, and cognitive strengths before choosing a direction - so decisions
                    are rooted in clarity, not confusion.</p>
                <p class=" text-xl max-w-2xl text-gray-700 mb-8 ">Our counselling approach blends scientifically
                    designed psychometric assessments with two decades of real-world mentoring experience.</p>
                <p class=" text-xl max-w-2xl text-gray-700 mb-8 ">Backed by over 20 years of counselling and mentoring
                    experience, PATH finder has helped thousands of students in India and abroad make confident,
                    well-informed, and future-ready career choices.</p>
            </div>
        </div>
        <a class='text-accent font-bold underline decoration-dotted' href="#"> Meet the Mentor Behind PATH finder ->
        </a>

        <div class="pt-12">
            <h1 class="text-3xl font-bold mb-8 text-accent">Founder’s Note</h1>

            <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 items-start">
                <div class="flex-1">
                    <p class="text-xl text-gray-700 mb-4">Hello Friends,</p>
                    <p class="text-xl text-gray-700 mb-4">Namaste.</p>
                    <p class="text-xl text-gray-700 mb-4">I am extremely Happy to see you here</p>
                    <p class="text-xl text-gray-700 mb-4">Welcome to the World of Awareness!</p>
                    <p class="text-xl text-gray-700 mb-8">Welcome to the World of Opportunities!</p>

                    <p class="text-xl text-gray-700 mb-4">Welcome to PATH finder!</p>
                    <p class="text-xl text-gray-700 mb-4">I am Shyam Verma, I was raised in a humble family of
                        BHEL, Bhopal with limited resources but strong values. What shaped my life was not privilege,
                        but
                        the habit of questioning my own decisions, understanding myself deeply, and choosing paths
                        logically
                        at every stage.</p>
                    <p class="text-xl text-gray-700 mb-4">Before turning 30, I achieved milestones, many only
                        dream of, simply because I understood myself well & took well informed decisions at crucial
                        junctures.</p>
                    <p class="text-xl text-gray-700 mb-4">I chose career counselling & training students as my
                        profession over a conventional corporate career because I believed that if self-awareness &
                        self-belief could transform the life of an ordinary person like me then they (/it) could surely
                        do
                        the same for millions of such students who lack proper career guidance and need a few words of
                        encouragement (at a right time/ at a time when the whole world either criticizes them or
                        misunderstands them.</p>
                    <p class="text-xl text-gray-700 mb-4">For over 20 years, I have listened to students,
                        understood their uniqueness, and helped them believe bigger than their circumstances. PATH
                        finder is
                        an extension of that belief. So, once again I warmly welcome you to an awe-inspiring wonderland
                        called - PATH finder and eagerly waiting to meet you at one of counselling sessions.</p>
                    <p class="text-xl text-gray-700 font-bold mt-8">— Shyam Verma</p>
                </div>

                <div class="w-full lg:w-5/12 xl:w-1/3 shrink-0 flex justify-center sticky top-8">
                    <img src="{{ asset('/assets/images/founders-note.jpeg') }}" alt="Founder's Note"
                        class="rounded-xl shadow-lg w-full max-w-md lg:max-w-full">
                </div>
            </div>
        </div>

    </div>
</x-layouts.public> --}}



<x-layouts.public title="About Us - PATH finder">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16" x-data="{ 
        counters: { years: 0, students: 0, counselled: 0 },
        startCounters() {
            this.animateValue('years', 0, 20, 2000);
            this.animateValue('students', 0, 2000, 2500);
            this.animateValue('counselled', 0, 20000, 3000);
        },
        animateValue(key, start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                this.counters[key] = Math.floor(progress * (end - start) + start);
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }
    }" x-init="startCounters()">

        <!-- Hero Section -->
        <div class="flex flex-col lg:flex-row items-center gap-12 py-10">
            <div class="flex-1">
                <span class="text-accent font-semibold tracking-widest uppercase text-sm">Personality-driven Career Clarity</span>
                <h1 class="text-4xl md:text-5xl font-extrabold mb-6 text-gray-900 mt-2">
                    Guiding Futures. <br><span class="text-accent">Building Better Tomorrows.</span>
                </h1>
                <p class="text-xl text-gray-600 leading-relaxed mb-8">
                    PATH finder is India’s one of the oldest career counselling and mentoring platforms founded by <strong>Shyam Verma</strong>, guiding students towards clarity, confidence, and meaningful careers.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#philosophy" class="bg-accent text-white px-8 py-3 rounded-full font-bold hover:bg-opacity-90 transition shadow-lg">Know Our Philosophy</a>
                    <a href="#mentor" class="border-2 border-accent text-accent px-8 py-3 rounded-full font-bold hover:bg-accent hover:text-white transition">Meet the Mentor</a>
                </div>
            </div>
            <div class="flex-1 w-full">
                <img src="{{ asset('/assets/images/services/about_img1.png') }}" alt="About Path Finder" class="rounded-2xl shadow-2xl w-full transform hover:scale-105 transition duration-500">
            </div>
        </div>

        <!-- Animated Stats Counter -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 py-16 my-12 bg-gray-50 rounded-3xl border border-gray-100 shadow-inner">
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-black text-accent mb-2"><span x-text="counters.years"></span>+</div>
                <div class="text-gray-500 font-medium uppercase tracking-wide">Years of Experience</div>
            </div>
            <div class="text-center border-y md:border-y-0 md:border-x border-gray-200 py-6 md:py-0">
                <div class="text-4xl md:text-5xl font-black text-accent mb-2"><span x-text="counters.students"></span>+</div>
                <div class="text-gray-500 font-medium uppercase tracking-wide">Students @ Top Positions</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-black text-accent mb-2"><span x-text="counters.counselled"></span>+</div>
                <div class="text-gray-500 font-medium uppercase tracking-wide">Students Counselled</div>
            </div>
        </div>

        <!-- More About Us Section -->
        <div class="flex flex-col lg:flex-row-reverse items-center gap-12 py-16">
            <div class="flex-1">
                <h2 class="text-3xl font-bold mb-6 text-gray-900">More About Us</h2>
                <div class="space-y-6 text-lg text-gray-600">
                    <p>We help students understand their aptitudes, personality traits, interests, and cognitive strengths before choosing a direction - so decisions are rooted in clarity, not confusion.</p>
                    <p>Our counselling approach blends scientifically designed psychometric assessments with two decades of real-world mentoring experience.</p>
                    <p>Backed by over 20 years of experience, PATH finder has helped thousands of students in India and abroad make confident, well-informed, and future-ready career choices.</p>
                </div>
            </div>
            <div class="flex-1 w-full">
                <img src="{{ asset('/assets/images/services/about_img2.png') }}" alt="Our Approach" class="rounded-2xl shadow-xl w-full">
            </div>
        </div>

        <!-- Philosophy & Core Values -->
        <div id="philosophy" class="py-16 bg-white border-y border-gray-100">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl font-bold mb-4 text-accent">Know Our Philosophy</h2>
                <p class="text-2xl font-medium text-gray-800 leading-snug italic">
                    "At PATH finder, we believe career decisions should be guided by deep self-awareness, not social pressure or short-term trends."
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Value 1 -->
                <div class="p-6 bg-white rounded-xl shadow-md border-b-4 border-accent hover:-translate-y-2 transition duration-300">
                    <h3 class="font-bold text-xl mb-3 text-gray-900">Self-Discovery First</h3>
                    <p class="text-gray-600">Understanding the student beyond marks, labels, and expectations.</p>
                </div>
                <!-- Value 2 -->
                <div class="p-6 bg-white rounded-xl shadow-md border-b-4 border-accent hover:-translate-y-2 transition duration-300">
                    <h3 class="font-bold text-xl mb-3 text-gray-900">Science-Backed</h3>
                    <p class="text-gray-600">Psychometric tools designed using modern psychological frameworks.</p>
                </div>
                <!-- Value 3 -->
                <div class="p-6 bg-white rounded-xl shadow-md border-b-4 border-accent hover:-translate-y-2 transition duration-300">
                    <h3 class="font-bold text-xl mb-3 text-gray-900">Personalized</h3>
                    <p class="text-gray-600">Mentorship tailored to individual strengths, challenges, and goals.</p>
                </div>
                <!-- Value 4 -->
                <div class="p-6 bg-white rounded-xl shadow-md border-b-4 border-accent hover:-translate-y-2 transition duration-300">
                    <h3 class="font-bold text-xl mb-3 text-gray-900">Ethical & Unbiased</h3>
                    <p class="text-gray-600">Driven by student’s best interests - no commissions or pressures.</p>
                </div>
            </div>
        </div>

        <!-- Founder's Note Section -->
        <div id="mentor" class="pt-20">
            <div class="flex flex-col lg:flex-row gap-12 items-start">
                <div class="flex-1 order-2 lg:order-1">
                    <h2 class="text-accent font-bold text-sm uppercase tracking-widest mb-2">Meet the Mentor Behind PATH finder</h2>
                    <h3 class="text-4xl font-bold mb-8 text-gray-900">Founder’s Note</h3>
                    
                    <div class="prose prose-xl text-gray-700 max-w-none space-y-4">
                        <p>Hello Friends, Namaste. I am extremely Happy to see you here :)</p>
                        <p class="font-bold text-accent italic">Welcome to the World of Awareness! Welcome to the World of Opportunities!</p>
                        <p>I am <strong>Shyam Verma</strong>. I was raised in a humble family of BHEL, Bhopal with limited resources but strong values. What shaped my life was not privilege, but the habit of questioning my own decisions, understanding myself deeply, and choosing paths logically at every stage.</p>
                        <p>Before turning 30, I achieved milestones many only dream of, simply because I understood myself well & took well informed decisions at crucial junctures.</p>
                        <p>I chose career counselling & training students as my profession because I believe that if self-awareness could transform an ordinary person like me, it could surely do the same for millions of students who lack guidance at a time when the world either criticizes or misunderstands them.</p>
                        <p>For over 20 years, I have listened to students, understood their uniqueness, and helped them believe bigger than their circumstances. PATH finder is an extension of that belief.</p>
                        
                        <div class="mt-8">
                            <p class="text-2xl font-bold text-gray-900">— Shyam Verma</p>
                            <p class="text-gray-500 italic text-lg">Founder & Director</p>
                        </div>

                        <div class="mt-10 pt-6 border-t border-gray-100">
                            <a href="/services" class="inline-flex items-center text-accent font-bold text-xl hover:gap-4 transition-all duration-300">
                                Find the guidance that fits you (Our Services) <span class="ml-2">→</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-4/12 order-1 lg:order-2 sticky top-10">
                    <div class="relative">
                        <div class="absolute -inset-4 bg-accent/10 rounded-2xl -rotate-3"></div>
                        <img src="{{ asset('/assets/images/services/about_img3.png') }}" alt="Shyam Verma" class="relative rounded-2xl shadow-2xl w-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.public>