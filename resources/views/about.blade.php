<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | VarsaWeb</title>

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

    @include('partials.navbar', ['activePage' => 'about'])

    <main class="grow pb-16">
        <section class="max-w-7xl mx-auto px-6 lg:px-8 pt-6">
            <div
                class="rounded-3xl border border-white/50 dark:border-slate-600/40 bg-white/35 dark:bg-slate-800/35 backdrop-blur-xl p-4 md:p-6 shadow-xl shadow-slate-200/40 dark:shadow-slate-900/40 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white/45 dark:hover:bg-slate-700/45 hover:border-white/80 dark:hover:border-slate-500/60 hover:shadow-2xl hover:shadow-slate-200/55 dark:hover:shadow-slate-900/55">
                <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-8 lg:gap-10">
                    <div
                        class="rounded-2xl overflow-hidden border border-white/60 dark:border-slate-600/40 bg-white/45 dark:bg-slate-700/45 backdrop-blur-md transition-all duration-300 hover:bg-white/55 dark:hover:bg-slate-700/55 hover:border-white dark:hover:border-slate-500 hover:shadow-lg hover:shadow-slate-200/55 dark:hover:shadow-slate-900/55">
                        <img src="{{ $aboutSetting->image_path ? (str_starts_with($aboutSetting->image_path, 'uploads/') ? asset('storage/' . $aboutSetting->image_path) : asset($aboutSetting->image_path)) : asset('logo.webp') }}"
                            alt="Logo VarsaWeb" class="w-full min-h-80 md:min-h-130 object-cover">
                    </div>

                    <div class="text-center">
                        <h1 class="font-display text-4xl md:text-5xl font-bold text-slate-900 dark:text-white">
                            {{ $aboutSetting->title ?? 'About Us' }}
                        </h1>
                        <div class="mt-5 text-lg text-slate-600 dark:text-slate-300 leading-relaxed max-w-2xl mx-auto prose prose-slate dark:prose-invert">
                            {!! $aboutSetting->description ?? '' !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-6 lg:px-8 mt-16">
            <div class="text-center">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 dark:text-white">VarsaWeb Team</h2>
                <p class="mt-4 text-slate-700 dark:text-slate-300 max-w-3xl mx-auto">Tim kami terdiri dari talenta multidisiplin yang
                    bekerja kolaboratif untuk menghasilkan website dengan kualitas terbaik.</p>
            </div>

            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-10">
                @foreach($teamMembers as $index => $member)
                    <article class="group text-center">
                        <div class="relative h-56 flex items-end justify-center">
                            <div
                                class="absolute bottom-4 w-40 h-36 rounded-[2.5rem] bg-brand-100/80 dark:bg-brand-900/30 border border-brand-200/70 dark:border-brand-700/40 shadow-md shadow-brand-100/70 dark:shadow-brand-900/40 {{ $index % 2 === 0 ? '-rotate-6' : 'rotate-6' }} transition-transform duration-500 ease-out group-hover:{{ $index % 2 === 0 ? '-translate-x-2 -rotate-10' : 'translate-x-2 rotate-10' }} group-hover:scale-105">
                            </div>
                            <div
                                class="relative w-40 h-44 rounded-3xl border border-dashed border-white/80 dark:border-slate-600/60 bg-white/45 dark:bg-slate-700/45 backdrop-blur-md flex items-center justify-center text-sm font-medium text-slate-500 dark:text-slate-400 transition-all duration-500 ease-out group-hover:{{ $index % 2 === 0 ? '-translate-x-1' : 'translate-x-1' }} group-hover:-translate-y-1 group-hover:scale-105 group-hover:shadow-lg group-hover:shadow-slate-300/60 dark:group-hover:shadow-slate-900/60">
                                @if($member->photo)
                                    <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}"
                                        width="160" height="176"
                                        class="w-full h-full object-cover rounded-3xl">
                                @else
                                    Foto PNG
                                @endif
                            </div>
                        </div>
                        <h3 class="mt-4 font-display text-4xl font-bold text-slate-900 dark:text-white">{{ $member->name }}</h3>
                        <p class="mt-1 text-2xl text-slate-500 dark:text-slate-400">{{ $member->position }}</p>
                    </article>
                @endforeach
            </div>
        </section>
    </main>

    @include('partials.footer')
</body>

</html>