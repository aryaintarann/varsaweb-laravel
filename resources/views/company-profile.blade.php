<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VarsaWeb | Web of Tomorrow</title>

    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@500;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@500;700&display=swap" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@500;700&display=swap"></noscript>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#B7C0C6] dark:bg-slate-900 text-slate-800 dark:text-slate-100 font-sans antialiased flex flex-col min-h-screen overflow-x-hidden transition-colors duration-300">

    <nav class="w-full pt-4 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-6">
            <div
                class="rounded-2xl border border-white/50 dark:border-slate-600/40 bg-white/40 dark:bg-slate-800/40 backdrop-blur-xl px-5 md:px-6 py-3 flex items-center justify-between gap-4 shadow-xl shadow-slate-200/40 dark:shadow-slate-900/40 transition-all duration-300 hover:bg-white/50 dark:hover:bg-slate-700/50 hover:border-white/80 dark:hover:border-slate-500/60">

                {{-- Empty spacer for centering logo --}}
                <div class="w-9"></div>

                <a href="#home" class="inline-flex items-center">
                    <img src="{{ asset('navbar.webp') }}" alt="VarsaWeb" width="1600" height="873"
                        class="h-24 md:h-28 w-auto object-contain dark:brightness-90">
                </a>

                <button data-theme-toggle aria-label="Toggle dark mode"
                    class="inline-flex items-center justify-center w-9 h-9 rounded-full border border-white/70 dark:border-slate-600/60 bg-white/45 dark:bg-slate-700/45 backdrop-blur-md text-slate-700 dark:text-slate-300 transition-all duration-300 hover:bg-white/60 dark:hover:bg-slate-600/60 hover:border-white dark:hover:border-slate-500">
                    <svg class="w-4 h-4 block dark:hidden" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 01.162.819A8.97 8.97 0 009 6a9 9 0 009 9 8.97 8.97 0 003.463-.69.75.75 0 01.981.98 10.503 10.503 0 01-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 01.818.162z" clip-rule="evenodd" />
                    </svg>
                    <svg class="w-4 h-4 hidden dark:block" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.166 17.834a.75.75 0 00-1.06 1.06l1.59 1.591a.75.75 0 001.061-1.06l-1.59-1.591zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.166 6.106a.75.75 0 00-1.06 1.06l1.59 1.591a.75.75 0 001.061-1.06L6.166 6.106z" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <main class="grow">
        <section id="home" class="pt-16 pb-20 lg:pt-20 lg:pb-32 flex items-center min-h-[70vh]">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="order-2 lg:order-1 text-center lg:text-left flex flex-col justify-center">

                        <h1
                            class="text-5xl md:text-6xl lg:text-7xl font-display font-bold text-slate-900 dark:text-white leading-[1.1] mb-6">
                            {!! nl2br(e($homeSetting->hero_title ?? 'Weaving the Web of Tomorrow')) !!}
                        </h1>
                        <p class="text-lg md:text-xl text-slate-700 dark:text-slate-300 max-w-xl mx-auto lg:mx-0 leading-relaxed">
                            {{ $homeSetting->hero_description ?? '' }}
                        </p>
                    </div>

                    <div class="order-1 lg:order-2 flex justify-center items-center relative">
                        <div
                            class="absolute inset-0 bg-linear-to-tr from-brand-100 to-accent-100 dark:from-brand-950 dark:to-slate-800 rounded-full blur-3xl opacity-40 -z-10 w-3/4 h-3/4 m-auto">
                        </div>
                        @if($homeSetting->hero_image_url)
                            <img src="{{ str_starts_with($homeSetting->hero_image_url, 'http') ? $homeSetting->hero_image_url : asset('storage/' . $homeSetting->hero_image_url) }}"
                                alt="Abstract Digital Web Concept"
                                width="800" height="800"
                                fetchpriority="high"
                                class="w-full max-w-md lg:max-w-lg rounded-3xl shadow-xl shadow-slate-300/40 dark:shadow-slate-900/60 animate-float object-cover aspect-square border-4 border-white/80 dark:border-slate-600/60">
                        @else
                            <div class="w-full max-w-md lg:max-w-lg rounded-3xl shadow-xl shadow-slate-300/40 dark:shadow-slate-900/60 animate-float aspect-square border-4 border-white/80 dark:border-slate-600/60 bg-gradient-to-tr from-brand-100 via-accent-100 to-blue-100 dark:from-slate-800 dark:via-slate-700 dark:to-slate-800 flex items-center justify-center"
                                style="min-height:320px">
                                <svg class="w-28 h-28 text-brand-300 dark:text-brand-600 opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                                </svg>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 relative z-10 -mt-10">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <a href="{{ route('about') }}"
                        class="group bg-white/40 dark:bg-slate-800/40 backdrop-blur-xl p-10 rounded-3xl shadow-xl shadow-slate-200/35 dark:shadow-slate-900/40 border border-white/50 dark:border-slate-600/40 hover:bg-white/50 dark:hover:bg-slate-700/50 hover:border-white/80 dark:hover:border-slate-500/60 hover:shadow-2xl hover:shadow-slate-200/55 dark:hover:shadow-slate-900/55 hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center">
                        <div
                            class="w-16 h-16 rounded-2xl bg-brand-50 dark:bg-brand-900/20 text-brand-500 dark:text-brand-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-3 font-display">About Us</h2>
                        <p class="text-slate-700 dark:text-slate-300 text-sm leading-relaxed">Discover our mission, our story, and the
                            brilliant team behind the code.</p>
                    </a>

                    <a href="{{ route('services') }}"
                        class="group bg-white/40 dark:bg-slate-800/40 backdrop-blur-xl p-10 rounded-3xl shadow-xl shadow-slate-200/35 dark:shadow-slate-900/40 border border-white/50 dark:border-slate-600/40 hover:bg-white/50 dark:hover:bg-slate-700/50 hover:border-white/80 dark:hover:border-slate-500/60 hover:shadow-2xl hover:shadow-slate-200/55 dark:hover:shadow-slate-900/55 hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center">
                        <div
                            class="w-16 h-16 rounded-2xl bg-accent-50 dark:bg-accent-900/20 text-accent-500 dark:text-accent-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-3 font-display">Our Services</h2>
                        <p class="text-slate-700 dark:text-slate-300 text-sm leading-relaxed">Explore our comprehensive digital solutions
                            and technological capabilities.</p>
                    </a>

                    <a href="{{ route('contact') }}"
                        class="group bg-white/40 dark:bg-slate-800/40 backdrop-blur-xl p-10 rounded-3xl shadow-xl shadow-slate-200/35 dark:shadow-slate-900/40 border border-white/50 dark:border-slate-600/40 hover:bg-white/50 dark:hover:bg-slate-700/50 hover:border-white/80 dark:hover:border-slate-500/60 hover:shadow-2xl hover:shadow-slate-200/55 dark:hover:shadow-slate-900/55 hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center">
                        <div
                            class="w-16 h-16 rounded-2xl bg-blue-50 dark:bg-blue-900/20 text-blue-500 dark:text-blue-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                </path>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-3 font-display">Get in Touch</h2>
                        <p class="text-slate-700 dark:text-slate-300 text-sm leading-relaxed">Ready to start a project? Reach out to us and
                            let's build something amazing.</p>
                    </a>
                </div>
            </div>
        </section>
    </main>

    @include('partials.footer')
</body>

</html>
