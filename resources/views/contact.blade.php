@extends('layouts.app')

@section('title', 'Contact | B2B Strategic Consultation - Nexus Beacon')

@section('content')
    <!-- High-Luxe Hero Section -->
    <section class="relative pt-32 pb-24 overflow-hidden bg-white">
        <!-- Background Accent -->
        <div class="absolute top-0 right-0 w-[45%] h-full bg-surface skew-x-[-12deg] translate-x-[15%]"></div>
        
        <div class="container relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-20">
                <div class="lg:col-span-6 reveal">
                    <span class="inline-flex items-center px-4 py-2 bg-navy/5 rounded-full mb-8">
                        <span class="text-[10px] font-black uppercase tracking-[0.4em] text-navy">Connect Headquarters</span>
                    </span>
                    <h1 class="text-7xl md:text-9xl font-black leading-none text-navy mb-10 uppercase tracking-tighter">
                        START THE <br> <span class="text-gold italic">JOURNEY.</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-500 max-w-xl leading-relaxed mb-16 font-medium">
                        Speak with our strategic analysts to discover how Nexus Beacon can rewire your B2B demand generation engine for global scale.
                    </p>
                    
                    <div class="space-y-12">
                        <div class="flex items-start space-x-8 reveal">
                            <div class="w-16 h-16 bg-navy rounded-2xl flex items-center justify-center text-white shrink-0 shadow-lg">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-[10px] font-black uppercase tracking-[0.5em] text-gold mb-4">London HQ</h4>
                                <p class="text-navy font-bold text-lg mb-1 leading-none uppercase italic">Global Hub</p>
                                <p class="text-gray-400 font-medium">128 City Road, London, EC1V 2NX</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-8 reveal" style="transition-delay: 0.1s;">
                            <div class="w-16 h-16 bg-navy rounded-2xl flex items-center justify-center text-white shrink-0 shadow-lg">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-[10px] font-black uppercase tracking-[0.5em] text-gold mb-4">Direct Email</h4>
                                <p class="text-navy font-bold text-lg mb-1 leading-none uppercase italic">Strategic Inquiries</p>
                                <p class="text-gray-400 font-medium">intelligence@nexusbeacon.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-6 reveal" style="transition-delay: 0.2s;">
                    <div class="reboot-card p-12 md:p-16 bg-white shadow-2xl relative">
                        <h3 class="text-3xl font-black text-navy mb-4 uppercase tracking-tighter italic">Strategic Audit</h3>
                        <p class="text-sm text-gray-400 font-bold uppercase tracking-widest leading-relaxed mb-12">Submit your details for a complimentary pipeline health check.</p>
                        
                        <form action="#" class="space-y-8">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="space-y-4">
                                    <label class="text-[10px] font-black uppercase tracking-widest text-navy pl-2">Full Name</label>
                                    <input type="text" placeholder="John Doe" class="w-full px-6 py-4 bg-surface border border-border rounded-xl outline-none focus:ring-4 focus:ring-gold/10 transition-all font-bold text-sm">
                                </div>
                                <div class="space-y-4">
                                    <label class="text-[10px] font-black uppercase tracking-widest text-navy pl-2">Company</label>
                                    <input type="text" placeholder="Global Tech Corp" class="w-full px-6 py-4 bg-surface border border-border rounded-xl outline-none focus:ring-4 focus:ring-gold/10 transition-all font-bold text-sm">
                                </div>
                            </div>
                            <div class="space-y-4">
                                <label class="text-[10px] font-black uppercase tracking-widest text-navy pl-2">Work Email</label>
                                <input type="email" placeholder="john@globaltech.com" class="w-full px-6 py-4 bg-surface border border-border rounded-xl outline-none focus:ring-4 focus:ring-gold/10 transition-all font-bold text-sm">
                            </div>
                            <div class="space-y-4">
                                <label class="text-[10px] font-black uppercase tracking-widest text-navy pl-2">Interest</label>
                                <select class="w-full px-6 py-4 bg-surface border border-border rounded-xl outline-none focus:ring-4 focus:ring-gold/10 transition-all font-bold text-sm appearance-none">
                                    <option>Demand Generation</option>
                                    <option>ABM Strategy</option>
                                    <option>Audience Intelligence</option>
                                    <option>Brand Consultation</option>
                                </select>
                            </div>
                            <div class="space-y-4">
                                <label class="text-[10px] font-black uppercase tracking-widest text-navy pl-2">Message</label>
                                <textarea rows="4" placeholder="How can we help you grow?" class="w-full px-6 py-4 bg-surface border border-border rounded-xl outline-none focus:ring-4 focus:ring-gold/10 transition-all font-bold text-sm resize-none"></textarea>
                            </div>
                            <button class="w-full bg-navy text-white py-6 rounded-2xl font-black text-[10px] uppercase tracking-[0.4em] hover:bg-gold transition-all shadow-xl active:scale-95 transform hover:text-navy">
                                Submit Request
                            </button>
                            <p class="text-[9px] text-center text-gray-400 font-bold uppercase tracking-widest">Typical response time: < 4 business hours</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section-padding bg-white overflow-hidden">
        <div class="container">
            <div class="text-center max-w-3xl mx-auto mb-24 reveal">
                <span class="text-gold font-black uppercase tracking-[0.5em] text-[10px] mb-6 block">Quick Answers</span>
                <h2 class="text-5xl md:text-7xl font-black text-navy mb-8 uppercase tracking-tighter italic leading-none">Frequent <span class="text-gold italic">Inquiries.</span></h2>
            </div>

            <div class="max-w-4xl mx-auto space-y-6">
                <div x-data="{ open: false }" class="reboot-card bg-surface border-none overflow-hidden transition-all duration-300">
                    <button @click="open = !open" class="w-full flex items-center justify-between p-10 text-left outline-none group">
                        <span class="text-xl font-black text-navy uppercase tracking-tight italic group-hover:text-gold transition-colors">How fast can we see results?</span>
                        <div class="w-8 h-8 rounded-lg bg-navy/5 flex items-center justify-center text-navy transition-transform duration-300" :class="open ? 'rotate-180 bg-gold text-navy' : ''">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="3" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </button>
                    <div x-show="open" x-collapse class="px-10 pb-10">
                        <p class="text-gray-500 font-medium leading-relaxed">Most clients see a measurable lift in pipeline engagement within the first 30 days of deploying the 'Convert' engine. Full funnel optimization typically takes 60-90 days.</p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div x-data="{ open: false }" class="reboot-card bg-surface border-none overflow-hidden transition-all duration-300">
                    <button @click="open = !open" class="w-full flex items-center justify-between p-10 text-left outline-none group">
                        <span class="text-xl font-black text-navy uppercase tracking-tight italic group-hover:text-gold transition-colors">Is your data GDPR compliant?</span>
                        <div class="w-8 h-8 rounded-lg bg-navy/5 flex items-center justify-center text-navy transition-transform duration-300" :class="open ? 'rotate-180 bg-gold text-navy' : ''">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="3" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </button>
                    <div x-show="open" x-collapse class="px-10 pb-10">
                        <p class="text-gray-500 font-medium leading-relaxed">Yes. 100% of our global decision-maker data is fully compliant with GDPR, CAN-SPAM, and regional privacy regulations. We prioritize ethical data hygiene.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Global Map Visual (Stylized) -->
    <section class="py-24 bg-surface overflow-hidden">
        <div class="container text-center reveal">
            <h2 class="text-4xl md:text-6xl font-black text-navy mb-8 uppercase tracking-tighter italic leading-none opacity-10">Global Operations Shield</h2>
            <div class="max-w-4xl mx-auto h-[400px] relative">
                <div class="absolute inset-0 bg-navy/5 rounded-[4rem] flex items-center justify-center">
                    <span class="text-[10px] font-black uppercase tracking-[1em] text-navy/20">Awaiting Regional Data Flow</span>
                </div>
                <!-- Abstract "Pings" for locations -->
                <div class="absolute top-[20%] left-[45%] w-4 h-4 bg-gold rounded-full animate-ping"></div>
                <div class="absolute top-[35%] left-[55%] w-3 h-3 bg-gold/40 rounded-full animate-pulse"></div>
                <div class="absolute top-[60%] left-[25%] w-3 h-3 bg-gold/40 rounded-full animate-pulse"></div>
            </div>
        </div>
    </section>
@endsection
