<x-layouts.public title="Miracles - Career Counselling Like Never Before">
    <!-- Hero Slider Section -->
    <section id="hero-slider" class="bg-white relative min-h-[80vh] flex items-center py-16 overflow-hidden">
        <!-- Left Arrow -->
        <button onclick="heroSlider.prev()"
            class="hero-arrow absolute left-4 md:left-8 z-10 text-4xl md:text-6xl text-primary/70 hover:text-primary">
            <span class="font-light">&lt;</span>
        </button>

        <!-- Right Arrow -->
        <button onclick="heroSlider.next()"
            class="hero-arrow absolute right-4 md:right-8 z-10 text-4xl md:text-6xl text-primary/70 hover:text-primary">
            <span class="font-light">&gt;</span>
        </button>

        <!-- Slides Container -->
        <div class="hero-slides-container w-full">
            <div class="hero-slides flex transition-transform duration-500 ease-in-out"
                style="transform: translateX(0%);">

                <!-- Slide 1 -->
                <div class="hero-slide min-w-full">
                    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                        <h1
                            class="font-bold font-serif text-4xl sm:text-5xl md:text-6xl lg:text-7xl text-primary leading-tight mb-6">
                            Career Decisions deserve<br />
                            more than Guesswork
                        </h1>
                        <p class="text-lg md:text-xl text-primary/80 max-w-2xl mx-auto mb-12">
                            Psychometrics, Expert Counselling, and Regular Mentoring -
                            thoughtfully designed for students and professionals.
                        </p>
                        <div class="flex justify-center mb-12">
                            <div class="relative">
                                <img src="{{ asset('crossroads-hero.png') }}" alt="Career Crossroads"
                                    class="w-64 md:w-80 lg:w-96 h-auto rounded-lg" />
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="#assessment"
                                class="inline-flex items-center justify-center px-8 py-3 border-2 border-primary text-primary font-semibold text-sm uppercase tracking-wider hover:bg-primary hover:text-white transition-all duration-300">
                                EXPLORE
                            </a>
                            <a href="#assessment"
                                class="inline-flex items-center justify-center px-8 py-3 border-2 border-primary text-primary font-semibold text-sm uppercase tracking-wider hover:bg-primary hover:text-white transition-all duration-300">
                                TAKE FREE TEST
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="hero-slide min-w-full">
                    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                        <h1
                            class="font-bold font-serif text-4xl sm:text-5xl md:text-6xl lg:text-7xl text-primary leading-tight mb-6">
                            Discover Your<br />
                            True Potential
                        </h1>
                        <p class="text-lg md:text-xl text-primary/80 max-w-2xl mx-auto mb-12">
                            Scientifically designed assessments to uncover your strengths,
                            interests, and ideal career paths.
                        </p>
                        <div class="flex justify-center mb-12">
                            <div class="relative">
                                <div
                                    class="w-64 md:w-80 lg:w-96 h-48 md:h-56 lg:h-64 bg-gradient-to-br from-yellow-100 to-amber-200 rounded-lg flex items-center justify-center">
                                    <span
                                        class="material-symbols-rounded text-8xl md:text-9xl text-amber-600">psychology</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="#assessment"
                                class="inline-flex items-center justify-center px-8 py-3 border-2 border-primary text-primary font-semibold text-sm uppercase tracking-wider hover:bg-primary hover:text-white transition-all duration-300">
                                START ASSESSMENT
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="hero-slide min-w-full">
                    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                        <h1
                            class="font-bold font-serif text-4xl sm:text-5xl md:text-6xl lg:text-7xl text-primary leading-tight mb-6">
                            Expert Guidance<br />
                            Every Step of the Way
                        </h1>
                        <p class="text-lg md:text-xl text-primary/80 max-w-2xl mx-auto mb-12">
                            20+ years of experience helping students and professionals
                            achieve their career dreams.
                        </p>
                        <div class="flex justify-center mb-12">
                            <div class="relative">
                                <div
                                    class="w-64 md:w-80 lg:w-96 h-48 md:h-56 lg:h-64 bg-gradient-to-br from-red-100 to-red-200 rounded-lg flex items-center justify-center">
                                    <span
                                        class="material-symbols-rounded text-8xl md:text-9xl text-red-600">support_agent</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="#assessment"
                                class="inline-flex items-center justify-center px-8 py-3 border-2 border-primary text-primary font-semibold text-sm uppercase tracking-wider hover:bg-primary hover:text-white transition-all duration-300">
                                BOOK CONSULTATION
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Slider Dots -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex gap-3 z-10">
            <button onclick="heroSlider.goTo(0)"
                class="hero-dot w-3 h-3 rounded-full bg-primary transition-all duration-300" data-slide="0"></button>
            <button onclick="heroSlider.goTo(1)"
                class="hero-dot w-3 h-3 rounded-full bg-primary/30 hover:bg-primary/50 transition-all duration-300"
                data-slide="1"></button>
            <button onclick="heroSlider.goTo(2)"
                class="hero-dot w-3 h-3 rounded-full bg-primary/30 hover:bg-primary/50 transition-all duration-300"
                data-slide="2"></button>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="font-serif text-3xl md:text-4xl text-primary mb-6">
                    Tap Into The <span class="italic">New Science of Success</span>
                </h2>
                <p class="text-lg text-gray-600">
                    Life Transforming Counselling with the Power of Psychometrics
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Feature 1 -->
                <div class="text-center p-6">
                    <div class="w-16 h-16 mx-auto mb-4 bg-yellow-100 rounded-full flex items-center justify-center">
                        <span class="material-symbols-rounded text-3xl text-yellow-600">psychology</span>
                    </div>
                    <h3 class="font-semibold text-primary mb-2">Discover Your Natural Strengths</h3>
                </div>

                <!-- Feature 2 -->
                <div class="text-center p-6">
                    <div class="w-16 h-16 mx-auto mb-4 bg-orange-100 rounded-full flex items-center justify-center">
                        <span class="material-symbols-rounded text-3xl text-orange-600">lightbulb</span>
                    </div>
                    <h3 class="font-semibold text-primary mb-2">Understand How You Think and Behave</h3>
                </div>

                <!-- Feature 3 -->
                <div class="text-center p-6">
                    <div class="w-16 h-16 mx-auto mb-4 bg-red-100 rounded-full flex items-center justify-center">
                        <span class="material-symbols-rounded text-3xl text-red-600">groups</span>
                    </div>
                    <h3 class="font-semibold text-primary mb-2">Work Better in Teams</h3>
                </div>

                <!-- Feature 4 -->
                <div class="text-center p-6">
                    <div class="w-16 h-16 mx-auto mb-4 bg-purple-100 rounded-full flex items-center justify-center">
                        <span class="material-symbols-rounded text-3xl text-purple-600">target</span>
                    </div>
                    <h3 class="font-semibold text-primary mb-2">Make Better Decisions</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/3">
                    <div class="bg-gradient-to-br from-amber-400 to-amber-500 rounded-2xl p-8 text-center">
                        <div class="w-32 h-32 mx-auto mb-4 bg-white rounded-full overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=200&q=80"
                                alt="Counsellor" class="w-full h-full object-cover" />
                        </div>
                        <h3 class="text-xl font-bold text-primary">Shyam Verma</h3>
                        <p class="text-sm text-primary/80">DIRECTOR & COUNSELLOR @ MIRACLES</p>
                    </div>
                </div>
                <div class="md:w-2/3">
                    <div class="bg-red-600 rounded-2xl p-8 text-white">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="material-symbols-rounded text-4xl text-yellow-400">emoji_events</span>
                        </div>
                        <ul class="space-y-3 text-lg">
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-yellow-400 rounded-full"></span>
                                20+ years of Experience.
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-yellow-400 rounded-full"></span>
                                2000+ Students @ Top Positions Globally.
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-yellow-400 rounded-full"></span>
                                20,000+ Students Counselled & Trained.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Form Section -->
    <section id="assessment" class="py-24 bg-white">
        <div class="max-w-4xl mx-auto px-4">

            <div class="bg-gray-50 rounded-3xl p-8 md:p-12 shadow-xl border border-gray-100">
                <div class="text-center mb-10">
                    <div class="inline-flex items-center justify-center p-3 bg-kraft/20 rounded-xl mb-4">
                        <span class="material-symbols-rounded text-3xl text-kraft-dark">rocket_launch</span>
                    </div>
                    <h2 class="font-serif text-3xl md:text-4xl text-primary mb-4">Begin Your Journey</h2>
                    <p class="text-gray-600 text-lg">Fill out your profile to generate your free career analysis.
                    </p>
                </div>

                <form class="space-y-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-2">
                            <label class="block text-sm font-bold text-gray-700 ml-1">Full Name</label>
                            <input type="text" placeholder="Jane Doe"
                                class="w-full rounded-xl border-gray-200 bg-white p-3.5 focus:border-kraft focus:ring-4 focus:ring-kraft/10 transition-all outline-none" />
                        </div>
                        <div class="space-y-2">
                            <label class="block text-sm font-bold text-gray-700 ml-1">Age</label>
                            <input type="number" placeholder="25"
                                class="w-full rounded-xl border-gray-200 bg-white p-3.5 focus:border-kraft focus:ring-4 focus:ring-kraft/10 transition-all outline-none" />
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-gray-700 ml-1">Highest Education</label>
                        <input type="text" placeholder="e.g. Bachelor's in Marketing"
                            class="w-full rounded-xl border-gray-200 bg-white p-3.5 focus:border-kraft focus:ring-4 focus:ring-kraft/10 transition-all outline-none" />
                    </div>

                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-gray-700 ml-1">Interests & Hobbies</label>
                        <textarea rows="3"
                            placeholder="What do you love doing? e.g. Coding, writing, solving puzzles..."
                            class="w-full rounded-xl border-gray-200 bg-white p-3.5 focus:border-kraft focus:ring-4 focus:ring-kraft/10 transition-all outline-none resize-none"></textarea>
                    </div>

                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-gray-700 ml-1">Career Aspirations</label>
                        <textarea rows="3" placeholder="Where do you see yourself in 5 years?"
                            class="w-full rounded-xl border-gray-200 bg-white p-3.5 focus:border-kraft focus:ring-4 focus:ring-kraft/10 transition-all outline-none resize-none"></textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-2">
                            <label class="block text-sm font-bold text-gray-700 ml-1">Email</label>
                            <input type="email" placeholder="you@example.com"
                                class="w-full rounded-xl border-gray-200 bg-white p-3.5 focus:border-kraft focus:ring-4 focus:ring-kraft/10 transition-all outline-none" />
                        </div>
                        <div class="space-y-2">
                            <label class="block text-sm font-bold text-gray-700 ml-1">Phone</label>
                            <input type="tel" placeholder="(+91) xxxxx-xxxxx"
                                class="w-full rounded-xl border-gray-200 bg-white p-3.5 focus:border-kraft focus:ring-4 focus:ring-kraft/10 transition-all outline-none" />
                        </div>
                    </div>

                    <div class="pt-4">
                        <button type="button"
                            class="w-full py-4 bg-primary text-white font-bold text-lg rounded-xl hover:bg-gray-800 transition-all duration-300">
                            Generate Analysis
                        </button>
                        <p class="text-center text-xs text-gray-400 mt-4">By continuing, you agree to our Terms of
                            Service.</p>
                    </div>
                </form>
            </div>

            <!-- Test Code Entry Section -->
            <div
                class="mt-12 rounded-3xl p-8 md:p-12 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 shadow-2xl text-white">
                <livewire:start-test-public />
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            // Hero Slider Module
            const heroSlider = (function () {
                let currentSlide = 0;
                const totalSlides = 3;
                let autoPlayInterval = null;
                const autoPlayDelay = 5000; // 5 seconds

                // Get DOM elements
                function getSliderTrack() {
                    return document.querySelector('.hero-slides');
                }

                function getDots() {
                    return document.querySelectorAll('.hero-dot');
                }

                // Update slider position
                function updateSlider() {
                    const track = getSliderTrack();
                    if (track) {
                        track.style.transform = `translateX(-${currentSlide * 100}%)`;
                    }
                    updateDots();
                }

                // Update dot indicators
                function updateDots() {
                    const dots = getDots();
                    dots.forEach((dot, index) => {
                        if (index === currentSlide) {
                            dot.classList.remove('bg-primary/30');
                            dot.classList.add('bg-primary');
                        } else {
                            dot.classList.remove('bg-primary');
                            dot.classList.add('bg-primary/30');
                        }
                    });
                }

                // Go to next slide
                function next() {
                    currentSlide = (currentSlide + 1) % totalSlides;
                    updateSlider();
                    resetAutoPlay();
                }

                // Go to previous slide
                function prev() {
                    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                    updateSlider();
                    resetAutoPlay();
                }

                // Go to specific slide
                function goTo(index) {
                    if (index >= 0 && index < totalSlides) {
                        currentSlide = index;
                        updateSlider();
                        resetAutoPlay();
                    }
                }

                // Start auto-play
                function startAutoPlay() {
                    if (autoPlayInterval) return;
                    autoPlayInterval = setInterval(() => {
                        currentSlide = (currentSlide + 1) % totalSlides;
                        updateSlider();
                    }, autoPlayDelay);
                }

                // Stop auto-play
                function stopAutoPlay() {
                    if (autoPlayInterval) {
                        clearInterval(autoPlayInterval);
                        autoPlayInterval = null;
                    }
                }

                // Reset auto-play timer
                function resetAutoPlay() {
                    stopAutoPlay();
                    startAutoPlay();
                }

                // Initialize slider
                function init() {
                    const slider = document.getElementById('hero-slider');
                    if (slider) {
                        // Pause on hover
                        slider.addEventListener('mouseenter', stopAutoPlay);
                        slider.addEventListener('mouseleave', startAutoPlay);

                        // Start auto-play
                        startAutoPlay();
                    }
                }

                // Initialize when DOM is ready
                if (document.readyState === 'loading') {
                    document.addEventListener('DOMContentLoaded', init);
                } else {
                    init();
                }

                // Public API
                return {
                    next,
                    prev,
                    goTo
                };
            })();
        </script>

        <script>
    let modalShown = false;

    // Open modal
    function openFreeModal() {
        const modal = document.getElementById('freeTestModal');
        if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    }

    // Close modal
    function closeFreeModal() {
        const modal = document.getElementById('freeTestModal');
        if (modal) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    }

    // Scroll to form section
    function scrollToAssessment() {
        closeFreeModal();
        document.getElementById('assessment')?.scrollIntoView({
            behavior: 'smooth'
        });
    }

    // Scroll trigger (only once)
    window.addEventListener('scroll', function () {
        if (modalShown) return;

        if (window.scrollY > 400) { // 👈 adjust scroll trigger
            modalShown = true;
            openFreeModal();
        }
    });
</script>

<script>
    function freeTestClicked() {
        alert('Clicked successfully!');
        // Optionally, close modal after click
        closeFreeModal();
    }
</script>
    @endpush

    <!-- Free Test Modal -->
<div id="freeTestModal"
    class="fixed inset-0 bg-black/50 z-50 hidden items-center justify-center">

    <div class="bg-white rounded-2xl p-6 max-w-md w-full relative shadow-2xl">

        <!-- Close Button -->
        <button onclick="closeFreeModal()"
            class="absolute top-3 right-3 text-gray-500 hover:text-black text-xl">
            ✖
        </button>

        <h2 class="text-2xl font-bold text-primary mb-4 text-center">
            🎯 Take Free Psychometric Test
        </h2>

        <p class="text-gray-600 text-center mb-6">
            Discover your strengths & ideal career path in just 5 minutes.
        </p>

        <!-- Changed from <a> to <button> -->
       <a href="{{ route('free.test') }}"
         class="w-full py-3 bg-primary text-white rounded-xl font-semibold text-center block">
         Start Free Test
        </a>

    </div>
</div>

</x-layouts.public>