<x-layouts.public title="Process (How It Works) - PATH finder">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <div class="relative bg-gradient-to-b from-gray-50 to-white overflow-hidden min-h-screen font-sans">

        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-7xl h-[400px] bg-gradient-to-r from-blue-500/10 via-accent/5 to-teal-500/10 blur-3xl rounded-full pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 relative z-10">

            <div class="text-center max-w-3xl mx-auto mb-16 animate__animated animate__fadeIn">
                <span
                    class="text-xs uppercase tracking-widest font-bold text-accent bg-accent/10 px-3 py-1 rounded-full">Our
                    Methodology</span>
                <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 mt-3 mb-4 tracking-tight">
                    PROCESS <span
                        class="text-accent text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">(HOW
                        IT WORKS)</span>
                </h1>
                <p class="text-xl italic text-gray-600 font-medium">
                    “From Discovery to Direction to Destination.”
                </p>
                <p class="mt-4 text-lg text-gray-600 leading-relaxed">
                    At <strong class="text-slate-900 font-semibold">PATH finder</strong>, we offer three tailored types
                    of career counselling support, allowing individuals to choose what best fits their current needs.
                </p>
            </div>

            <div x-data="{ activeTab: 'discovery' }" class="w-full">

                <div
                    class="flex flex-col sm:flex-row justify-center items-center gap-4 mb-16 bg-slate-100 p-2 rounded-2xl max-w-4xl mx-auto shadow-inner">
                    <button @click="activeTab = 'discovery'"
                        :class="activeTab === 'discovery' ? 'bg-white text-blue-600 shadow-md font-bold scale-105' :
                            'text-gray-600 hover:text-slate-900 font-medium'"
                        class="w-full sm:w-auto flex-1 flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl transition-all duration-300 transform">
                        <span>🔍</span> Discovery Module
                    </button>
                    <button @click="activeTab = 'direction'"
                        :class="activeTab === 'direction' ? 'bg-white text-indigo-600 shadow-md font-bold scale-105' :
                            'text-gray-600 hover:text-slate-900 font-medium'"
                        class="w-full sm:w-auto flex-1 flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl transition-all duration-300 transform">
                        <span>🧭</span> Direction Module
                    </button>
                    <button @click="activeTab = 'destination'"
                        :class="activeTab === 'destination' ? 'bg-white text-purple-600 shadow-md font-bold scale-105' :
                            'text-gray-600 hover:text-slate-900 font-medium'"
                        class="w-full sm:w-auto flex-1 flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl transition-all duration-300 transform">
                        <span>🌟</span> Destination Module
                    </button>
                </div>

                <div
                    class="bg-white rounded-3xl shadow-xl border border-gray-100 p-6 md:p-10 lg:p-12 transition-all duration-500">

                    <div x-show="activeTab === 'discovery'" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-4"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                        <div class="lg:col-span-7 space-y-6">
                            <div
                                class="inline-flex items-center gap-2 bg-blue-50 text-blue-700 px-4 py-1.5 rounded-lg font-semibold text-sm">
                                <span>🔍</span> Career Counselling Report
                            </div>
                            <h2 class="text-3xl font-bold text-slate-900">“Understand Yourself Before You Decide”</h2>
                            <p class="text-gray-600 text-lg leading-relaxed">
                                The Discovery Module is the foundation of the entire PATH Finder journey. It is designed
                                to help students and parents gain deep clarity about the student’s natural strengths,
                                interests, personality traits, and thinking patterns—before any major academic or career
                                decision is made.
                            </p>
                            <p class="text-gray-600 text-lg leading-relaxed">
                                In this module, the student undertakes scientifically designed psychometric tests
                                (assessments). The outcome is a comprehensive, easy-to-understand PDF report presented
                                in both narrative and graphical formats.
                            </p>

                            <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                                <h4 class="font-bold text-slate-800 mb-4 flex items-center gap-2">
                                    <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    The PDF report features:
                                </h4>
                                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-slate-600 font-medium">
                                    <li class="flex items-start gap-2">✅ Clear and Self-explanatory</li>
                                    <li class="flex items-start gap-2">✅ Clutter-free Presentation</li>
                                    <li class="flex items-start gap-2">✅ Free from Complex Jargons</li>
                                    <li class="flex items-start gap-2">✅ Easy Parent-Student Read</li>
                                </ul>
                            </div>

                            <div class="border-l-4 border-blue-500 bg-blue-50/50 p-5 rounded-r-xl">
                                <h4 class="font-bold text-blue-900 mb-2">It helps answer critical questions such as:
                                </h4>
                                <ul class="space-y-2 text-slate-700">
                                    <li>• What am I naturally good at?</li>
                                    <li>• Where do my interests and aptitude genuinely intersect?</li>
                                    <li>• Which fields align with my abilities and temperament?</li>
                                </ul>
                            </div>

                            <p
                                class="text-md font-medium text-amber-700 bg-amber-50 border border-amber-200/60 p-4 rounded-xl">
                                💡 <strong>Note:</strong> The Discovery Module does not give advice—it gives clarity. It
                                ensures that future decisions are based on self-awareness, not assumptions or social
                                pressure.
                            </p>

                            <div class="pt-4">
                                <h3 class="text-xl font-bold text-slate-900 mb-6">The 3 Simple Steps:</h3>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                    <div class="bg-white border border-gray-100 shadow-sm p-5 rounded-xl relative">
                                        <div
                                            class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-sm mb-3">
                                            1</div>
                                        <h5 class="font-bold text-slate-900 mb-1">Register & Pay</h5>
                                        <p class="text-sm text-gray-500">Complete short registration & confirm
                                            enrollment.</p>
                                    </div>
                                    <div class="bg-white border border-gray-100 shadow-sm p-5 rounded-xl relative">
                                        <div
                                            class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-sm mb-3">
                                            2</div>
                                        <h5 class="font-bold text-slate-900 mb-1">Take Assessment</h5>
                                        <p class="text-sm text-gray-500">Appear for scientifically designed psychometric
                                            test.</p>
                                    </div>
                                    <div class="bg-white border border-gray-100 shadow-sm p-5 rounded-xl relative">
                                        <div
                                            class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-sm mb-3">
                                            3</div>
                                        <h5 class="font-bold text-slate-900 mb-1">Get Career Clarity</h5>
                                        <p class="text-sm text-gray-500">Receive clear PDF report with deep insights.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="p-4 bg-purple-50 text-purple-900 border border-purple-100 rounded-xl text-sm leading-relaxed">
                                ⭐ <strong>IMP:</strong> If a student avails the Discovery module and later wants to
                                upgrade to Direction/Destination Module, the fee already paid will be fully
                                adjusted/deducted from the higher module fee.
                            </div>

                            <div
                                class="pt-4 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-6">
                                <div>
                                    <span class="text-sm font-semibold text-slate-500 block">BEST FOR</span>
                                    <span class="text-md font-bold text-slate-800">Curious students seeking early career
                                        exploration.</span>
                                </div>
                                <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto">
                                    <a href="/get-started"
                                        class="bg-blue-600 text-white text-center font-bold px-6 py-3.5 rounded-xl hover:bg-blue-700 shadow-lg shadow-blue-600/20 transition duration-300 whitespace-nowrap">Discover
                                        Your Career Now!</a>
                                    <a href="/sample-report.pdf" target="_blank"
                                        class="border border-slate-200 text-center font-semibold text-slate-700 px-5 py-3.5 rounded-xl hover:bg-slate-50 transition duration-300 whitespace-nowrap text-sm flex items-center justify-center gap-1">📄
                                        See Sample Report</a>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-5 lg:sticky lg:top-8 flex flex-col items-center justify-center">
                            <div
                                class="relative w-full max-w-sm aspect-[4/5] bg-rose-50 rounded-2xl overflow-hidden p-6 shadow-md border border-rose-100/40 flex flex-col justify-between">
                                <span
                                    class="text-slate-800 font-extrabold text-2xl tracking-tight text-center block w-full mt-2">Discovery</span>
                                <img src="{{ asset('/assets/images/services/img2.png') }}"
                                    alt="Discovery Process Graphic"
                                    class="w-auto h-3/4 mx-auto object-contain mix-blend-multiply">
                                <div class="w-full h-1 bg-rose-400/50 rounded-full my-1"></div>
                            </div>
                        </div>
                    </div>

                    <div x-show="activeTab === 'direction'" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-4"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                        <div class="lg:col-span-7 space-y-6">
                            <div
                                class="inline-flex items-center gap-2 bg-indigo-50 text-indigo-700 px-4 py-1.5 rounded-lg font-semibold text-sm">
                                <span>🧭</span> Counselling + Expert Mentoring
                            </div>
                            <h2 class="text-3xl font-bold text-slate-900">“Turn Clarity into Confident Decisions”</h2>
                            <p class="text-gray-600 text-lg leading-relaxed">
                                The Direction Module builds upon the Discovery Module and is ideal for families who want
                                expert interpretation, structured goal setting, and a clear execution plan—not just a
                                standalone report.
                            </p>

                            <div class="space-y-6 border-l-2 border-dashed border-indigo-200 pl-6 relative ml-2">
                                <h3
                                    class="text-xl font-bold text-slate-900 -ml-8 mb-4 flex items-center gap-3 bg-white pr-4">
                                    <span class="p-1 bg-indigo-600 text-white rounded-md text-xs">3 DAYS</span> The
                                    3-Day Premium Process
                                </h3>

                                <div class="relative">
                                    <div
                                        class="absolute -left-[33px] top-0.5 w-4 h-4 rounded-full bg-indigo-600 border-4 border-white shadow">
                                    </div>
                                    <h4 class="font-bold text-slate-900 text-lg">Day 1: Understanding the Student in
                                        Context</h4>
                                    <ul class="mt-2 space-y-1 text-gray-600 text-md pl-4 list-disc">
                                        <li>One-to-one case history discussion with the student.</li>
                                        <li>Separate discussion with parents to align expectations & concerns.</li>
                                        <li>Student undergoes psychometric assessments.</li>
                                    </ul>
                                </div>

                                <div class="relative">
                                    <div
                                        class="absolute -left-[33px] top-0.5 w-4 h-4 rounded-full bg-indigo-600 border-4 border-white shadow">
                                    </div>
                                    <h4 class="font-bold text-slate-900 text-lg">Day 2: Expert Counselling & Roadmap
                                        Creation</h4>
                                    <ul class="mt-2 space-y-1 text-gray-600 text-md pl-4 list-disc">
                                        <li>Handing over the Report (PDF/Hardcopy for offline).</li>
                                        <li>Detailed report interpretation session by an experienced counsellor.</li>
                                        <li>Goal-setting and customized academic & career roadmap creation.</li>
                                        <li>Guidance on daily routine, time-tables, and prioritization.</li>
                                    </ul>
                                </div>

                                <div class="relative">
                                    <div
                                        class="absolute -left-[33px] top-0.5 w-4 h-4 rounded-full bg-indigo-600 border-4 border-white shadow">
                                    </div>
                                    <h4 class="font-bold text-slate-900 text-lg">Day 3: Follow-Up Session (After 21–30
                                        Days)</h4>
                                    <ul class="mt-2 space-y-1 text-gray-600 text-md pl-4 list-disc">
                                        <li>Review of routine and implementation checklist.</li>
                                        <li>Resolving any real-world deviations, challenges, or confusion.</li>
                                        <li>Refining the roadmap based on real-world execution.</li>
                                    </ul>
                                </div>
                            </div>

                            <p
                                class="text-md font-semibold text-slate-800 bg-slate-50 border p-4 rounded-xl shadow-sm">
                                ✨ The Direction Module transforms insights into practical, executable actions—so clarity
                                doesn’t remain theoretical.
                            </p>

                            <div
                                class="pt-4 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-6">
                                <div>
                                    <span class="text-sm font-semibold text-slate-500 block">BEST FOR</span>
                                    <span class="text-md font-bold text-slate-800">Families looking for actionable
                                        expert mentoring.</span>
                                </div>
                                <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto">
                                    <a href="/get-started"
                                        class="bg-indigo-600 text-white text-center font-bold px-6 py-3.5 rounded-xl hover:bg-indigo-700 shadow-lg shadow-indigo-600/20 transition duration-300 whitespace-nowrap">Start
                                        Mentoring Now!</a>
                                    <a href="/sample-report.pdf" target="_blank"
                                        class="border border-slate-200 text-center font-semibold text-slate-700 px-5 py-3.5 rounded-xl hover:bg-slate-50 transition duration-300 whitespace-nowrap text-sm flex items-center justify-center gap-1">📄
                                        See Sample Report</a>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-5 lg:sticky lg:top-8 flex flex-col items-center justify-center">
                            <div
                                class="relative w-full max-w-sm aspect-[4/5] bg-amber-50 rounded-2xl overflow-hidden p-6 shadow-md border border-amber-100/40 flex flex-col justify-between">
                                <span
                                    class="text-slate-800 font-extrabold text-2xl tracking-tight text-center block w-full mt-2">Direction</span>
                                <img src="{{ asset('/assets/images/services/img3.png') }}"
                                    alt="Direction Process Graphic"
                                    class="w-auto h-3/4 mx-auto object-contain mix-blend-multiply">
                                <div class="w-full h-1 bg-amber-400/50 rounded-full my-1"></div>
                            </div>
                        </div>
                    </div>

                    <div x-show="activeTab === 'destination'" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-4"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                        <div class="lg:col-span-7 space-y-6">
                            <div
                                class="inline-flex items-center gap-2 bg-purple-50 text-purple-700 px-4 py-1.5 rounded-lg font-semibold text-sm">
                                <span>🌟</span> Counselling + Mentoring + Profile Building
                            </div>
                            <h2 class="text-3xl font-bold text-slate-900">“Convert Clarity into Achievement”</h2>
                            <p class="text-gray-600 text-lg leading-relaxed">
                                The Destination Module is designed for high-aspiring students who want more than
                                choices—they want long-term preparedness and a distinct competitive edge. It reveals
                                deep underlying strengths that standard tests miss.
                            </p>

                            <div
                                class="bg-gradient-to-br from-purple-900 to-indigo-950 text-white rounded-2xl p-6 md:p-8 shadow-xl space-y-4">
                                <h4
                                    class="text-xl font-bold border-b border-purple-500/30 pb-3 flex items-center gap-2 text-purple-300">
                                    🚀 What's Included over 6 Months Support:
                                </h4>
                                <p class="text-purple-100/90 text-sm">Includes everything from Discovery + Direction
                                    modules plus continuous premium mentoring sessions:</p>
                                <ul class="space-y-3 text-sm font-medium">
                                    <li class="flex items-start gap-2">✨ Continuous motivation & discipline focus
                                        mapping.</li>
                                    <li class="flex items-start gap-2">✨ Behavior, emotional strategy, and expert
                                        mindset counseling.</li>
                                    <li class="flex items-start gap-2">✨ Profile building: choosing right
                                        extracurriculars and internships.</li>
                                    <li class="flex items-start gap-2">✨ Strategic value courses selection to boost
                                        college admissions portfolio.</li>
                                </ul>
                            </div>

                            <p class="text-gray-600 text-lg leading-relaxed">
                                The Destination Module ensures that students do not just choose a career, rather they
                                grow into it with native purpose, rigorous preparation, and absolute confidence.
                            </p>

                            <div
                                class="pt-4 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-6">
                                <div>
                                    <span class="text-sm font-semibold text-slate-500 block">BEST FOR</span>
                                    <span class="text-md font-bold text-slate-800">Students who want to stand out and
                                        stay future-ready.</span>
                                </div>
                                <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto">
                                    <a href="/get-started"
                                        class="bg-purple-600 text-white text-center font-bold px-6 py-3.5 rounded-xl hover:bg-purple-700 shadow-lg shadow-purple-600/20 transition duration-300 whitespace-nowrap">Get
                                        Profiling Done!</a>
                                    <a href="/sample-report.pdf" target="_blank"
                                        class="border border-slate-200 text-center font-semibold text-slate-700 px-5 py-3.5 rounded-xl hover:bg-slate-50 transition duration-300 whitespace-nowrap text-sm flex items-center justify-center gap-1">📄
                                        See Sample Report</a>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-5 lg:sticky lg:top-8 flex flex-col items-center justify-center">
                            <div
                                class="relative w-full max-w-sm aspect-[4/5] bg-emerald-50 rounded-2xl overflow-hidden p-6 shadow-md border border-emerald-100/40 flex flex-col justify-between">
                                <span
                                    class="text-slate-800 font-extrabold text-2xl tracking-tight text-center block w-full mt-2">Destination</span>
                                <img src="{{ asset('/assets/images/services/img4.png') }}"
                                    alt="Destination Process Graphic"
                                    class="w-auto h-3/4 mx-auto object-contain mix-blend-multiply">
                                <div class="w-full h-1 bg-emerald-400/50 rounded-full my-1"></div>
                            </div>
                        </div>
                    </div>

                </div>

             
            </div>

            <div class="mt-20 bg-slate-900 text-white rounded-3xl p-8 md:p-12 shadow-2xl relative overflow-hidden"
                data-aos="fade-up">
                <div class="absolute -right-20 -bottom-20 w-60 h-60 bg-blue-600/20 rounded-full blur-3xl"></div>
                <h3 class="text-2xl md:text-3xl font-bold text-center mb-8">Summary of Our Support Modules</h3>

                <div
                    class="grid grid-cols-1 md:grid-cols-3 gap-8 divider-y md:divider-y-0 md:divider-x divider-gray-700">
                    <div class="space-y-2">
                        <span class="text-blue-400 font-bold tracking-wider text-sm block uppercase">Discovery
                            Module</span>
                        <h4 class="text-lg font-bold">Understand yourself clearly</h4>
                        <p class="text-gray-400 text-sm">Deep personalized Career Counselling Report delivered securely
                            via digital format.</p>
                    </div>
                    <div class="space-y-2">
                        <span class="text-indigo-400 font-bold tracking-wider text-sm block uppercase">Direction
                            Module</span>
                        <h4 class="text-lg font-bold">Decide with expert guidance</h4>
                        <p class="text-gray-400 text-sm">Includes dynamic career counselling metrics + 3-Day structured
                            mentoring framework.</p>
                    </div>
                    <div class="space-y-2">
                        <span class="text-purple-400 font-bold tracking-wider text-sm block uppercase">Destination
                            Module</span>
                        <h4 class="text-lg font-bold">Prepare for long-term success</h4>
                        <p class="text-gray-400 text-sm">Complete assessment metrics + full customized professional
                            profiling mapping built over 6 months.</p>
                    </div>
                </div>
            </div>




            <div class="mt-20 text-center" data-aos="fade-up">
                <h3 class="text-2xl font-bold text-slate-800 mb-6">Let Science Reveal Your True Calling!</h3>

                <div
                    class="bg-white border border-gray-100 rounded-2xl p-4 shadow-md max-w-5xl mx-auto overflow-hidden">
                    <img src="{{ asset('/assets/images/services/img11.jpg') }}" alt="Different Career Paths Banner"
                        class="w-full h-auto max-h-[240px] object-contain md:object-cover object-center rounded-xl shadow-inner">
                </div>

                <div
                    class="mt-12 bg-gradient-to-r from-blue-600 to-indigo-700 text-white rounded-2xl p-8 max-w-3xl mx-auto shadow-xl">
                    <h4 class="text-2xl font-bold mb-2">Discover Your Dream Career in 3 Steps</h4>
                    <p class="text-blue-100/90 text-sm mb-6">Take charge of your educational roadmap. Join over
                        thousands of satisfied parents and students today.</p>
                    <a href="/get-started"
                        class="inline-block bg-white text-indigo-700 font-extrabold tracking-wide px-8 py-4 rounded-xl shadow-lg hover:bg-gray-100 transform hover:-translate-y-0.5 transition duration-200">Get
                        Started Now</a>
                </div>
            </div>

        </div>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true
            });
        });
    </script>
</x-layouts.public>
