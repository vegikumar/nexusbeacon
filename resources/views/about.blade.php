@extends('layouts.app')

@section('title', 'About Us | The Nexus Beacon Story - Global B2B Intelligence')

@section('content')
    <!-- High-Impact Hero -->
    <section class="relative pt-32 pb-24 overflow-hidden bg-white">
        <div class="absolute top-0 right-0 w-[50%] h-full bg-surface skew-x-[-15deg] translate-x-[20%]"></div>
        <div class="container relative z-10">
            <div class="max-w-4xl reveal">
                <span class="inline-flex items-center px-4 py-2 bg-navy/5 rounded-full mb-8">
                    <span class="w-2 h-2 bg-gold rounded-full mr-3 animate-pulse"></span>
                    <span class="text-[10px] font-black uppercase tracking-[0.4em] text-navy">Our Identity</span>
                </span>
                <h1 class="text-7xl md:text-9xl font-black leading-none text-navy mb-10 uppercase tracking-tighter">
                    THE <span class="text-gold italic">MISSION.</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-500 max-w-2xl leading-relaxed mb-12 font-medium">
                    Nexus Beacon was founded on a single principle: B2B marketing shouldn't be a guessing game. We've built an ecosystem that turns uncertainty into quantifiable growth.
                </p>
            </div>
        </div>
    </section>

    <!-- Foundational Values -->
    <section class="section-padding bg-surface">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
                <div class="reveal">
                    <span class="text-gold font-black uppercase tracking-[0.4em] text-[10px] mb-6 block">Our Core Principles</span>
                    <h2 class="text-5xl md:text-7xl font-black text-navy mb-10 leading-[0.9] uppercase tracking-tighter italic">
                        Strategic <br> <span class="text-gold italic">Foundation.</span>
                    </h2>
                    <p class="text-lg text-gray-500 mb-12 leading-relaxed font-medium">
                        We don't just deliver leads; we build high-performance demand engines that sustain long-term brand equity and market dominance.
                    </p>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <div class="reboot-card p-10 bg-white group">
                            <div class="text-gold font-black text-xs uppercase tracking-widest mb-4">01</div>
                            <h4 class="text-xl font-black text-navy mb-2 uppercase tracking-tight">Radical Truth</h4>
                            <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">Data without bias</p>
                        </div>
                        <div class="reboot-card p-10 bg-white group">
                            <div class="text-gold font-black text-xs uppercase tracking-widest mb-4">02</div>
                            <h4 class="text-xl font-black text-navy mb-2 uppercase tracking-tight">Elite Precision</h4>
                            <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">Zero waste targeting</p>
                        </div>
                    </div>
                </div>

                <div class="reveal relative h-[600px] mt-12 lg:mt-0" style="transition-delay: 0.2s;">
                    <div class="absolute inset-0 bg-navy rounded-[4rem] overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" alt="Office" class="w-full h-full object-cover grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-1000">
                    </div>
                    <!-- Decorative floating stat -->
                        <div class="absolute -bottom-10 -left-10 reboot-card p-10 bg-white shadow-elevated-lg reveal" style="transition-delay: 0.4s;">
                            <div class="text-5xl font-black text-navy mb-1 tracking-tighter">10+</div>
                            <div class="text-[10px] font-black uppercase tracking-widest text-gold">Years of Innovation</div>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Global Vision -->
    <section class="section-padding bg-white">
        <div class="container text-center max-w-4xl mx-auto">
            <div class="reveal">
                <span class="text-gold font-black uppercase tracking-[0.5em] text-[10px] mb-8 block">The Future</span>
                <h2 class="text-6xl md:text-8xl font-black text-navy mb-12 uppercase italic tracking-tighter leading-none">
                    Rewiring <br> <span class="text-gold italic">Global B2B.</span>
                </h2>
                <p class="text-lg text-gray-500 font-medium leading-relaxed mb-16">
                    Our vision is to be the central intelligence pulse for every enterprise seeking to bridge the gap between their product and the world’s most relevant decision makers.
                </p>
                <div class="w-24 h-1 bg-gold/10 mx-auto rounded-full mb-24"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="reveal">
                    <div class="text-5xl font-black text-navy mb-2 tracking-tighter italic">50k+</div>
                    <div class="text-[9px] font-black uppercase tracking-widest text-gray-400">Monthly Insights Readers</div>
                </div>
                <div class="reveal" style="transition-delay: 0.1s;">
                    <div class="text-5xl font-black text-gold mb-2 tracking-tighter italic">120+</div>
                    <div class="text-[9px] font-black uppercase tracking-widest text-gray-400">Strategic Analysts</div>
                </div>
                <div class="reveal" style="transition-delay: 0.2s;">
                    <div class="text-5xl font-black text-navy mb-2 tracking-tighter italic">15</div>
                    <div class="text-[9px] font-black uppercase tracking-widest text-gray-400">Global Hubs</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding bg-surface">
        <div class="container">
                <div class="reboot-card-dark p-16 md:p-32 text-center relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-1/2 h-full bg-gold/5 -skew-x-12 translate-x-[20%]"></div>
                    <div class="relative z-10">
                        <h2 class="text-5xl md:text-8xl font-black text-white mb-10 uppercase tracking-tighter italic leading-none">
                            Be Part of <br> <span class="text-gold-light italic">The Evolution.</span>
                        </h2>
                        <div class="flex flex-col sm:flex-row justify-center gap-6 mt-16">
                            <a href="/careers" class="bg-gold text-navy px-12 py-6 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-white hover:text-navy transition-all shadow-xl">Join the Team</a>
                        <a href="/contact" class="bg-transparent text-white border border-white/20 px-12 py-6 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-white/5 transition-all">Work with Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
