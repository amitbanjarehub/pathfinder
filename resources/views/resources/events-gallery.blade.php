<x-layouts.public title="Events Gallery - PATH finder">
    
    <div class="relative bg-slate-900 h-[400px] flex items-center overflow-hidden">
        <img src="{{ asset('/assets/images/services/event_img1.png') }}" 
             alt="Events Hero" 
             class="absolute inset-0 w-full h-full object-cover opacity-40">
        
        <div class="relative max-w-7xl mx-auto px-4 w-full">
            <div class="max-w-2xl">
                <nav class="flex mb-4 text-sm text-slate-300 space-x-2">
                    <a href="/" class="hover:text-white">Home</a>
                    <span>/</span>
                    <span class="text-accent font-semibold">Events</span>
                </nav>
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">
                    Events <span class="text-accent">(Gallery)</span>
                </h1>
                <p class="text-xl text-slate-200 leading-relaxed">
                    Explore highlights from seminars, workshops, counselling sessions, and other career guidance events.
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 py-20">
        
        <div class="flex items-center justify-between mb-12">
            <div>
                <h2 class="text-3xl font-bold text-slate-900">Event Highlights</h2>
                <div class="h-1.5 w-20 bg-accent mt-2 rounded-full"></div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-[2rem] shadow-lg aspect-[4/5]">
                    <img src="https://images.unsplash.com/photo-1540575861501-7ad058ca3c98?q=80&w=2070&auto=format&fit=crop" 
                         alt="Seminar" 
                         class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-80 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <h3 class="text-white font-bold text-xl transform translate-y-2 group-hover:translate-y-0 transition-transform">Career Seminar 2024</h3>
                        <p class="text-accent text-sm opacity-0 group-hover:opacity-100 transition-opacity">Bhopal, MP</p>
                    </div>
                </div>
            </div>

            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-[2rem] shadow-lg aspect-[4/5]">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070&auto=format&fit=crop" 
                         alt="Workshop" 
                         class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-80 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <h3 class="text-white font-bold text-xl transform translate-y-2 group-hover:translate-y-0 transition-transform">Interactive Workshop</h3>
                        <p class="text-accent text-sm opacity-0 group-hover:opacity-100 transition-opacity">Skill Building</p>
                    </div>
                </div>
            </div>

            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-[2rem] shadow-lg aspect-[4/5]">
                    <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?q=80&w=2070&auto=format&fit=crop" 
                         alt="Counselling" 
                         class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-80 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <h3 class="text-white font-bold text-xl transform translate-y-2 group-hover:translate-y-0 transition-transform">One-on-One Session</h3>
                        <p class="text-accent text-sm opacity-0 group-hover:opacity-100 transition-opacity">Mentorship</p>
                    </div>
                </div>
            </div>

            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-[2rem] shadow-lg aspect-[4/5]">
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=2070&auto=format&fit=crop" 
                         alt="Group Event" 
                         class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-80 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <h3 class="text-white font-bold text-xl transform translate-y-2 group-hover:translate-y-0 transition-transform">School Outreach</h3>
                        <p class="text-accent text-sm opacity-0 group-hover:opacity-100 transition-opacity">Awareness Camp</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-16 text-center">
            <a href="#" class="inline-flex items-center space-x-3 group bg-slate-100 hover:bg-accent text-slate-900 hover:text-white px-10 py-4 rounded-full font-bold transition-all duration-300 shadow-sm hover:shadow-xl">
                <span class="text-lg">View All Events</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transform group-hover:translate-x-2 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>

    </div>

    <style>
        .rounded-custom {
            border-radius: 2.5rem;
        }
    </style>

</x-layouts.public>