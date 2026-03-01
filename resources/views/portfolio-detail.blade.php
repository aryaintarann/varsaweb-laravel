<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $portfolio->title }} | Portfolio — VarsaWeb</title>
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
                        class="relative pb-1 transition-colors hover:text-brand-600 after:absolute after:left-0 after:-bottom-0.5 after:h-0.5 after:w-0 after:bg-brand-500 after:transition-all after:duration-300 hover:after:w-full">Services</a>
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
                        class="absolute left-0 right-0 top-full mt-2 rounded-2xl border border-white/60 bg-white/80 backdrop-blur-xl p-3 shadow-xl shadow-slate-200/40 z-40">
                        <nav class="flex flex-col gap-1 text-sm text-slate-700">
                            <a href="{{ route('about') }}"
                                class="rounded-lg px-3 py-2 hover:bg-white/70 transition-colors">About</a>
                            <a href="{{ route('services') }}"
                                class="rounded-lg px-3 py-2 hover:bg-white/70 transition-colors">Services</a>
                            <a href="{{ route('contact') }}"
                                class="rounded-lg px-3 py-2 hover:bg-white/70 transition-colors">Contact</a>
                        </nav>
                    </div>
                </details>
            </div>
        </div>
    </header>

    <main class="max-w-4xl mx-auto px-6 py-16">
        <nav class="mb-8 text-sm text-slate-500">
            <a href="{{ route('services') }}" class="hover:text-brand-600 transition-colors">Services</a>
            <span class="mx-2">›</span>
            <span class="text-slate-700 font-medium">{{ $portfolio->title }}</span>
        </nav>

        @if($portfolio->image)
            <div class="rounded-3xl overflow-hidden border border-white/50 shadow-xl shadow-slate-200/40 mb-16">
                <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}"
                    class="w-full h-64 md:h-96 object-cover">
            </div>
        @else
            @php $gradients = ['from-brand-100 to-accent-100', 'from-accent-100 to-blue-100', 'from-blue-100 to-brand-100']; @endphp
            <div
                class="rounded-3xl overflow-hidden border border-white/50 shadow-xl shadow-slate-200/40 mb-16 h-64 md:h-96 bg-linear-to-br {{ $gradients[$portfolio->id % 3] }}">
            </div>
        @endif

        <article
            class="rounded-3xl border border-white/50 bg-white/35 backdrop-blur-xl p-8 md:p-12 shadow-xl shadow-slate-200/40 transition-all duration-300 hover:bg-white/45 hover:border-white/80">
            <h1 class="font-display text-3xl md:text-4xl font-bold text-slate-900 text-center">{{ $portfolio->title }}
            </h1>

            <div class="mt-6 prose prose-slate max-w-none text-slate-600 leading-relaxed text-lg">
                {!! $portfolio->description ?: $portfolio->short_description !!}
            </div>
        </article>

        <div class="mt-10 text-center">
            <a href="{{ route('services') }}"
                class="inline-flex items-center gap-2 rounded-full border border-white/70 bg-white/45 backdrop-blur-md text-brand-700 text-sm font-medium px-6 py-3 shadow-sm transition-all duration-300 hover:bg-white/60 hover:border-white hover:shadow-md">
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