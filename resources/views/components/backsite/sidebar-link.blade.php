@props(['item'])

<li>
    @php
        $routeName = $item['route'];

        $routeBase = substr($routeName, 0, strrpos($routeName, '.'));

        $routePattern = $routeBase . '.*';

        $isActive = request()->routeIs($routePattern);
    @endphp
    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-lg focus:outline-none dark:text-white
        {{ $isActive ? 'bg-gray-100 text-gray-800 dark:bg-neutral-700' : 'text-gray-800 hover:bg-gray-100 dark:hover:bg-neutral-700' }}"
        href="{{ route($item['route']) }}">

        {!! $item['icon'] !!}

        {{ $item['label'] }}
    </a>
</li>
