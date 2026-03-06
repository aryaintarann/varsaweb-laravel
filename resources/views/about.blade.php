<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | VarsaWeb</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@500;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@500;700&display=swap" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@500;700&display=swap"></noscript>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#B7C0C6] text-slate-800 font-sans antialiased flex flex-col min-h-screen overflow-x-hidden">
    <header class="sticky top-0 z-50 w-full pt-4">
        <div class="max-w-6xl mx-auto px-6">
            <div
                class="relative rounded-2xl border border-white/50 bg-white/35 backdrop-blur-xl px-5 md:px-6 py-3 flex items-center justify-between gap-4 shadow-xl shadow-slate-200/40 transition-all duration-300 hover:bg-white/45 hover:border-white/80">
                <nav class="hidden md:flex items-center gap-4 md:gap-6 text-sm text-slate-700">
                    <a href="{{ route('about') }}"
                        class="relative pb-1 text-brand-600 font-semibold after:absolute after:left-0 after:-bottom-0.5 after:h-0.5 after:w-full after:bg-brand-500">About</a>
                    <a href="{{ route('services') }}"
                        class="relative pb-1 transition-colors hover:text-brand-600 after:absolute after:left-0 after:-bottom-0.5 after:h-0.5 after:w-0 after:bg-brand-500 after:transition-all after:duration-300 hover:after:w-full">Services</a>
                    <a href="{{ route('contact') }}"
                        class="relative pb-1 transition-colors hover:text-brand-600 after:absolute after:left-0 after:-bottom-0.5 after:h-0.5 after:w-0 after:bg-brand-500 after:transition-all after:duration-300 hover:after:w-full">Contact</a>
                </nav>

                <a href="{{ route('home') }}" class="inline-flex items-center">
                    <img src="{{ asset('navbar.webp') }}" alt="VarsaWeb" width="1600" height="873"
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
                                class="rounded-lg px-3 py-2 bg-white/70 text-brand-600 font-semibold">About</a>
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

    <main class="grow pb-16">
        <section class="max-w-7xl mx-auto px-6 lg:px-8 pt-6">
            <div
                class="rounded-3xl border border-white/50 bg-white/35 backdrop-blur-xl p-4 md:p-6 shadow-xl shadow-slate-200/40 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/45 hover:border-white/80 hover:shadow-2xl hover:shadow-slate-200/55">
                <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-8 lg:gap-10">
                    <div
                        class="rounded-2xl overflow-hidden border border-white/60 bg-white/45 backdrop-blur-md transition-all duration-300 hover:bg-white/55 hover:border-white hover:shadow-lg hover:shadow-slate-200/55">
                        <img src="{{ $aboutSetting->image_path ? (str_starts_with($aboutSetting->image_path, 'uploads/') ? asset('storage/' . $aboutSetting->image_path) : asset($aboutSetting->image_path)) : asset('logo.webp') }}"
                            alt="Logo VarsaWeb" class="w-full min-h-80 md:min-h-130 object-cover">
                    </div>

                    <div class="text-center">
                        <h1 class="font-display text-4xl md:text-5xl font-bold text-slate-900">
                            {{ $aboutSetting->title ?? 'About Us' }}
                        </h1>
                        <div class="mt-5 text-lg text-slate-600 leading-relaxed max-w-2xl mx-auto prose prose-slate">
                            {!! $aboutSetting->description ?? '' !!}
                        </div>

                    </div>

                </div>
            </div>
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-6 lg:px-8 mt-16">
            <div class="text-center">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900">VarsaWeb Team</h2>
                <p class="mt-4 text-slate-700 max-w-3xl mx-auto">Tim kami terdiri dari talenta multidisiplin yang
                    bekerja kolaboratif untuk menghasilkan website dengan kualitas terbaik.</p>
            </div>

            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-10">
                @foreach($teamMembers as $index => $member)
                    <article class="group text-center">
                        <div class="relative h-56 flex items-end justify-center">
                            <div
                                class="absolute bottom-4 w-40 h-36 rounded-[2.5rem] bg-brand-100/80 border border-brand-200/70 shadow-md shadow-brand-100/70 {{ $index % 2 === 0 ? '-rotate-6' : 'rotate-6' }} transition-transform duration-500 ease-out group-hover:{{ $index % 2 === 0 ? '-translate-x-2 -rotate-10' : 'translate-x-2 rotate-10' }} group-hover:scale-105">
                            </div>
                            <div
                                class="relative w-40 h-44 rounded-3xl border border-dashed border-white/80 bg-white/45 backdrop-blur-md flex items-center justify-center text-sm font-medium text-slate-500 transition-all duration-500 ease-out group-hover:{{ $index % 2 === 0 ? '-translate-x-1' : 'translate-x-1' }} group-hover:-translate-y-1 group-hover:scale-105 group-hover:shadow-lg group-hover:shadow-slate-300/60">
                                @if($member->photo)
                                    <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}"
                                        width="160" height="176"
                                        class="w-full h-full object-cover rounded-3xl">
                                @else
                                    Foto PNG
                                @endif
                            </div>
                        </div>
                        <h3 class="mt-4 font-display text-4xl font-bold text-slate-900">{{ $member->name }}</h3>
                        <p class="mt-1 text-2xl text-slate-500">{{ $member->position }}</p>
                    </article>
                @endforeach
            </div>
        </section>
    </main>

    @include('partials.footer')
</body>

</html>