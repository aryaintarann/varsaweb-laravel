{{-- Shared Navbar Partial
     Pass $activePage = 'about' | 'services' | 'contact' | '' --}}
@php $active = $activePage ?? ''; @endphp

<header class="sticky top-0 z-50 w-full pt-4">
    <div class="max-w-6xl mx-auto px-6">
        <div
            class="relative rounded-2xl border border-white/50 dark:border-slate-600/40 bg-white/35 dark:bg-slate-800/40 backdrop-blur-xl px-5 md:px-6 py-3 flex items-center justify-between gap-4 shadow-xl shadow-slate-200/40 dark:shadow-slate-900/40 transition-all duration-300 hover:bg-white/45 dark:hover:bg-slate-700/50 hover:border-white/80 dark:hover:border-slate-500/60">

            {{-- Desktop nav links --}}
            <nav class="hidden md:flex items-center gap-4 md:gap-6 text-sm text-slate-700 dark:text-slate-300">
                <a href="{{ route('about') }}"
                    class="relative pb-1 {{ $active === 'about' ? 'text-brand-600 dark:text-brand-400 font-semibold after:absolute after:left-0 after:-bottom-0.5 after:h-0.5 after:w-full after:bg-brand-500' : 'transition-colors hover:text-brand-600 dark:hover:text-brand-400 after:absolute after:left-0 after:-bottom-0.5 after:h-0.5 after:w-0 after:bg-brand-500 after:transition-all after:duration-300 hover:after:w-full' }}">About</a>
                <a href="{{ route('services') }}"
                    class="relative pb-1 {{ $active === 'services' ? 'text-brand-600 dark:text-brand-400 font-semibold after:absolute after:left-0 after:-bottom-0.5 after:h-0.5 after:w-full after:bg-brand-500' : 'transition-colors hover:text-brand-600 dark:hover:text-brand-400 after:absolute after:left-0 after:-bottom-0.5 after:h-0.5 after:w-0 after:bg-brand-500 after:transition-all after:duration-300 hover:after:w-full' }}">Services</a>
                <a href="{{ route('contact') }}"
                    class="relative pb-1 {{ $active === 'contact' ? 'text-brand-600 dark:text-brand-400 font-semibold after:absolute after:left-0 after:-bottom-0.5 after:h-0.5 after:w-full after:bg-brand-500' : 'transition-colors hover:text-brand-600 dark:hover:text-brand-400 after:absolute after:left-0 after:-bottom-0.5 after:h-0.5 after:w-0 after:bg-brand-500 after:transition-all after:duration-300 hover:after:w-full' }}">Contact</a>
            </nav>

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="inline-flex items-center">
                <img src="{{ asset('navbar.webp') }}" alt="VarsaWeb" width="1600" height="873"
                    class="h-12 md:h-14 w-auto max-w-72 object-contain dark:brightness-90">
            </a>

            {{-- Desktop: theme toggle + CTA --}}
            <div class="hidden md:flex items-center gap-3">
                <button data-theme-toggle aria-label="Toggle dark mode"
                    class="inline-flex items-center justify-center w-9 h-9 rounded-full border border-white/70 dark:border-slate-600/60 bg-white/45 dark:bg-slate-700/45 backdrop-blur-md text-slate-700 dark:text-slate-300 transition-all duration-300 hover:bg-white/60 dark:hover:bg-slate-600/60 hover:border-white dark:hover:border-slate-500">
                    {{-- Moon (shown in light mode) --}}
                    <svg class="w-4 h-4 block dark:hidden" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 01.162.819A8.97 8.97 0 009 6a9 9 0 009 9 8.97 8.97 0 003.463-.69.75.75 0 01.981.98 10.503 10.503 0 01-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 01.818.162z" clip-rule="evenodd" />
                    </svg>
                    {{-- Sun (shown in dark mode) --}}
                    <svg class="w-4 h-4 hidden dark:block" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.166 17.834a.75.75 0 00-1.06 1.06l1.59 1.591a.75.75 0 001.061-1.06l-1.59-1.591zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.166 6.106a.75.75 0 00-1.06 1.06l1.59 1.591a.75.75 0 001.061-1.06L6.166 6.106z" />
                    </svg>
                </button>

                <a href="{{ route('contact') }}"
                    class="inline-flex items-center rounded-full border border-white/70 dark:border-slate-600/60 bg-white/45 dark:bg-slate-700/45 backdrop-blur-md text-brand-700 dark:text-brand-400 text-sm font-medium px-4 py-2 shadow-sm transition-all duration-300 hover:bg-white/60 dark:hover:bg-slate-600/60 hover:border-white dark:hover:border-slate-500 hover:shadow-md">
                    Contact us
                </a>
            </div>

            {{-- Mobile: theme toggle + hamburger --}}
            <div class="md:hidden flex items-center gap-2 ml-auto">
                <button data-theme-toggle aria-label="Toggle dark mode"
                    class="inline-flex items-center justify-center w-9 h-9 rounded-xl border border-white/70 dark:border-slate-600/60 bg-white/45 dark:bg-slate-700/45 backdrop-blur-md text-slate-700 dark:text-slate-300 transition-all duration-300 hover:bg-white/60 dark:hover:bg-slate-600/60">
                    <svg class="w-4 h-4 block dark:hidden" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 01.162.819A8.97 8.97 0 009 6a9 9 0 009 9 8.97 8.97 0 003.463-.69.75.75 0 01.981.98 10.503 10.503 0 01-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 01.818.162z" clip-rule="evenodd" />
                    </svg>
                    <svg class="w-4 h-4 hidden dark:block" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.166 17.834a.75.75 0 00-1.06 1.06l1.59 1.591a.75.75 0 001.061-1.06l-1.59-1.591zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.166 6.106a.75.75 0 00-1.06 1.06l1.59 1.591a.75.75 0 001.061-1.06L6.166 6.106z" />
                    </svg>
                </button>

                <details class="group">
                    <summary
                        class="list-none cursor-pointer inline-flex items-center justify-center w-10 h-10 rounded-xl border border-white/70 dark:border-slate-600/60 bg-white/45 dark:bg-slate-700/45 backdrop-blur-md text-slate-700 dark:text-slate-300 hover:bg-white/60 dark:hover:bg-slate-600/60 hover:border-white dark:hover:border-slate-500 transition-all duration-300">
                        <svg class="w-5 h-5 transition-transform duration-300 ease-out group-open:rotate-90" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </summary>
                    <div
                        class="absolute left-0 right-0 top-full mt-2 rounded-2xl border border-white/60 dark:border-slate-600/40 bg-white/80 dark:bg-slate-800/90 backdrop-blur-xl p-3 shadow-xl shadow-slate-200/40 dark:shadow-slate-900/40 z-40 origin-top opacity-0 -translate-y-1 scale-95 pointer-events-none transition-all duration-300 ease-out group-open:opacity-100 group-open:translate-y-0 group-open:scale-100 group-open:pointer-events-auto">
                        <nav class="flex flex-col gap-1 text-sm text-slate-700 dark:text-slate-300">
                            <a href="{{ route('about') }}"
                                class="rounded-lg px-3 py-2 {{ $active === 'about' ? 'bg-white/70 dark:bg-slate-700/70 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-white/70 dark:hover:bg-slate-700/50 transition-colors' }}">About</a>
                            <a href="{{ route('services') }}"
                                class="rounded-lg px-3 py-2 {{ $active === 'services' ? 'bg-white/70 dark:bg-slate-700/70 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-white/70 dark:hover:bg-slate-700/50 transition-colors' }}">Services</a>
                            <a href="{{ route('contact') }}"
                                class="rounded-lg px-3 py-2 {{ $active === 'contact' ? 'bg-white/70 dark:bg-slate-700/70 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-white/70 dark:hover:bg-slate-700/50 transition-colors' }}">Contact</a>
                        </nav>
                    </div>
                </details>
            </div>

        </div>
    </div>
</header>
