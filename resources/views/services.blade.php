<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services | VarsaWeb</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#B7C0C6] text-slate-800 font-sans antialiased">
    <header class="sticky top-0 z-50 w-full pt-4">
        <div class="max-w-6xl mx-auto px-6">
            <div
                class="relative rounded-2xl border border-white/50 bg-white/35 backdrop-blur-xl px-5 md:px-6 py-3 flex items-center justify-between gap-4 shadow-xl shadow-slate-200/40 transition-all duration-300 hover:bg-white/45 hover:border-white/80">
                <nav class="hidden md:flex items-center gap-4 md:gap-6 text-sm text-slate-700">
                    <a href="{{ route('about') }}"
                        class="relative pb-1 transition-colors hover:text-brand-600 after:absolute after:left-0 after:-bottom-0.5 after:h-0.5 after:w-0 after:bg-brand-500 after:transition-all after:duration-300 hover:after:w-full">About</a>
                    <a href="{{ route('services') }}"
                        class="relative pb-1 text-brand-600 font-semibold after:absolute after:left-0 after:-bottom-0.5 after:h-0.5 after:w-full after:bg-brand-500">Services</a>
                    <a href="{{ route('contact') }}"
                        class="relative pb-1 transition-colors hover:text-brand-600 after:absolute after:left-0 after:-bottom-0.5 after:h-0.5 after:w-0 after:bg-brand-500 after:transition-all after:duration-300 hover:after:w-full">Contact</a>
                </nav>

                <a href="{{ route('home') }}" class="inline-flex items-center">
                    <img src="{{ asset('navbar.png') }}" alt="VarsaWeb"
                        class="h-12 md:h-14 w-auto max-w-72 object-contain">
                </a>

                <a href="{{ route('contact') }}"
                    class="hidden md:inline-flex items-center rounded-full border border-white/70 bg-white/45 backdrop-blur-md text-brand-700 text-sm font-medium px-4 py-2 shadow-sm transition-all duration-300 hover:bg-white/60 hover:border-white hover:shadow-md">
                    Contact us
                </a>

                <details class="md:hidden group ml-auto">
                    <summary
                        class="list-none cursor-pointer inline-flex items-center justify-center w-10 h-10 rounded-xl border border-white/70 bg-white/45 backdrop-blur-md text-slate-700 hover:bg-white/60 hover:border-white transition-all duration-300">
                        <svg class="w-5 h-5 transition-transform duration-300 ease-out group-open:rotate-90" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </summary>
                    <div
                        class="absolute left-0 right-0 top-full mt-2 rounded-2xl border border-white/60 bg-white/80 backdrop-blur-xl p-3 shadow-xl shadow-slate-200/40 z-40 origin-top opacity-0 -translate-y-1 scale-95 pointer-events-none transition-all duration-300 ease-out group-open:opacity-100 group-open:translate-y-0 group-open:scale-100 group-open:pointer-events-auto">
                        <nav class="flex flex-col gap-1 text-sm text-slate-700">
                            <a href="{{ route('about') }}"
                                class="rounded-lg px-3 py-2 hover:bg-white/70 transition-colors">About</a>
                            <a href="{{ route('services') }}"
                                class="rounded-lg px-3 py-2 bg-white/70 text-brand-600 font-semibold">Services</a>
                            <a href="{{ route('contact') }}"
                                class="rounded-lg px-3 py-2 hover:bg-white/70 transition-colors">Contact</a>
                        </nav>
                    </div>
                </details>
            </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-6 py-16">
        <section
            class="rounded-3xl border border-white/50 bg-white/35 backdrop-blur-xl p-6 md:p-10 shadow-xl shadow-slate-200/40 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/45 hover:border-white/80 hover:shadow-2xl hover:shadow-slate-200/55">
            <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-8">
                <div>
                    <span
                        class="inline-flex items-center rounded-full border border-white/60 bg-white/40 backdrop-blur-md text-brand-600 px-3 py-1 text-xs font-medium">{{ $pageSetting->badge_text ?? 'Digital Service Studio' }}</span>
                    <h1 class="mt-4 font-display text-4xl md:text-5xl font-bold text-slate-900">
                        {{ $pageSetting->title ?? 'Our Services' }}
                    </h1>
                    <div class="mt-5 text-lg text-slate-600 leading-relaxed max-w-xl prose prose-slate">
                        {!! $pageSetting->description ?? '' !!}
                    </div>
                    <div class="mt-6 flex flex-wrap items-center gap-3">
                        @foreach([$pageSetting->tag_1 ?? null, $pageSetting->tag_2 ?? null, $pageSetting->tag_3 ?? null] as $tag)
                            @if($tag)
                                <span
                                    class="inline-flex items-center rounded-full border border-white/60 bg-white/40 backdrop-blur-md text-slate-700 px-4 py-2 text-sm">{{ $tag }}</span>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    @if($pageSetting->stat_1_label)
                        <div
                            class="rounded-2xl border border-white/60 bg-white/45 backdrop-blur-md p-5 transition-all duration-300 hover:bg-white/55 hover:border-white hover:shadow-lg hover:shadow-slate-200/55">
                            <p class="text-xs uppercase tracking-wider text-slate-500">{{ $pageSetting->stat_1_label }}</p>
                            <p class="mt-2 font-display text-3xl font-bold text-slate-900">{{ $pageSetting->stat_1_value }}
                            </p>
                        </div>
                    @endif
                    @if($pageSetting->stat_2_label)
                        <div
                            class="rounded-2xl border border-white/60 bg-white/45 backdrop-blur-md p-5 transition-all duration-300 hover:bg-white/55 hover:border-white hover:shadow-lg hover:shadow-slate-200/55">
                            <p class="text-xs uppercase tracking-wider text-slate-500">{{ $pageSetting->stat_2_label }}</p>
                            <p class="mt-2 font-display text-3xl font-bold text-slate-900">{{ $pageSetting->stat_2_value }}
                            </p>
                        </div>
                    @endif
                    @if($pageSetting->approach_text)
                        <div
                            class="col-span-2 rounded-2xl border border-white/20 bg-slate-900/80 backdrop-blur-md p-5 text-left transition-all duration-300 hover:bg-slate-900/90 hover:border-white/30">
                            <p class="text-xs uppercase tracking-wider text-white/70">Approach</p>
                            <p class="mt-2 text-white text-sm leading-relaxed">{{ $pageSetting->approach_text }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </section>

        <section class="mt-12">
            <div class="flex items-end justify-between gap-4">
                <div>
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900">Layanan Utama</h2>
                    <p class="mt-2 text-slate-600">Paket layanan modular yang bisa disesuaikan dengan skala bisnis Anda.
                    </p>
                </div>
            </div>

            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($services as $service)
                    <article
                        class="group rounded-3xl border border-white/50 bg-white/35 backdrop-blur-xl p-6 shadow-lg shadow-slate-200/35 transition-all duration-300 hover:-translate-y-1 hover:bg-white/45 hover:border-white/80 hover:shadow-2xl hover:shadow-slate-200/55">
                        <div
                            class="w-10 h-10 rounded-xl border border-white/70 bg-white/45 {{ $loop->index % 2 === 0 ? 'text-brand-600' : 'text-accent-500' }} flex items-center justify-center font-display font-bold backdrop-blur-md">
                            {{ str_pad($service->sort_order, 2, '0', STR_PAD_LEFT) }}
                        </div>
                        <h3 class="mt-4 font-display text-2xl font-semibold text-slate-900">{{ $service->title }}</h3>
                        <div class="mt-3 text-slate-600 prose prose-slate prose-sm">{!! $service->description !!}</div>
                    </article>
                @endforeach
            </div>
        </section>

        @if($workProcesses->count())
            <section
                class="mt-14 rounded-3xl border border-white/50 bg-white/35 backdrop-blur-xl p-6 md:p-8 shadow-xl shadow-slate-200/40 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/45 hover:border-white/80 hover:shadow-2xl hover:shadow-slate-200/55">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900">Proses Kerja</h2>
                <div class="mt-6 grid grid-cols-1 md:grid-cols-{{ min($workProcesses->count(), 4) }} gap-4">
                    @foreach($workProcesses as $process)
                        <div
                            class="rounded-2xl bg-white/40 backdrop-blur-md border border-white/70 p-4 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/55 hover:border-white hover:shadow-md hover:shadow-slate-200/55">
                            <p class="text-xs text-slate-500">{{ $process->step_label }}</p>
                            <p class="mt-1 font-semibold text-slate-900">{{ $process->title }}</p>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif

        @if($portfolios->count())
            <section class="mt-14 text-right">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900">Portfolio</h2>
                <p class="mt-3 text-slate-600 max-w-3xl ml-auto">
                    Beberapa contoh hasil proyek yang telah kami kerjakan untuk berbagai kebutuhan bisnis.
                </p>

                <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 text-left">
                    @foreach($portfolios as $index => $portfolio)
                        <a href="{{ route('portfolio.show', $portfolio->slug) }}"
                            class="block rounded-2xl border border-white/50 overflow-hidden bg-white/35 backdrop-blur-xl shadow-lg shadow-slate-200/35 {{ $index === 1 ? 'md:translate-y-4' : '' }} transition-all duration-300 hover:-translate-y-1 hover:bg-white/45 hover:border-white/80 hover:shadow-2xl hover:shadow-slate-200/55 group">
                            @if($portfolio->image)
                                <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}"
                                    class="h-44 w-full object-cover transition-transform duration-500 group-hover:scale-105">
                            @else
                                @php
                                    $gradients = ['from-brand-100 to-accent-100', 'from-accent-100 to-blue-100', 'from-blue-100 to-brand-100'];
                                @endphp
                                <div class="h-44 bg-linear-to-br {{ $gradients[$index % 3] }}"></div>
                            @endif
                            <div class="p-5">
                                <h3
                                    class="font-display text-xl font-semibold text-slate-900 group-hover:text-brand-600 transition-colors">
                                    {{ $portfolio->title }}</h3>
                                <p class="mt-2 text-slate-600 text-sm">{{ $portfolio->short_description }}</p>
                                <span
                                    class="mt-3 inline-flex items-center gap-1 text-xs font-medium text-brand-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    Lihat detail
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </section>
        @endif
    </main>

    @include('partials.footer')
</body>

</html>