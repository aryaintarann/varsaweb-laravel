<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'VarsaWeb') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased bg-gray-50 flex flex-col min-h-screen">
        @if(View::exists('layouts.public-navigation'))
            @include('layouts.public-navigation')
        @endif

        <main class="flex-grow">
            {{ $slot }}
        </main>

        @if(View::exists('layouts.public-footer'))
            @include('layouts.public-footer')
        @endif
    </body>
</html>
