<x-layouts.public title="FAQs - Path Finder">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-6 select-none bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-12 items-center gap-10 lg:gap-16">
            
            <div class="lg:col-span-5 flex justify-center order-last lg:order-first">
                <div class="relative w-full max-w-[380px] px-4 sm:px-0">
                    <div class="absolute inset-0 bg-emerald-100 rounded-full blur-3xl opacity-40 pointer-events-none scale-90"></div>
                    
                    <div class="relative transition-all duration-500 hover:scale-[1.02] flex justify-center">
                        <img src="{{ asset('/assets/images/services/img21.png') }}" 
                             alt="Path Finder Help Desk Portal Illustration" 
                             class="w-full h-auto object-contain max-h-[260px] sm:max-h-[320px]">
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 flex flex-col items-center lg:items-start text-center lg:text-left">
                
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-teal-500/20 bg-emerald-50 text-teal-700 text-xs font-bold tracking-wider uppercase mb-5">
                    <span class="w-1.5 h-1.5 rounded-full bg-teal-600"></span>
                    Support Center
                </div>

                <h1 class="text-4xl sm:text-5xl font-black leading-tight text-slate-900 tracking-tight mb-4">
                    Frequently Asked <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-emerald-600">Questions</span>
                </h1>

                <p class="text-base sm:text-lg text-slate-600 leading-relaxed max-w-xl font-medium">
                    Find answers to common questions about PATH finder and its services. Navigate through our structured knowledge framework below.
                </p>
            </div>

        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-10">
        <div class="max-w-3xl mx-auto relative group">
            <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400 pointer-events-none transition-colors group-focus-within:text-teal-600">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </span>
            <input type="text" 
                   placeholder="Search FAQs..." 
                   class="w-full pl-12 pr-4 py-4 bg-white border border-slate-200/90 rounded-2xl text-sm font-semibold text-slate-700 placeholder-slate-400/90 shadow-sm focus:outline-none focus:border-teal-500 focus:ring-4 focus:ring-emerald-50 transition-all duration-200">
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 bg-white" x-data="{ activeAccordion: 1 }">
        <div class="max-w-3xl mx-auto">
            
            <h2 class="text-2xl font-black text-slate-800 mb-6 tracking-tight">General Questions</h2>
            
            <div class="space-y-4">
                
                <div class="border border-slate-100 rounded-2xl transition-all duration-300 overflow-hidden bg-white"
                     :class="activeAccordion === 1 ? 'shadow-md border-emerald-500/20' : 'hover:shadow-sm border-slate-200/60'">
                    
                    <button class="w-full flex items-center justify-between text-left px-6 py-5 bg-white select-none gap-4"
                            @click="activeAccordion = (activeAccordion === 1 ? null : 1)">
                        <span class="font-extrabold text-slate-800 text-base sm:text-md group-hover:text-teal-600 transition-colors">
                            What is Vatika Animal Sanctuary?
                        </span>
                        <span class="flex-shrink-0 w-8 h-8 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center transition-transform duration-300"
                              :class="activeAccordion === 1 ? 'bg-red-50 text-red-500 rotate-180' : ''">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" x-show="activeAccordion !== 1"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path></svg>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" x-show="activeAccordion === 1" x-cloak><path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4"></path></svg>
                        </span>
                    </button>
                    
                    <div class="transition-all duration-300 max-h-0 overflow-hidden border-t border-slate-50"
                         :style="activeAccordion === 1 ? 'max-height: 400px;' : 'max-height: 0px;'">
                        <div class="px-6 py-5 bg-emerald-50/20 text-slate-600 text-sm leading-relaxed border-l-4 border-emerald-500 font-medium">
                            Vatika Animal Sanctuary is Chhattisgarh's first and only dedicated animal rescue, rehabilitation, and sanctuary center. It's run and managed by non profit organization People For Animals Society Raipur Unit II. It's a growing organization that works for rescue, treatment of sick and needy community dogs.
                        </div>
                    </div>
                </div>

                <div class="border border-slate-100 rounded-2xl transition-all duration-300 overflow-hidden bg-white"
                     :class="activeAccordion === 2 ? 'shadow-md border-emerald-500/20' : 'hover:shadow-sm border-slate-200/60'">
                    
                    <button class="w-full flex items-center justify-between text-left px-6 py-5 bg-white select-none gap-4"
                            @click="activeAccordion = (activeAccordion === 2 ? null : 2)">
                        <span class="font-extrabold text-slate-800 text-base sm:text-md">
                            Where are you located?
                        </span>
                        <span class="flex-shrink-0 w-8 h-8 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center transition-transform duration-300"
                              :class="activeAccordion === 2 ? 'bg-red-50 text-red-500 rotate-180' : ''">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" x-show="activeAccordion !== 2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path></svg>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" x-show="activeAccordion === 2" x-cloak><path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4"></path></svg>
                        </span>
                    </button>
                    
                    <div class="transition-all duration-300 max-h-0 overflow-hidden border-t border-slate-50"
                         :style="activeAccordion === 2 ? 'max-height: 400px;' : 'max-height: 0px;'">
                        <div class="px-6 py-5 bg-emerald-50/20 text-slate-600 text-sm leading-relaxed border-l-4 border-emerald-500 font-medium">
                            We operate centrally with primary infrastructure and active rehabilitation yards located in Raipur, Chhattisgarh, India. Feel free to contact our support coordinators for mapped updates.
                        </div>
                    </div>
                </div>

                <div class="border border-slate-100 rounded-2xl transition-all duration-300 overflow-hidden bg-white"
                     :class="activeAccordion === 3 ? 'shadow-md border-emerald-500/20' : 'hover:shadow-sm border-slate-200/60'">
                    
                    <button class="w-full flex items-center justify-between text-left px-6 py-5 bg-white select-none gap-4"
                            @click="activeAccordion = (activeAccordion === 3 ? null : 3)">
                        <span class="font-extrabold text-slate-800 text-base sm:text-md">
                            How long have you been operating?
                        </span>
                        <span class="flex-shrink-0 w-8 h-8 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center transition-transform duration-300"
                              :class="activeAccordion === 3 ? 'bg-red-50 text-red-500 rotate-180' : ''">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" x-show="activeAccordion !== 3"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path></svg>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" x-show="activeAccordion === 3" x-cloak><path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4"></path></svg>
                        </span>
                    </button>
                    
                    <div class="transition-all duration-300 max-h-0 overflow-hidden border-t border-slate-50"
                         :style="activeAccordion === 3 ? 'max-height: 400px;' : 'max-height: 0px;'">
                        <div class="px-6 py-5 bg-emerald-50/20 text-slate-600 text-sm leading-relaxed border-l-4 border-emerald-500 font-medium">
                            Our field groups and core development tracking parameters have been operational globally, helping thousands of candidates map their paths effectively over multiple cycles.
                        </div>
                    </div>
                </div>

                <div class="border border-slate-100 rounded-2xl transition-all duration-300 overflow-hidden bg-white"
                     :class="activeAccordion === 4 ? 'shadow-md border-emerald-500/20' : 'hover:shadow-sm border-slate-200/60'">
                    
                    <button class="w-full flex items-center justify-between text-left px-6 py-5 bg-white select-none gap-4"
                            @click="activeAccordion = (activeAccordion === 4 ? null : 4)">
                        <span class="font-extrabold text-slate-800 text-base sm:text-md">
                            Do you receive government funding?
                        </span>
                        <span class="flex-shrink-0 w-8 h-8 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center transition-transform duration-300"
                              :class="activeAccordion === 4 ? 'bg-red-50 text-red-500 rotate-180' : ''">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" x-show="activeAccordion !== 4"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path></svg>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" x-show="activeAccordion === 4" x-cloak><path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4"></path></svg>
                        </span>
                    </button>
                    
                    <div class="transition-all duration-300 max-h-0 overflow-hidden border-t border-slate-50"
                         :style="activeAccordion === 4 ? 'max-height: 400px;' : 'max-height: 0px;'">
                        <div class="px-6 py-5 bg-emerald-50/20 text-slate-600 text-sm leading-relaxed border-l-4 border-emerald-500 font-medium">
                            We are largely powered by structural corporate donors, private sponsors, and institutional memberships that value transparency and rigorous outcome metrics.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 bg-white">
        <div class="max-w-5xl mx-auto bg-gradient-to-r from-teal-600 to-cyan-700 rounded-3xl p-8 sm:p-12 text-center text-white shadow-xl shadow-teal-900/10 relative overflow-hidden">
            
            <div class="absolute -right-10 -top-10 w-40 h-40 rounded-full bg-white/5 blur-xl pointer-events-none"></div>
            
            <div class="relative z-10 max-w-2xl mx-auto">
                <h3 class="text-3xl sm:text-4xl font-black tracking-tight mb-3">Still Have Questions?</h3>
                <p class="text-teal-50/90 text-sm sm:text-base font-medium mb-8 leading-relaxed">
                    Can't find what you're looking for? Get in touch with our team and we'll be happy to help.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    
                    <a href="/contact" 
                       class="w-full sm:w-auto px-8 py-3.5 bg-white text-teal-700 font-black text-sm tracking-wide rounded-xl transition-all shadow-md hover:bg-teal-50 hover:scale-[1.02] active:scale-[0.99] text-center">
                        Contact Us
                    </a>

                    <a href="tel:7225888800" 
                       class="w-full sm:w-auto px-8 py-3.5 bg-transparent border-2 border-white/80 text-white font-black text-sm tracking-wide rounded-xl transition-all hover:bg-white/10 active:scale-[0.99] inline-flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        Call 7225888800
                    </a>
                </div>
            </div>
        </div>
    </div>

</x-layouts.public>