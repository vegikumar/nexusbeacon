@extends('layouts.app')

@section('title', 'Our Services | Nexus Beacon Solutions')

@section('content')
    <section class="bg-navy py-20 text-white">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-5xl font-bold mb-4 text-gold">Mastering B2B Growth</h1>
            <p class="text-gray-400 text-lg">Comprehensive solutions tailored to your unique market challenges.</p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
            <div class="space-y-6">
                <h2 class="text-4xl font-bold text-navy">Account-Based Marketing (ABM)</h2>
                <p class="text-gray-600 text-lg">We target the accounts that matter most to your business, creating personalized experiences that convert high-value prospects.</p>
                <ul class="space-y-4">
                    <li class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-gold" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        <span>Precision Targeting</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-gold" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        <span>Personalized Campaigns</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-gold" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        <span>Sales & Marketing Alignment</span>
                    </li>
                </ul>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="ABM" class="rounded-[3rem] shadow-soft translate-y-6">
            </div>
        </div>
    </section>

    <section class="py-20 bg-soft-gray">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
            <div class="order-2 md:order-1">
                <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="B2B Events" class="rounded-[3rem] shadow-soft -translate-y-6">
            </div>
            <div class="space-y-6 order-1 md:order-2">
                <h2 class="text-4xl font-bold text-navy">Demand Generation</h2>
                <p class="text-gray-600 text-lg">We create awareness and interest in your products and services, building a sustainable pipeline of high-intent B2B leads.</p>
                <ul class="space-y-4">
                    <li class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-gold" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        <span>Multi-channel Content</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-gold" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        <span>SEO & Paid Performance</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-gold" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        <span>Lead Nurturing Workflows</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
