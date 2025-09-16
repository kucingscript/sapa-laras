<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.frontsite.meta')
    <title>@yield('title') | {{ config('app.name') }}</title>

    <!-- Style -->
    @stack('style')

    <!-- Fonts -->
    @include('includes.frontsite.font')

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-primary font-sans">
    @yield('content')

    @stack('script')
</body>

</html>
