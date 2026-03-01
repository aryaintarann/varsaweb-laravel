<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | VarsaWeb</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@500;700&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#0f172a] font-sans antialiased flex items-center justify-center p-6">
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-brand-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-accent-500/10 rounded-full blur-3xl"></div>
    </div>

    <div class="relative w-full max-w-md">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-display font-bold text-white">Varsa<span class="text-brand-500">Web</span></h1>
            <p class="mt-2 text-slate-400 text-sm">Admin Panel</p>
        </div>

        <div class="rounded-2xl border border-white/10 bg-white/5 backdrop-blur-xl p-8 shadow-2xl">
            <h2 class="text-xl font-semibold text-white mb-1">Welcome back</h2>
            <p class="text-slate-400 text-sm mb-8">Masuk untuk mengelola konten website</p>

            @if ($errors->any())
                <div class="mb-6 rounded-xl border border-red-500/20 bg-red-500/10 px-4 py-3 text-sm text-red-400">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login.submit') }}" class="space-y-5">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-slate-300 mb-2">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white placeholder-slate-500 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent hover:border-white/20"
                        placeholder="admin@varsaweb.com">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-slate-300 mb-2">Password</label>
                    <input id="password" name="password" type="password" required
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white placeholder-slate-500 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent hover:border-white/20"
                        placeholder="••••••••">
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember"
                            class="w-4 h-4 rounded border-white/20 bg-white/5 text-brand-500 focus:ring-brand-500 focus:ring-offset-0">
                        <span class="text-sm text-slate-400">Ingat saya</span>
                    </label>
                </div>

                <button type="submit"
                    class="w-full rounded-xl bg-brand-500 px-6 py-3 text-white font-semibold transition-all duration-300 hover:bg-brand-600 hover:shadow-lg hover:shadow-brand-500/25 active:scale-[0.98]">
                    Masuk
                </button>
            </form>
        </div>

        <p class="text-center text-xs text-slate-500 mt-6">&copy; 2026 VarsaWeb Agency</p>
    </div>
</body>

</html>