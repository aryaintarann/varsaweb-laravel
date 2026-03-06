<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VarsaWeb | Web of Tomorrow</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@500;700&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#B7C0C6] text-slate-800 font-sans antialiased flex flex-col min-h-screen overflow-x-hidden">

    <nav class="w-full pt-4 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-6">
            <div
                class="rounded-2xl border border-white/50 bg-white/40 backdrop-blur-xl px-5 md:px-6 py-3 flex items-center justify-center shadow-xl shadow-slate-200/40 transition-all duration-300 hover:bg-white/50 hover:border-white/80">
                <a href="#home" class="inline-flex items-center">
                    <img src="{{ asset('navbar.png') }}" alt="VarsaWeb" class="h-24 md:h-28 w-auto object-contain">
                </a>
            </div>
        </div>
    </nav>

    <main class="grow">
        <section id="home" class="pt-16 pb-20 lg:pt-20 lg:pb-32 flex items-center min-h-[70vh]">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="order-2 lg:order-1 text-center lg:text-left flex flex-col justify-center">

                        <h1
                            class="text-5xl md:text-6xl lg:text-7xl font-display font-bold text-slate-900 leading-[1.1] mb-6">
                            {!! nl2br(e($homeSetting->hero_title ?? 'Weaving the Web of Tomorrow')) !!}
                        </h1>
                        <p class="text-lg md:text-xl text-slate-600 max-w-xl mx-auto lg:mx-0 leading-relaxed">
                            {{ $homeSetting->hero_description ?? '' }}
                        </p>
                    </div>

                    <div class="order-1 lg:order-2 flex justify-center items-center relative">
                        <div
                            class="absolute inset-0 bg-linear-to-tr from-brand-100 to-accent-100 rounded-full blur-3xl opacity-40 -z-10 w-3/4 h-3/4 m-auto">
                        </div>
                        <img src="{{ $homeSetting->hero_image_url ? (str_starts_with($homeSetting->hero_image_url, 'http') ? $homeSetting->hero_image_url : asset('storage/' . $homeSetting->hero_image_url)) : 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' }}"
                            alt="Abstract Digital Web Concept"
                            class="w-full max-w-md lg:max-w-lg rounded-3xl shadow-xl shadow-slate-300/40 animate-float object-cover aspect-square border-4 border-white/80">
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 relative z-10 -mt-10">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <a href="{{ route('about') }}"
                        class="group bg-white/40 backdrop-blur-xl p-10 rounded-3xl shadow-xl shadow-slate-200/35 border border-white/50 hover:bg-white/50 hover:border-white/80 hover:shadow-2xl hover:shadow-slate-200/55 hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center">
                        <div
                            class="w-16 h-16 rounded-2xl bg-brand-50 text-brand-500 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-3 font-display">About Us</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">Discover our mission, our story, and the
                            brilliant team behind the code.</p>
                    </a>

                    <a href="{{ route('services') }}"
                        class="group bg-white/40 backdrop-blur-xl p-10 rounded-3xl shadow-xl shadow-slate-200/35 border border-white/50 hover:bg-white/50 hover:border-white/80 hover:shadow-2xl hover:shadow-slate-200/55 hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center">
                        <div
                            class="w-16 h-16 rounded-2xl bg-accent-50 text-accent-500 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-3 font-display">Our Services</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">Explore our comprehensive digital solutions
                            and technological capabilities.</p>
                    </a>

                    <a href="{{ route('contact') }}"
                        class="group bg-white/40 backdrop-blur-xl p-10 rounded-3xl shadow-xl shadow-slate-200/35 border border-white/50 hover:bg-white/50 hover:border-white/80 hover:shadow-2xl hover:shadow-slate-200/55 hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center">
                        <div
                            class="w-16 h-16 rounded-2xl bg-blue-50 text-blue-500 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-3 font-display">Get in Touch</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">Ready to start a project? Reach out to us and
                            let's build something amazing.</p>
                    </a>
                </div>
            </div>
        </section>
    </main>

    @include('partials.footer')
</body>

</html>