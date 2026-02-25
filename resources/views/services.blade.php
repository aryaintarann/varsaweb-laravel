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
            <div class="rounded-2xl border border-white/50 bg-white/35 backdrop-blur-xl px-5 md:px-6 py-3 flex items-center justify-between gap-4 shadow-xl shadow-slate-200/40 transition-all duration-300 hover:bg-white/45 hover:border-white/80">
                <nav class="flex items-center gap-4 md:gap-6 text-sm text-slate-700">
                    <a href="{{ route('about') }}" class="relative pb-1 transition-colors hover:text-brand-600 after:absolute after:left-0 after:-bottom-0.5 after:h-0.5 after:w-0 after:bg-brand-500 after:transition-all after:duration-300 hover:after:w-full">About</a>
                    <a href="{{ route('services') }}" class="relative pb-1 text-brand-600 font-semibold after:absolute after:left-0 after:-bottom-0.5 after:h-0.5 after:w-full after:bg-brand-500">Services</a>
                    <a href="{{ route('contact') }}" class="relative pb-1 transition-colors hover:text-brand-600 after:absolute after:left-0 after:-bottom-0.5 after:h-0.5 after:w-0 after:bg-brand-500 after:transition-all after:duration-300 hover:after:w-full">Contact</a>
                </nav>

                <a href="{{ route('home') }}" class="inline-flex items-center">
                    <img src="{{ asset('navbar.png') }}" alt="VarsaWeb" class="h-12 md:h-14 w-auto max-w-72 object-contain">
                </a>

                <a href="{{ route('contact') }}" class="inline-flex items-center rounded-full border border-white/70 bg-white/45 backdrop-blur-md text-brand-700 text-sm font-medium px-4 py-2 shadow-sm transition-all duration-300 hover:bg-white/60 hover:border-white hover:shadow-md">
                    Contact us
                </a>
            </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-6 py-16">
        <section class="rounded-3xl border border-white/50 bg-white/35 backdrop-blur-xl p-6 md:p-10 shadow-xl shadow-slate-200/40 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/45 hover:border-white/80 hover:shadow-2xl hover:shadow-slate-200/55">
            <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-8">
                <div>
                    <span class="inline-flex items-center rounded-full border border-white/60 bg-white/40 backdrop-blur-md text-brand-600 px-3 py-1 text-xs font-medium">Digital Service Studio</span>
                    <h1 class="mt-4 font-display text-4xl md:text-5xl font-bold text-slate-900">Our Services</h1>
                    <p class="mt-5 text-lg text-slate-600 leading-relaxed max-w-xl">
                        Kami merancang website yang tidak hanya indah, tetapi juga terukur hasilnya. Dari strategi hingga implementasi, semua layanan kami dibangun untuk mendorong pertumbuhan bisnis Anda.
                    </p>
                    <div class="mt-6 flex flex-wrap items-center gap-3">
                        <span class="inline-flex items-center rounded-full border border-white/60 bg-white/40 backdrop-blur-md text-slate-700 px-4 py-2 text-sm">Fast Delivery</span>
                        <span class="inline-flex items-center rounded-full border border-white/60 bg-white/40 backdrop-blur-md text-slate-700 px-4 py-2 text-sm">Scalable System</span>
                        <span class="inline-flex items-center rounded-full border border-white/60 bg-white/40 backdrop-blur-md text-slate-700 px-4 py-2 text-sm">Conversion Focused</span>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="rounded-2xl border border-white/60 bg-white/45 backdrop-blur-md p-5 transition-all duration-300 hover:bg-white/55 hover:border-white hover:shadow-lg hover:shadow-slate-200/55">
                        <p class="text-xs uppercase tracking-wider text-slate-500">Projects</p>
                        <p class="mt-2 font-display text-3xl font-bold text-slate-900">120+</p>
                    </div>
                    <div class="rounded-2xl border border-white/60 bg-white/45 backdrop-blur-md p-5 transition-all duration-300 hover:bg-white/55 hover:border-white hover:shadow-lg hover:shadow-slate-200/55">
                        <p class="text-xs uppercase tracking-wider text-slate-500">Avg Launch</p>
                        <p class="mt-2 font-display text-3xl font-bold text-slate-900">21 Hari</p>
                    </div>
                    <div class="col-span-2 rounded-2xl border border-white/20 bg-slate-900/80 backdrop-blur-md p-5 text-left transition-all duration-300 hover:bg-slate-900/90 hover:border-white/30">
                        <p class="text-xs uppercase tracking-wider text-white/70">Approach</p>
                        <p class="mt-2 text-white text-sm leading-relaxed">Strategy-first process: riset kebutuhan, desain terarah, development cepat, dan optimasi performa berkelanjutan.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-12">
            <div class="flex items-end justify-between gap-4">
                <div>
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900">Layanan Utama</h2>
                    <p class="mt-2 text-slate-600">Paket layanan modular yang bisa disesuaikan dengan skala bisnis Anda.</p>
                </div>
            </div>

            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                <article class="group rounded-3xl border border-white/50 bg-white/35 backdrop-blur-xl p-6 shadow-lg shadow-slate-200/35 transition-all duration-300 hover:-translate-y-1 hover:bg-white/45 hover:border-white/80 hover:shadow-2xl hover:shadow-slate-200/55">
                    <div class="w-10 h-10 rounded-xl border border-white/70 bg-white/45 text-brand-600 flex items-center justify-center font-display font-bold backdrop-blur-md">01</div>
                    <h3 class="mt-4 font-display text-2xl font-semibold text-slate-900">Web Development</h3>
                    <p class="mt-3 text-slate-600">Pembuatan website company profile, landing page, dan portal bisnis yang cepat, aman, dan responsif.</p>
                </article>

                <article class="group rounded-3xl border border-white/50 bg-white/35 backdrop-blur-xl p-6 shadow-lg shadow-slate-200/35 transition-all duration-300 hover:-translate-y-1 hover:bg-white/45 hover:border-white/80 hover:shadow-2xl hover:shadow-slate-200/55">
                    <div class="w-10 h-10 rounded-xl border border-white/70 bg-white/45 text-accent-500 flex items-center justify-center font-display font-bold backdrop-blur-md">02</div>
                    <h3 class="mt-4 font-display text-2xl font-semibold text-slate-900">UI/UX Design</h3>
                    <p class="mt-3 text-slate-600">Desain antarmuka modern dengan alur pengguna yang jelas untuk meningkatkan engagement dan conversion.</p>
                </article>

                <article class="group rounded-3xl border border-white/50 bg-white/35 backdrop-blur-xl p-6 shadow-lg shadow-slate-200/35 transition-all duration-300 hover:-translate-y-1 hover:bg-white/45 hover:border-white/80 hover:shadow-2xl hover:shadow-slate-200/55">
                    <div class="w-10 h-10 rounded-xl border border-white/70 bg-white/45 text-brand-600 flex items-center justify-center font-display font-bold backdrop-blur-md">03</div>
                    <h3 class="mt-4 font-display text-2xl font-semibold text-slate-900">Performance Optimization</h3>
                    <p class="mt-3 text-slate-600">Optimasi loading, struktur teknis SEO, dan quality tuning agar website tetap cepat di semua perangkat.</p>
                </article>

                <article class="group rounded-3xl border border-white/50 bg-white/35 backdrop-blur-xl p-6 shadow-lg shadow-slate-200/35 transition-all duration-300 hover:-translate-y-1 hover:bg-white/45 hover:border-white/80 hover:shadow-2xl hover:shadow-slate-200/55">
                    <div class="w-10 h-10 rounded-xl border border-white/70 bg-white/45 text-accent-500 flex items-center justify-center font-display font-bold backdrop-blur-md">04</div>
                    <h3 class="mt-4 font-display text-2xl font-semibold text-slate-900">Maintenance & Support</h3>
                    <p class="mt-3 text-slate-600">Monitoring, perawatan, dan pengembangan lanjutan setelah launch agar website tetap relevan dan stabil.</p>
                </article>
            </div>
        </section>

        <section class="mt-14 rounded-3xl border border-white/50 bg-white/35 backdrop-blur-xl p-6 md:p-8 shadow-xl shadow-slate-200/40 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/45 hover:border-white/80 hover:shadow-2xl hover:shadow-slate-200/55">
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900">Proses Kerja</h2>
            <div class="mt-6 grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="rounded-2xl bg-white/40 backdrop-blur-md border border-white/70 p-4 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/55 hover:border-white hover:shadow-md hover:shadow-slate-200/55">
                    <p class="text-xs text-slate-500">Step 1</p>
                    <p class="mt-1 font-semibold text-slate-900">Discovery</p>
                </div>
                <div class="rounded-2xl bg-white/40 backdrop-blur-md border border-white/70 p-4 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/55 hover:border-white hover:shadow-md hover:shadow-slate-200/55">
                    <p class="text-xs text-slate-500">Step 2</p>
                    <p class="mt-1 font-semibold text-slate-900">Design Sprint</p>
                </div>
                <div class="rounded-2xl bg-white/40 backdrop-blur-md border border-white/70 p-4 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/55 hover:border-white hover:shadow-md hover:shadow-slate-200/55">
                    <p class="text-xs text-slate-500">Step 3</p>
                    <p class="mt-1 font-semibold text-slate-900">Build & Integrate</p>
                </div>
                <div class="rounded-2xl bg-white/40 backdrop-blur-md border border-white/70 p-4 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/55 hover:border-white hover:shadow-md hover:shadow-slate-200/55">
                    <p class="text-xs text-slate-500">Step 4</p>
                    <p class="mt-1 font-semibold text-slate-900">Launch & Scale</p>
                </div>
            </div>
        </section>

        <section class="mt-14 text-right">
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900">Portfolio</h2>
            <p class="mt-3 text-slate-600 max-w-3xl ml-auto">
                Beberapa contoh hasil proyek yang telah kami kerjakan untuk berbagai kebutuhan bisnis.
            </p>

            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 text-left">
                <article class="rounded-2xl border border-white/50 overflow-hidden bg-white/35 backdrop-blur-xl shadow-lg shadow-slate-200/35 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/45 hover:border-white/80 hover:shadow-2xl hover:shadow-slate-200/55">
                    <div class="h-44 bg-linear-to-br from-brand-100 to-accent-100"></div>
                    <div class="p-5">
                        <h3 class="font-display text-xl font-semibold text-slate-900">Corporate Website</h3>
                        <p class="mt-2 text-slate-600 text-sm">Website profil perusahaan dengan fokus branding dan performa.</p>
                    </div>
                </article>
                <article class="rounded-2xl border border-white/50 overflow-hidden bg-white/35 backdrop-blur-xl shadow-lg shadow-slate-200/35 md:translate-y-4 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/45 hover:border-white/80 hover:shadow-2xl hover:shadow-slate-200/55">
                    <div class="h-44 bg-linear-to-br from-accent-100 to-blue-100"></div>
                    <div class="p-5">
                        <h3 class="font-display text-xl font-semibold text-slate-900">Product Landing Page</h3>
                        <p class="mt-2 text-slate-600 text-sm">Landing page kampanye produk dengan struktur konversi yang kuat.</p>
                    </div>
                </article>
                <article class="rounded-2xl border border-white/50 overflow-hidden bg-white/35 backdrop-blur-xl shadow-lg shadow-slate-200/35 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/45 hover:border-white/80 hover:shadow-2xl hover:shadow-slate-200/55">
                    <div class="h-44 bg-linear-to-br from-blue-100 to-brand-100"></div>
                    <div class="p-5">
                        <h3 class="font-display text-xl font-semibold text-slate-900">Business Portal</h3>
                        <p class="mt-2 text-slate-600 text-sm">Portal internal bisnis dengan dashboard informatif dan user-friendly.</p>
                    </div>
                </article>
            </div>
        </section>
    </main>
    <footer class="mt-14 pb-10">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="rounded-2xl border border-white/50 bg-white/35 backdrop-blur-xl p-10 shadow-xl shadow-slate-200/40 transition-all duration-300 hover:bg-white/45 hover:border-white/80">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 items-center text-center md:text-left text-slate-700">
                <div class="flex flex-col items-center md:items-start">
                    <div class="mb-4">
                        <img src="{{ asset('navbar.png') }}" alt="VarsaWeb" class="h-20 md:h-24 w-auto object-contain">
                    </div>
                    <p class="text-sm max-w-xs">Weaving the web of tomorrow through innovative design and cutting-edge technology.</p>
                </div>

                <div class="flex flex-col items-center md:items-start">
                    <h4 class="text-slate-900 font-bold mb-4 uppercase tracking-wider text-sm">Contact Information</h4>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-center gap-3 justify-center md:justify-start">
                            <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            123 Tech Lane, Innovation City, CA
                        </li>
                        <li class="flex items-center gap-3 justify-center md:justify-start">
                            <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            hello@varsaweb.com
                        </li>
                        <li class="flex items-center gap-3 justify-center md:justify-start">
                            <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            +1 (555) 123-4567
                        </li>
                    </ul>
                </div>

                <div class="flex flex-col items-center md:items-end">
                    <h4 class="text-slate-900 font-bold mb-4 uppercase tracking-wider text-sm">Follow Us</h4>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-white/45 backdrop-blur-md text-slate-700 border border-white/70 flex items-center justify-center transition-all duration-300 hover:bg-white/60 hover:border-white hover:shadow-md hover:shadow-slate-200/55">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/45 backdrop-blur-md text-slate-700 border border-white/70 flex items-center justify-center transition-all duration-300 hover:bg-white/60 hover:border-white hover:shadow-md hover:shadow-slate-200/55">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/45 backdrop-blur-md text-slate-700 border border-white/70 flex items-center justify-center transition-all duration-300 hover:bg-white/60 hover:border-white hover:shadow-md hover:shadow-slate-200/55">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
                <div class="mt-10 pt-6 border-t border-white/60 text-center text-xs text-slate-500">
                    <p>&copy; 2026 VarsaWeb Agency. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
