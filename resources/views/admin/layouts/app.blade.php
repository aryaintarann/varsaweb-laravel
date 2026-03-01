<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') | VarsaWeb Admin</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@500;700&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#0f172a] font-sans antialiased text-slate-300">
    <div class="flex min-h-screen">
        <aside class="w-64 bg-[#0f172a] border-r border-white/5 flex flex-col fixed inset-y-0 left-0 z-30">
            <div class="px-6 py-5 border-b border-white/5">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2">
                    <span class="text-xl font-display font-bold text-white">Varsa<span
                            class="text-brand-500">Web</span></span>
                </a>
                <p class="text-xs text-slate-500 mt-1">Admin Panel</p>
            </div>

            <nav class="flex-1 px-3 py-4 space-y-1 overflow-y-auto">
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('admin.dashboard') ? 'bg-brand-500/10 text-brand-400' : 'text-slate-400 hover:bg-white/5 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Dashboard
                </a>

                <p class="px-3 pt-4 pb-2 text-xs uppercase tracking-wider text-slate-600 font-semibold">Content</p>

                <a href="{{ route('admin.home.edit') }}"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('admin.home.*') ? 'bg-brand-500/10 text-brand-400' : 'text-slate-400 hover:bg-white/5 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 4V2M17 4V2M3 8h18M5 4h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V6a2 2 0 012-2z" />
                    </svg>
                    Home Page
                </a>

                <a href="{{ route('admin.about.edit') }}"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('admin.about.*') ? 'bg-brand-500/10 text-brand-400' : 'text-slate-400 hover:bg-white/5 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    About Page
                </a>

                <a href="{{ route('admin.services.index') }}"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('admin.services.*') ? 'bg-brand-500/10 text-brand-400' : 'text-slate-400 hover:bg-white/5 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Services
                </a>

                <a href="{{ route('admin.contact.edit') }}"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('admin.contact.*') ? 'bg-brand-500/10 text-brand-400' : 'text-slate-400 hover:bg-white/5 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Contact Page
                </a>

                <a href="{{ route('admin.footer.edit') }}"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('admin.footer.*') ? 'bg-brand-500/10 text-brand-400' : 'text-slate-400 hover:bg-white/5 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                    Footer
                </a>
            </nav>

            <div class="px-3 py-4 border-t border-white/5">
                <div class="flex items-center justify-between px-3">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-8 h-8 rounded-lg bg-brand-500/20 text-brand-400 flex items-center justify-center text-sm font-bold">
                            {{ strtoupper(substr(Auth::guard('admin')->user()->name, 0, 1)) }}
                        </div>
                        <div>
                            <p class="text-sm font-medium text-white">{{ Auth::guard('admin')->user()->name }}</p>
                            <p class="text-xs text-slate-500">Admin</p>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="text-slate-500 hover:text-red-400 transition-colors"
                            title="Logout">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </aside>

        <main class="flex-1 ml-64">
            <header class="sticky top-0 z-20 bg-[#0f172a]/80 backdrop-blur-xl border-b border-white/5 px-8 py-4">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-xl font-display font-bold text-white">@yield('heading', 'Dashboard')</h1>
                        <p class="text-sm text-slate-500">@yield('subheading', 'Manage your website content')</p>
                    </div>
                    <a href="{{ route('home') }}" target="_blank"
                        class="inline-flex items-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-400 hover:bg-white/10 hover:text-white transition-all duration-200">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                        View Site
                    </a>
                </div>
            </header>

            <div class="p-8">
                @if (session('success'))
                    <div
                        class="mb-6 rounded-xl border border-brand-500/20 bg-brand-500/10 px-4 py-3 text-sm text-brand-400 flex items-center gap-3">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-6 rounded-xl border border-red-500/20 bg-red-500/10 px-4 py-3 text-sm text-red-400">
                        <ul class="list-disc list-inside space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </div>
        </main>
    </div>

    <script src="https://cdn.tiny.cloud/1/{{ config('services.tinymce.key', 'no-api-key') }}/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea.richtext',
            skin: 'oxide-dark',
            content_css: 'dark',
            height: 300,
            menubar: true,
            plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table help wordcount',
            toolbar: 'undo redo | blocks | bold italic underline strikethrough | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | removeformat | code fullscreen',
            branding: false,
            promotion: false,
            content_style: 'body { font-family: Inter, sans-serif; font-size: 14px; color: #cbd5e1; background: #1e293b; } a { color: #38bdf8; }',
        });
    </script>
</body>

</html>