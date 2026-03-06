<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $portfolio->title }} | Portfolio — VarsaWeb</title>
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        }
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#B7C0C6] dark:bg-slate-900 text-slate-800 dark:text-slate-100 font-sans antialiased transition-colors duration-300">

    @include('partials.navbar', ['activePage' => 'services'])

    <main class="max-w-4xl mx-auto px-6 py-16">
        <nav class="mb-8 text-sm text-slate-500 dark:text-slate-400">
            <a href="{{ route('services') }}" class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors">Services</a>
            <span class="mx-2">›</span>
            <span class="text-slate-700 dark:text-slate-300 font-medium">{{ $portfolio->title }}</span>
        </nav>

        @if($portfolio->image)
            <div class="rounded-3xl overflow-hidden border border-white/50 dark:border-slate-600/40 shadow-xl shadow-slate-200/40 dark:shadow-slate-900/40 mb-16">
                <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}"
                    width="896" height="384"
                    class="w-full h-64 md:h-96 object-cover">
            </div>
        @else
            @php $gradients = ['from-brand-100 to-accent-100', 'from-accent-100 to-blue-100', 'from-blue-100 to-brand-100']; @endphp
            <div
                class="rounded-3xl overflow-hidden border border-white/50 dark:border-slate-600/40 shadow-xl shadow-slate-200/40 dark:shadow-slate-900/40 mb-16 h-64 md:h-96 bg-linear-to-br {{ $gradients[$portfolio->id % 3] }} dark:from-slate-800 dark:to-slate-700">
            </div>
        @endif

        <article
            class="rounded-3xl border border-white/50 dark:border-slate-600/40 bg-white/35 dark:bg-slate-800/35 backdrop-blur-xl p-8 md:p-12 shadow-xl shadow-slate-200/40 dark:shadow-slate-900/40 transition-all duration-300 hover:bg-white/45 dark:hover:bg-slate-700/45 hover:border-white/80 dark:hover:border-slate-500/60">
            <h1 class="font-display text-3xl md:text-4xl font-bold text-slate-900 dark:text-white text-center">{{ $portfolio->title }}</h1>

            <div class="mt-6 prose prose-slate dark:prose-invert max-w-none text-slate-600 dark:text-slate-300 leading-relaxed text-lg">
                {!! $portfolio->description ?: $portfolio->short_description !!}
            </div>
        </article>

        <div class="mt-10 text-center">
            <a href="{{ route('services') }}"
                class="inline-flex items-center gap-2 rounded-full border border-white/70 dark:border-slate-600/60 bg-white/45 dark:bg-slate-700/45 backdrop-blur-md text-brand-700 dark:text-brand-400 text-sm font-medium px-6 py-3 shadow-sm transition-all duration-300 hover:bg-white/60 dark:hover:bg-slate-600/60 hover:border-white dark:hover:border-slate-500 hover:shadow-md">
                <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
                Kembali ke Services
            </a>
        </div>
    </main>

    @include('partials.footer')
</body>

</html>