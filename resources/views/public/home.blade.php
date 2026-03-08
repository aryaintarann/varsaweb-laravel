@extends('layouts.public')

@section('title', ($settings['site_name'] ?? 'VarsaWeb') . ' — Modern Digital Solutions')

@section('content')

    <section class="gradient-hero relative overflow-hidden min-h-screen flex items-center">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-indigo-300/30 rounded-full blur-3xl float-animation"></div>
            <div class="absolute top-1/2 -left-20 w-60 h-60 bg-violet-300/20 rounded-full blur-3xl float-animation" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-20 right-1/4 w-40 h-40 bg-cyan-300/15 rounded-full blur-3xl float-animation" style="animation-delay: 4s;"></div>
            <div class="absolute inset-0 opacity-[0.04]" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%236366f1&quot; fill-opacity=&quot;1&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20 lg:pt-40 lg:pb-32">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                {{-- Content --}}
                <div class="space-y-8">

                    <h1 class="fade-in-up delay-100 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1] tracking-tight">
                        We Build
                        <span class="block mt-2 text-indigo-600">
                            Digital Experiences
                        </span>
                        That Matter
                    </h1>

                    <p class="fade-in-up delay-200 text-lg text-slate-600 dark:text-slate-300 leading-relaxed max-w-lg">
                        From concept to deployment, we craft high-performance websites and applications that drive growth and engage users at every touchpoint.
                    </p>

                    <div class="fade-in-up delay-300 flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('contact') }}" class="btn-primary text-base px-8 py-4">
                            Start a Project
                            <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                        <a href="{{ route('portfolios') }}" class="btn-secondary text-base px-8 py-4">
                            View Our Work
                        </a>
                    </div>

                    {{-- Stats Row --}}
                    <div class="fade-in-up delay-400 flex items-center gap-8 pt-4">
                        <div>
                            <div class="text-3xl font-extrabold text-slate-900 dark:text-white">{{ $projectCount }}</div>
                            <div class="text-sm text-slate-500 dark:text-slate-400">Projects Done</div>
                        </div>
                        <div class="w-px h-12 bg-slate-200 dark:bg-slate-700"></div>
                        <div>
                            <div class="text-3xl font-extrabold text-slate-900 dark:text-white">{{ $clientCount }}</div>
                            <div class="text-sm text-slate-500 dark:text-slate-400">Happy Clients</div>
                        </div>
                        <div class="w-px h-12 bg-slate-200 dark:bg-slate-700"></div>
                        <div>
                            <div class="text-3xl font-extrabold text-slate-900 dark:text-white">1+</div>
                            <div class="text-sm text-slate-500 dark:text-slate-400">Years of Exp.</div>
                        </div>
                    </div>
                </div>

                {{-- Decorative Card Stack --}}
                <div class="hidden lg:block relative">
                    <div class="relative">
                        <div class="glass-card rounded-3xl p-8 transform rotate-2 hover:rotate-0 transition-transform duration-500 border border-slate-200/80 bg-white/60 backdrop-blur-xl shadow-xl shadow-slate-900/5">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                            </div>
                            <div class="space-y-3">
                                <div class="h-4 bg-indigo-500/30 rounded-full w-3/4"></div>
                                <div class="h-4 bg-violet-500/20 rounded-full w-1/2"></div>
                                <div class="h-4 bg-purple-500/20 rounded-full w-5/6"></div>
                                <div class="h-32 bg-gradient-to-br from-indigo-500/20 to-violet-500/20 rounded-2xl mt-4 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-indigo-400/50" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                                </div>
                                <div class="h-4 bg-cyan-500/20 rounded-full w-2/3 mt-4"></div>
                                <div class="h-4 bg-indigo-500/15 rounded-full w-1/3"></div>
                            </div>
                        </div>
                        <div class="absolute -bottom-6 -right-6 -z-10 w-full h-full rounded-3xl opacity-40 border border-slate-200/60 bg-white/40"></div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="py-24 lg:py-32 bg-slate-50 dark:bg-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                {{-- Image --}}
                <div class="relative">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl shadow-slate-900/10">
                        <img class="w-full h-[450px] object-cover" src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1200&q=80" alt="Team collaborating">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/30 to-transparent"></div>
                    </div>
                </div>

                {{-- Content --}}
                <div class="space-y-6">
                    <div class="flex items-center gap-3 mb-2">
                        <div class="w-10 h-1 rounded-full bg-gradient-to-r from-indigo-600 to-violet-600"></div>
                        <span class="text-sm font-bold uppercase tracking-widest text-indigo-600">Who We Are</span>
                    </div>
                    <h2 class="section-title">We Transform Ideas Into <span class="text-indigo-600">Digital Reality</span></h2>
                    <p class="text-lg text-slate-600 dark:text-slate-300 leading-relaxed">
                        At {{ $settings['site_name'] ?? 'VarsaWeb' }}, we combine creative vision with technical excellence. Our team of seasoned professionals is passionate about building digital products that not only look stunning but also deliver measurable results.
                    </p>
                    <div class="grid grid-cols-2 gap-6 pt-4">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-xl bg-green-100 dark:bg-green-900/30 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <div class="font-semibold text-slate-900 dark:text-white">Expert Team</div>
                                <div class="text-sm text-slate-500 dark:text-slate-400">Skilled professionals</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-xl bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <div class="font-semibold text-slate-900 dark:text-white">On-Time Delivery</div>
                                <div class="text-sm text-slate-500 dark:text-slate-400">Reliable timelines</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-xl bg-violet-100 dark:bg-violet-900/30 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-violet-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                            </div>
                            <div>
                                <div class="font-semibold text-slate-900 dark:text-white">Innovation First</div>
                                <div class="text-sm text-slate-500 dark:text-slate-400">Latest technologies</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-xl bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                            </div>
                            <div>
                                <div class="font-semibold text-slate-900 dark:text-white">Client Focus</div>
                                <div class="text-sm text-slate-500 dark:text-slate-400">Your success is ours</div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4">
                        <a href="{{ route('about') }}" class="btn-outline">
                            Learn More About Us
                            <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 lg:py-32 bg-white dark:bg-slate-900 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-indigo-50 dark:bg-indigo-900/20 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3 opacity-60"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="flex items-center justify-center gap-3 mb-2">
                    <div class="w-10 h-1 rounded-full bg-gradient-to-r from-indigo-600 to-violet-600"></div>
                    <span class="text-sm font-bold uppercase tracking-widest text-indigo-600">What We Do</span>
                    <div class="w-10 h-1 rounded-full bg-gradient-to-l from-indigo-600 to-violet-600"></div>
                </div>
                <h2 class="section-title mt-4">Services We Offer</h2>
                <p class="section-subtitle mt-4">We provide end-to-end digital solutions designed to elevate your brand and accelerate your business growth.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $colors = [
                        ['bg' => 'bg-indigo-100', 'text' => 'text-indigo-600', 'border' => 'border-indigo-200'],
                        ['bg' => 'bg-violet-100', 'text' => 'text-violet-600', 'border' => 'border-violet-200'],
                        ['bg' => 'bg-cyan-100', 'text' => 'text-cyan-600', 'border' => 'border-cyan-200'],
                        ['bg' => 'bg-amber-100', 'text' => 'text-amber-600', 'border' => 'border-amber-200'],
                        ['bg' => 'bg-rose-100', 'text' => 'text-rose-600', 'border' => 'border-rose-200'],
                        ['bg' => 'bg-emerald-100', 'text' => 'text-emerald-600', 'border' => 'border-emerald-200'],
                    ];
                @endphp
                @forelse($services as $index => $service)
                    @php $color = $colors[$index % count($colors)]; @endphp
                    <div class="card-hover group bg-white dark:bg-slate-800 rounded-2xl p-8 border border-slate-100 dark:border-slate-700 hover:border-indigo-100 dark:hover:border-indigo-800 text-center">
                        <div class="w-14 h-14 rounded-2xl {{ $color['bg'] }} flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 mx-auto">
                            <x-service-icon :name="$service->icon ?? 'bolt'" class="h-7 w-7 {{ $color['text'] }}" />
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3 group-hover:text-indigo-600 transition-colors duration-300">{{ $service->title }}</h3>
                        <p class="text-slate-500 dark:text-slate-400 leading-relaxed line-clamp-3">{{ $service->short_description }}</p>
                    </div>
                @empty
                    <div class="col-span-full text-center py-16">
                        <div class="w-16 h-16 rounded-2xl bg-slate-100 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                        </div>
                        <p class="text-slate-500 dark:text-slate-400">Services coming soon. Stay tuned!</p>
                    </div>
                @endforelse
            </div>

            @if($services->isNotEmpty())
            <div class="text-center mt-12">
                <a href="{{ route('services') }}" class="btn-outline">
                    View All Services
                    <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
            @endif
        </div>
    </section>

    <section class="py-24 lg:py-32 bg-slate-50 dark:bg-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="flex items-center justify-center gap-3 mb-2">
                    <div class="w-10 h-1 rounded-full bg-gradient-to-r from-indigo-600 to-violet-600"></div>
                    <span class="text-sm font-bold uppercase tracking-widest text-indigo-600">Portfolio</span>
                    <div class="w-10 h-1 rounded-full bg-gradient-to-l from-indigo-600 to-violet-600"></div>
                </div>
                <h2 class="section-title mt-4">Recent Projects</h2>
                <p class="section-subtitle mt-4">A curated selection of our latest work, showcasing our expertise across diverse industries.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($portfolios as $portfolio)
                    <div class="card-hover group bg-white dark:bg-slate-800 rounded-2xl overflow-hidden border border-slate-100 dark:border-slate-700">
                        <div class="relative overflow-hidden aspect-[4/3]">
                            @if($portfolio->image)
                                <img src="{{ Storage::url($portfolio->image) }}" alt="{{ $portfolio->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            @else
                                <div class="w-full h-full bg-slate-100 dark:bg-slate-700 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                </div>
                            @endif
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <div class="absolute top-4 left-4">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-white/90 backdrop-blur-sm text-indigo-700 shadow-sm">
                                    {{ $portfolio->category ? $portfolio->category->name : 'Uncategorized' }}
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2 group-hover:text-indigo-600 transition-colors">{{ $portfolio->title }}</h3>
                            <p class="text-sm text-slate-500 dark:text-slate-400 line-clamp-2 mb-4">{{ $portfolio->description }}</p>
                            <div class="flex items-center justify-between text-xs text-slate-400">
                                <span>{{ $portfolio->client_name ?? 'Confidential' }}</span>
                                <span>{{ $portfolio->completion_date ? $portfolio->completion_date->format('M Y') : 'Ongoing' }}</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-16">
                        <p class="text-slate-500 dark:text-slate-400">Portfolio coming soon!</p>
                    </div>
                @endforelse
            </div>

            @if($portfolios->isNotEmpty())
            <div class="text-center mt-12">
                <a href="{{ route('portfolios') }}" class="btn-primary text-base px-8 py-4">
                    Browse Full Portfolio
                    <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
            @endif
        </div>
    </section>

    <section class="relative overflow-hidden">
        <div class="bg-indigo-50/50 dark:bg-indigo-950/30 py-24 lg:py-32 relative border-t border-indigo-100/50 dark:border-indigo-900/30">
            <div class="absolute inset-0 opacity-40">
                <div class="absolute top-10 left-1/4 w-72 h-72 bg-indigo-200 dark:bg-indigo-800 rounded-full blur-3xl"></div>
                <div class="absolute bottom-10 right-1/4 w-96 h-96 bg-violet-200 dark:bg-violet-800 rounded-full blur-3xl"></div>
            </div>
            <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">
                    Ready to bring your
                    <span class="block mt-2">vision to life?</span>
                </h2>
                <p class="mt-6 text-lg text-slate-600 dark:text-slate-300 max-w-2xl mx-auto leading-relaxed">
                    Let's collaborate to create something extraordinary. From initial concept to final
                    deployment, our team is here to make it happen.
                </p>
                <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4">
                    <a href="{{ route('contact') }}" class="btn-primary">
                        Start a Conversation
                        <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
