<x-layouts.public title="Student Corner">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-20 select-none bg-white">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 items-center gap-12 lg:gap-16">
            
            <div class="lg:col-span-7 flex flex-col items-center lg:items-start text-center lg:text-left order-2 lg:order-1">
                
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-green-500/20 bg-green-50 text-green-600 text-xs font-bold tracking-wider uppercase mb-6 animate-pulse">
                    <span class="w-2 h-2 rounded-full bg-green-500 shadow-[0_0_8px_#22c55e]"></span>
                    Stay informed. Stay ahead. No distractions
                </div>

                <h1 class="text-4xl sm:text-5xl xl:text-6xl font-black leading-tight text-slate-900 tracking-tight max-w-2xl mb-4">
                    Students’ <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 to-emerald-600">Corner</span>
                </h1>

                <h2 class="text-xl sm:text-2xl font-bold text-slate-800 mb-4 flex items-center gap-2 justify-center lg:justify-start">
                    ✨ Clarity for Your Career Journey
                </h2>

                <p class="text-base sm:text-lg text-slate-600 leading-relaxed max-w-xl font-medium mb-8">
                    Choosing the right career today can feel confusing with endless options and constant pressure. 
                    This <span class="font-semibold text-green-600">WhatsApp space (group)</span> is designed to give you clear, 
                    practical insights on emerging careers, entrance exams, future skills, and smart strategies to build a strong career path—delivered in a simple and actionable way so you can make smarter decisions with confidence.
                </p>

                <div class="w-full max-w-xl mb-10 text-left bg-slate-50 p-6 rounded-2xl border border-slate-100 shadow-sm">
                    <h3 class="text-lg font-extrabold text-slate-900 mb-4 flex items-center gap-2">
                        💡 What You’ll Get:
                    </h3>
                    <ul class="space-y-3.5">
                        <li class="flex items-start gap-3 text-slate-600 font-medium text-sm sm:text-base">
                            <span class="flex-shrink-0 text-green-500 text-lg mt-0.5">✔</span>
                            <span>Updates on emerging careers & industry trends</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-600 font-medium text-sm sm:text-base">
                            <span class="flex-shrink-0 text-green-500 text-lg mt-0.5">✔</span>
                            <span>Guidance on entrance exams and career paths</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-600 font-medium text-sm sm:text-base">
                            <span class="flex-shrink-0 text-green-500 text-lg mt-0.5">✔</span>
                            <span>Insights on skills that matter for the future</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-600 font-medium text-sm sm:text-base">
                            <span class="flex-shrink-0 text-green-500 text-lg mt-0.5">✔</span>
                            <span>Practical tips to stay focused and ahead</span>
                        </li>
                    </ul>
                </div>

                <div class="w-full sm:w-auto">
                    <p class="text-xs sm:text-sm text-slate-500 italic mb-3 font-semibold flex items-center justify-center lg:justify-start gap-1">
                        👉 Because the right decisions today shape your future tomorrow.
                    </p>
                    
                    <a href="YOUR_WHATSAPP_GROUP_LINK_HERE" 
                       target="_blank"
                       class="group inline-flex items-center justify-center w-full sm:w-auto px-10 py-5 text-xl font-black tracking-wide text-white bg-gradient-to-r from-green-500 to-emerald-600 rounded-2xl shadow-xl shadow-green-500/20 hover:from-green-600 hover:to-emerald-700 hover:shadow-green-600/40 hover:-translate-y-1 transition-all duration-300 transform text-center">
                        Join Students’ Corner
                        <svg class="w-6 h-6 ml-3 transition-transform duration-300 group-hover:translate-x-1.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>

            </div>

            <div class="lg:col-span-5 order-1 lg:order-2 flex justify-center">
                <div class="relative w-full max-w-[480px] px-4 sm:px-0">
                    
                    <div class="absolute inset-0 bg-green-100 rounded-full blur-3xl opacity-40 pointer-events-none scale-75 animate-pulse"></div>
                    
                    <div class="relative transition-all duration-500 hover:scale-[1.03]">
                        <img src="{{ asset('/assets/images/services/img15.png') }}" 
                             alt="Student Career Guidance WhatsApp Community" 
                             class="w-full h-auto object-contain max-h-[340px] sm:max-h-[440px] mx-auto">
                    </div>
                </div>
            </div>

        </div>

    </div>

</x-layouts.public>