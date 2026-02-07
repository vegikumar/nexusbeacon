@extends('layouts.app')

@section('title', 'Converse | B2B Content & Brand Engagement - Nexus Beacon')

@section('content')
    <!-- Specialized Hero Section -->
    <section class="relative pt-32 pb-24 overflow-hidden bg-white">
        <!-- Background Decor -->
        <div class="absolute top-0 right-0 w-[40%] h-full bg-surface skew-x-[-15deg] translate-x-[10%]"></div>
        
        <div class="container relative z-10">
            <div class="max-w-4xl reveal">
                <span class="inline-flex items-center px-4 py-2 bg-navy/5 rounded-full mb-8">
                    <span class="text-[10px] font-black uppercase tracking-[0.4em] text-navy">The Dialogue Engine</span>
                </span>
                <h1 class="text-7xl md:text-9xl font-black leading-none text-navy mb-8 uppercase tracking-tighter">
                    CON<span class="text-gold italic">VERSE.</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-500 max-w-2xl leading-relaxed mb-12 font-medium">
                    Transforming cold prospects into warm relationships through intelligent content syndication and brand storytelling. 
                </p>
                <div class="flex flex-col sm:flex-row items-center gap-6">
                    <a href="/contact" class="w-full sm:w-auto bg-navy text-white px-12 py-5 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-gold hover:text-navy transition-all shadow-xl text-center">
                        Get Started
                    </a>
                    <a href="#strategy" class="flex items-center space-x-4 group text-navy">
                        <span class="w-12 h-12 bg-white border border-border rounded-2xl flex items-center justify-center group-hover:bg-surface transition-all">
                            <svg class="w-5 h-5 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="3" d="M19 13l-7 7-7-7"></path></svg>
                        </span>
                        <span class="text-[10px] font-black uppercase tracking-widest">Explore Methodology</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Strategy Reveal -->
    <section id="strategy" class="section-padding bg-surface relative overflow-hidden">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
                <div class="reveal">
                    <span class="text-gold font-black uppercase tracking-[0.4em] text-[10px] mb-6 block">Our Methodology</span>
                    <h2 class="text-5xl md:text-7xl font-black text-navy mb-10 leading-[0.9] uppercase tracking-tighter italic">
                        Meaningful <br> <span class="text-gold italic">Interactions.</span>
                    </h2>
                    <p class="text-lg text-gray-500 mb-12 leading-relaxed font-medium">
                        Nexus Beacon’s Converse framework focuses on the 'Middle of the Funnel' where most B2B deals are won or lost. We ensure your brand is heard and trusted.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <div class="reboot-card p-10 bg-white">
                            <div class="text-4xl font-black text-navy/10 mb-6 leading-none group-hover:text-gold transition-colors">01</div>
                            <h4 class="text-lg font-black text-navy mb-3 uppercase tracking-tight">Authority</h4>
                            <p class="text-xs text-gray-400 font-bold leading-relaxed uppercase tracking-widest">Thought Leadership Syndication</p>
                        </div>
                        <div class="reboot-card p-10 bg-white">
                            <div class="text-4xl font-black text-navy/10 mb-6 leading-none">02</div>
                            <h4 class="text-lg font-black text-navy mb-3 uppercase tracking-tight">Social Selling</h4>
                            <p class="text-xs text-gray-400 font-bold leading-relaxed uppercase tracking-widest">Sales Enablement Data</p>
                        </div>
                    </div>
                </div>
                
                <div class="relative reveal mt-12 lg:mt-0" style="transition-delay: 0.2s;">
                    <div class="absolute -inset-10 bg-gold/5 rounded-[4rem] rotate-3 blur-3xl"></div>
                    <div class="relative rounded-[3rem] overflow-hidden shadow-elevated group border-8 border-white">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Engagement" class="w-full h-full object-cover grayscale transition-all duration-1000 group-hover:grayscale-0 group-hover:scale-105">
                        <div class="absolute inset-0 bg-navy/40 group-hover:bg-navy/0 transition-all duration-700"></div>
                        <div class="absolute bottom-10 left-10 text-white reveal group-hover:translate-x-2 transition-transform">
                            <span class="text-[10px] font-black uppercase tracking-[0.4em] opacity-60">Case Highlight</span>
                            <h4 class="text-2xl font-black uppercase italic tracking-tighter">Global Tech Outreach</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Engagement Suite -->
    <section class="section-padding bg-white">
        <div class="container">
            <div class="text-center max-w-3xl mx-auto mb-24 reveal">
                <span class="text-gold font-black uppercase tracking-[0.5em] text-[10px] mb-6 block">Engagement Suite</span>
                <h2 class="text-5xl md:text-7xl font-black text-navy mb-8 uppercase tracking-tighter italic">Conversational <span class="text-gold italic">Tools.</span></h2>
                <div class="w-24 h-1 bg-gold/10 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <!-- Tool 1 -->
                <div class="reboot-card p-12 flex flex-col group h-full">
                    <div class="w-16 h-16 bg-surface rounded-2xl flex items-center justify-center text-navy mb-10 group-hover:bg-gold group-hover:text-navy transition-all">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-black text-navy mb-6 uppercase tracking-tighter italic">Webinarix</h3>
                    <p class="text-sm text-gray-500 leading-relaxed font-medium mb-12">Interactive B2B webinars that solve core industry pain points while capturing behavioral data.</p>
                    <div class="mt-auto pt-8 border-t border-border flex items-center justify-between">
                        <span class="text-[9px] font-black uppercase tracking-widest text-gray-400 italic">Core Tech</span>
                        <div class="w-2 h-2 bg-gold rounded-full"></div>
                    </div>
                </div>

                <!-- Tool 2 -->
                <div class="reboot-card p-12 flex flex-col group h-full">
                    <div class="w-16 h-16 bg-surface rounded-2xl flex items-center justify-center text-navy mb-10 group-hover:bg-gold group-hover:text-navy transition-all">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-black text-navy mb-6 uppercase tracking-tighter italic">Syndication</h3>
                    <p class="text-sm text-gray-500 leading-relaxed font-medium mb-12">Amplifying your high-value assets across our network of 12+ strategic B2B audience hubs worldwide.</p>
                    <div class="mt-auto pt-8 border-t border-border flex items-center justify-between">
                        <span class="text-[9px] font-black uppercase tracking-widest text-gray-400 italic">Global reach</span>
                        <div class="w-2 h-2 bg-gold rounded-full"></div>
                    </div>
                </div>

                <!-- Tool 3 -->
                <div class="reboot-card p-12 flex flex-col group h-full">
                    <div class="w-16 h-16 bg-surface rounded-2xl flex items-center justify-center text-navy mb-10 group-hover:bg-gold group-hover:text-navy transition-all">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-black text-navy mb-6 uppercase tracking-tighter italic">Brand Audit</h3>
                    <p class="text-sm text-gray-500 leading-relaxed font-medium mb-12">Deep analysis of how your brand is perceived vs. your strategic objectives in the global B2B space.</p>
                    <div class="mt-auto pt-8 border-t border-border flex items-center justify-between">
                        <span class="text-[9px] font-black uppercase tracking-widest text-gray-400 italic">Strategic Insight</span>
                        <div class="w-2 h-2 bg-gold rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lead Magnet -->
    <section class="py-20 bg-white">
        <div class="container">
            <div class="reboot-card p-12 bg-surface border-none flex flex-col lg:flex-row items-center justify-between gap-12 reveal">
                <div class="max-w-xl">
                    <h4 class="text-2xl font-black text-navy uppercase tracking-tighter italic mb-4">Engagement Playbook</h4>
                    <p class="text-sm text-gray-500 font-medium">Download our guide on building authentic executive dialogues that bypass Gatekeepers.</p>
                </div>
                <a href="/brochure" class="bg-navy text-white px-10 py-5 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-gold hover:text-navy transition-all shadow-xl whitespace-nowrap">Download Playbook</a>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="section-padding bg-navy text-center">
        <div class="container reveal">
            <h2 class="text-5xl md:text-8xl font-black text-white mb-12 uppercase italic tracking-tighter leading-none">
                Start the <br> <span class="text-gold italic">Conversation.</span>
            </h2>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-6">
                 <a href="/contact" class="w-full sm:w-auto bg-gold text-navy px-12 py-6 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-white hover:text-navy transition-all shadow-xl active:scale-95">Connect with an Expert</a>
                 <a href="/brochure" class="w-full sm:w-auto bg-transparent text-white border border-white/20 px-12 py-6 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-white/10 transition-all">Download Resources</a>
            </div>
        </div>
    </section>
@endsection
