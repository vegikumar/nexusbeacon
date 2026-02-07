@extends('layouts.app')

@section('title', 'Nexus Beacon | Accelerating Global B2B Growth')

@section('content')
    <!-- High-Impact Hero Section -->
    <section class="relative min-h-[90vh] flex items-center overflow-hidden bg-white">
        <!-- Background Accents -->
        <div class="absolute top-0 right-0 w-[60%] h-full bg-surface skew-x-[-12deg] translate-x-[15%] z-0"></div>
        <div class="absolute top-[10%] right-[15%] w-72 h-72 bg-gold/5 rounded-full blur-[100px] z-0 animate-pulse"></div>

        <div class="container relative z-10 py-20 lg:py-0 mt-4 mb-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
                <div class="lg:col-span-7 reveal">
                    <div class="inline-flex items-center space-x-3 px-4 py-2 bg-navy/5 rounded-full mb-8">
                        <span class="w-2 h-2 bg-gold rounded-full animate-pulse"></span>
                        <span class="text-[10px] font-black uppercase tracking-[0.3em] text-navy">Innovating B2B Marketing</span>
                    </div>
                    <h1 class="text-6xl md:text-8xl lg:text-9xl font-black leading-[0.9] text-navy mb-8 uppercase tracking-tighter">
                        Empowering <br> <span class="text-gold italic">B2B Brands</span> <br> with Intelligence
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-500 max-w-xl leading-relaxed mb-12 font-medium">
                        Nexus Beacon combines deep industry intelligence with high-performance marketing engines to navigate your brand toward global dominance.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center gap-6">
                        <a href="/contact" class="w-full sm:w-auto bg-navy text-white px-12 py-6 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-gold hover:text-navy transition-all shadow-xl text-center active:scale-95">
                            Start Your Journey
                        </a>
                        <a href="#about" class="flex items-center space-x-4 group">
                            <span class="w-14 h-14 bg-white border border-border rounded-2xl flex items-center justify-center group-hover:bg-surface transition-all">
                                <svg class="w-6 h-6 text-navy animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="3" d="M19 13l-7 7-7-7"></path></svg>
                            </span>
                            <span class="text-[10px] font-black uppercase tracking-widest text-navy">Discover More</span>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-5 reveal" style="transition-delay: 0.2s;">
                    <div class="relative">
                        <!-- Decorative Stats Card -->
                        <div class="reboot-card p-10 relative z-10 overflow-hidden">
                            <div class="flex items-center justify-between mb-10">
                                <div class="text-[10px] font-black uppercase tracking-widest text-gold leading-none">Campaign Growth</div>
                                <div class="w-8 h-8 bg-surface rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                                </div>
                            </div>
                            <div class="text-5xl font-black text-navy mb-8 tracking-tighter">+350% ARR</div>
                            <div class="space-y-4">
                                <div class="h-1.5 w-full bg-surface rounded-full overflow-hidden">
                                    <div class="h-full bg-gold w-[85%] rounded-full shadow-gold"></div>
                                </div>
                                <div class="h-1.5 w-full bg-surface rounded-full overflow-hidden">
                                    <div class="h-full bg-gold-light w-[60%] rounded-full"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Abstract floating elements -->
                        <div class="absolute -top-12 -left-12 w-24 h-24 bg-gold/10 rounded-3xl -rotate-12 blur-xl"></div>
                        <div class="absolute -bottom-8 -right-8 w-32 h-32 bg-gold/5 rounded-full blur-2xl"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trusted Ticker -->
    <section class="py-12 bg-white border-y border-border overflow-hidden relative z-20">
        <div class="container mb-8">
            <span class="text-[10px] font-black uppercase tracking-[0.5em] text-gray-400 block text-center">Trusted by Global Leaders</span>
        </div>
        <div class="flex items-center space-x-24 animate-scroll whitespace-nowrap opacity-30">
            <span class="text-navy font-black text-2xl tracking-tighter">MICROSOFT</span>
            <span class="text-navy font-black text-2xl tracking-tighter">ORACLE</span>
            <span class="text-navy font-black text-2xl tracking-tighter">SALESFORCE</span>
            <span class="text-navy font-black text-2xl tracking-tighter">ADOBE</span>
            <span class="text-navy font-black text-2xl tracking-tighter">CISCO</span>
            <span class="text-navy font-black text-2xl tracking-tighter">IBM</span>
            <!-- Duplicates for seamless loop -->
            <span class="text-navy font-black text-2xl tracking-tighter">MICROSOFT</span>
            <span class="text-navy font-black text-2xl tracking-tighter">ORACLE</span>
            <span class="text-navy font-black text-2xl tracking-tighter">SALESFORCE</span>
            <span class="text-navy font-black text-2xl tracking-tighter">ADOBE</span>
            <span class="text-navy font-black text-2xl tracking-tighter">CISCO</span>
            <span class="text-navy font-black text-2xl tracking-tighter">IBM</span>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding bg-surface">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
                <div class="reveal">
                    <span class="text-gold font-black uppercase tracking-[0.4em] text-[10px] mb-6 block">Our Identity</span>
                    <h2 class="text-5xl md:text-7xl font-black text-navy mb-10 leading-[0.9] uppercase tracking-tighter italic">
                        Strategic <br> <span class="text-gold">Growth Hub.</span>
                    </h2>
                    <p class="text-lg text-gray-500 mb-12 leading-relaxed font-medium max-w-xl">
                        Inspired by the need for clear direction in complex B2B markets, we've built an ecosystem that delivers real metrics, qualified pipelines, and sustained brand equity.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <div class="reboot-card p-8 group">
                            <div class="w-12 h-12 bg-gold/10 rounded-2xl flex items-center justify-center text-gold mb-6 transition-colors group-hover:bg-gold group-hover:text-navy">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <h4 class="text-xl font-black text-navy mb-2 uppercase tracking-tight">Precision</h4>
                            <p class="text-xs text-gray-400 font-bold uppercase tracking-widest">Targeting Focus</p>
                        </div>
                        <div class="reboot-card p-8 group">
                            <div class="w-12 h-12 bg-gold/10 rounded-2xl flex items-center justify-center text-gold mb-6 transition-colors group-hover:bg-gold group-hover:text-navy">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <h4 class="text-xl font-black text-navy mb-2 uppercase tracking-tight">Conversion</h4>
                            <p class="text-xs text-gray-400 font-bold uppercase tracking-widest">Revenue Growth</p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-8 reveal" style="transition-delay: 0.2s;">
                    <div class="reboot-card p-12 text-center flex flex-col justify-center min-h-[240px]">
                        <div class="text-6xl font-black text-navy mb-2 tracking-tighter">500+</div>
                        <div class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Elite Clients</div>
                    </div>
                    <div class="reboot-card-dark p-12 text-center flex flex-col justify-center min-h-[240px] mt-12">
                        <div class="text-6xl font-black text-white mb-2 tracking-tighter">95%</div>
                        <div class="text-[10px] font-black text-white/40 uppercase tracking-widest">Retention</div>
                    </div>
                    <div class="reboot-card-dark p-12 text-center flex flex-col justify-center min-h-[240px] -mt-12">
                        <div class="text-6xl font-black text-gold-light mb-2 tracking-tighter">12M+</div>
                        <div class="text-[10px] font-black text-white/40 uppercase tracking-widest">Qualified Leads</div>
                    </div>
                    <div class="reboot-card p-12 text-center flex flex-col justify-center min-h-[240px]">
                        <div class="text-6xl font-black text-navy mb-2 tracking-tighter">150+</div>
                        <div class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Global Markets</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions Framework -->
    <section class="section-padding bg-white overflow-hidden">
        <div class="container">
            <div class="text-center max-w-3xl mx-auto mb-24 reveal">
                <span class="text-gold font-black uppercase tracking-[0.5em] text-[10px] mb-6 block">Proprietary Framework</span>
                <h2 class="text-5xl md:text-7xl font-black text-navy mb-8 uppercase tracking-tighter italic">Precision <span class="text-gold">Engineering.</span></h2>
                <div class="w-24 h-1 bg-gold/20 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <!-- Solution 1 -->
                <div class="reboot-card p-12 flex flex-col group h-full">
                    <div class="w-20 h-20 bg-surface rounded-2xl flex items-center justify-center text-navy mb-10 transition-all group-hover:bg-gold group-hover:text-navy group-hover:rotate-6">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                    </div>
                    <h3 class="text-3xl font-black text-navy mb-6 uppercase tracking-tighter italic">Converse</h3>
                    <p class="text-sm text-gray-500 leading-relaxed font-medium mb-12 flex-grow">
                        Building authentic dialogues through content engagement and strategic brand loyalty management.
                    </p>
                    <a href="/converse" class="text-[10px] font-black uppercase tracking-[0.3em] text-gold hover:text-navy transition-all flex items-center group/btn">
                        Learn Methodology 
                        <svg class="w-4 h-4 ml-3 transition-transform group-hover/btn:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>

                <!-- Solution 2 -->
                <div class="reboot-card group p-12 flex flex-col h-full">
                    <div class="w-20 h-20 bg-surface rounded-2xl flex items-center justify-center text-navy mb-10 transition-all group-hover:bg-gold group-hover:text-navy group-hover:rotate-6">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                    <h3 class="text-3xl font-black text-navy mb-6 uppercase tracking-tighter italic">Convert</h3>
                    <p class="text-sm text-gray-500 leading-relaxed font-medium mb-12 flex-grow">
                        High-impact demand generation and pipeline acceleration techniques designed for quantifiable ROI.
                    </p>
                    <a href="/convert" class="text-[10px] font-black uppercase tracking-[0.3em] text-gold hover:text-navy transition-all flex items-center group/btn">
                        Start Pipeline 
                        <svg class="w-4 h-4 ml-3 transition-transform group-hover/btn:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>

                <!-- Solution 3 -->
                <div class="reboot-card group p-12 flex flex-col h-full">
                    <div class="w-20 h-20 bg-surface rounded-2xl flex items-center justify-center text-navy mb-10 transition-all group-hover:bg-gold group-hover:text-navy group-hover:rotate-6">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <h3 class="text-3xl font-black text-navy mb-6 uppercase tracking-tighter italic">Connect</h3>
                    <p class="text-sm text-gray-500 leading-relaxed font-medium mb-12 flex-grow">
                        Connecting you with a global network of verified B2B decision-makers across diverse niches.
                    </p>
                    <a href="/connect" class="text-[10px] font-black uppercase tracking-[0.3em] text-gold hover:text-navy transition-all flex items-center group/btn">
                        Explore Data 
                        <svg class="w-4 h-4 ml-3 transition-transform group-hover/btn:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Visual Divider -->
    <section class="relative h-[50vh] flex items-center justify-center bg-navy overflow-hidden">
        <div class="absolute inset-0 opacity-20 group">
            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80" alt="Data" class="w-full h-full object-cover scale-110 group-hover:scale-100 transition-transform duration-[5s]">
            <div class="absolute inset-0 bg-navy/80"></div>
        </div>
        <div class="container relative z-10 text-center reveal">
            <h2 class="text-6xl md:text-9xl font-black text-white uppercase italic tracking-tighter leading-none mb-12">
                Precision <br> is <span class="text-gold italic">Power.</span>
            </h2>
            <div class="flex justify-center">
                <div class="w-20 h-20 bg-gold rounded-full flex items-center justify-center text-navy animate-pulse">
                    <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"></path></svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section-padding bg-white overflow-hidden">
        <div class="container">
            <div class="text-center max-w-3xl mx-auto mb-24 reveal">
                <span class="text-primary font-black uppercase tracking-[0.5em] text-[10px] mb-6 block">Global Praise</span>
                <h2 class="text-5xl md:text-7xl font-black text-navy mb-8 uppercase tracking-tighter italic">Trusted by <span class="text-gold">the Best.</span></h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <div class="reboot-card p-12 flex flex-col group bg-surface border-none h-full">
                    <div class="flex items-center space-x-1 mb-8">
                        @for($i=0; $i<5; $i++)
                            <svg class="w-4 h-4 text-gold fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        @endfor
                    </div>
                    <p class="text-lg font-medium text-navy leading-relaxed mb-12 flex-grow italic">
                        "Nexus Beacon transformed our lead generation funnel. Their data-driven approach is unlike anything we've seen in the B2B space."
                    </p>
                    <div class="flex items-center space-x-4 pt-8 border-t border-navy/5">
                        <div class="w-12 h-12 bg-navy rounded-xl"></div>
                        <div>
                            <div class="text-xs font-black uppercase tracking-widest text-navy">Sarah Jenkins</div>
                            <div class="text-[9px] font-bold uppercase tracking-widest text-gray-400">CMO, TechFlow</div>
                        </div>
                    </div>
                </div>

                <div class="reboot-card p-12 flex flex-col group bg-navy text-white border-none h-full">
                    <div class="flex items-center space-x-1 mb-8">
                        @for($i=0; $i<5; $i++)
                            <svg class="w-4 h-4 text-gold fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        @endfor
                    </div>
                    <p class="text-lg font-medium text-white/80 leading-relaxed mb-12 flex-grow italic">
                        "Precision is the word. Every account captured through their system was a perfect match for our strategic objectives."
                    </p>
                    <div class="flex items-center space-x-4 pt-8 border-t border-white/5">
                        <div class="w-12 h-12 bg-white/10 rounded-xl"></div>
                        <div>
                            <div class="text-xs font-black uppercase tracking-widest text-white">Michael Chen</div>
                            <div class="text-[9px] font-bold uppercase tracking-widest text-white/40">VP Growth, CloudScale</div>
                        </div>
                    </div>
                </div>

                <div class="reboot-card p-12 flex flex-col group bg-surface border-none h-full">
                    <div class="flex items-center space-x-1 mb-8">
                        @for($i=0; $i<5; $i++)
                            <svg class="w-4 h-4 text-gold fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        @endfor
                    </div>
                    <p class="text-lg font-medium text-navy leading-relaxed mb-12 flex-grow italic">
                        "The 'Converse' methodology finally made our brand approachable in a cold, corporate market. Highly recommended."
                    </p>
                    <div class="flex items-center space-x-4 pt-8 border-t border-navy/5">
                        <div class="w-12 h-12 bg-navy rounded-xl"></div>
                        <div>
                            <div class="text-xs font-black uppercase tracking-widest text-navy">Elena Rodriguez</div>
                            <div class="text-[9px] font-bold uppercase tracking-widest text-gray-400">Head of Mktg, Global Logistics</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="section-padding bg-surface">
        <div class="container">
            <div class="reboot-card-dark p-16 md:p-32 text-center lg:text-left relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-[40%] h-full bg-gold/5 -skew-x-12 translate-x-[20%] transition-transform group-hover:translate-x-[15%] duration-700"></div>
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center relative z-10">
                    <div class="lg:col-span-8">
                        <h2 class="text-5xl md:text-8xl font-black text-white mb-10 leading-[0.9] uppercase tracking-tighter italic">
                            Grow Your <br> <span class="text-gold italic">Empire.</span>
                        </h2>
                        <p class="text-lg text-gray-400 font-medium max-w-xl mb-0">
                            Join the league of global B2B leaders who trust Nexus Beacon to turn their vision into a high-performance reality.
                        </p>
                    </div>
                    <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-6">
                        <a href="/contact" class="bg-gold text-navy px-12 py-6 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-white hover:text-navy transition-all shadow-xl text-center active:scale-95">
                            Get Your Audit
                        </a>
                        <a href="/corporate-deck" class="bg-transparent text-white border border-white/20 px-12 py-6 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-white/10 transition-all text-center">
                            Download Deck
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
