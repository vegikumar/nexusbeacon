@extends('layouts.app')

@section('title', 'Connect | Verified B2B Decision Makers Network - Nexus Beacon')

@section('content')
    <!-- High-Impact Hero Section -->
    <section class="relative pt-32 pb-24 overflow-hidden bg-navy text-white">
        <!-- Background Data Overlay -->
        <div class="absolute inset-0 opacity-[0.05] z-0 pointer-events-none" style="background-image: linear-gradient(0deg, transparent 24%, #FDC010 25%, #FDC010 26%, transparent 27%, transparent 74%, #FDC010 75%, #FDC010 76%, transparent 77%, transparent), linear-gradient(90deg, transparent 24%, #FDC010 25%, #FDC010 26%, transparent 27%, transparent 74%, #FDC010 75%, #FDC010 76%, transparent 77%, transparent); background-size: 100px 100px;"></div>
        
        <div class="container relative z-10">
            <div class="max-w-4xl reveal">
                <span class="inline-flex items-center px-4 py-2 bg-white/5 border border-white/10 rounded-full mb-8">
                    <span class="w-2 h-2 bg-gold rounded-full mr-3 animate-pulse"></span>
                    <span class="text-[10px] font-black uppercase tracking-[0.4em] text-white">Global Reach Hub</span>
                </span>
                <h1 class="text-7xl md:text-9xl font-black leading-none text-white mb-8 uppercase tracking-tighter">
                    CON<span class="text-gold italic">NECT.</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-400 max-w-2xl leading-relaxed mb-12 font-medium">
                    Verified access to over 12 million CXO-level decision makers across every major B2B industry and global market.
                </p>
                <div class="flex flex-wrap gap-12 font-outfit">
                    <div class="reveal">
                        <div class="text-5xl font-black text-gold-light mb-2">12M+</div>
                        <div class="text-[10px] font-black uppercase tracking-widest opacity-40">Active Decision Makers</div>
                    </div>
                    <div class="reveal" style="transition-delay: 0.1s;">
                        <div class="text-5xl font-black text-white mb-2">150+</div>
                        <div class="text-[10px] font-black uppercase tracking-widest opacity-40">Regional Markets</div>
                    </div>
                    <div class="reveal" style="transition-delay: 0.2s;">
                        <div class="text-5xl font-black text-gold mb-2">100%</div>
                        <div class="text-[10px] font-black uppercase tracking-widest opacity-40">Verified Data Points</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Market Breakdown -->
    <section class="section-padding bg-surface">
        <div class="container">
            <div class="flex flex-col lg:flex-row justify-between items-end mb-24 gap-12 reveal">
                <div class="max-w-2xl">
                    <span class="text-gold font-black uppercase tracking-[0.4em] text-[10px] mb-6 block">Audience Integrity</span>
                    <h2 class="text-5xl md:text-7xl font-black text-navy mb-8 uppercase tracking-tighter italic leading-none">Global <span class="text-gold italic">Market Segments.</span></h2>
                </div>
                <div class="flex items-center space-x-4 mb-2">
                    <span class="text-[10px] font-black uppercase tracking-widest text-gray-400">Live Coverage</span>
                    <div class="w-12 h-1 bg-gold rounded-full"></div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Segment 1 -->
                <div class="reboot-card p-12 flex flex-col group bg-white">
                    <div class="flex items-center justify-between mb-10">
                        <h3 class="text-2xl font-black text-navy uppercase tracking-tighter italic">Cloud & SaaS</h3>
                        <div class="text-gold-light group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 leading-relaxed font-medium mb-12">Deep penetration into ITDM and C-suite roles within global cloud, cybersecurity, and enterprise software firms.</p>
                    <div class="mt-auto flex items-center justify-between text-[10px] font-black uppercase tracking-widest">
                        <span class="text-navy">4.2M Leads</span>
                        <span class="text-gold italic">High Intent</span>
                    </div>
                </div>

                <!-- Segment 2 -->
                <div class="reboot-card p-12 flex flex-col group bg-white">
                    <div class="flex items-center justify-between mb-10">
                        <h3 class="text-2xl font-black text-navy uppercase tracking-tighter italic">Industrial</h3>
                        <div class="text-gold-light group-hover:scale-110 transition-transform">
                             <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.691.31a2 2 0 01-1.782 0l-.691-.31a6 6 0 00-3.86-.517l-2.387.477a2 2 0 00-1.022.547l-1.162 1.626a2 2 0 00.339 2.597l1.374 1.154a2 2 0 002.583-.051l1.458-1.458a2 2 0 00.702-1.426V13.5m5.92 0V11m-5.92 0V9.5m5.92 0V7.5"></path></svg>
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 leading-relaxed font-medium mb-12">Reaching decision makers in manufacturing, automation, supply chain, and global logistics sectors.</p>
                    <div class="mt-auto flex items-center justify-between text-[10px] font-black uppercase tracking-widest">
                        <span class="text-navy">2.8M Leads</span>
                        <span class="text-gold italic">Validated</span>
                    </div>
                </div>

                <!-- Segment 3 -->
                <div class="reboot-card p-12 flex flex-col group bg-white">
                    <div class="flex items-center justify-between mb-10">
                        <h3 class="text-2xl font-black text-navy uppercase tracking-tighter italic">Financial</h3>
                        <div class="text-gold-light group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 leading-relaxed font-medium mb-12">Access to high-net-worth institutional decision makers, fintech innovators, and global private equity partners.</p>
                    <div class="mt-auto flex items-center justify-between text-[10px] font-black uppercase tracking-widest">
                        <span class="text-navy">1.5M Leads</span>
                        <span class="text-gold italic">Tier-1 Accounts</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Data Quality -->
    <section class="section-padding bg-navy relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[40%] h-full bg-white/5 skew-x-[-12deg] translate-x-[15%]"></div>
        
        <div class="container relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
                <div class="reveal">
                    <span class="text-gold-light font-black uppercase tracking-[0.4em] text-[10px] mb-6 block">Intelligence Standards</span>
                    <h2 class="text-5xl md:text-7xl font-black text-white mb-10 leading-[0.9] uppercase tracking-tighter italic">
                        Elite <br> <span class="text-gold-light">Data Hygiene.</span>
                    </h2>
                    <p class="text-lg text-gray-400 mb-12 leading-relaxed font-medium">
                        We don't deal in lists. We deal in relationships. Every data point in our hub is verified through a 3-step human-AI validation process to ensure 100% deliverability.
                    </p>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-6">
                            <div class="w-6 h-6 bg-gold-light rounded-full flex-shrink-0 flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-navy" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="4" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <p class="text-white/80 font-bold uppercase tracking-widest text-xs">Phonetic & Email Validation</p>
                        </div>
                        <div class="flex items-start space-x-6">
                            <div class="w-6 h-6 bg-gold-light rounded-full flex-shrink-0 flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-navy" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="4" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <p class="text-white/80 font-bold uppercase tracking-widest text-xs">Compliance (GDPR, CAN-SPAM)</p>
                        </div>
                        <div class="flex items-start space-x-6">
                            <div class="w-6 h-6 bg-gold-light rounded-full flex-shrink-0 flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-navy" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="4" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <p class="text-white/80 font-bold uppercase tracking-widest text-xs">Real-Time Intent Mapping</p>
                        </div>
                    </div>
                </div>

                <div class="reveal relative" style="transition-delay: 0.2s;">
                    <div class="reboot-card p-12 bg-white/5 border-white/10 text-white backdrop-blur-xl">
                        <div class="flex items-center justify-between mb-12">
                            <div class="text-[10px] font-black uppercase tracking-[0.5em] text-gold-light">Quality Index</div>
                            <div class="flex space-x-2">
                                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                            </div>
                        </div>
                        <div class="space-y-10">
                            <div>
                                <div class="flex justify-between mb-3">
                                    <span class="text-[10px] font-black uppercase tracking-widest opacity-60">Deliverability</span>
                                    <span class="text-[10px] font-black uppercase tracking-widest text-gold-light font-outfit">99.8%</span>
                                </div>
                                <div class="h-1 w-full bg-white/10 rounded-full overflow-hidden">
                                    <div class="h-full bg-gold-light w-[99%]"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-3">
                                    <span class="text-[10px] font-black uppercase tracking-widest opacity-60">Reach Velocity</span>
                                    <span class="text-[10px] font-black uppercase tracking-widest text-gold-light font-outfit">EXCELLENT</span>
                                </div>
                                <div class="h-1 w-full bg-white/10 rounded-full overflow-hidden">
                                    <div class="h-full bg-gold-light w-[85%]"></div>
                                </div>
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
                    <h4 class="text-2xl font-black text-navy uppercase tracking-tighter italic mb-4">2024 Global B2B Reach Report</h4>
                    <p class="text-sm text-gray-500 font-medium">Get the latest benchmarks on decision-maker engagement across 150+ regional markets.</p>
                </div>
                <a href="/brochure" class="bg-navy text-white px-10 py-5 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-gold hover:text-navy transition-all shadow-xl whitespace-nowrap">Access Report</a>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="section-padding bg-white text-center">
        <div class="container reveal">
            <h2 class="text-5xl md:text-8xl font-black text-navy mb-12 uppercase italic tracking-tighter leading-none">
                Access the <br> <span class="text-gold italic">High-Value Hub.</span>
            </h2>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-6">
                 <a href="/contact" class="w-full sm:auto bg-navy text-white px-14 py-6 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-gold hover:text-navy transition-all shadow-xl active:scale-95">Request Data Sample</a>
                 <a href="/brochure" class="w-full sm:w-auto bg-white border border-border text-navy px-14 py-6 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-surface transition-all">Download Media Kit</a>
            </div>
        </div>
    </section>
@endsection
