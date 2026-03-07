@extends('layouts.public')

@section('title', 'About Us — ' . ($settings['site_name'] ?? 'VarsaWeb'))

@section('content')

    <section class="gradient-hero relative overflow-hidden pt-32 pb-20 lg:pt-40 lg:pb-28">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 right-1/4 w-96 h-96 bg-indigo-300/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-1/4 w-80 h-80 bg-violet-300/15 rounded-full blur-3xl"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="section-badge">About Us</span>
            <h1 class="mt-6 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight">
                The Team Behind <br class="hidden sm:block">
                <span class="text-indigo-600">{{ $settings['site_name'] ?? 'VarsaWeb' }}</span>
            </h1>
            <p class="mt-6 text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
                Discover our story, our mission, and the values that drive us to deliver excellence in every project we undertake.
            </p>
        </div>
    </section>

    <section class="py-24 lg:py-32 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                <div class="relative order-2 lg:order-1">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl shadow-slate-900/10">
                        <img class="w-full h-[480px] object-cover" src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1200&q=80" alt="Team brainstorming">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/20 to-transparent"></div>
                    </div>
                    <div class="absolute -bottom-6 -left-6 glass-card rounded-2xl px-6 py-4 glow">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-xl bg-emerald-100 flex items-center justify-center">
                                <svg class="w-6 h-6 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <div class="font-bold text-slate-900">50+ Projects</div>
                                <div class="text-sm text-slate-500">Successfully Delivered</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-6 order-1 lg:order-2">
                    <span class="section-badge">Our Story</span>
                    <h2 class="section-title">Building the Future, <span class="bg-gradient-to-r from-indigo-600 to-violet-600 bg-clip-text text-transparent">One Project at a Time</span></h2>
                    <div class="space-y-4 text-slate-600 leading-relaxed text-lg">
                        <p>
                            Founded with a simple belief — technology should empower businesses to reach their fullest potential. {{ $settings['site_name'] ?? 'VarsaWeb' }} began as a small team of passionate developers determined to make a difference.
                        </p>
                        <p>
                            Today, our team has grown, but our core values remain the same. We focus on delivering high-quality, scalable digital solutions tailored to each client's unique needs, combining cutting-edge technology with a human-centered approach to design.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="section-badge">Our Purpose</span>
                <h2 class="section-title mt-4">Vision & Mission</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
                {{-- Vision --}}
                <div class="card-hover bg-gradient-to-br from-slate-50 to-indigo-50/50 rounded-3xl p-10 border border-slate-100">
                    <div class="w-16 h-16 rounded-2xl gradient-accent flex items-center justify-center mb-8 shadow-lg shadow-indigo-500/20">
                        <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Our Vision</h3>
                    <p class="text-slate-600 text-lg leading-relaxed">
                        To be at the forefront of digital transformation, recognized globally as a trusted partner that seamlessly bridges innovative ideas with impactful technological reality.
                    </p>
                </div>

                {{-- Mission --}}
                <div class="card-hover bg-gradient-to-br from-slate-50 to-violet-50/50 rounded-3xl p-10 border border-slate-100">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-violet-500 to-purple-600 flex items-center justify-center mb-8 shadow-lg shadow-violet-500/20">
                        <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-6">Our Mission</h3>
                    <ul class="space-y-4 text-slate-600 text-lg">
                        <li class="flex items-start gap-3">
                            <div class="mt-1 w-6 h-6 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0"><svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></div>
                            Deliver outstanding, scalable digital solutions with measurable impact.
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="mt-1 w-6 h-6 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0"><svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></div>
                            Foster long-term partnerships built on trust, transparency, and results.
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="mt-1 w-6 h-6 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0"><svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></div>
                            Continuously innovate and embrace the latest technological advancements.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 lg:py-32 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="section-badge">Our People</span>
                <h2 class="section-title mt-4">Meet the Team</h2>
                <p class="section-subtitle mt-4">A dedicated group of professionals committed to turning your vision into reality.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $team = [
                        ['name' => 'John Doe', 'role' => 'CEO & Founder', 'img' => 'https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?auto=format&fit=facearea&facepad=8&w=512&h=512&q=80'],
                        ['name' => 'Michael Smith', 'role' => 'Lead Developer', 'img' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=facearea&facepad=8&w=512&h=512&q=80'],
                        ['name' => 'Sarah Johnson', 'role' => 'UI/UX Designer', 'img' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=facearea&facepad=8&w=512&h=512&q=80'],
                        ['name' => 'David Lee', 'role' => 'Project Manager', 'img' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=8&w=512&h=512&q=80'],
                    ];
                @endphp
                @foreach($team as $member)
                <div class="card-hover group text-center">
                    <div class="relative mb-6 mx-auto w-40 h-40 rounded-3xl overflow-hidden shadow-lg">
                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="{{ $member['img'] }}" alt="{{ $member['name'] }}">
                        <div class="absolute inset-0 bg-gradient-to-t from-indigo-900/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">{{ $member['name'] }}</h3>
                    <p class="text-sm text-indigo-600 font-medium mt-1">{{ $member['role'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
