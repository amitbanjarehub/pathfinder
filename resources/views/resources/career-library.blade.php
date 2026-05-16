<x-layouts.public title="Career Library">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-10 select-none bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-12 items-center gap-10 lg:gap-16">
            
            <div class="lg:col-span-7 flex flex-col items-center lg:items-start text-center lg:text-left">
                
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-orange-500/20 bg-orange-50 text-orange-600 text-xs font-bold tracking-wider uppercase mb-5">
                    <span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span>
                    Knowledge Repository
                </div>

                <h1 class="text-4xl sm:text-5xl font-black leading-tight text-slate-900 tracking-tight mb-4">
                    Career <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-amber-600">Library</span>
                </h1>

                <p class="text-base sm:text-lg text-slate-600 leading-relaxed max-w-xl font-medium">
                    Access detailed information on professions, career pathways, and expected prospects etc. Empower your choices with concrete global research.
                </p>
            </div>

            <div class="lg:col-span-5 flex justify-center">
                <div class="relative w-full max-w-[420px] px-4 sm:px-0">
                    <div class="absolute inset-0 bg-orange-100 rounded-full blur-3xl opacity-40 pointer-events-none scale-90"></div>
                    
                    <div class="relative transition-all duration-500 hover:scale-[1.03] flex justify-center">
                        <img src="{{ asset('/assets/images/services/img19.png') }}" 
                             alt="Career Library Knowledge Hub Illustration" 
                             class="w-full h-auto object-contain max-h-[280px] sm:max-h-[340px]">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-6 mt-4">
        <div class="bg-slate-50 border border-slate-200/60 rounded-2xl p-6 sm:p-8 text-center max-w-4xl mx-auto shadow-sm">
            <h2 class="text-xl sm:text-2xl font-extrabold text-slate-800 mb-4">What career are you looking for?</h2>
            
            <div class="flex flex-col sm:flex-row gap-3 max-w-2xl mx-auto">
                <div class="relative flex-grow">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400 pointer-events-none">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </span>
                    <input type="text" 
                           placeholder="Search for information on 200+ career options" 
                           class="w-full pl-11 pr-4 py-3.5 bg-white border border-slate-200 rounded-xl text-sm font-medium focus:outline-none focus:border-orange-500 focus:ring-2 focus:ring-orange-100 transition-all text-slate-700 placeholder-slate-400">
                </div>
                <button class="bg-orange-600 hover:bg-orange-700 text-white font-black text-sm tracking-wide px-8 py-3.5 rounded-xl transition-all shadow-md shadow-orange-600/10 active:scale-[0.98]">
                    Search
                </button>
            </div>

            <div class="flex items-center justify-center gap-4 mt-5 pt-4 border-t border-slate-200/60 text-xs font-bold text-slate-500">
                <span class="uppercase tracking-wider text-slate-400">Sort By:</span>
                <button class="text-orange-600 border-b-2 border-orange-600 pb-0.5 px-1">Name</button>
                <button class="hover:text-slate-700 transition-colors pb-0.5 px-1">Popularity</button>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 bg-white">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="group bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col overflow-hidden cursor-pointer">
                <div class="relative aspect-[16/9] w-full bg-slate-100 overflow-hidden border-b border-slate-100">
                    <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&w=600&q=80" 
                         alt="Engineering Career Stream" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                </div>
                <div class="p-5 text-center flex-grow bg-slate-50/30">
                    <h3 class="text-lg font-black text-slate-800 tracking-tight group-hover:text-orange-600 transition-colors">
                        Engineering
                    </h3>
                    <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider mt-1">Core & Tech Streams</p>
                </div>
            </div>

            <div class="group bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col overflow-hidden cursor-pointer">
                <div class="relative aspect-[16/9] w-full bg-slate-100 overflow-hidden border-b border-slate-100">
                    <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=600&q=80" 
                         alt="Computer Application & IT Career Stream" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                </div>
                <div class="p-5 text-center flex-grow bg-slate-50/30">
                    <h3 class="text-lg font-black text-slate-800 tracking-tight group-hover:text-orange-600 transition-colors">
                        Computer Application & IT
                    </h3>
                    <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider mt-1">Software & Development</p>
                </div>
            </div>

            <div class="group bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col overflow-hidden cursor-pointer">
                <div class="relative aspect-[16/9] w-full bg-slate-100 overflow-hidden border-b border-slate-100">
                    <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=600&q=80" 
                         alt="Ethical Hacking Career Stream" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                </div>
                <div class="p-5 text-center flex-grow bg-slate-50/30">
                    <h3 class="text-lg font-black text-slate-800 tracking-tight group-hover:text-orange-600 transition-colors">
                        Ethical Hacking
                    </h3>
                    <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider mt-1">Cyber Security Insights</p>
                </div>
            </div>

            <div class="group bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col overflow-hidden cursor-pointer">
                <div class="relative aspect-[16/9] w-full bg-slate-100 overflow-hidden border-b border-slate-100">
                    <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&w=600&q=80" 
                         alt="Aviation Stream" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                </div>
                <div class="p-5 text-center flex-grow bg-slate-50/30">
                    <h3 class="text-lg font-black text-slate-800 tracking-tight group-hover:text-orange-600 transition-colors">
                        Aviation & Aerospace
                    </h3>
                    <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider mt-1">Pilots & Logistics</p>
                </div>
            </div>

            <div class="group bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col overflow-hidden cursor-pointer">
                <div class="relative aspect-[16/9] w-full bg-slate-100 overflow-hidden border-b border-slate-100">
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=600&q=80" 
                         alt="Architecture Stream" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                </div>
                <div class="p-5 text-center flex-grow bg-slate-50/30">
                    <h3 class="text-lg font-black text-slate-800 tracking-tight group-hover:text-orange-600 transition-colors">
                        Architecture & Design
                    </h3>
                    <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider mt-1">Planning & Layouts</p>
                </div>
            </div>

            <div class="group bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col overflow-hidden cursor-pointer">
                <div class="relative aspect-[16/9] w-full bg-slate-100 overflow-hidden border-b border-slate-100">
                    <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?auto=format&fit=crop&w=600&q=80" 
                         alt="Merchant Navy Stream" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                </div>
                <div class="p-5 text-center flex-grow bg-slate-50/30">
                    <h3 class="text-lg font-black text-slate-800 tracking-tight group-hover:text-orange-600 transition-colors">
                        Merchant Navy
                    </h3>
                    <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider mt-1">Nautical & Marine Science</p>
                </div>
            </div>

        </div>

        <div class="mt-16 flex justify-center">
            <a href="#all-careers" 
               class="group inline-flex items-center justify-center w-full sm:w-auto px-12 py-4.5 text-lg font-black tracking-wide text-white bg-gradient-to-r from-orange-500 to-amber-600 rounded-xl shadow-xl shadow-orange-600/10 hover:from-orange-600 hover:to-amber-700 hover:shadow-orange-600/30 hover:-translate-y-0.5 transition-all duration-200 transform text-center">
                View all Careers
                <svg class="w-5 h-5 ml-2.5 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>

    </div>

</x-layouts.public>