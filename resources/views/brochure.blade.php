@extends('layouts.app')

@section('title', 'Brochure | Precision B2B Marketing Resources - Nexus Beacon')

@section('content')
    <!-- High-Luxe Hero Section -->
    <section class="relative pt-32 pb-24 overflow-hidden bg-white">
        <!-- Background Accent -->
        <div class="absolute top-0 right-0 w-[45%] h-full bg-surface skew-x-[-15deg] translate-x-[15%]"></div>
        
        <div class="container relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-20 items-center">
                <div class="lg:col-span-6 reveal">
                    <span class="inline-flex items-center px-4 py-2 bg-navy/5 rounded-full mb-8">
                        <span class="text-[10px] font-black uppercase tracking-[0.4em] text-navy">Intel Access</span>
                    </span>
                    <h1 class="text-7xl md:text-9xl font-black leading-none text-navy mb-10 uppercase tracking-tighter">
                        THE <span class="text-gold italic">BLUEPRINT.</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-500 max-w-xl leading-relaxed mb-16 font-medium">
                        Detailed analysis of our 'Converse & Convert' methodology and global audience intelligence standards.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-8 reveal">
                        <div class="reboot-card p-10 bg-white">
                            <div class="text-3xl font-black text-gold mb-2 italic tracking-tighter">40+</div>
                            <div class="text-[9px] font-black uppercase tracking-widest text-gray-400">Pages of Insight</div>
                        </div>
                        <div class="reboot-card p-10 bg-white">
                            <div class="text-3xl font-black text-navy mb-2 italic tracking-tighter">2024</div>
                            <div class="text-[9px] font-black uppercase tracking-widest text-gray-400">Strategy Edition</div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-6 reveal" style="transition-delay: 0.2s;">
                    <div class="reboot-card p-12 md:p-16 bg-navy text-white border-none shadow-2xl relative">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-gold/20 rounded-full blur-3xl"></div>
                        <h3 class="text-3xl font-black text-white mb-4 uppercase tracking-tighter italic relative z-10">Request Access</h3>
                        <p class="text-sm text-white/40 font-bold uppercase tracking-widest leading-relaxed mb-12 relative z-10">Instant download link will be shared via your business email.</p>
                        
                        <form action="#" class="space-y-8 relative z-10">
                            <div class="space-y-4">
                                <label class="text-[10px] font-black uppercase tracking-widest text-white/60 pl-2">Full Name</label>
                                <input type="text" placeholder="Jane Smith" class="w-full px-6 py-4 bg-white/5 border border-white/10 rounded-xl outline-none focus:bg-white/10 focus:ring-4 focus:ring-gold/20 transition-all font-bold text-sm text-white placeholder:text-white/20">
                            </div>
                            <div class="space-y-4">
                                <label class="text-[10px] font-black uppercase tracking-widest text-white/60 pl-2">Work Email</label>
                                <input type="email" placeholder="jane@enterprise.com" class="w-full px-6 py-4 bg-white/5 border border-white/10 rounded-xl outline-none focus:bg-white/10 focus:ring-4 focus:ring-gold/20 transition-all font-bold text-sm text-white placeholder:text-white/20">
                            </div>
                            <div class="space-y-10 pt-4">
                                <button class="w-full bg-gold text-navy py-6 rounded-2xl font-black text-[10px] uppercase tracking-[0.4em] hover:bg-white hover:text-navy transition-all shadow-xl active:scale-95 transform">
                                    Download Brochure
                                </button>
                                <p class="text-[9px] text-center text-white/20 font-bold uppercase tracking-widest">Enterprise-grade security standards applied</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Preview Section -->
    <section class="section-padding bg-surface">
        <div class="container">
            <div class="text-center max-w-3xl mx-auto mb-24 reveal">
                <span class="text-gold font-black uppercase tracking-[0.5em] text-[10px] mb-6 block">Inside the Deck</span>
                <h2 class="text-5xl md:text-7xl font-black text-navy mb-8 uppercase tracking-tighter italic leading-none">Strategic <span class="text-gold italic">Takeaways.</span></h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <div class="reboot-card p-12 bg-white flex flex-col group">
                    <div class="w-12 h-12 bg-surface rounded-xl flex items-center justify-center text-navy mb-10 group-hover:bg-gold group-hover:text-navy transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h4 class="text-xl font-black text-navy mb-4 uppercase tracking-tight italic leading-none">ROI Analysis</h4>
                    <p class="text-[10px] font-black uppercase tracking-widest text-gray-400 leading-relaxed">Frameworks for measuring campaign success in long B2B cycles.</p>
                </div>
                <!-- Add more as needed -->
            </div>
        </div>
    </section>
@endsection
