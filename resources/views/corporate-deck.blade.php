@extends('layouts.app')

@section('title', 'Corporate Deck | High-Level Strategic Overview - Nexus Beacon')

@section('content')
    <!-- High-Luxe Hero Section -->
    <section class="relative pt-32 pb-24 overflow-hidden bg-navy text-white">
        <!-- Background Data Flow -->
        <div class="absolute inset-0 z-0 opacity-[0.05] pointer-events-none" style="background-image: linear-gradient(90deg, #FDC010 1px, transparent 1px); background-size: 80px 100%;"></div>
        
        <div class="container relative z-10 text-center">
            <div class="max-w-4xl mx-auto reveal">
                <span class="inline-flex items-center px-4 py-2 bg-white/5 border border-white/10 rounded-full mb-8">
                    <span class="text-[10px] font-black uppercase tracking-[0.4em] text-gold-light">Board-Level Strategic access</span>
                </span>
                <h1 class="text-7xl md:text-9xl font-black leading-none text-white mb-10 uppercase tracking-tighter">
                    CORPORATE <br> <span class="text-gold-light italic">DECK.</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-400 max-w-2xl mx-auto leading-relaxed mb-16 font-medium">
                    The complete strategic overview of Nexus Beacon's global operations, market positioning, and revenue engineering framework.
                </p>
                
                <div class="flex flex-col sm:flex-row justify-center items-center gap-6">
                    <a href="#request" class="w-full sm:w-auto bg-gold text-navy px-12 py-6 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-white hover:text-navy transition-all shadow-xl transform active:scale-95">
                        Request Keynote Access
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Preview -->
    <section class="section-padding bg-white">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
                <div class="reveal">
                    <span class="text-gold font-black uppercase tracking-[0.4em] text-[10px] mb-6 block">Executive Summary</span>
                    <h2 class="text-5xl md:text-7xl font-black text-navy mb-10 leading-[0.9] uppercase tracking-tighter italic">
                        Visionary <br> <span class="text-gold italic">Architecture.</span>
                    </h2>
                    <p class="text-lg text-gray-500 mb-12 leading-relaxed font-medium">
                        Our deck provides a high-level look at the methodologies used by Fortune 500 brands to dominate their sectors through Nexus-driven intelligence.
                    </p>
                    <ul class="space-y-6">
                        <li class="flex items-center space-x-6">
                            <div class="w-2 h-2 bg-gold rounded-full"></div>
                            <span class="text-[10px] font-black uppercase tracking-widest text-navy">Global Market Penetration data</span>
                        </li>
                        <li class="flex items-center space-x-6">
                            <div class="w-2 h-2 bg-gold rounded-full"></div>
                            <span class="text-[10px] font-black uppercase tracking-widest text-navy">Demand gen engine technicals</span>
                        </li>
                        <li class="flex items-center space-x-6">
                            <div class="w-2 h-2 bg-gold rounded-full"></div>
                            <span class="text-[10px] font-black uppercase tracking-widest text-navy">Client success audit frameworks</span>
                        </li>
                    </ul>
                </div>

                <div id="request" class="reveal" style="transition-delay: 0.2s;">
                    <div class="reboot-card p-12 md:p-16 bg-surface border-none shadow-2xl relative">
                        <h3 class="text-3xl font-black text-navy mb-4 uppercase tracking-tighter italic">Keynote Request</h3>
                        <p class="text-sm text-gray-400 font-bold uppercase tracking-widest leading-relaxed mb-12">Authorized strategic partners only.</p>
                        
                        <form action="#" class="space-y-8">
                            <div class="space-y-4">
                                <label class="text-[10px] font-black uppercase tracking-widest text-navy pl-2">Full Name</label>
                                <input type="text" placeholder="Executive Name" class="w-full px-6 py-4 bg-white border border-border rounded-xl outline-none focus:ring-4 focus:ring-gold/10 transition-all font-bold text-sm">
                            </div>
                            <div class="space-y-4">
                                <label class="text-[10px] font-black uppercase tracking-widest text-navy pl-2">Business Email</label>
                                <input type="email" placeholder="exec@corporation.com" class="w-full px-6 py-4 bg-white border border-border rounded-xl outline-none focus:ring-4 focus:ring-gold/10 transition-all font-bold text-sm">
                            </div>
                            <div class="pt-4">
                                <button class="w-full bg-navy text-white py-6 rounded-2xl font-black text-[10px] uppercase tracking-[0.4em] hover:bg-gold transition-all shadow-xl active:scale-95 transform hover:text-navy">
                                    Request Secure Link
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
