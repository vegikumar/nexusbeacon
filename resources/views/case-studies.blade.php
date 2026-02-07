@extends('layouts.app')

@section('title', 'Case Studies | B2B Success Metrics - Nexus Beacon')

@section('content')
    <!-- High-Luxe Hero Section -->
    <section class="relative pt-32 pb-24 overflow-hidden bg-navy text-white">
        <!-- Background Data Flow -->
        <div class="absolute top-0 left-0 w-full h-full opacity-[0.03] z-0 pointer-events-none" style="background-image: repeating-linear-gradient(0deg, #FDC010, #FDC010 1px, transparent 1px, transparent 40px);"></div>
        
        <div class="container relative z-10 text-center">
            <div class="max-w-4xl mx-auto reveal">
                <span class="inline-flex items-center px-4 py-2 bg-white/5 border border-white/10 rounded-full mb-8">
                    <span class="text-[10px] font-black uppercase tracking-[0.4em] text-gold-light">The Proof</span>
                </span>
                <h1 class="text-7xl md:text-9xl font-black leading-none text-white mb-8 uppercase tracking-tighter">
                    PROVEN <span class="text-gold-light italic">SUCCESS.</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-400 max-w-2xl mx-auto leading-relaxed mb-12 font-medium">
                    Quantifiable evidence of how Nexus Beacon drives revenue and scales global B2B operations.
                </p>
                
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 mt-20">
                    <div class="reveal">
                        <div class="text-5xl font-black text-gold-light mb-2 tracking-tighter italic">500+</div>
                        <div class="text-[9px] font-black uppercase tracking-widest opacity-40">Elite Campaigns</div>
                    </div>
                    <div class="reveal" style="transition-delay: 0.1s;">
                        <div class="text-5xl font-black text-white mb-2 tracking-tighter italic">350%</div>
                        <div class="text-[9px] font-black uppercase tracking-widest opacity-40">Avg ROI</div>
                    </div>
                    <div class="reveal" style="transition-delay: 0.2s;">
                        <div class="text-5xl font-black text-gold-light mb-2 tracking-tighter italic">12M+</div>
                        <div class="text-[9px] font-black uppercase tracking-widest opacity-40">Leads Generated</div>
                    </div>
                    <div class="reveal" style="transition-delay: 0.3s;">
                        <div class="text-5xl font-black text-white mb-2 tracking-tighter italic">150+</div>
                        <div class="text-[9px] font-black uppercase tracking-widest opacity-40">Tier-1 Clients</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies Portfolio -->
    <section class="section-padding bg-surface">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
                <!-- Case Study 1 -->
                <article class="reveal group">
                    <div class="reboot-card overflow-hidden bg-white mb-10 h-[500px] relative border-none shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" alt="Case Study 1" class="w-full h-full object-cover transition-all duration-[2s] group-hover:scale-105 group-hover:grayscale">
                        <div class="absolute inset-0 bg-gradient-to-t from-navy via-navy/40 to-transparent flex flex-col justify-end p-12">
                            <span class="text-gold-light font-black uppercase tracking-[0.4em] text-[10px] mb-4 opacity-60">Cloud Technology</span>
                            <h3 class="text-4xl md:text-5xl font-black text-white mb-10 leading-none uppercase tracking-tighter italic">SaaS Leader <br> <span class="text-gold-light">Market Boost.</span></h3>
                            
                            <div class="flex items-center space-x-12 border-t border-white/10 pt-10">
                                <div>
                                    <div class="text-3xl font-black text-white italic tracking-tighter leading-none mb-2">4.5x</div>
                                    <div class="text-[8px] font-black uppercase tracking-widest text-white/40">Lead Value</div>
                                </div>
                                <div>
                                    <div class="text-3xl font-black text-white italic tracking-tighter leading-none mb-2">60%</div>
                                    <div class="text-[8px] font-black uppercase tracking-widest text-white/40">Lower CPA</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 flex flex-col md:flex-row justify-between items-start md:items-center gap-10">
                        <p class="text-gray-500 font-medium text-sm leading-relaxed max-w-sm">Strategic content syndication across 12 countries resulting in a massive pipeline boost within 6 months.</p>
                        <a href="#" class="w-16 h-16 rounded-2xl bg-navy text-white flex items-center justify-center hover:bg-gold hover:text-navy transition-all group-hover:rotate-12 duration-500 shadow-xl">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </article>

                <!-- Case Study 2 -->
                <article class="reveal group" style="transition-delay: 0.1s;">
                    <div class="reboot-card overflow-hidden bg-white mb-10 h-[500px] relative border-none shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" alt="Case Study 2" class="w-full h-full object-cover transition-all duration-[2s] group-hover:scale-105 group-hover:grayscale">
                        <div class="absolute inset-0 bg-gradient-to-t from-navy via-navy/40 to-transparent flex flex-col justify-end p-12">
                            <span class="text-gold-light font-black uppercase tracking-[0.4em] text-[10px] mb-4 opacity-60">Industrial Automation</span>
                            <h3 class="text-4xl md:text-5xl font-black text-white mb-10 leading-none uppercase tracking-tighter italic">ABM Domination <br> <span class="text-gold-light">Global Scale.</span></h3>
                            
                            <div class="flex items-center space-x-12 border-t border-white/10 pt-10">
                                <div>
                                    <div class="text-3xl font-black text-white italic tracking-tighter leading-none mb-2">$12M+</div>
                                    <div class="text-[8px] font-black uppercase tracking-widest text-white/40">Pipeline Value</div>
                                </div>
                                <div>
                                    <div class="text-3xl font-black text-white italic tracking-tighter leading-none mb-2">45%</div>
                                    <div class="text-[8px] font-black uppercase tracking-widest text-white/40">Conv. Rate</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 flex flex-col md:flex-row justify-between items-start md:items-center gap-10">
                        <p class="text-gray-500 font-medium text-sm leading-relaxed max-w-sm">Targeting C-suite decision makers with hyper-personalized content assets and proprietary webinars.</p>
                        <a href="#" class="w-16 h-16 rounded-2xl bg-navy text-white flex items-center justify-center hover:bg-gold hover:text-navy transition-all group-hover:rotate-12 duration-500 shadow-xl">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding bg-white overflow-hidden text-center">
        <div class="container reveal">
            <div class="reboot-card-dark p-16 md:p-32 relative overflow-hidden group">
                <div class="absolute -top-32 -left-32 w-96 h-96 bg-gold/10 rounded-full blur-[120px] pointer-events-none"></div>
                <h2 class="text-5xl md:text-8xl font-black text-white mb-10 mb-8 uppercase leading-none italic tracking-tighter leading-none">Ready to make <br> <span class="text-gold-light italic">History?</span></h2>
                <p class="text-gray-400 text-lg md:text-xl max-w-2xl mx-auto mb-16 font-medium">Join hundreds of global enterprises that trust Nexus Beacon for performance-driven B2B marketing results.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-6">
                    <a href="/contact" class="bg-gold text-navy px-12 py-6 rounded-2xl font-black text-xs uppercase tracking-widest transition-all shadow-xl transform active:scale-95 hover:bg-white hover:text-navy">Start Your Campaign</a>
                    <a href="/brochure" class="bg-transparent text-white border border-white/20 px-12 py-6 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-white/5 transition-all">Download Metrics</a>
                </div>
            </div>
        </div>
    </section>
@endsection
