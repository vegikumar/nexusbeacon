@extends('layouts.app')

@section('title', 'Convert | B2B Demand Generation & Pipeline Expansion - Nexus Beacon')

@section('content')
    <!-- High-End Hero Section -->
    <section class="relative pt-32 pb-24 overflow-hidden bg-white">
        <!-- Background Grid Effect -->
        <div class="absolute inset-0 z-0 opacity-[0.03] pointer-events-none" style="background-image: radial-gradient(circle at 2px 2px, #020617 1px, transparent 0); background-size: 40px 40px;"></div>
        
        <div class="container relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-20 items-center">
                <div class="lg:col-span-7 reveal">
                    <span class="inline-flex items-center px-4 py-2 bg-gold/10 rounded-full mb-8">
                        <span class="text-[10px] font-black uppercase tracking-[0.4em] text-gold">Revenue Engineering</span>
                    </span>
                    <h1 class="text-7xl md:text-9xl font-black leading-none text-navy mb-8 uppercase tracking-tighter">
                        CON<span class="text-gold italic">VERT.</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-500 max-w-xl leading-relaxed mb-12 font-medium">
                        Accelerating your sales pipeline through high-intent lead generation and precision demand capture at a global scale.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center gap-6">
                        <a href="/contact" class="w-full sm:w-auto bg-navy text-white px-12 py-5 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-gold hover:text-navy transition-all shadow-xl text-center">
                            Deploy Engine
                        </a>
                        <div class="flex items-center space-x-6">
                            <div class="flex -space-x-3">
                                <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?u=1" alt="User">
                                <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?u=2" alt="User">
                                <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?u=3" alt="User">
                            </div>
                            <span class="text-[10px] font-black uppercase tracking-widest text-gray-400">Trusted by CMOs</span>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5 reveal" style="transition-delay: 0.2s;">
                    <div class="reboot-card p-12 relative overflow-hidden bg-navy text-white border-none shadow-2xl">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-gold/20 rounded-full blur-3xl"></div>
                        <div class="relative z-10">
                            <h4 class="text-[10px] font-black uppercase tracking-[0.4em] text-gold-light mb-10">Pipeline Health</h4>
                            <div class="space-y-8">
                                <div class="flex items-end justify-between">
                                    <div class="w-8 bg-gold/20 h-24 rounded-t-lg"></div>
                                    <div class="w-8 bg-gold/40 h-32 rounded-t-lg"></div>
                                    <div class="w-8 bg-gold/60 h-48 rounded-t-lg"></div>
                                    <div class="w-8 bg-gold h-64 rounded-t-lg animate-pulse"></div>
                                </div>
                                <div class="pt-8 border-t border-white/10 flex justify-between items-center">
                                    <span class="text-2xl font-black tracking-tighter">4.8x ROI</span>
                                    <span class="text-[10px] font-black uppercase tracking-widest text-gold-light italic">Targeting Alpha</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Capabilities Grid -->
    <section class="section-padding bg-surface">
        <div class="container">
            <div class="flex flex-col md:flex-row justify-between items-end mb-24 gap-12 reveal">
                <div class="max-w-2xl">
                    <span class="text-gold font-black uppercase tracking-[0.4em] text-[10px] mb-6 block">Capabilities</span>
                    <h2 class="text-5xl md:text-7xl font-black text-navy mb-8 uppercase tracking-tighter italic leading-none">High-Intent <br> <span class="text-gold italic">Engines.</span></h2>
                </div>
                <div class="p-8 bg-white rounded-3xl border border-border flex items-center space-x-6">
                    <div class="w-12 h-12 bg-gold/5 rounded-2xl flex items-center justify-center text-gold">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg>
                    </div>
                    <p class="text-[10px] font-black uppercase tracking-widest text-navy leading-relaxed">Proprietary lead <br> qualification AI</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Engine 1 -->
                <div class="reboot-card p-10 flex flex-col group bg-white">
                    <div class="w-14 h-14 bg-surface rounded-2xl flex items-center justify-center text-navy mb-10 group-hover:bg-navy group-hover:text-white transition-all">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5"></path></svg>
                    </div>
                    <h3 class="text-xl font-black text-navy mb-4 uppercase tracking-tight italic">Intent Engine</h3>
                    <p class="text-xs text-gray-400 font-bold uppercase tracking-widest leading-relaxed mb-8 flex-grow">Behavioral tracking of 1st-party intent signals across the funnel.</p>
                    <div class="w-10 h-1 bg-border rounded-full group-hover:w-full transition-all duration-500"></div>
                </div>

                <!-- Engine 2 -->
                <div class="reboot-card p-10 flex flex-col group bg-white">
                    <div class="w-14 h-14 bg-surface rounded-2xl flex items-center justify-center text-navy mb-10 group-hover:bg-navy group-hover:text-white transition-all">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-black text-navy mb-4 uppercase tracking-tight italic">ABM Hub</h3>
                    <p class="text-xs text-gray-400 font-bold uppercase tracking-widest leading-relaxed mb-8 flex-grow">Dedicated account-based marketing tactics for high-value targets.</p>
                    <div class="w-10 h-1 bg-border rounded-full group-hover:w-full transition-all duration-500"></div>
                </div>

                <!-- Engine 3 -->
                <div class="reboot-card p-10 flex flex-col group bg-white">
                    <div class="w-14 h-14 bg-surface rounded-2xl flex items-center justify-center text-navy mb-10 group-hover:bg-navy group-hover:text-white transition-all">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-black text-navy mb-4 uppercase tracking-tight italic">Digital Events</h3>
                    <p class="text-xs text-gray-400 font-bold uppercase tracking-widest leading-relaxed mb-8 flex-grow">Premium B2B webinars and virtual summits with elite attendance.</p>
                    <div class="w-10 h-1 bg-border rounded-full group-hover:w-full transition-all duration-500"></div>
                </div>

                <!-- Engine 4 -->
                <div class="reboot-card p-10 flex flex-col group bg-white">
                    <div class="w-14 h-14 bg-surface rounded-2xl flex items-center justify-center text-navy mb-10 group-hover:bg-navy group-hover:text-white transition-all">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 012 2h2a2 2 0 012-2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-black text-navy mb-4 uppercase tracking-tight italic">Lead Scoring</h3>
                    <p class="text-xs text-gray-400 font-bold uppercase tracking-widest leading-relaxed mb-8 flex-grow">Predictive analytics to identify the leads most likely to close.</p>
                    <div class="w-10 h-1 bg-border rounded-full group-hover:w-full transition-all duration-500"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Results Section -->
    <section class="section-padding bg-white relative">
        <div class="container relative z-10">
            <div class="reboot-card p-12 md:p-24 border-primary/10 shadow-elevated-lg overflow-hidden group">
                <div class="absolute top-0 right-0 w-1/3 h-full bg-surface skew-x-[-12deg] translate-x-[20%] z-0"></div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center relative z-10">
                    <div class="reveal">
                        <span class="text-gold font-black uppercase tracking-[0.4em] text-[10px] mb-6 block">The Result</span>
                        <h2 class="text-5xl md:text-7xl font-black text-navy mb-10 leading-[0.9] uppercase tracking-tighter italic">Hard <br> <span class="text-gold italic">Metrics.</span></h2>
                        <p class="text-lg text-gray-500 mb-12 leading-relaxed font-medium">Unlike generic marketing, our systems are built for one purpose: sustainable revenue growth for elite B2B brands.</p>
                        <div class="flex flex-wrap gap-12">
                            <div>
                                <div class="text-4xl font-black text-navy">45%</div>
                                <div class="text-[9px] font-black text-gray-400 uppercase tracking-widest">Conv. Rate Lift</div>
                            </div>
                            <div>
                                <div class="text-4xl font-black text-navy">60%</div>
                                <div class="text-[9px] font-black text-gray-400 uppercase tracking-widest">CPA Reduction</div>
                            </div>
                        </div>
                    </div>
                    <div class="reveal" style="transition-delay: 0.2s;">
                        <div class="space-y-6">
                            <div class="reboot-card p-10 bg-surface border-none flex items-center justify-between group-hover:translate-x-4 transition-transform duration-500">
                                <span class="text-sm font-black uppercase tracking-widest text-navy">Tier-1 Accounts Captured</span>
                                <span class="text-2xl font-black text-gold">2.4k+</span>
                            </div>
                            <div class="reboot-card p-10 bg-navy text-white border-none flex items-center justify-between group-hover:translate-x-2 transition-transform duration-500">
                                <span class="text-sm font-black uppercase tracking-widest opacity-60">Avg Contract Value Lift</span>
                                <span class="text-2xl font-black text-gold-light">300%</span>
                            </div>
                        </div>
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
                    <h4 class="text-2xl font-black text-navy uppercase tracking-tighter italic mb-4">Pipeline ROI Calculator</h4>
                    <p class="text-sm text-gray-500 font-medium">Analyze your current demand generation costs vs. Nexus Beacon high-intent benchmarks.</p>
                </div>
                <a href="/brochure" class="bg-navy text-white px-10 py-5 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-gold hover:text-navy transition-all shadow-xl whitespace-nowrap">Get Calculator</a>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="section-padding bg-surface text-center">
        <div class="container reveal">
            <h2 class="text-5xl md:text-8xl font-black text-navy mb-12 uppercase italic tracking-tighter leading-none">
                Accelerate <br> your <span class="text-gold italic">Pipeline.</span>
            </h2>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-6">
                 <a href="/contact" class="w-full sm:w-auto bg-navy text-white px-12 py-6 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-gold hover:text-navy transition-all shadow-xl active:scale-95">Book Strategy Audit</a>
                 <a href="/case-studies" class="w-full sm:w-auto bg-white border border-border text-navy px-12 py-6 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-surface transition-all">View Our Successes</a>
            </div>
        </div>
    </section>
@endsection
