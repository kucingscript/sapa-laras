<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.backsite.meta')
    <title>@yield('title') | {{ config('app.name') }}</title>

    <!-- Style -->
    @stack('style')

    <!-- Fonts -->
    @include('includes.backsite.font')

    <!-- Scripts -->
    @include('includes.backsite.head-script')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-gray-50 dark:bg-neutral-900">
    @include('components.backsite.header')
    @include('components.backsite.breadcrumb')
    @include('components.backsite.sidebar')
    @include('components.backsite.alert')

    @yield('content')

    @stack('script')
</body>

</html>
