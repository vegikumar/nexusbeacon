@extends('layouts.app')

@section('title', 'Insights | High-Intent B2B Marketing Blog - Nexus Beacon')

@section('content')
    <!-- Editorial Hero Section -->
    <section class="relative pt-32 pb-24 overflow-hidden bg-white">
        <!-- Background Accent -->
        <div class="absolute top-0 right-0 w-[50%] h-full bg-surface skew-x-[-12deg] translate-x-[20%]"></div>
        
        <div class="container relative z-10 text-center lg:text-left">
            <div class="max-w-4xl reveal">
                <span class="inline-flex items-center px-4 py-2 bg-navy/5 rounded-full mb-8">
                    <span class="text-[10px] font-black uppercase tracking-[0.4em] text-navy">The Knowledge Hub</span>
                </span>
                <h1 class="text-7xl md:text-9xl font-black leading-none text-navy mb-8 uppercase tracking-tighter">
                    THE <span class="text-gold italic">INSIGHTS.</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-500 max-w-2xl leading-relaxed mb-12 font-medium">
                    Deep dives into account-based marketing, content syndication, and high-intent demand generation strategies.
                </p>
                
                <!-- Category Filter -->
                <div class="flex flex-wrap justify-center lg:justify-start gap-3">
                    <a href="#" class="px-6 py-3 rounded-xl bg-navy text-white text-[10px] font-black uppercase tracking-widest shadow-lg">All Posts</a>
                    <a href="#" class="px-6 py-3 rounded-xl bg-white border border-border text-gray-400 hover:text-navy transition-all text-[10px] font-black uppercase tracking-widest">Strategy</a>
                    <a href="#" class="px-6 py-3 rounded-xl bg-white border border-border text-gray-400 hover:text-navy transition-all text-[10px] font-black uppercase tracking-widest">Technology</a>
                    <a href="#" class="px-6 py-3 rounded-xl bg-white border border-border text-gray-400 hover:text-navy transition-all text-[10px] font-black uppercase tracking-widest">Reports</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Search & Secondary Filter -->
    <section class="py-8 bg-surface border-y border-border sticky top-20 z-30">
        <div class="container">
            <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="relative w-full md:w-96 group">
                    <input type="text" placeholder="Search our insights..." class="w-full pl-12 pr-6 py-4 bg-white rounded-2xl outline-none focus:ring-4 focus:ring-gold/10 transition-all text-sm font-bold border border-border">
                    <svg class="w-5 h-5 absolute left-5 top-1/2 -translate-y-1/2 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="3" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-[10px] font-black uppercase tracking-widest text-gray-400">Sorting:</span>
                    <button class="text-[10px] font-black uppercase tracking-widest text-navy bg-white px-4 py-2 rounded-lg border border-border">Latest First</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Grid -->
    <section class="section-padding bg-white">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Blog Card 1 -->
                <article class="reboot-card group h-full flex flex-col overflow-hidden">
                    <div class="aspect-[16/10] overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Strategy" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute top-6 left-6 px-4 py-2 bg-navy text-white text-[9px] font-black uppercase tracking-widest rounded-lg">Strategy</div>
                    </div>
                    <div class="p-10 flex flex-col flex-grow">
                        <div class="text-[9px] font-black uppercase tracking-widest text-gray-400 mb-4">May 12, 2024 • 8 MIN READ</div>
                        <h3 class="text-2xl font-black text-navy mb-6 uppercase tracking-tighter italic leading-tight group-hover:text-gold transition-colors">Mastering Intent Data in 2024: A B2B Guide</h3>
                        <p class="text-sm text-gray-500 leading-relaxed font-medium mb-10 line-clamp-3">Learn how to identify and leverage high-intent signals to shorten your sales cycle and improve lead quality via our proprietary hub.</p>
                        <a href="#" class="mt-auto inline-flex items-center text-[10px] font-black uppercase tracking-[0.3em] text-gold group-hover:pl-4 transition-all uppercase">
                            Read Insight
                            <svg class="w-5 h-5 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </article>

                <!-- Blog Card 2 -->
                <article class="reboot-card group h-full flex flex-col overflow-hidden" style="transition-delay: 0.1s;">
                    <div class="aspect-[16/10] overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Technology" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute top-6 left-6 px-4 py-2 bg-navy text-white text-[9px] font-black uppercase tracking-widest rounded-lg">Technology</div>
                    </div>
                    <div class="p-10 flex flex-col flex-grow">
                        <div class="text-[9px] font-black uppercase tracking-widest text-gray-400 mb-4">May 10, 2024 • 12 MIN READ</div>
                        <h3 class="text-2xl font-black text-navy mb-6 uppercase tracking-tighter italic leading-tight group-hover:text-gold transition-colors">AI Revolution in Content Syndication</h3>
                        <p class="text-sm text-gray-500 leading-relaxed font-medium mb-10 line-clamp-3">How artificial intelligence is personalizing the B2B content journey at scale, delivering the right asset at the right time.</p>
                        <a href="#" class="mt-auto inline-flex items-center text-[10px] font-black uppercase tracking-[0.3em] text-gold group-hover:pl-4 transition-all uppercase">
                            Read Insight
                            <svg class="w-5 h-5 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </article>

                <!-- Blog Card 3 -->
                <article class="reboot-card group h-full flex flex-col overflow-hidden" style="transition-delay: 0.2s;">
                    <div class="aspect-[16/10] overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Case Study" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute top-6 left-6 px-4 py-2 bg-navy text-white text-[9px] font-black uppercase tracking-widest rounded-lg">Case Study</div>
                    </div>
                    <div class="p-10 flex flex-col flex-grow">
                        <div class="text-[9px] font-black uppercase tracking-widest text-gray-400 mb-4">May 05, 2024 • 5 MIN READ</div>
                        <h3 class="text-2xl font-black text-navy mb-6 uppercase tracking-tighter italic leading-tight group-hover:text-gold transition-colors">Scaling SaaS Leads 300% Quarterly</h3>
                        <p class="text-sm text-gray-500 leading-relaxed font-medium mb-10 line-clamp-3">A detailed breakdown of how we helped a Tier-1 tech client dominate their niche via targeted ABM and soft intelligence.</p>
                        <a href="#" class="mt-auto inline-flex items-center text-[10px] font-black uppercase tracking-[0.3em] text-gold group-hover:pl-4 transition-all uppercase">
                            Read Insight
                            <svg class="w-5 h-5 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </article>
            </div>

            <!-- Pagination -->
            <div class="mt-24 flex items-center justify-center space-x-4">
                <a href="#" class="w-12 h-12 bg-navy text-white rounded-xl flex items-center justify-center font-black shadow-lg">1</a>
                <a href="#" class="w-12 h-12 bg-white border border-border text-navy hover:bg-surface rounded-xl flex items-center justify-center font-black transition-all">2</a>
                <a href="#" class="w-12 h-12 bg-white border border-border text-navy hover:bg-surface rounded-xl flex items-center justify-center font-black transition-all">3</a>
                <span class="text-gray-300">...</span>
                <a href="#" class="w-12 h-12 bg-white border border-border text-navy hover:bg-surface rounded-xl flex items-center justify-center font-black transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="3" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Sub Newsletter -->
    <section class="section-padding bg-surface">
        <div class="container reveal">
            <div class="reboot-card-dark p-12 md:p-32 relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-[40%] h-full bg-white/5 skew-x-[-12deg] translate-x-[20%]"></div>
                
                <div class="relative z-10 text-center">
                    <span class="text-gold-light font-black uppercase tracking-[0.5em] text-[10px] mb-8 block">Stay Ahead</span>
                    <h2 class="text-5xl md:text-8xl font-black text-white mb-10 uppercase tracking-tighter italic leading-none">Subscription <br> <span class="text-gold-light italic">Intelligence.</span></h2>
                    <p class="text-lg text-gray-400 font-medium max-w-2xl mx-auto mb-16">Join 50k+ B2B leaders receiving our weekly teardowns of the most successful demand generation engines.</p>
                    
                    <form action="#" class="max-w-xl mx-auto flex flex-col sm:flex-row gap-4">
                        <input type="email" placeholder="Work Email" class="w-full px-8 py-5 bg-white/5 border border-white/10 rounded-2xl outline-none focus:bg-white/10 focus:ring-4 focus:ring-gold/20 text-white font-bold transition-all placeholder:text-gray-500">
                        <button class="bg-gold text-navy px-10 py-5 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-white hover:text-navy transition-all shadow-xl active:scale-95">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
