<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | VarsaWeb</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased flex flex-col min-h-screen overflow-x-hidden">
    <header class="w-full py-8">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-12 h-12 rounded-xl bg-linear-to-br from-brand-500 to-accent-500 flex items-center justify-center text-white font-display font-bold text-2xl shadow-lg group-hover:shadow-brand-500/50 transition-all duration-300 group-hover:scale-105">
                    V
                </div>
                <span class="font-display font-bold text-3xl text-slate-900 tracking-tight">VarsaWeb</span>
            </a>
            <nav class="flex items-center gap-6 text-sm text-slate-600">
                <a href="{{ route('about') }}" class="text-brand-600 font-medium">About Us</a>
                <a href="{{ route('services') }}" class="hover:text-slate-900 transition-colors">Services</a>
                <a href="{{ route('contact') }}" class="hover:text-slate-900 transition-colors">Contact</a>
            </nav>
        </div>
    </header>

    <main class="grow pb-16">
        <section class="max-w-7xl mx-auto px-6 lg:px-8 pt-6">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-slate-900">Tentang VarsaWeb</h1>
            <p class="mt-6 text-lg text-slate-600 leading-relaxed max-w-4xl">
                VarsaWeb adalah agensi digital yang berfokus pada pengembangan website modern untuk brand, bisnis, dan organisasi. Kami memadukan strategi, desain, dan teknologi untuk menghasilkan pengalaman web yang cepat, menarik, dan berdampak langsung pada pertumbuhan bisnis.
            </p>
        </section>

        <section class="max-w-7xl mx-auto px-6 lg:px-8 mt-12">
            <div class="bg-white rounded-3xl border border-slate-200 p-8 md:p-10 flex flex-col md:flex-row items-center gap-8">
                <div class="w-28 h-28 rounded-3xl bg-linear-to-br from-brand-500 to-accent-500 flex items-center justify-center text-white font-display font-bold text-5xl shadow-lg">
                    V
                </div>
                <div>
                    <h2 class="font-display text-3xl font-bold text-slate-900">Logo VarsaWeb</h2>
                    <p class="mt-3 text-slate-600 leading-relaxed max-w-3xl">
                        Logo VarsaWeb merepresentasikan semangat inovasi dan ketepatan dalam membangun solusi digital. Bentuk yang tegas dan warna yang dinamis mencerminkan komitmen kami terhadap kualitas, kreativitas, dan kecepatan eksekusi.
                    </p>
                </div>
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-6 lg:px-8 mt-12">
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900">VarsaWeb Team</h2>
            <p class="mt-4 text-slate-600 max-w-3xl">Tim kami terdiri dari talenta multidisiplin yang bekerja kolaboratif untuk menghasilkan website dengan kualitas terbaik.</p>

            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <article class="bg-white rounded-2xl border border-slate-200 p-6 text-center">
                    <div class="w-14 h-14 rounded-full bg-brand-50 text-brand-600 mx-auto flex items-center justify-center font-display font-bold text-xl">AD</div>
                    <h3 class="mt-4 font-display text-xl font-semibold text-slate-900">Adit</h3>
                    <p class="mt-1 text-sm text-slate-500">Project Lead</p>
                </article>
                <article class="bg-white rounded-2xl border border-slate-200 p-6 text-center">
                    <div class="w-14 h-14 rounded-full bg-accent-50 text-accent-500 mx-auto flex items-center justify-center font-display font-bold text-xl">NS</div>
                    <h3 class="mt-4 font-display text-xl font-semibold text-slate-900">Nisa</h3>
                    <p class="mt-1 text-sm text-slate-500">UI/UX Designer</p>
                </article>
                <article class="bg-white rounded-2xl border border-slate-200 p-6 text-center">
                    <div class="w-14 h-14 rounded-full bg-blue-50 text-blue-500 mx-auto flex items-center justify-center font-display font-bold text-xl">RF</div>
                    <h3 class="mt-4 font-display text-xl font-semibold text-slate-900">Rafi</h3>
                    <p class="mt-1 text-sm text-slate-500">Frontend Engineer</p>
                </article>
                <article class="bg-white rounded-2xl border border-slate-200 p-6 text-center">
                    <div class="w-14 h-14 rounded-full bg-emerald-50 text-emerald-600 mx-auto flex items-center justify-center font-display font-bold text-xl">DW</div>
                    <h3 class="mt-4 font-display text-xl font-semibold text-slate-900">Dewi</h3>
                    <p class="mt-1 text-sm text-slate-500">Backend Engineer</p>
                </article>
            </div>
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
