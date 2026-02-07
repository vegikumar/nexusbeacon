<footer class="bg-navy text-white pt-32 pb-16 relative overflow-hidden">
    <!-- Abstract Background Element -->
    <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-primary/10 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="container relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-16 lg:gap-8 mb-24">
            <!-- Brand Column -->
            <div class="lg:col-span-4 max-w-sm">
                <a href="/" class="flex items-center space-x-3 mb-10 group">
                    <div class="h-12 w-auto transition-transform group-hover:scale-105">
                        <img src="{{ asset('logo.jpeg') }}" alt="Nexus Beacon" class="h-full w-auto object-contain rounded-lg">
                    </div>
                    <span class="text-2xl font-black tracking-tighter uppercase">NEXUS<span class="text-gold italic">BEACON</span></span>
                </a>
                <p class="text-gray-400 font-medium leading-relaxed mb-10 text-sm">
                    Empowering global B2B enterprises through high-intent demand generation and precision audience intelligence.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-primary transition-all group">
                        <svg class="w-6 h-6 text-white group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Empty Spacer for Large Screens -->
            <div class="hidden lg:block lg:col-span-1"></div>

            <!-- Solutions -->
            <div class="lg:col-span-2">
                <h4 class="text-[10px] font-black uppercase tracking-[0.5em] text-primary-light mb-10">Solutions</h4>
                <ul class="space-y-5">
                    <li><a href="/converse" class="text-gray-400 hover:text-white text-sm font-bold transition-colors uppercase tracking-widest">Converse</a></li>
                    <li><a href="/convert" class="text-gray-400 hover:text-white text-sm font-bold transition-colors uppercase tracking-widest">Convert</a></li>
                    <li><a href="/connect" class="text-gray-400 hover:text-white text-sm font-bold transition-colors uppercase tracking-widest">Connect</a></li>
                </ul>
            </div>

            <!-- Company -->
            <div class="lg:col-span-2">
                <h4 class="text-[10px] font-black uppercase tracking-[0.5em] text-primary-light mb-10">Company</h4>
                <ul class="space-y-5">
                    <li><a href="/about" class="text-gray-400 hover:text-white text-sm font-bold transition-colors uppercase tracking-widest">About Us</a></li>
                    <li><a href="/case-studies" class="text-gray-400 hover:text-white text-sm font-bold transition-colors uppercase tracking-widest">Results</a></li>
                    <li><a href="/blog" class="text-gray-400 hover:text-white text-sm font-bold transition-colors uppercase tracking-widest">Insights</a></li>
                    <li><a href="/careers" class="text-gray-400 hover:text-white text-sm font-bold transition-colors uppercase tracking-widest">Careers</a></li>
                </ul>
            </div>

            <!-- Support -->
            <div class="lg:col-span-3">
                <h4 class="text-[10px] font-black uppercase tracking-[0.5em] text-primary-light mb-10">Connect</h4>
                <ul class="space-y-5">
                    <li><a href="/contact" class="text-gray-400 hover:text-white text-sm font-bold transition-colors uppercase tracking-widest">Contact Headquarters</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white text-sm font-bold transition-colors uppercase tracking-widest">Privacy Standards</a></li>
                </ul>
                <div class="mt-12 p-6 rounded-2xl bg-white/5 border border-white/10 group hover:border-gold/30 transition-all">
                    <p class="text-[10px] font-black text-gold uppercase tracking-widest mb-2">Lead Time</p>
                    <p class="text-xs font-bold text-white">Average response: < 4 hours</p>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="pt-12 border-t border-white/10 flex flex-col md:flex-row justify-between items-center gap-8">
            <p class="text-[10px] font-black text-gray-500 uppercase tracking-[0.3em]">
                &copy; {{ date('Y') }} NEXUS BEACON LTD. WORLDWIDE PRECISION.
            </p>
                <div class="flex items-center space-x-8">
                    <div class="flex items-center space-x-2">
                        <div class="w-1.5 h-1.5 bg-gold rounded-full animate-pulse"></div>
                        <span class="text-[10px] font-black text-gray-500 uppercase tracking-widest">Live Intelligence</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-1.5 h-1.5 bg-gold rounded-full animate-pulse"></div>
                        <span class="text-[10px] font-black text-gray-500 uppercase tracking-widest">Global Network</span>
                    </div>
                </div>
        </div>
    </div>
</footer>
