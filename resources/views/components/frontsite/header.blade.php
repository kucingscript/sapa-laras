<header id="main-header"
    class="sticky top-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full text-sm sm:py-1 py-2 transition-all duration-300">
    <nav class="relative max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8"
        aria-label="Global">
        <div class="flex items-center justify-between">
            <a class="flex items-center gap-x-2" href="{{ url('/') }}" aria-label="Logo">
                <img src="{{ asset('images/logo.webp') }}" alt="Logo" class="w-12 sm:w-14 h-auto">
                <span class="text-xl font-bold mt-1 text-secondary whitespace-nowrap">
                    BerAKHLAK <sup class="text-xl -ml-1">></sup>
                </span>
            </a>
            <div class="sm:hidden">
                <button type="button"
                    class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                    data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation"
                    aria-label="Toggle navigation">
                    <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6" />
                        <line x1="3" x2="21" y1="12" y2="12" />
                        <line x1="3" x2="21" y1="18" y2="18" />
                    </svg>
                    <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>
        </div>
        <div id="navbar-collapse-with-animation"
            class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
            <div
                class="flex flex-col gap-y-4 gap-x-0 mt-5 sm:flex-row sm:items-center sm:justify-end sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:ps-7">
                <a class="font-medium text-secondary hover:text-black sm:py-6" href="/#home">Home</a>
                <a class="font-medium text-secondary hover:text-black sm:py-6" href="/#service">Layanan</a>
                <a class="font-medium text-secondary hover:text-black sm:py-6" href="/#contact">Kontak</a>
                <a class="font-medium text-secondary hover:text-black sm:py-6"
                    href={{ route('guest_books.index') }}>Buku Tamu</a>
                <a class="font-medium text-secondary hover:text-black sm:py-6" href={{ route('surveys.index') }}>Survey
                    Kepuasan</a>

                @auth
                    <a class="flex items-center gap-x-2 font-medium text-white bg-secondary hover:bg-secondaryhvr transition-colors px-4 py-2 rounded-lg"
                        href="{{ route('backsite.dashboard.index') }}">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <rect width="7" height="9" x="3" y="3" rx="1" />
                            <rect width="7" height="5" x="14" y="3" rx="1" />
                            <rect width="7" height="9" x="14" y="12" rx="1" />
                            <rect width="7" height="5" x="3" y="16" rx="1" />
                        </svg>
                        Dashboard
                    </a>
                @else
                    <a class="flex items-center gap-x-2 font-medium text-white bg-secondary hover:bg-secondaryhvr transition-colors px-4 py-2 rounded-lg"
                        href="{{ route('login') }}">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                            <circle cx="12" cy="7" r="4" />
                        </svg>
                        Log in
                    </a>
                @endguest
            </div>
        </div>
    </nav>
</header>
