<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'VarsaWeb') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-50 text-slate-900 font-sans antialiased flex items-center justify-center p-6">
    <main class="w-full max-w-xl rounded-2xl bg-white border border-slate-200 p-8 text-center shadow-sm">
        <h1 class="text-2xl font-semibold">VarsaWeb</h1>
        <p class="mt-3 text-slate-600">Halaman utama company profile ada di route <strong>/</strong>.</p>
    </main>
</body>
</html>
