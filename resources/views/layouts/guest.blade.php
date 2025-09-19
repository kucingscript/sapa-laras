<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.backsite.meta')
    <title>@yield('title') | {{ config('app.name') }}</title>
    @include('includes.backsite.font')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex bg-white dark:bg-neutral-900">

        <div class="flex-1 flex flex-col justify-center items-center px-6 py-12 sm:px-6 lg:px-20 xl:px-24">
            <div class="w-full max-w-md">
                {{ $slot }}
            </div>
        </div>

        <div class="hidden lg:flex flex-1 relative items-center justify-center">
            <div class="absolute inset-0 bg-secondary/90"></div>
            <img class="relative z-10 w-3/4 h-auto max-w-sm" src="{{ asset('images/logo.webp') }}" alt="Illustrasi">
            <div class="absolute bottom-8 z-10 text-center text-white px-8">
                <h1 class="text-3xl font-bold">SAPA LARAS</h1>
                <p class="mt-2 text-indigo-200">Standar Panduan Layanan Ramah dan Sistematis</p>
            </div>
        </div>

    </div>
</body>

</html>
