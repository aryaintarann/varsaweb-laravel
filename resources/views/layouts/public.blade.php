<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('meta_description', ($settings['site_name'] ?? 'VarsaWeb') . ' - Modern Digital Solutions Agency')">

    <title>@yield('title', $settings['site_name'] ?? 'VarsaWeb')</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700,800&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col bg-slate-50 text-slate-800 antialiased">

    <header x-data="{ open: false, scrolled: false }" 
            x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 40 })"
            class="fixed top-0 left-0 right-0 z-50 transition-all duration-500"
            :class="scrolled ? 'py-2' : 'py-4'">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="rounded-2xl transition-all duration-500 px-4 sm:px-6"
                 :class="scrolled 
                    ? 'bg-white/80 backdrop-blur-2xl shadow-xl shadow-slate-900/10 border border-white/60 ring-1 ring-slate-900/5' 
                    : 'bg-white/10 backdrop-blur-md border border-white/15'">
                <div class="flex items-center justify-between h-16">
                    <!-- Logo -->
                    <a href="{{ route('home') }}" class="flex items-center group">
                        <img src="{{ asset('varsaweb-navbar.webp') }}" alt="{{ $settings['site_name'] ?? 'VarsaWeb' }}" class="h-10 w-auto">
                    </a>

                    <!-- Desktop Nav -->
                    <nav class="hidden md:flex items-center space-x-1">
                        <a href="{{ route('home') }}" 
                           class="nav-link px-3.5 py-1.5 rounded-lg text-sm font-medium transition-all duration-300 {{ request()->routeIs('home') ? 'active' : '' }}"
                           :class="scrolled 
                              ? '{{ request()->routeIs('home') ? "text-indigo-600 bg-indigo-50" : "text-slate-600 hover:text-slate-900 hover:bg-slate-100" }}' 
                              : '{{ request()->routeIs('home') ? "text-indigo-600 bg-indigo-50/70" : "text-slate-600 hover:text-slate-900 hover:bg-slate-100/50" }}'">Home</a>
                        <a href="{{ route('about') }}" 
                           class="nav-link px-3.5 py-1.5 rounded-lg text-sm font-medium transition-all duration-300 {{ request()->routeIs('about') ? 'active' : '' }}"
                           :class="scrolled 
                              ? '{{ request()->routeIs('about') ? "text-indigo-600 bg-indigo-50" : "text-slate-600 hover:text-slate-900 hover:bg-slate-100" }}' 
                              : '{{ request()->routeIs('about') ? "text-indigo-600 bg-indigo-50/70" : "text-slate-600 hover:text-slate-900 hover:bg-slate-100/50" }}'">About</a>
                        <a href="{{ route('services') }}" 
                           class="nav-link px-3.5 py-1.5 rounded-lg text-sm font-medium transition-all duration-300 {{ request()->routeIs('services') ? 'active' : '' }}"
                           :class="scrolled 
                              ? '{{ request()->routeIs('services') ? "text-indigo-600 bg-indigo-50" : "text-slate-600 hover:text-slate-900 hover:bg-slate-100" }}' 
                              : '{{ request()->routeIs('services') ? "text-indigo-600 bg-indigo-50/70" : "text-slate-600 hover:text-slate-900 hover:bg-slate-100/50" }}'">Services</a>
                        <a href="{{ route('portfolios') }}" 
                           class="nav-link px-3.5 py-1.5 rounded-lg text-sm font-medium transition-all duration-300 {{ request()->routeIs('portfolios') ? 'active' : '' }}"
                           :class="scrolled 
                              ? '{{ request()->routeIs('portfolios') ? "text-indigo-600 bg-indigo-50" : "text-slate-600 hover:text-slate-900 hover:bg-slate-100" }}' 
                              : '{{ request()->routeIs('portfolios') ? "text-indigo-600 bg-indigo-50/70" : "text-slate-600 hover:text-slate-900 hover:bg-slate-100/50" }}'">Portfolio</a>
                        <a href="{{ route('contact') }}" class="btn-primary ml-3 !px-5 !py-2 !text-xs !rounded-lg">
                            Get in Touch
                            <svg class="w-3.5 h-3.5 ml-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </nav>

                    <!-- Mobile Toggle -->
                    <button @click="open = !open" class="md:hidden p-2 rounded-lg transition-colors duration-300"
                            :class="scrolled ? 'text-slate-600 hover:bg-slate-100' : 'text-slate-600 hover:bg-slate-100/50'">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                            <path x-show="open" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <!-- Mobile Menu -->
                <div x-show="open" x-cloak
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 max-h-0"
                     x-transition:enter-end="opacity-100 max-h-96"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 max-h-96"
                     x-transition:leave-end="opacity-0 max-h-0"
                     class="md:hidden overflow-hidden border-t"
                     :class="scrolled ? 'border-slate-100' : 'border-slate-200/50'">
                    <div class="py-4 space-y-1">
                        <a href="{{ route('home') }}" class="block px-4 py-2.5 rounded-xl text-sm font-medium transition {{ request()->routeIs('home') ? 'text-indigo-600 bg-indigo-50' : '' }}"
                           :class="!scrolled && '{{ request()->routeIs('home') ? '' : "text-slate-600 hover:bg-slate-100/50" }}'">Home</a>
                        <a href="{{ route('about') }}" class="block px-4 py-2.5 rounded-xl text-sm font-medium transition {{ request()->routeIs('about') ? 'text-indigo-600 bg-indigo-50' : '' }}"
                           :class="!scrolled && '{{ request()->routeIs('about') ? '' : "text-slate-600 hover:bg-slate-100/50" }}'">About</a>
                        <a href="{{ route('services') }}" class="block px-4 py-2.5 rounded-xl text-sm font-medium transition {{ request()->routeIs('services') ? 'text-indigo-600 bg-indigo-50' : '' }}"
                           :class="!scrolled && '{{ request()->routeIs('services') ? '' : "text-slate-600 hover:bg-slate-100/50" }}'">Services</a>
                        <a href="{{ route('portfolios') }}" class="block px-4 py-2.5 rounded-xl text-sm font-medium transition {{ request()->routeIs('portfolios') ? 'text-indigo-600 bg-indigo-50' : '' }}"
                           :class="!scrolled && '{{ request()->routeIs('portfolios') ? '' : "text-slate-600 hover:bg-slate-100/50" }}'">Portfolio</a>
                        <a href="{{ route('contact') }}" class="block px-4 py-2.5 rounded-xl text-sm font-medium text-white btn-primary text-center mt-3">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="gradient-primary text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-10 left-10 w-72 h-72 bg-indigo-500 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-violet-500 rounded-full blur-3xl"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">

                <!-- Brand -->
                <div class="lg:col-span-2 space-y-6">
                    <div class="flex items-center space-x-2">
                        <div class="w-10 h-10 rounded-xl gradient-accent flex items-center justify-center">
                            <span class="text-white font-extrabold text-lg">V</span>
                        </div>
                        <span class="text-xl font-extrabold tracking-tight">{{ $settings['site_name'] ?? 'VarsaWeb' }}</span>
                    </div>
                    <p class="text-slate-400 leading-relaxed max-w-md">
                        Transforming ambitious ideas into exceptional digital experiences. We combine cutting-edge technology with creative design to deliver results that matter.
                    </p>
                    <div class="flex space-x-3">
                        @if(!empty($settings['social_facebook']))
                        <a href="{{ $settings['social_facebook'] }}" class="w-10 h-10 rounded-xl bg-white/5 hover:bg-white/10 flex items-center justify-center text-slate-400 hover:text-white transition-all duration-300">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                        </a>
                        @endif
                        @if(!empty($settings['social_instagram']))
                        <a href="{{ $settings['social_instagram'] }}" class="w-10 h-10 rounded-xl bg-white/5 hover:bg-white/10 flex items-center justify-center text-slate-400 hover:text-white transition-all duration-300">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/></svg>
                        </a>
                        @endif
                        @if(!empty($settings['social_linkedin']))
                        <a href="{{ $settings['social_linkedin'] }}" class="w-10 h-10 rounded-xl bg-white/5 hover:bg-white/10 flex items-center justify-center text-slate-400 hover:text-white transition-all duration-300">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                        @endif
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-sm font-bold text-white tracking-wider uppercase mb-6">Navigation</h3>
                    <ul class="space-y-4">
                        <li><a href="{{ route('home') }}" class="text-slate-400 hover:text-white transition-colors duration-200 flex items-center group"><span class="w-1.5 h-1.5 rounded-full bg-indigo-500 mr-3 opacity-0 group-hover:opacity-100 transition-opacity"></span>Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-slate-400 hover:text-white transition-colors duration-200 flex items-center group"><span class="w-1.5 h-1.5 rounded-full bg-indigo-500 mr-3 opacity-0 group-hover:opacity-100 transition-opacity"></span>About Us</a></li>
                        <li><a href="{{ route('services') }}" class="text-slate-400 hover:text-white transition-colors duration-200 flex items-center group"><span class="w-1.5 h-1.5 rounded-full bg-indigo-500 mr-3 opacity-0 group-hover:opacity-100 transition-opacity"></span>Services</a></li>
                        <li><a href="{{ route('portfolios') }}" class="text-slate-400 hover:text-white transition-colors duration-200 flex items-center group"><span class="w-1.5 h-1.5 rounded-full bg-indigo-500 mr-3 opacity-0 group-hover:opacity-100 transition-opacity"></span>Portfolio</a></li>
                        <li><a href="{{ route('contact') }}" class="text-slate-400 hover:text-white transition-colors duration-200 flex items-center group"><span class="w-1.5 h-1.5 rounded-full bg-indigo-500 mr-3 opacity-0 group-hover:opacity-100 transition-opacity"></span>Contact</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-sm font-bold text-white tracking-wider uppercase mb-6">Contact</h3>
                    <ul class="space-y-4">
                        @if(!empty($settings['contact_email']))
                        <li class="flex items-start text-slate-400">
                            <svg class="w-5 h-5 text-indigo-400 mr-3 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <span>{{ $settings['contact_email'] }}</span>
                        </li>
                        @endif
                        @if(!empty($settings['contact_phone']))
                        <li class="flex items-start text-slate-400">
                            <svg class="w-5 h-5 text-indigo-400 mr-3 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <span>{{ $settings['contact_phone'] }}</span>
                        </li>
                        @endif
                        @if(!empty($settings['contact_address']))
                        <li class="flex items-start text-slate-400">
                            <svg class="w-5 h-5 text-indigo-400 mr-3 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span>{{ $settings['contact_address'] }}</span>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="mt-16 pt-8 border-t border-white/10 flex flex-col sm:flex-row justify-between items-center gap-4">
                <p class="text-sm text-slate-500">&copy; {{ date('Y') }} {{ $settings['site_name'] ?? 'VarsaWeb' }}. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>
