@php
    $navLinks = [
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'About', 'url' => '/about'],
        ['name' => 'Solutions', 'url' => '#', 'dropdown' => [
            ['name' => 'Connect', 'url' => '/connect'],
            ['name' => 'Converse', 'url' => '/converse'],
            ['name' => 'Convert', 'url' => '/convert'],
        ]],
        ['name' => 'Case Studies', 'url' => '/case-studies'],
        ['name' => 'Insights', 'url' => '/blog'],
        ['name' => 'Careers', 'url' => '/careers'],
    ];
@endphp

<nav x-data="{ mobileMenuOpen: false, scrolled: false }"
     @scroll.window="scrolled = (window.pageYOffset > 20)"
     x-init="$watch('mobileMenuOpen', val => document.body.style.overflow = val ? 'hidden' : 'auto')"
     class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 bg-navy py-6">

    <div class="container flex items-center justify-between">

        <!-- Logo -->
        <a href="/" class="flex items-center space-x-3 group">
            <div class="h-12 transition-transform group-hover:scale-105">
                <img src="{{ asset('logo.jpeg') }}" class="h-full rounded-lg object-contain" alt="Nexus Beacon">
            </div>
            <span class="text-2xl font-black tracking-tighter uppercase text-white group-hover:text-gold transition-colors">NEXUS<span class="text-gold italic">BEACON</span></span>
        </a>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex items-center space-x-10">
            @foreach($navLinks as $link)
                @if(isset($link['dropdown']))
                    <!-- 🔥 FIXED DROPDOWN -->
                    <div class="relative"
                         x-data="{ open: false, closeTimeout: null }"
                         @mouseenter="
                            clearTimeout(closeTimeout);
                            open = true;
                         "
                         @mouseleave="
                            closeTimeout = setTimeout(() => {
                                open = false
                            }, 100);
                         ">
                        
                        <button class="flex items-center space-x-2 text-[10px] font-black uppercase tracking-widest text-white hover:text-gold transition-colors py-2">
                            <span>{{ $link['name'] }}</span>
                            <svg class="w-3 h-3 transition-transform duration-300"
                                 :class="open ? 'rotate-180' : ''"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="3" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <div x-show="open"
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 translate-y-2"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-300"
                             x-transition:leave-start="opacity-100 translate-y-0"
                             x-transition:leave-end="opacity-0 translate-y-2"
                             class="absolute top-full left-0 mt-2 w-56 bg-white rounded-2xl shadow-elevated-lg border border-border py-4">

                            @foreach($link['dropdown'] as $item)
                                <a href="{{ $item['url'] }}"
                                   class="block px-8 py-4 text-[10px] font-black uppercase tracking-widest text-navy hover:bg-surface hover:text-primary">
                                    {{ $item['name'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <a href="{{ $link['url'] }}"
                       class="text-[10px] font-black uppercase tracking-widest text-white hover:text-gold transition-colors">
                        {{ $link['name'] }}
                    </a>
                @endif
            @endforeach
        </div>

        <!-- Desktop CTA -->
        <div class="hidden lg:flex">
            <a href="/contact"
               class="bg-gold text-navy px-8 py-4 rounded-xl text-[10px] font-black uppercase tracking-widest hover:bg-gold/80 shadow-gold active:scale-95 transition-all">
                Get Audit
            </a>
        </div>

        <!-- Mobile Toggle -->
        <button @click="mobileMenuOpen = !mobileMenuOpen"
                class="lg:hidden w-12 h-12 flex flex-col justify-center items-center space-y-1.5 bg-white/10 rounded-xl">
            <span class="w-6 h-0.5 bg-white transition-transform"
                  :class="mobileMenuOpen ? 'rotate-45 translate-y-2' : ''"></span>
            <span class="w-6 h-0.5 bg-white transition-opacity"
                  :class="mobileMenuOpen ? 'opacity-0' : ''"></span>
            <span class="w-6 h-0.5 bg-white transition-transform"
                  :class="mobileMenuOpen ? '-rotate-45 -translate-y-2' : ''"></span>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen"
         class="fixed inset-0 bg-navy z-40 lg:hidden"
         x-transition
         @click="mobileMenuOpen = false">

        <!-- Mobile Menu Header -->
        <div class="fixed top-0 left-0 right-0 z-50 bg-navy border-b border-navy/30 px-6 py-6">
            <div class="flex items-center justify-between">
                <!-- Logo & Company Name -->
                <a href="/" class="flex items-center space-x-3 group" @click="mobileMenuOpen = false">
                    <div class="h-10 transition-transform group-hover:scale-105">
                        <img src="{{ asset('logo.jpeg') }}" class="h-full rounded-lg object-contain" alt="Nexus Beacon">
                    </div>
                    <span class="text-xs font-black uppercase tracking-[0.2em] text-white group-hover:text-gold">NEXUS<span class="text-gold italic">BEACON</span></span>
                </a>
                
                <!-- Close Button -->
                <button @click="mobileMenuOpen = false" class="w-10 h-10 flex flex-col justify-center items-center space-y-1 focus:outline-none">
                    <span class="w-5 h-0.5 bg-white rotate-45 translate-y-1.5"></span>
                    <span class="w-5 h-0.5 bg-white -rotate-45 -translate-y-1.5"></span>
                </button>
            </div>
        </div>

        <div class="flex flex-col h-full pt-24 pb-8 px-6 overflow-y-auto" @click.stop>
            <!-- Menu Items -->
            <div class="flex flex-col space-y-0">
                @foreach($navLinks as $link)
                    @if(isset($link['dropdown']))
                        <div x-data="{ open: false }" class="border-b border-white/10">
                            <button @click="open = !open"
                                    class="w-full flex items-center justify-between py-5 px-0 text-2xl font-black uppercase italic text-white hover:text-gold transition-colors">
                                <span>{{ $link['name'] }}</span>
                                <svg class="w-6 h-6 transition-transform duration-300"
                                     :class="open ? 'rotate-180' : ''"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-width="3" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <div x-show="open" x-transition class="pl-6 space-y-3 py-3">
                                @foreach($link['dropdown'] as $item)
                                    <a href="{{ $item['url'] }}"
                                       @click="mobileMenuOpen = false"
                                       class="block py-2 text-lg font-black uppercase text-white hover:text-gold transition-colors">
                                        {{ $item['name'] }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <a href="{{ $link['url'] }}"
                           @click="mobileMenuOpen = false"
                           class="block py-5 px-0 text-2xl font-black uppercase italic text-white hover:text-gold transition-colors border-b border-white/10">
                            {{ $link['name'] }}
                        </a>
                    @endif
                @endforeach
            </div>

            <!-- Divider -->
            <div class="my-8 border-t border-white/10"></div>

            <!-- CTA Button -->
            <a href="/contact"
               @click="mobileMenuOpen = false"
               class="block w-full bg-gold text-navy text-center py-4 rounded-xl font-black text-xs uppercase tracking-[0.15em] hover:bg-gold/80 transition-all active:scale-95">
                Work With Us
            </a>
        </div>
    </div>
</nav>
