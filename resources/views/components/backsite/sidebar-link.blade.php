@props(['item'])

<li>
    @php
        $routeName = $item['route'];
        $routeBase = substr($routeName, 0, strrpos($routeName, '.'));
        $routePattern = $routeBase . '.*';
        $isActive = request()->routeIs($routePattern);
    @endphp

    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-lg
        {{ $isActive
            ? 'bg-gradient-to-r from-blue-600 to-indigo-700 text-white shadow-lg'
            : 'text-gray-800 hover:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700' }}"
        href="{{ route($item['route']) }}">

        <div class="{{ $isActive ? 'text-white' : 'text-gray-800 dark:text-neutral-200' }}">
            {!! $item['icon'] !!}
        </div>

        {{ $item['label'] }}
    </a>
</li>
