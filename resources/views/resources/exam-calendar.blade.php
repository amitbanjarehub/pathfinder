<x-layouts.public title="Exam Calendar">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-10 select-none bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-12 items-center gap-10 lg:gap-16">
            
            <div class="lg:col-span-7 flex flex-col items-center lg:items-start text-center lg:text-left">
                
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-red-500/20 bg-red-50 text-red-600 text-xs font-bold tracking-wider uppercase mb-5">
                    <span class="w-1.5 h-1.5 rounded-full bg-red-500 animate-pulse"></span>
                    Plan & Prepare
                </div>

                <h1 class="text-4xl sm:text-5xl font-black leading-tight text-slate-900 tracking-tight mb-4">
                    Entrance Exams <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-rose-600">Calendar</span>
                </h1>

                <p class="text-base sm:text-lg text-slate-600 leading-relaxed max-w-xl font-medium">
                    Stay updated with important dates for entrance exams, application deadlines, and website addresses etc. Never miss an opportunity to clear your dream milestones.
                </p>
            </div>

            <div class="lg:col-span-5 flex justify-center">
                <div class="relative w-full max-w-[420px] px-4 sm:px-0">
                    <div class="absolute inset-0 bg-red-100 rounded-full blur-3xl opacity-40 pointer-events-none scale-90"></div>
                    
                    <div class="relative transition-all duration-500 hover:scale-[1.03] flex justify-center">
                        <img src="{{ asset('/assets/images/services/img20.png') }}" 
                             alt="Entrance Exam Deadlines Calendar Tracker" 
                             class="w-full h-auto object-contain max-h-[280px] sm:max-h-[340px]">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 bg-white">
        
        <div class="mb-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-slate-200 pb-4">
            <h2 class="text-xl font-black text-slate-800 uppercase tracking-tight flex items-center gap-2">
                <span class="w-2.5 h-5 bg-red-600 rounded-sm"></span>
                MANAGEMENT (IPM ~ 5-year-MBA after XII)
            </h2>
            
            <button class="inline-flex items-center gap-2 px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold rounded-lg transition-colors border border-slate-200">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16v1a3 3 0 003 3h12a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                Download Segment PDF
            </button>
        </div>

        <div class="w-full overflow-x-auto rounded-xl border border-slate-200 shadow-sm bg-white mb-12">
            <table class="w-full text-left border-collapse min-w-[800px]">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200 text-xs font-black text-slate-500 uppercase tracking-wider">
                        <th class="py-4 px-6">College / Univ / Exam</th>
                        <th class="py-4 px-6">Application Start Date</th>
                        <th class="py-4 px-6">Application End Date</th>
                        <th class="py-4 px-6">Exam Date</th>
                        <th class="py-4 px-6 text-right">Official Website</th>
                    </tr>
                </thead>
                <tbody class="text-sm font-medium text-slate-700 divide-y divide-slate-100">
                    
                    <tr class="hover:bg-slate-50/80 transition-colors">
                        <td class="py-4 px-6 font-bold text-slate-900">
                            IIM-Indore <span class="text-xs font-normal text-slate-400 block">(IPMAT-IIM Indore)</span>
                            <span class="text-[10px] text-slate-400 font-normal block italic">(IIM-Shillong, Ranchi, Amritsar, Sirmauri)</span>
                        </td>
                        <td class="py-4 px-6 text-emerald-600 font-bold">14 Feb-25</td>
                        <td class="py-4 px-6 text-rose-600 font-bold">27 Mar-25</td>
                        <td class="py-4 px-6 text-blue-600 font-bold">12 May-25</td>
                        <td class="py-4 px-6 text-right">
                            <a href="https://www.iimidr.ac.in" target="_blank" class="text-xs text-blue-600 font-bold hover:underline inline-flex items-center gap-0.5">
                                www.iimidr.ac.in
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </td>
                    </tr>

                    <tr class="bg-amber-50/40 hover:bg-amber-50 transition-colors">
                        <td class="py-4 px-6 font-bold text-slate-900">
                            IIM-Rohtak <span class="text-xs font-normal text-slate-400 block">(IPMAT-IIM Rohtak)</span>
                        </td>
                        <td class="py-4 px-6 text-emerald-600 font-bold">06 Feb-25</td>
                        <td class="py-4 px-6 text-rose-600 font-bold">11 Apr-25</td>
                        <td class="py-4 px-6 text-blue-600 font-bold">05 May-25</td>
                        <td class="py-4 px-6 text-right">
                            <a href="https://www.iimrohtak.ac.in" target="_blank" class="text-xs text-blue-600 font-bold hover:underline inline-flex items-center gap-0.5">
                                www.iimrohtak.ac.in
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-slate-50/80 transition-colors">
                        <td class="py-4 px-6 font-bold text-slate-900">
                            IIM-Jammu & IIM-BodhGaya <span class="text-xs font-normal text-slate-400 block">(JIPMAT)</span>
                        </td>
                        <td class="py-4 px-6 text-emerald-600 font-bold">11 Feb-25</td>
                        <td class="py-4 px-6 text-rose-600 font-bold">10 Mar-25</td>
                        <td class="py-4 px-6 text-blue-600 font-bold">26 Apr-25</td>
                        <td class="py-4 px-6 text-right">
                            <a href="https://www.jipmat.nta.ac.in" target="_blank" class="text-xs text-blue-600 font-bold hover:underline inline-flex items-center gap-0.5">
                                www.jipmat.nta.ac.in
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-slate-50/80 transition-colors">
                        <td class="py-4 px-6 font-bold text-slate-900">
                            Nirma University <span class="text-xs font-normal text-slate-400 block">(IPMAT-IIM Indore)</span>
                        </td>
                        <td class="py-4 px-6 text-emerald-600 font-bold">14 Feb-25</td>
                        <td class="py-4 px-6 text-rose-600 font-bold">27 Mar-25</td>
                        <td class="py-4 px-6 text-blue-600 font-bold">12 May-25</td>
                        <td class="py-4 px-6 text-right">
                            <a href="https://www.management.nirmauni.ac.in" target="_blank" class="text-xs text-blue-600 font-bold hover:underline inline-flex items-center gap-0.5">
                                www.management.nirmauni.ac.in
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


        <div class="mb-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-slate-200 pb-4">
            <h2 class="text-xl font-black text-slate-800 uppercase tracking-tight flex items-center gap-2">
                <span class="w-2.5 h-5 bg-amber-500 rounded-sm"></span>
                MANAGEMENT (BBA/BMS)
            </h2>
        </div>

        <div class="w-full overflow-x-auto rounded-xl border border-slate-200 shadow-sm bg-white mb-12">
            <table class="w-full text-left border-collapse min-w-[800px]">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200 text-xs font-black text-slate-500 uppercase tracking-wider">
                        <th class="py-4 px-6">College / Univ / Exam</th>
                        <th class="py-4 px-6">Application Start Date</th>
                        <th class="py-4 px-6">Application End Date</th>
                        <th class="py-4 px-6">Exam Date</th>
                        <th class="py-4 px-6 text-right">Official Website</th>
                    </tr>
                </thead>
                <tbody class="text-sm font-medium text-slate-700 divide-y divide-slate-100">
                    <tr class="hover:bg-slate-50/80 transition-colors">
                        <td class="py-4 px-6 font-bold text-slate-900">
                            IIM Bangalore's 4-Year <span class="text-xs font-normal text-slate-400 block">(Bsc-Eco, Bsc-DS)</span>
                        </td>
                        <td class="py-4 px-6 text-slate-500">Oct-25</td>
                        <td class="py-4 px-6 text-slate-500">Nov-25</td>
                        <td class="py-4 px-6 text-blue-600 font-bold">Dec-25</td>
                        <td class="py-4 px-6 text-right">
                            <a href="https://ug.iimb.ac.in" target="_blank" class="text-xs text-blue-600 font-bold hover:underline inline-flex items-center gap-0.5">
                                https://ug.iimb.ac.in
                            </a>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50/80 transition-colors">
                        <td class="py-4 px-6 font-bold text-slate-900">
                            IIM Sambalpur <span class="text-xs font-normal text-slate-400 block">4-Yr BS-DS & AI, BS-Mgt & PP</span>
                        </td>
                        <td class="py-4 px-6 text-slate-500">DS & AI - JEE</td>
                        <td class="py-4 px-6 text-slate-500">Mgt & PP - CUET</td>
                        <td class="py-4 px-6 text-slate-400 font-normal italic">To be announced</td>
                        <td class="py-4 px-6 text-right">
                            <a href="https://www.iimsambalpur.ac.in" target="_blank" class="text-xs text-blue-600 font-bold hover:underline inline-flex items-center gap-0.5">
                                www.iimsambalpur.ac.in
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


        <div class="mt-16 bg-slate-50 border border-slate-200/80 rounded-2xl p-8 max-w-4xl mx-auto text-center relative overflow-hidden">
            
            <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-[0.03] font-black tracking-widest text-7xl select-none uppercase">
                CAREERNAKSHA
            </div>
            
            <div class="relative z-10 flex flex-col sm:flex-row items-center justify-center gap-6">
                
                <a href="#entire-list" 
                   class="group inline-flex items-center justify-center w-full sm:w-auto px-8 py-4 text-base font-black tracking-wide text-white bg-gradient-to-r from-red-600 to-rose-600 rounded-xl shadow-lg shadow-red-600/10 hover:from-red-700 hover:to-rose-700 hover:shadow-red-600/20 hover:-translate-y-0.5 transition-all duration-200 transform">
                    View the entire List
                    <svg class="w-5 h-5 ml-2 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>

                <a href="#download-pdf" 
                   class="group inline-flex items-center justify-center w-full sm:w-auto px-8 py-4 text-base font-black tracking-wide text-slate-800 bg-white border border-slate-200 rounded-xl shadow-md hover:bg-slate-50 hover:border-slate-300 hover:-translate-y-0.5 transition-all duration-200 transform">
                    <svg class="w-5 h-5 mr-2 text-red-600 transition-transform duration-200 group-hover:scale-110" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Download Official PDF
                </a>
            </div>
            
            <p class="text-xs text-slate-400 font-semibold mt-4 tracking-wide">
                * Note: Downloaded copies contain official validation watermark.
            </p>
        </div>

    </div>

</x-layouts.public>