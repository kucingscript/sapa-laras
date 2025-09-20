<div id="hs-application-sidebar"
    class="hs-overlay [--auto-close:lg] hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform w-65 h-full hidden fixed inset-y-0 start-0 z-60 bg-white border-e border-gray-200 lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 dark:bg-neutral-800 dark:border-neutral-700">
    <div class="relative flex flex-col h-full max-h-full">
        <div class="px-6 pt-4 flex items-center">
            <a class="flex items-center gap-x-2" href="#" aria-label="Logo">
                <img src="{{ asset('images/logo.webp') }}" alt="Logo" class="w-12 h-auto">
                <span class="text-2xl font-bold mt-1 text-red-800 dark:text-white">
                    BerAKHLAK <sup class="text-xl -ml-1">></sup>
                </span>
            </a>
        </div>

        <div
            class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
            <nav class="hs-accordion-group p-3 w-full flex flex-col flex-wrap">
                <ul class="flex flex-col space-y-1">
                    @foreach (config('menu.items') as $item)
                        @if (isset($item['children']))
                            @php
                                $isSubMenuActive = false;
                                foreach ($item['children'] as $child) {
                                    $routeName = $child['route'];
                                    $routeBase = substr($routeName, 0, strrpos($routeName, '.'));
                                    $routePattern = $routeBase . '.*';
                                    if (request()->routeIs($routePattern)) {
                                        $isSubMenuActive = true;
                                        break;
                                    }
                                }
                            @endphp
                            <li class="hs-accordion {{ $isSubMenuActive ? 'active' : '' }}"
                                id="menu-{{ \Illuminate\Support\Str::slug($item['label']) }}">
                                <button type="button"
                                    class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-200">
                                    {!! $item['icon'] !!}
                                    {{ $item['label'] }}
                                    <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m18 15-6-6-6 6" />
                                    </svg>

                                    <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                </button>

                                <div id="menu-{{ \Illuminate\Support\Str::slug($item['label']) }}-child"
                                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 {{ $isSubMenuActive ? '' : 'hidden' }}">
                                    <ul class="pt-2 ps-2">
                                        @foreach ($item['children'] as $child)
                                            @php
                                                $routeName = $child['route'];
                                                $routeBase = substr($routeName, 0, strrpos($routeName, '.'));
                                                $routePattern = $routeBase . '.*';
                                                $isActive = request()->routeIs($routePattern);
                                            @endphp
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-lg
                                                {{ $isActive
                                                    ? 'bg-secondary text-white shadow-lg'
                                                    : 'text-gray-800 hover:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700' }}"
                                                    href="{{ route($child['route']) }}">
                                                    {{ $child['label'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                        @else
                            <x-backsite.sidebar-link :item="$item" />
                        @endif
                    @endforeach

                    <li class="py-2">
                        <hr class="border-t border-gray-200 dark:border-neutral-700">
                    </li>

                    <li>
                        <a href="/"
                            class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none dark:hover:bg-neutral-700 dark:text-neutral-200">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                <polyline points="9 22 9 12 15 12 15 22" />
                            </svg>
                            Back to Home
                        </a>
                    </li>
                    <li>
                        <a href={{ route('profile.edit') }}
                            class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none dark:hover:bg-neutral-700 dark:text-neutral-200">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-user-round-pen-icon lucide-user-round-pen">
                                <path d="M2 21a8 8 0 0 1 10.821-7.487" />
                                <path
                                    d="M21.378 16.626a1 1 0 0 0-3.004-3.004l-4.01 4.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                                <circle cx="10" cy="8" r="5" />
                            </svg>
                            Profile
                        </a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none dark:hover:bg-neutral-700 dark:text-neutral-200">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m16 17 5-5-5-5"></path>
                                    <path d="M21 12H9"></path>
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                </svg>
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
