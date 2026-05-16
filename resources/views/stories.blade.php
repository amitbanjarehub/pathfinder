<x-layouts.public title="About Us - Miracles">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        {{-- HEADER SECTION --}}
        <div class="text-center max-w-4xl mx-auto mb-16">

            <span
                class="inline-flex items-center px-5 py-2 rounded-full bg-accent/10 text-accent text-sm font-bold tracking-wider uppercase mb-5">
                Success Stories
            </span>

            <h1 class="text-4xl sm:text-5xl font-extrabold text-slate-900 leading-tight">
                SuccessStories of Clarity
            </h1>

            <p class="mt-4 text-lg sm:text-xl text-slate-600 font-medium italic">
                (Real Journeys. Real Outcomes.)
            </p>

            <p class="mt-6 text-slate-600 text-base sm:text-lg leading-relaxed max-w-3xl mx-auto">
                Students who once felt uncertain are now confident about their career paths.
                Explore their journeys and see how the right guidance can make all the difference.
            </p>

        </div>

        @php
            $stories = [
                [
                    'type' => 'video',
                    'title' => 'PATH finder changed my career direction completely.',
                    'author' => 'Shubham',
                    'role' => 'B.Tech Student',
                    'thumbnail' => 'https://img.youtube.com/vi/jNQXAC9IVRw/maxresdefault.jpg',
                    'video' => 'https://www.youtube.com/embed/jNQXAC9IVRw',
                    'full_story' =>
                        'Before joining PATH finder, I was completely confused about my future. Through proper counselling and career assessment, I discovered my actual strengths and interests. Today, I am confidently pursuing my B.Tech journey with clarity and purpose.',
                ],

                [
                    'type' => 'video',
                    'title' => 'Before & After counselling experience.',
                    'author' => 'Aman',
                    'role' => 'Student',
                    'thumbnail' => 'https://img.youtube.com/vi/jNQXAC9IVRw/maxresdefault.jpg',
                    'video' => 'https://www.youtube.com/embed/OMBo1He1myg',
                    'full_story' =>
                        'I never knew which stream was right for me. The mentors at PATH finder guided me step by step and helped me understand my personality deeply. The transformation in my confidence level has been unbelievable.',
                ],

                [
                    'type' => 'video',
                    'title' => 'Counselling gave me confidence to choose my dream path.',
                    'author' => 'Ritika',
                    'role' => 'Class 12 Student',
                    'thumbnail' => 'https://img.youtube.com/vi/jNQXAC9IVRw/maxresdefault.jpg',
                    'video' => 'https://www.youtube.com/embed/jNQXAC9IVRw',
                    'full_story' =>
                        'After taking the assessment and counselling sessions, I became clear about my career goals. The guidance helped me remove fear and self-doubt completely.',
                ],

                [
                    'type' => 'blog',
                    'title' =>
                        'How Nitya Overcame her Inhibitions and Biases to Choose the Stream Best Aligned to her Career Goals',
                    'author' => 'Nitya Gupta',
                    'role' => 'Class XI Humanities Student',
                    'image' => 'https://randomuser.me/api/portraits/women/44.jpg',

                    'problem' =>
                        'Nitya was keen on taking up humanities in class 11th but everyone advised her not to. She was unsure about what subjects were good for her and the career options they opened.',

                    'solution' =>
                        'PATH finder helped her select the right stream and subject combinations suited to her strengths and abilities. We addressed her concerns and informed her about different stream options.',

                    'result' =>
                        'She successfully opted for the humanities stream in class 11th and is now confidently working towards a career in Psychology or Civil Services.',

                    'background' =>
                        'Nitya Gupta is a class XI Humanities student. Until recently, she was quite confused about her choice of subjects after class 10th. Given her brilliant academic performance, everyone expected her to take science in class 11th. However, Nitya wanted to explore Humanities and understand her true interests.',

                    'how_we_helped' => [
                        'Gaining an accurate picture of her strengths, weaknesses and abilities.',
                        'Choosing the right stream and subject combinations.',
                        'Developing awareness about various career opportunities.',
                    ],

                    'assessment' => [
                        'She was good at communicating and engaging with people.',
                        'She enjoyed discussions, debates and group projects.',
                        'She had strong creative thinking abilities.',
                        'She was comfortable dealing with numbers.',
                    ],

                    'discussion' =>
                        'During counselling sessions, Nitya shared concerns about choosing humanities because of social stereotypes. PATH finder counsellors guided her about career opportunities in humanities and helped her understand future possibilities clearly.',

                    'outcome' =>
                        'Nitya is now successfully pursuing Humanities with Psychology, Economics and English as her subjects and aspires to pursue Psychology after class 12th.',
                ],

                [
                    'type' => 'blog',
                    'title' => 'My elder provided a renewed framework for my possibilities.',
                    'author' => 'Kanha',
                    'role' => 'Parent',
                    'image' => 'https://randomuser.me/api/portraits/men/32.jpg',

                    'problem' =>
                        'As a parent, I was worried about my child’s future and confused about the right career direction.',

                    'solution' => 'PATH finder guided us with proper counselling, assessment and future planning.',

                    'result' => 'We became confident about career decisions and future academic planning.',

                    'background' => 'I wanted proper guidance for my child’s future career journey.',

                    'how_we_helped' => [
                        'Career counselling sessions',
                        'Psychometric assessments',
                        'Future planning guidance',
                    ],

                    'assessment' => [
                        'Strong analytical thinking',
                        'Good leadership abilities',
                        'Creative problem solving',
                    ],

                    'discussion' =>
                        'The counsellors clearly explained future opportunities and helped remove our confusion.',

                    'outcome' => 'Today we feel much more confident and clear about the future path.',
                ],

                [
                    'type' => 'blog',
                    'title' => 'Speaking to Mr. Verma and interacting with the experienced team was inspiring.',
                    'author' => 'Shreya',
                    'role' => 'High School Student',
                    'image' => 'https://randomuser.me/api/portraits/women/65.jpg',

                    'problem' => 'I was confused between multiple career options and lacked confidence.',

                    'solution' => 'The mentors explained every career option according to my strengths.',

                    'result' => 'I became confident and focused towards my future career goals.',

                    'background' => 'I always wanted someone to guide me personally regarding my career.',

                    'how_we_helped' => ['Personality assessment', 'Career mapping', 'Mentor guidance'],

                    'assessment' => [
                        'Excellent communication skills',
                        'Creative mindset',
                        'Strong interpersonal abilities',
                    ],

                    'discussion' => 'PATH finder mentors helped me understand my strengths and future opportunities.',

                    'outcome' => 'Now I have a clear career direction and confidence to move forward.',
                ],
            ];
        @endphp

        {{-- STORIES GRID --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach ($stories as $index => $story)
                <div onclick="openStoryModal({{ $index }})"
                    class="bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-2xl transition-all duration-300 flex flex-col cursor-pointer group">

                    {{-- VIDEO CARD --}}
                    @if ($story['type'] === 'video')
                        <div class="relative aspect-video overflow-hidden">

                            <iframe class="w-full h-full pointer-events-none" src="{{ $story['video'] }}"
                                title="Video Story" frameborder="0" allowfullscreen>
                            </iframe>

                        </div>

                        <div class="p-6 flex flex-col flex-grow">

                            <p class="text-slate-700 leading-relaxed text-sm mb-6">
                                {{ $story['title'] }}
                            </p>

                            <div class="flex items-center gap-3 mb-6">

                                <img src="https://ui-avatars.com/api/?name={{ urlencode($story['author']) }}"
                                    class="w-11 h-11 rounded-full object-cover">

                                <div>

                                    <h4 class="font-bold text-slate-900">
                                        {{ $story['author'] }}
                                    </h4>

                                    <p class="text-sm text-slate-500">
                                        {{ $story['role'] }}
                                    </p>

                                </div>

                            </div>

                            

                        </div>
                    @else
                        {{-- BLOG CARD --}}
                        <div class="p-6 h-full flex flex-col">

                            <div>

                                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-accent mb-4 opacity-70"
                                    fill="currentColor" viewBox="0 0 24 24">

                                    <path
                                        d="M7.17 6A5.001 5.001 0 0 0 2 11v7h7v-7H5.08A3.001 3.001 0 0 1 8 8.08V6H7.17zm9 0A5.001 5.001 0 0 0 11 11v7h7v-7h-3.92A3.001 3.001 0 0 1 17 8.08V6h-.83z" />

                                </svg>

                                <p class="text-slate-700 leading-relaxed text-sm mb-8">
                                    {{ $story['title'] }}
                                </p>

                            </div>

                            <div class="flex items-center gap-3 mt-auto mb-6">

                                <img src="{{ $story['image'] }}" class="w-11 h-11 rounded-full object-cover">

                                <div>

                                    <h4 class="font-bold text-slate-900">
                                        {{ $story['author'] }}
                                    </h4>

                                    <p class="text-sm text-slate-500">
                                        {{ $story['role'] }}
                                    </p>

                                </div>

                            </div>

                            

                        </div>
                    @endif

                </div>
            @endforeach

        </div>

        {{-- PRIMARY CTA --}}
        <div class="mt-24 bg-gradient-to-r from-accent to-indigo-900 rounded-3xl overflow-hidden shadow-2xl">

            <div class="px-8 py-14 sm:px-12 text-center text-white">

                <h2 class="text-3xl sm:text-4xl font-extrabold leading-tight max-w-4xl mx-auto">
                    Answer a Few Questions to Discover Your Ideal Career
                </h2>

                <p class="mt-5 text-indigo-100 text-lg max-w-2xl mx-auto">
                    Start your journey towards clarity, confidence and a career path that truly matches your strengths.
                </p>

                <div class="mt-10">

                    <a href="/assessment"
                        class="inline-flex items-center gap-3 px-8 py-4 bg-white text-accent hover:bg-slate-100 rounded-2xl font-black text-lg shadow-xl transition-all duration-300 hover:-translate-y-1">

                        Get Started

                    </a>

                </div>

            </div>

        </div>

        {{-- MICRO CTA --}}
        <div class="mt-24 text-center max-w-3xl mx-auto">

            <div class="bg-white border border-slate-100 shadow-xl rounded-3xl px-8 py-12">

                <h3 class="text-3xl font-extrabold text-slate-900 mb-4">
                    Share Your Success Story
                </h3>

                <p class="text-slate-600 text-lg leading-relaxed">
                    If PATH finder has been part of your journey, we’d love to hear your story as it could truly inspire
                    someone.
                    Upload a video or write your story.
                </p>

                <div class="mt-8">

                    <a href="#"
                        class="inline-flex items-center gap-3 px-8 py-4 bg-accent hover:bg-indigo-700 text-white rounded-2xl font-bold transition-all duration-300 hover:-translate-y-1">

                        Share Your Story

                    </a>

                </div>

            </div>

        </div>

    </div>

    {{-- STORY MODAL --}}
    <div id="storyModal"
        class="fixed inset-0 z-50 hidden items-center justify-center bg-black/70 backdrop-blur-sm p-4 overflow-y-auto">

        {{-- <div
            class="bg-white rounded-3xl max-w-5xl w-full relative shadow-2xl animate-fadeIn overflow-hidden"> --}}

        <div
            class="bg-white rounded-3xl max-w-4xl w-full relative shadow-2xl animate-fadeIn overflow-hidden max-h-[88vh] overflow-y-auto">

            <button onclick="closeStoryModal()"
                class="absolute top-4 right-4 z-50 w-10 h-10 rounded-full bg-white shadow hover:bg-slate-100 text-slate-700 flex items-center justify-center">

                ✕

            </button>

            <div id="storyContent"></div>

        </div>

    </div>

    {{-- SCRIPT --}}
    <script>
        const stories = @json($stories);

        const storyModal = document.getElementById('storyModal');
        const storyContent = document.getElementById('storyContent');

        function openStoryModal(index) {

            const story = stories[index];

            // VIDEO STORY
            if (story.type === 'video') {

                storyContent.innerHTML = `
                    <div class="p-8">

                        <h2 class="text-4xl font-extrabold text-slate-900 mb-6">
                            ${story.title}
                        </h2>

                        <div class="aspect-video rounded-2xl overflow-hidden mb-6">
                            <iframe
                                class="w-full h-full"
                                src="${story.video}"
                                frameborder="0"
                                allowfullscreen>
                            </iframe>
                        </div>

                        <div class="flex items-center gap-4 mb-6">

                            <img
                                src="https://ui-avatars.com/api/?name=${encodeURIComponent(story.author)}"
                                class="w-14 h-14 rounded-full object-cover">

                            <div>

                                <h4 class="font-bold text-xl text-slate-900">
                                    ${story.author}
                                </h4>

                                <p class="text-slate-500">
                                    ${story.role}
                                </p>

                            </div>

                        </div>

                        <p class="text-slate-700 text-lg leading-relaxed">
                            ${story.full_story}
                        </p>

                    </div>
                `;

            } else {

                // BLOG STORY FULL DESIGN
                storyContent.innerHTML = `
                    <div>

                        <div class="bg-[#9f4a5a] h-40 relative">

                            <div class="absolute left-1/2 -bottom-16 transform -translate-x-1/2">

                                <img
                                    src="${story.image}"
                                    class="w-52 h-52 rounded-2xl object-cover shadow-2xl border-4 border-white">

                            </div>

                        </div>

                        <div class="pt-24 px-6 sm:px-10 pb-10">

                            <h2 class="text-3xl font-bold text-center text-slate-800 leading-snug max-w-4xl mx-auto">
                                ${story.title}
                            </h2>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-14 text-center">

                                <div>

                                    <h3 class="text-2xl font-bold text-slate-800 mb-4">
                                        Problem
                                    </h3>

                                    <p class="text-slate-600 leading-relaxed">
                                        ${story.problem}
                                    </p>

                                </div>

                                <div class="border-x border-slate-200 px-6">

                                    <h3 class="text-2xl font-bold text-slate-800 mb-4">
                                        Solution
                                    </h3>

                                    <p class="text-slate-600 leading-relaxed">
                                        ${story.solution}
                                    </p>

                                </div>

                                <div>

                                    <h3 class="text-2xl font-bold text-slate-800 mb-4">
                                        Result
                                    </h3>

                                    <p class="text-slate-600 leading-relaxed">
                                        ${story.result}
                                    </p>

                                </div>

                            </div>

                            <div class="mt-16 space-y-12">

                                <div>

                                    <h3 class="text-3xl font-bold text-slate-800 mb-5">
                                        Background
                                    </h3>

                                    <p class="text-slate-700 leading-relaxed text-lg">
                                        ${story.background}
                                    </p>

                                </div>

                                <div class="bg-slate-100 rounded-3xl p-8">

                                    <h3 class="text-3xl font-bold text-slate-800 mb-6">
                                        How We Helped
                                    </h3>

                                    <ul class="space-y-4 text-slate-700 text-lg">

                                        ${story.how_we_helped.map(item => `
                                                        <li class="flex items-start gap-3">
                                                            <span class="mt-2 w-2.5 h-2.5 rounded-full bg-accent"></span>
                                                            <span>${item}</span>
                                                        </li>
                                                    `).join('')}

                                    </ul>

                                </div>

                                <div>

                                    <h3 class="text-3xl font-bold text-slate-800 mb-6">
                                        Stream Assessment - Understanding Interests and Abilities
                                    </h3>

                                    <ul class="space-y-4 text-slate-700 text-lg">

                                        ${story.assessment.map(item => `
                                                        <li class="flex items-start gap-3">
                                                            <span class="mt-2 w-2.5 h-2.5 rounded-full bg-accent"></span>
                                                            <span>${item}</span>
                                                        </li>
                                                    `).join('')}

                                    </ul>

                                </div>

                                <div>

                                    <h3 class="text-3xl font-bold text-slate-800 mb-5">
                                        Discussions about Career
                                    </h3>

                                    <p class="text-slate-700 leading-relaxed text-lg">
                                        ${story.discussion}
                                    </p>

                                </div>

                                <div>

                                    <h3 class="text-3xl font-bold text-slate-800 mb-5">
                                        Outcome
                                    </h3>

                                    <p class="text-slate-700 leading-relaxed text-lg">
                                        ${story.outcome}
                                    </p>

                                </div>

                                <div class="text-center pt-4">

    <button
        onclick="closeStoryModal()"
        class="inline-flex items-center gap-3 px-8 py-4 bg-accent hover:bg-indigo-700 text-white rounded-2xl font-bold transition-all duration-300 hover:-translate-y-1">

        Read More Success Stories

        <svg xmlns="http://www.w3.org/2000/svg"
            class="w-5 h-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor">

            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M13 7l5 5m0 0l-5 5m5-5H6" />

        </svg>

    </button>

</div>

                            </div>

                        </div>

                    </div>
                `;
            }

            storyModal.classList.remove('hidden');
            storyModal.classList.add('flex');

            document.body.classList.add('overflow-hidden');
        }

        function closeStoryModal() {

            storyModal.classList.add('hidden');
            storyModal.classList.remove('flex');

            document.body.classList.remove('overflow-hidden');
        }

        storyModal.addEventListener('click', function(e) {

            if (e.target === storyModal) {

                closeStoryModal();

            }

        });
    </script>

    {{-- ANIMATION --}}
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
