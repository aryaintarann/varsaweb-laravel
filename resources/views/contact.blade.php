<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | VarsaWeb</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-linear-to-b from-slate-100 via-slate-50 to-slate-100 text-slate-800 font-sans antialiased">
    <header class="sticky top-0 z-50 w-full pt-4">
        <div class="max-w-6xl mx-auto px-6">
            <div class="rounded-2xl bg-black/30 backdrop-blur-xl border border-white/10 px-5 md:px-6 py-3 flex items-center justify-between gap-4 shadow-sm">
                <nav class="flex items-center gap-4 md:gap-6 text-sm text-white/85">
                    <a href="{{ route('about') }}" class="hover:text-white transition-colors">About</a>
                    <a href="{{ route('services') }}" class="hover:text-white transition-colors">Services</a>
                    <a href="{{ route('contact') }}" class="text-brand-600 font-semibold">Contact</a>
                </nav>

                <a href="{{ route('home') }}" class="font-display text-2xl font-bold text-slate-900 tracking-tight">VarsaWeb</a>

                <a href="{{ route('contact') }}" class="inline-flex items-center rounded-full bg-brand-500 hover:bg-brand-600 text-white text-sm font-medium px-4 py-2 transition-colors">
                    Contact us
                </a>
            </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-6 py-16">
        <section class="rounded-3xl border border-white/50 bg-white/35 backdrop-blur-xl p-6 md:p-10 shadow-xl shadow-slate-200/60 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/45 hover:border-white/80 hover:shadow-2xl hover:shadow-slate-200/80">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div>
                    <span class="inline-flex items-center rounded-full border border-white/60 bg-white/40 backdrop-blur-md text-brand-600 px-3 py-1 text-xs font-medium">Let’s Collaborate</span>
                    <h1 class="mt-4 font-display text-4xl md:text-5xl font-bold text-slate-900">Get in Touch</h1>
                    <p class="mt-5 text-lg text-slate-600 leading-relaxed max-w-xl">
                        Ceritakan kebutuhan website Anda, dan tim kami akan membantu menyiapkan strategi, desain, serta implementasi terbaik untuk bisnis Anda.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-3">
                        <span class="inline-flex items-center rounded-full border border-white/60 bg-white/40 backdrop-blur-md text-slate-700 px-4 py-2 text-sm">Response Cepat</span>
                        <span class="inline-flex items-center rounded-full border border-white/60 bg-white/40 backdrop-blur-md text-slate-700 px-4 py-2 text-sm">Konsultasi Gratis</span>
                        <span class="inline-flex items-center rounded-full border border-white/60 bg-white/40 backdrop-blur-md text-slate-700 px-4 py-2 text-sm">Tim Remote</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <article class="rounded-2xl border border-white/60 bg-white/40 backdrop-blur-md p-5 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/55 hover:border-white/80 hover:shadow-lg hover:shadow-slate-200/80">
                        <p class="text-xs uppercase tracking-wider text-slate-500">Email</p>
                        <p class="mt-2 font-semibold text-slate-900">hello@varsaweb.com</p>
                    </article>
                    <article class="rounded-2xl border border-white/60 bg-white/40 backdrop-blur-md p-5 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/55 hover:border-white/80 hover:shadow-lg hover:shadow-slate-200/80">
                        <p class="text-xs uppercase tracking-wider text-slate-500">Telepon</p>
                        <p class="mt-2 font-semibold text-slate-900">+1 (555) 123-4567</p>
                    </article>
                    <article class="rounded-2xl border border-white/60 bg-white/40 backdrop-blur-md p-5 sm:col-span-2 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/55 hover:border-white/80 hover:shadow-lg hover:shadow-slate-200/80">
                        <p class="text-xs uppercase tracking-wider text-slate-500">Jam Operasional</p>
                        <p class="mt-2 text-slate-700">Senin - Jumat 09.00 - 18.00 · Sabtu 09.00 - 13.00</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="mt-10 grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
            <article class="lg:col-span-2 rounded-3xl border border-white/50 bg-white/35 backdrop-blur-xl p-6 md:p-8 shadow-xl shadow-slate-200/60 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/45 hover:border-white/80 hover:shadow-2xl hover:shadow-slate-200/80">
                <h2 class="font-display text-2xl font-semibold text-slate-900">Form Kontak</h2>
                <p class="mt-2 text-slate-600">Isi form berikut, dan tim kami akan menghubungi Anda secepatnya.</p>

                <form class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-5" method="POST" action="#">
                    <div>
                        <label for="name" class="block text-sm font-medium text-slate-700">Nama</label>
                        <input id="name" name="name" type="text" class="mt-2 w-full rounded-xl border border-white/70 bg-white/45 backdrop-blur-md px-4 py-3 shadow-inner shadow-white/30 transition-all duration-300 hover:bg-white/55 hover:border-white focus:outline-none focus:ring-2 focus:ring-brand-500" placeholder="Nama Anda">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-700">Email</label>
                        <input id="email" name="email" type="email" class="mt-2 w-full rounded-xl border border-white/70 bg-white/45 backdrop-blur-md px-4 py-3 shadow-inner shadow-white/30 transition-all duration-300 hover:bg-white/55 hover:border-white focus:outline-none focus:ring-2 focus:ring-brand-500" placeholder="email@domain.com">
                    </div>

                    <div class="md:col-span-2">
                        <label for="service" class="block text-sm font-medium text-slate-700">Layanan yang Dibutuhkan</label>
                        <input id="service" name="service" type="text" class="mt-2 w-full rounded-xl border border-white/70 bg-white/45 backdrop-blur-md px-4 py-3 shadow-inner shadow-white/30 transition-all duration-300 hover:bg-white/55 hover:border-white focus:outline-none focus:ring-2 focus:ring-brand-500" placeholder="Contoh: Company Profile Website">
                    </div>

                    <div class="md:col-span-2">
                        <label for="message" class="block text-sm font-medium text-slate-700">Pesan</label>
                        <textarea id="message" name="message" rows="5" class="mt-2 w-full rounded-xl border border-white/70 bg-white/45 backdrop-blur-md px-4 py-3 shadow-inner shadow-white/30 transition-all duration-300 hover:bg-white/55 hover:border-white focus:outline-none focus:ring-2 focus:ring-brand-500" placeholder="Jelaskan kebutuhan proyek Anda"></textarea>
                    </div>

                    <div class="md:col-span-2">
                        <button type="submit" class="inline-flex items-center justify-center rounded-xl bg-brand-500 text-white px-6 py-3 font-medium hover:bg-brand-600 transition-colors">
                            Kirim Pesan
                        </button>
                    </div>
                </form>
            </article>

            <aside class="rounded-3xl border border-white/50 bg-white/35 backdrop-blur-xl p-6 shadow-xl shadow-slate-200/60 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/45 hover:border-white/80 hover:shadow-2xl hover:shadow-slate-200/80">
                <h3 class="font-display text-2xl font-semibold text-slate-900">Connect</h3>
                <p class="mt-2 text-slate-600 text-sm">Ikuti sosial media kami untuk update insight dan project terbaru.</p>

                <div class="mt-5 grid grid-cols-3 gap-3">
                    <a href="#" aria-label="Instagram" class="h-12 rounded-xl bg-white/45 backdrop-blur-md text-slate-700 border border-white/70 flex items-center justify-center hover:bg-brand-500 hover:text-white hover:border-brand-500 transition-all duration-300 hover:-translate-y-0.5 hover:shadow-md hover:shadow-slate-200/80">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <a href="#" aria-label="LinkedIn" class="h-12 rounded-xl bg-white/45 backdrop-blur-md text-slate-700 border border-white/70 flex items-center justify-center hover:bg-brand-500 hover:text-white hover:border-brand-500 transition-all duration-300 hover:-translate-y-0.5 hover:shadow-md hover:shadow-slate-200/80">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    <a href="#" aria-label="X / Twitter" class="h-12 rounded-xl bg-white/45 backdrop-blur-md text-slate-700 border border-white/70 flex items-center justify-center hover:bg-brand-500 hover:text-white hover:border-brand-500 transition-all duration-300 hover:-translate-y-0.5 hover:shadow-md hover:shadow-slate-200/80">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2H21.5l-7.11 8.128L22.75 22h-6.545l-5.127-6.704L5.222 22H1.963l7.605-8.693L1.5 2h6.71l4.634 6.108L18.244 2zm-1.146 18h1.804L7.229 3.895H5.293L17.098 20z"/></svg>
                    </a>
                </div>

                <div class="mt-6 rounded-2xl bg-white/40 backdrop-blur-md border border-white/70 p-4 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/55 hover:border-white hover:shadow-lg hover:shadow-slate-200/80">
                    <p class="text-xs uppercase tracking-wider text-slate-500">Response Time</p>
                    <p class="mt-1 font-semibold text-slate-900">Dalam 1x24 jam kerja</p>
                </div>
            </aside>
        </section>
    </main>

    <footer class="bg-slate-950 text-slate-400 py-16 mt-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 items-center text-center md:text-left">
                <div class="flex flex-col items-center md:items-start">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-8 h-8 rounded-lg bg-brand-500 flex items-center justify-center text-white font-display font-bold text-sm">V</div>
                        <span class="font-display font-bold text-xl text-white">VarsaWeb</span>
                    </div>
                    <p class="text-sm max-w-xs">Weaving the web of tomorrow through innovative design and cutting-edge technology.</p>
                </div>

                <div class="flex flex-col items-center md:items-start">
                    <h4 class="text-white font-bold mb-4 uppercase tracking-wider text-sm">Contact Information</h4>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-center gap-3 justify-center md:justify-start">
                            <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            Fully Remote Team
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
                    <h4 class="text-white font-bold mb-4 uppercase tracking-wider text-sm">Follow Us</h4>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-brand-500 hover:text-white transition-colors duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-brand-500 hover:text-white transition-colors duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-brand-500 hover:text-white transition-colors duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-12 pt-8 border-t border-slate-800 text-center text-xs">
            <p>&copy; 2026 VarsaWeb Agency. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
