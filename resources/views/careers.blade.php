@extends('layouts.app')

@section('title', 'Careers | Join the Nexus Beacon Intelligence Hub - Nexus Beacon')

@section('content')
    <!-- High-Luxe Hero Section -->
    <section class="relative pt-32 pb-24 overflow-hidden bg-white">
        <!-- Background Accent -->
        <div class="absolute top-0 right-0 w-[50%] h-full bg-surface skew-x-[-15deg] translate-x-[15%]"></div>
        
        <div class="container relative z-10 text-center lg:text-left">
            <div class="max-w-4xl reveal">
                <span class="inline-flex items-center px-4 py-2 bg-navy/5 rounded-full mb-8">
                    <span class="text-[10px] font-black uppercase tracking-[0.4em] text-navy">Join the Mission</span>
                </span>
                <h1 class="text-7xl md:text-9xl font-black leading-none text-navy mb-10 uppercase tracking-tighter">
                    INNOVATE <br> WITH <span class="text-gold italic">US.</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-500 max-w-xl leading-relaxed mb-12 font-medium">
                    We're building the future of global B2B marketing. Join a remote-first team of elite thinkers, builders, and disruptors.
                </p>
                <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-6">
                    <a href="#openings" class="w-full sm:w-auto bg-navy text-white px-12 py-5 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-gold hover:text-navy transition-all shadow-xl active:scale-95 text-center">
                        View Positions
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Culture Section -->
    <section class="section-padding bg-surface">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
                <div class="reveal relative order-2 lg:order-1">
                    <div class="grid grid-cols-2 gap-6 relative z-10">
                        <div class="rounded-3xl overflow-hidden aspect-[4/5] shadow-2xl -rotate-3 hover:rotate-0 transition-transform duration-700 bg-white p-2">
                             <img src="https://images.unsplash.com/photo-1522071823991-b9671f9d7f1f?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Culture" class="w-full h-full object-cover rounded-2xl grayscale hover:grayscale-0 transition-all">
                        </div>
                        <div class="rounded-3xl overflow-hidden aspect-[4/5] shadow-2xl rotate-3 hover:rotate-0 transition-transform duration-700 bg-white p-2 mt-12">
                             <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Culture" class="w-full h-full object-cover rounded-2xl grayscale hover:grayscale-0 transition-all">
                        </div>
                    </div>
                    <div class="absolute -inset-10 bg-gold/5 rounded-[4rem] blur-3xl z-0"></div>
                </div>
                
                <div class="reveal lg:order-2">
                    <span class="text-gold font-black uppercase tracking-[0.4em] text-[10px] mb-6 block">Our DNA</span>
                    <h2 class="text-5xl md:text-7xl font-black text-navy mb-10 leading-[0.9] uppercase tracking-tighter italic">
                        Elite <br> <span class="text-gold italic">Atmosphere.</span>
                    </h2>
                    <p class="text-lg text-gray-500 mb-12 leading-relaxed font-medium">
                        At Nexus Beacon, we believe in radical transparency, collective growth, and pushing the boundaries of what's possible in the B2B high-intent space.
                    </p>
                    
                    <div class="space-y-8">
                        <div class="reboot-card p-10 bg-white flex items-start space-x-6">
                            <div class="w-14 h-14 bg-surface rounded-2xl flex items-center justify-center text-gold shrink-0">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="3" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-black text-navy mb-1 uppercase tracking-tight">Flexible Anywhere</h4>
                                <p class="text-xs text-gray-400 font-bold uppercase tracking-widest">Global Hub access</p>
                            </div>
                        </div>
                        <div class="reboot-card p-10 bg-white flex items-start space-x-6">
                            <div class="w-14 h-14 bg-surface rounded-2xl flex items-center justify-center text-gold shrink-0">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="3" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-black text-navy mb-1 uppercase tracking-tight">Growth Acceleration</h4>
                                <p class="text-xs text-gray-400 font-bold uppercase tracking-widest">Individual Learning Budget</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Open Positions -->
    <section id="openings" class="section-padding bg-white">
        <div class="container">
            <div class="flex flex-col md:flex-row justify-between items-end mb-24 gap-12 reveal">
                <div class="max-w-2xl">
                    <span class="text-gold font-black uppercase tracking-[0.4em] text-[10px] mb-6 block">Opportunities</span>
                    <h2 class="text-5xl md:text-7xl font-black text-navy mb-8 uppercase tracking-tighter italic leading-none">Current <br> <span class="text-gold italic">Openings.</span></h2>
                </div>
                <div class="flex flex-wrap gap-4">
                    <button class="px-8 py-4 rounded-xl bg-navy text-white text-[9px] font-black uppercase tracking-widest shadow-lg">All Roles</button>
                    <button class="px-8 py-4 rounded-xl bg-white border border-border text-gray-400 hover:text-navy transition-all text-[9px] font-black uppercase tracking-widest">Remote-Only</button>
                </div>
            </div>

            <div class="space-y-6">
                <!-- Job Card 1 -->
                <div class="reboot-card p-12 md:p-16 flex flex-col md:flex-row justify-between items-center gap-10 group reveal bg-white">
                    <div class="text-center md:text-left">
                        <span class="text-[9px] font-black uppercase tracking-[0.5em] text-gold mb-4 block">Marketing Operations</span>
                        <h3 class="text-3xl font-black text-navy mb-4 tracking-tighter uppercase italic group-hover:text-gold transition-colors">Senior Performance Strategist</h3>
                        <div class="flex flex-wrap justify-center md:justify-start gap-8 opacity-40">
                            <span class="text-[9px] font-black uppercase tracking-widest flex items-center"><svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg> London / Remote</span>
                            <span class="text-[9px] font-black uppercase tracking-widest flex items-center"><svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Full-Time</span>
                        </div>
                    </div>
                    <a href="/contact" class="w-full md:w-auto bg-navy text-white px-12 py-5 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-gold hover:text-navy transition-all shadow-xl active:scale-95 text-center">Apply Position</a>
                </div>

                <!-- Job Card 2 -->
                <div class="reboot-card p-12 md:p-16 flex flex-col md:flex-row justify-between items-center gap-10 group reveal bg-white" style="transition-delay: 0.1s;">
                    <div class="text-center md:text-left">
                        <span class="text-[9px] font-black uppercase tracking-[0.5em] text-gold mb-4 block">Technology</span>
                        <h3 class="text-3xl font-black text-navy mb-4 tracking-tighter uppercase italic group-hover:text-gold transition-colors">Lead Data Engineer</h3>
                        <div class="flex flex-wrap justify-center md:justify-start gap-8 opacity-40">
                            <span class="text-[9px] font-black uppercase tracking-widest flex items-center"><svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg> Global Remote</span>
                            <span class="text-[9px] font-black uppercase tracking-widest flex items-center"><svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Full-Time</span>
                        </div>
                    </div>
                    <a href="/contact" class="w-full md:w-auto bg-navy text-white px-12 py-5 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-gold hover:text-navy transition-all shadow-xl active:scale-95 text-center">Apply Position</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Talent Pool CTA -->
    <section class="section-padding bg-navy text-center relative overflow-hidden">
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-gold/10 rounded-full blur-[120px]"></div>
        <div class="container reveal">
            <h2 class="text-5xl md:text-8xl font-black text-white mb-10 uppercase italic tracking-tighter leading-none">
                Don't see a <br> <span class="text-gold-light italic">fitting role?</span>
            </h2>
            <p class="text-gray-400 text-lg md:text-xl max-w-2xl mx-auto mb-16 font-medium">Join our global talent hub. We're always looking for exceptional leaders to rewrite the B2B landscape.</p>
            <a href="mailto:careers@nexusbeacon.com" class="inline-block bg-gold text-navy px-14 py-6 rounded-2xl font-black text-[10px] uppercase tracking-[0.4em] transition-all shadow-xl hover:bg-white hover:text-navy active:scale-95 transform">Join Talent Pool</a>
        </div>
    </section>
@endsection
