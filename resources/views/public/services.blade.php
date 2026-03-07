@extends('layouts.public')

@section('title', 'Our Services — ' . ($settings['site_name'] ?? 'VarsaWeb'))

@section('content')

    <section class="gradient-hero relative overflow-hidden pt-32 pb-20 lg:pt-40 lg:pb-28">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 left-1/3 w-96 h-96 bg-indigo-300/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-1/4 w-80 h-80 bg-violet-300/15 rounded-full blur-3xl"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="text-indigo-600 font-bold tracking-widest uppercase text-sm mb-4">What We Do</div>
            <h1 class="mt-2 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight">
                Services That
                <span class="text-indigo-600">Drive Growth</span>
            </h1>
            <p class="mt-6 text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
                End-to-end digital solutions crafted to elevate your brand and accelerate business performance.
            </p>
        </div>
    </section>

    <section class="py-24 lg:py-32 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @php
                $colors = [
                    ['bg' => 'bg-indigo-100', 'text' => 'text-indigo-600', 'gradient' => 'from-indigo-50 to-indigo-100/50'],
                    ['bg' => 'bg-violet-100', 'text' => 'text-violet-600', 'gradient' => 'from-violet-50 to-violet-100/50'],
                    ['bg' => 'bg-cyan-100', 'text' => 'text-cyan-600', 'gradient' => 'from-cyan-50 to-cyan-100/50'],
                    ['bg' => 'bg-amber-100', 'text' => 'text-amber-600', 'gradient' => 'from-amber-50 to-amber-100/50'],
                    ['bg' => 'bg-rose-100', 'text' => 'text-rose-600', 'gradient' => 'from-rose-50 to-rose-100/50'],
                    ['bg' => 'bg-emerald-100', 'text' => 'text-emerald-600', 'gradient' => 'from-emerald-50 to-emerald-100/50'],
                    ['bg' => 'bg-sky-100', 'text' => 'text-sky-600', 'gradient' => 'from-sky-50 to-sky-100/50'],
                    ['bg' => 'bg-fuchsia-100', 'text' => 'text-fuchsia-600', 'gradient' => 'from-fuchsia-50 to-fuchsia-100/50'],
                    ['bg' => 'bg-orange-100', 'text' => 'text-orange-600', 'gradient' => 'from-orange-50 to-orange-100/50'],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($services as $index => $service)
                    @php $color = $colors[$index % count($colors)]; @endphp
                    <div class="card-hover group bg-gradient-to-br {{ $color['gradient'] }} rounded-3xl border border-white/80 overflow-hidden">
                        <div class="p-8 text-center">
                            <div class="w-16 h-16 rounded-2xl {{ $color['bg'] }} flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-sm mx-auto">
                                <x-service-icon :name="$service->icon ?? 'bolt'" class="h-8 w-8 {{ $color['text'] }}" />
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors duration-300">{{ $service->title }}</h3>
                            <p class="text-slate-600 leading-relaxed mb-4">{{ $service->short_description }}</p>
                            @if($service->full_description)
                                <div class="text-sm text-slate-500 leading-relaxed border-t border-slate-200/60 pt-5 mt-5">
                                    {!! nl2br(e(Str::limit($service->full_description, 200))) !!}
                                </div>
                            @endif
                        </div>
                        <div class="px-8 py-4 bg-white/40 backdrop-blur-sm border-t border-white/50 text-center">
                            <a href="{{ route('contact') }}?service={{ urlencode($service->title) }}" class="text-sm font-semibold text-indigo-600 hover:text-indigo-800 inline-flex items-center gap-2 transition-colors duration-200 group/link">
                                Inquire About This Service
                                <svg class="w-4 h-4 group-hover/link:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-20 bg-white rounded-3xl border border-slate-100">
                        <div class="w-16 h-16 rounded-2xl bg-slate-100 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                        </div>
                        <h3 class="font-semibold text-slate-900">No Services Available Yet</h3>
                        <p class="mt-1 text-sm text-slate-500">Check back later for updates to our offerings.</p>
                    </div>
                @endforelse
            </div>

            <div class="mt-12">
                {{ $services->links('pagination::tailwind') }}
            </div>
        </div>
    </section>

@endsection
