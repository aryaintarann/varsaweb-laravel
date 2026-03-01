<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | VarsaWeb</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#B7C0C6] text-slate-800 font-sans antialiased">
    <header class="sticky top-0 z-50 w-full pt-4">
        <div class="max-w-6xl mx-auto px-6">
            <div
                class="relative rounded-2xl border border-white/50 bg-white/40 backdrop-blur-xl px-5 md:px-6 py-3 flex items-center justify-between gap-4 shadow-xl shadow-slate-200/40 transition-all duration-300 hover:bg-white/50 hover:border-white/80">
                <nav class="hidden md:flex items-center gap-4 md:gap-6 text-sm text-slate-700">
                    <a href="{{ route('about') }}"
                        class="relative pb-1 transition-colors hover:text-brand-600 after:absolute after:left-0 after:-bottom-0.5 after:h-0.5 after:w-0 after:bg-brand-500 after:transition-all after:duration-300 hover:after:w-full">About</a>
                    <a href="{{ route('services') }}"
                        class="relative pb-1 transition-colors hover:text-brand-600 after:absolute after:left-0 after:-bottom-0.5 after:h-0.5 after:w-0 after:bg-brand-500 after:transition-all after:duration-300 hover:after:w-full">Services</a>
                    <a href="{{ route('contact') }}"
                        class="relative pb-1 text-brand-600 font-semibold after:absolute after:left-0 after:-bottom-0.5 after:h-0.5 after:w-full after:bg-brand-500">Contact</a>
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
                                class="rounded-lg px-3 py-2 hover:bg-white/70 transition-colors">Services</a>
                            <a href="{{ route('contact') }}"
                                class="rounded-lg px-3 py-2 bg-white/70 text-brand-600 font-semibold">Contact</a>
                        </nav>
                    </div>
                </details>
            </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-6 py-16">
        <section
            class="rounded-3xl border border-white/50 bg-white/40 backdrop-blur-xl p-6 md:p-10 shadow-xl shadow-slate-200/40 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/50 hover:border-white/80 hover:shadow-2xl hover:shadow-slate-200/55">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div>
                    <span
                        class="inline-flex items-center rounded-full border border-white/60 bg-white/40 backdrop-blur-md text-brand-600 px-3 py-1 text-xs font-medium">{{ $contactSetting->badge_text ?? "Let's Collaborate" }}</span>
                    <h1 class="mt-4 font-display text-4xl md:text-5xl font-bold text-slate-900">
                        {{ $contactSetting->title ?? 'Get in Touch' }}</h1>
                    <p class="mt-5 text-lg text-slate-600 leading-relaxed max-w-xl">
                        {{ $contactSetting->description ?? '' }}
                    </p>
                    <div class="mt-6 flex flex-wrap gap-3">
                        @foreach([$contactSetting->badge_1 ?? null, $contactSetting->badge_2 ?? null, $contactSetting->badge_3 ?? null] as $badge)
                            @if($badge)
                                <span
                                    class="inline-flex items-center rounded-full border border-white/60 bg-white/40 backdrop-blur-md text-slate-700 px-4 py-2 text-sm">{{ $badge }}</span>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <article
                        class="rounded-2xl border border-white/60 bg-white/40 backdrop-blur-md p-5 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/55 hover:border-white/80 hover:shadow-lg hover:shadow-slate-200/55">
                        <p class="text-xs uppercase tracking-wider text-slate-500">Email</p>
                        <p class="mt-2 font-semibold text-slate-900">{{ $contactSetting->email ?? 'hello@varsaweb.com'
                            }}</p>
                    </article>
                    <article
                        class="rounded-2xl border border-white/60 bg-white/40 backdrop-blur-md p-5 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/55 hover:border-white/80 hover:shadow-lg hover:shadow-slate-200/55">
                        <p class="text-xs uppercase tracking-wider text-slate-500">Telepon</p>
                        <p class="mt-2 font-semibold text-slate-900">{{ $contactSetting->phone ?? '+1 (555) 123-4567' }}
                        </p>
                    </article>
                    <article
                        class="rounded-2xl border border-white/60 bg-white/40 backdrop-blur-md p-5 sm:col-span-2 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/55 hover:border-white/80 hover:shadow-lg hover:shadow-slate-200/55">
                        <p class="text-xs uppercase tracking-wider text-slate-500">Jam Operasional</p>
                        <p class="mt-2 text-slate-700">
                            {{ $contactSetting->operating_hours ?? 'Senin - Jumat 09.00 - 18.00' }}</p>
                    </article>

                    @if(isset($socialLinks) && $socialLinks->count() > 0)
                        <article class="rounded-2xl border border-white/60 bg-white/40 backdrop-blur-md p-5 sm:col-span-2 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/55 hover:border-white/80 hover:shadow-lg hover:shadow-slate-200/55">
                            <p class="text-xs uppercase tracking-wider text-slate-500 mb-4">Sosial Media</p>
                            <div class="flex gap-4 flex-wrap">
                                @foreach($socialLinks as $link)
                                    <a href="{{ $link->url }}" target="_blank" rel="noopener noreferrer" title="{{ $link->platform }}"
                                        class="w-10 h-10 rounded-full bg-white/45 backdrop-blur-md text-slate-700 border border-white/70 flex items-center justify-center transition-all duration-300 hover:bg-white/60 hover:border-white hover:shadow-md hover:shadow-stroke-brand-500/50 hover:text-brand-600">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            @switch(strtolower($link->platform))
                                                @case('twitter')
                                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                                    @break
                                                @case('linkedin')
                                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                                    @break
                                                @case('instagram')
                                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                                    @break
                                                @case('facebook')
                                                    <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                                                    @break
                                                @case('youtube')
                                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                                    @break
                                                @case('github')
                                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                                    @break
                                                @default
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                            @endswitch
                                        </svg>
                                    </a>
                                @endforeach
                            </div>
                        </article>
                    @endif
                </div>
            </div>
        </section>

        <section class="mt-10 grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
            <article
                class="lg:col-span-2 rounded-3xl border border-white/50 bg-white/40 backdrop-blur-xl p-6 md:p-8 shadow-xl shadow-slate-200/40 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/50 hover:border-white/80 hover:shadow-2xl hover:shadow-slate-200/55">
                <h2 class="font-display text-2xl font-semibold text-slate-900">Form Kontak</h2>
                <p class="mt-2 text-slate-600">Isi form berikut, dan tim kami akan menghubungi Anda secepatnya.</p>

                <form class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-5" method="POST" action="#">
                    <div>
                        <label for="name" class="block text-sm font-medium text-slate-700">Nama</label>
                        <input id="name" name="name" type="text"
                            class="mt-2 w-full rounded-xl border border-white/70 bg-white/45 backdrop-blur-md px-4 py-3 shadow-inner shadow-white/30 transition-all duration-300 hover:bg-white/55 hover:border-white focus:outline-none focus:ring-2 focus:ring-brand-500"
                            placeholder="Nama Anda">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-700">Email</label>
                        <input id="email" name="email" type="email"
                            class="mt-2 w-full rounded-xl border border-white/70 bg-white/45 backdrop-blur-md px-4 py-3 shadow-inner shadow-white/30 transition-all duration-300 hover:bg-white/55 hover:border-white focus:outline-none focus:ring-2 focus:ring-brand-500"
                            placeholder="email@domain.com">
                    </div>

                    <div class="md:col-span-2">
                        <label for="service" class="block text-sm font-medium text-slate-700">Layanan yang
                            Dibutuhkan</label>
                        <input id="service" name="service" type="text"
                            class="mt-2 w-full rounded-xl border border-white/70 bg-white/45 backdrop-blur-md px-4 py-3 shadow-inner shadow-white/30 transition-all duration-300 hover:bg-white/55 hover:border-white focus:outline-none focus:ring-2 focus:ring-brand-500"
                            placeholder="Contoh: Company Profile Website">
                    </div>

                    <div class="md:col-span-2">
                        <label for="message" class="block text-sm font-medium text-slate-700">Pesan</label>
                        <textarea id="message" name="message" rows="5"
                            class="mt-2 w-full rounded-xl border border-white/70 bg-white/45 backdrop-blur-md px-4 py-3 shadow-inner shadow-white/30 transition-all duration-300 hover:bg-white/55 hover:border-white focus:outline-none focus:ring-2 focus:ring-brand-500"
                            placeholder="Jelaskan kebutuhan proyek Anda"></textarea>
                    </div>

                    <div class="md:col-span-2">
                        <button type="submit"
                            class="inline-flex items-center justify-center rounded-xl bg-brand-500 text-white px-6 py-3 font-medium hover:bg-brand-600 transition-colors">
                            Kirim Pesan
                        </button>
                    </div>
                </form>
            </article>

            <aside
                class="rounded-3xl border border-white/50 bg-white/40 backdrop-blur-xl p-6 shadow-xl shadow-slate-200/40 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/50 hover:border-white/80 hover:shadow-2xl hover:shadow-slate-200/55">
                <h3 class="font-display text-2xl font-semibold text-slate-900">Connect</h3>
                <p class="mt-2 text-slate-600 text-sm">Ikuti sosial media kami untuk update insight dan project terbaru.
                </p>

                <div class="mt-5 grid grid-cols-3 gap-3">
                    @if(isset($socialLinks) && $socialLinks->count() > 0)
                        @foreach($socialLinks as $link)
                            <a href="{{ $link->url }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $link->platform }}" title="{{ $link->platform }}"
                                class="h-12 rounded-xl bg-white/45 backdrop-blur-md text-slate-700 border border-white/70 flex items-center justify-center hover:bg-brand-500 hover:text-white hover:border-brand-500 transition-all duration-300 hover:-translate-y-0.5 hover:shadow-md hover:shadow-slate-200/55">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    @switch(strtolower($link->platform))
                                        @case('twitter')
                                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                            @break
                                        @case('linkedin')
                                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                            @break
                                        @case('instagram')
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                            @break
                                        @case('facebook')
                                            <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                                            @break
                                        @case('youtube')
                                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                            @break
                                        @case('github')
                                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                            @break
                                        @default
                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                    @endswitch
                                </svg>
                            </a>
                        @endforeach
                    @endif
                </div>

                <div
                    class="mt-6 rounded-2xl bg-white/40 backdrop-blur-md border border-white/70 p-4 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/55 hover:border-white hover:shadow-lg hover:shadow-slate-200/55">
                    <p class="text-xs uppercase tracking-wider text-slate-500">Response Time</p>
                    <p class="mt-1 font-semibold text-slate-900">Dalam 1x24 jam kerja</p>
                </div>
            </aside>
        </section>
    </main>

    @include('partials.footer')
</body>

</html>