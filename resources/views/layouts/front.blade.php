<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.frontsite.meta')
    <title>@yield('title') | {{ config('app.name') }}</title>

    @stack('style')
    @include('includes.frontsite.font')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-primary font-sans">
    @include('components.frontsite.alert')

    @yield('content')
    @stack('script')
</body>

</html>
