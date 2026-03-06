<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services | VarsaWeb</title>
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        }
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#B7C0C6] dark:bg-slate-900 text-slate-800 dark:text-slate-100 font-sans antialiased transition-colors duration-300">

    @include('partials.navbar', ['activePage' => 'services'])

    <main class="max-w-6xl mx-auto px-6 py-16">
        <section
            class="rounded-3xl border border-white/50 dark:border-slate-600/40 bg-white/35 dark:bg-slate-800/35 backdrop-blur-xl p-6 md:p-10 shadow-xl shadow-slate-200/40 dark:shadow-slate-900/40 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/45 dark:hover:bg-slate-700/45 hover:border-white/80 dark:hover:border-slate-500/60 hover:shadow-2xl hover:shadow-slate-200/55 dark:hover:shadow-slate-900/55">
            <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-8">
                <div>
                    <h1 class="font-display text-4xl md:text-5xl font-bold text-slate-900 dark:text-white">
                        {{ $pageSetting->title ?? 'Our Services' }}
                    </h1>
                    <div class="mt-5 text-lg text-slate-600 dark:text-slate-300 leading-relaxed max-w-xl prose prose-slate dark:prose-invert">
                        {!! $pageSetting->description ?? '' !!}
                    </div>
                    <div class="mt-6 flex flex-wrap items-center gap-3">
                        @foreach([$pageSetting->tag_1 ?? null, $pageSetting->tag_2 ?? null, $pageSetting->tag_3 ?? null] as $tag)
                            @if($tag)
                                <span
                                    class="inline-flex items-center rounded-full border border-white/60 dark:border-slate-600/40 bg-white/40 dark:bg-slate-700/40 backdrop-blur-md text-slate-700 dark:text-slate-300 px-4 py-2 text-sm">{{ $tag }}</span>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    @if($pageSetting->stat_1_label)
                        <div
                            class="rounded-2xl border border-white/60 dark:border-slate-600/40 bg-white/45 dark:bg-slate-700/45 backdrop-blur-md p-5 transition-all duration-300 hover:bg-white/55 dark:hover:bg-slate-600/55 hover:border-white dark:hover:border-slate-500 hover:shadow-lg hover:shadow-slate-200/55 dark:hover:shadow-slate-900/55">
                            <p class="text-xs uppercase tracking-wider text-slate-500 dark:text-slate-400">{{ $pageSetting->stat_1_label }}</p>
                            <p class="mt-2 font-display text-3xl font-bold text-slate-900 dark:text-white">{{ $pageSetting->stat_1_value }}</p>
                        </div>
                    @endif
                    @if($pageSetting->stat_2_label)
                        <div
                            class="rounded-2xl border border-white/60 dark:border-slate-600/40 bg-white/45 dark:bg-slate-700/45 backdrop-blur-md p-5 transition-all duration-300 hover:bg-white/55 dark:hover:bg-slate-600/55 hover:border-white dark:hover:border-slate-500 hover:shadow-lg hover:shadow-slate-200/55 dark:hover:shadow-slate-900/55">
                            <p class="text-xs uppercase tracking-wider text-slate-500 dark:text-slate-400">{{ $pageSetting->stat_2_label }}</p>
                            <p class="mt-2 font-display text-3xl font-bold text-slate-900 dark:text-white">{{ $pageSetting->stat_2_value }}</p>
                        </div>
                    @endif
                    @if($pageSetting->approach_text)
                        <div
                            class="col-span-2 rounded-2xl border border-white/60 dark:border-slate-600/40 bg-white/45 dark:bg-slate-800/90 backdrop-blur-md p-5 text-left transition-all duration-300 hover:bg-white/55 dark:hover:bg-slate-700/90 hover:border-white dark:hover:border-slate-500/60">
                            <p class="text-xs uppercase tracking-wider text-slate-500 dark:text-white/70">Approach</p>
                            <p class="mt-2 text-slate-800 dark:text-white text-sm leading-relaxed">{{ $pageSetting->approach_text }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </section>

        <section class="mt-12">
            <div class="flex items-end justify-between gap-4">
                <div>
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 dark:text-white">Layanan Utama</h2>
                    <p class="mt-2 text-slate-600 dark:text-slate-400">Paket layanan modular yang bisa disesuaikan dengan skala bisnis Anda.</p>
                </div>
            </div>

            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($services as $service)
                    <article
                        class="group rounded-3xl border border-white/50 dark:border-slate-600/40 bg-white/35 dark:bg-slate-800/35 backdrop-blur-xl p-6 shadow-lg shadow-slate-200/35 dark:shadow-slate-900/40 transition-all duration-300 hover:-translate-y-1 hover:bg-white/45 dark:hover:bg-slate-700/45 hover:border-white/80 dark:hover:border-slate-500/60 hover:shadow-2xl hover:shadow-slate-200/55 dark:hover:shadow-slate-900/55">
                        <div
                            class="w-10 h-10 rounded-xl border border-white/70 dark:border-slate-600/50 bg-white/45 dark:bg-slate-700/45 {{ $loop->index % 2 === 0 ? 'text-brand-600 dark:text-brand-400' : 'text-accent-500 dark:text-accent-400' }} flex items-center justify-center font-display font-bold backdrop-blur-md">
                            {{ str_pad($service->sort_order, 2, '0', STR_PAD_LEFT) }}
                        </div>
                        <h3 class="mt-4 font-display text-2xl font-semibold text-slate-900 dark:text-white">{{ $service->title }}</h3>
                        <div class="mt-3 text-slate-600 dark:text-slate-300 prose prose-slate dark:prose-invert prose-sm">{!! $service->description !!}</div>
                    </article>
                @endforeach
            </div>
        </section>

        @if($workProcesses->count())
            <section
                class="mt-14 rounded-3xl border border-white/50 dark:border-slate-600/40 bg-white/35 dark:bg-slate-800/35 backdrop-blur-xl p-6 md:p-8 shadow-xl shadow-slate-200/40 dark:shadow-slate-900/40 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/45 dark:hover:bg-slate-700/45 hover:border-white/80 dark:hover:border-slate-500/60 hover:shadow-2xl hover:shadow-slate-200/55 dark:hover:shadow-slate-900/55">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 dark:text-white">Proses Kerja</h2>
                <div class="mt-6 grid grid-cols-1 md:grid-cols-{{ min($workProcesses->count(), 4) }} gap-4">
                    @foreach($workProcesses as $process)
                        <div
                            class="rounded-2xl bg-white/40 dark:bg-slate-700/40 backdrop-blur-md border border-white/70 dark:border-slate-600/40 p-4 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/55 dark:hover:bg-slate-600/55 hover:border-white dark:hover:border-slate-500 hover:shadow-md hover:shadow-slate-200/55 dark:hover:shadow-slate-900/55">
                            <p class="text-xs text-slate-500 dark:text-slate-400">{{ $process->step_label }}</p>
                            <p class="mt-1 font-semibold text-slate-900 dark:text-white">{{ $process->title }}</p>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif

        @if($portfolios->count())
            <section class="mt-14 text-right">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 dark:text-white">Portfolio</h2>
                <p class="mt-3 text-slate-600 dark:text-slate-400 max-w-3xl ml-auto">
                    Beberapa contoh hasil proyek yang telah kami kerjakan untuk berbagai kebutuhan bisnis.
                </p>

                <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 text-left">
                    @foreach($portfolios as $index => $portfolio)
                        <a href="{{ route('portfolio.show', $portfolio->slug) }}"
                            class="block rounded-2xl border border-white/50 dark:border-slate-600/40 overflow-hidden bg-white/35 dark:bg-slate-800/35 backdrop-blur-xl shadow-lg shadow-slate-200/35 dark:shadow-slate-900/40 {{ $index === 1 ? 'md:translate-y-4' : '' }} transition-all duration-300 hover:-translate-y-1 hover:bg-white/45 dark:hover:bg-slate-700/45 hover:border-white/80 dark:hover:border-slate-500/60 hover:shadow-2xl hover:shadow-slate-200/55 dark:hover:shadow-slate-900/55 group">
                            @if($portfolio->image)
                                <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}"
                                    width="400" height="176"
                                    class="h-44 w-full object-cover transition-transform duration-500 group-hover:scale-105">
                            @else
                                @php
                                    $gradients = ['from-brand-100 to-accent-100', 'from-accent-100 to-blue-100', 'from-blue-100 to-brand-100'];
                                    $darkGradients = ['dark:from-brand-950 dark:to-slate-800', 'dark:from-slate-800 dark:to-blue-950', 'dark:from-blue-950 dark:to-brand-950'];
                                @endphp
                                <div class="h-44 bg-linear-to-br {{ $gradients[$index % 3] }} {{ $darkGradients[$index % 3] }}"></div>
                            @endif
                            <div class="p-5">
                                <h3
                                    class="font-display text-xl font-semibold text-slate-900 dark:text-white group-hover:text-brand-600 dark:group-hover:text-brand-400 transition-colors">
                                    {{ $portfolio->title }}</h3>
                                <p class="mt-2 text-slate-600 dark:text-slate-400 text-sm">{{ $portfolio->short_description }}</p>
                                <span
                                    class="mt-3 inline-flex items-center gap-1 text-xs font-medium text-brand-600 dark:text-brand-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
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
