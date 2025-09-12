<header class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full text-sm">
    <nav
        class="mt-4 relative max-w-2xl w-full bg-white/80 backdrop-blur-sm border border-gray-200 rounded-[24px] mx-2 flex flex-wrap md:flex-nowrap items-center justify-between p-1 ps-4 md:py-0 sm:mx-auto">
        <div class="flex items-center">
            <a class="flex items-center gap-x-2" href="#" aria-label="Logo">
                <img src="{{ asset('images/logo.webp') }}" alt="Logo" class="w-10 h-auto">
                <span class="text-xl font-bold mt-1 text-red-800 whitespace-nowrap">
                    BerAKHLAK <sup class="text-xl -ml-1">></sup>
                </span>
            </a>

            <div class="ms-1 sm:ms-2">

            </div>
        </div>

        <div class="flex items-center gap-1 md:order-4 md:ms-4">
            <div class="md:hidden">
                <button type="button"
                    class="hs-collapse-toggle flex justify-center items-center size-9.5 border border-gray-200 text-gray-500 rounded-full hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200"
                    id="hs-navbar-header-floating-collapse" aria-expanded="false"
                    aria-controls="hs-navbar-header-floating" aria-label="Toggle navigation"
                    data-hs-collapse="#hs-navbar-header-floating">
                    <svg class="hs-collapse-open:hidden shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6" />
                        <line x1="3" x2="21" y1="12" y2="12" />
                        <line x1="3" x2="21" y1="18" y2="18" />
                    </svg>
                    <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <div id="hs-navbar-header-floating"
            class="hidden hs-collapse overflow-hidden transition-all duration-300 basis-full grow md:block"
            aria-labelledby="hs-navbar-header-floating-collapse">
            <div
                class="flex flex-col md:flex-row md:items-center md:justify-end gap-2 md:gap-3 mt-3 md:mt-0 py-2 md:py-0 md:ps-7">
                <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2 border-gray-800 font-medium text-gray-800 hover:text-gray-800 focus:outline-hidden"
                    href="#home" aria-current="page">Home</a>
                <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2 border-transparent text-gray-500 hover:text-gray-800 focus:outline-hidden"
                    href="#service">Layanan</a>
                <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2 border-transparent text-gray-500 hover:text-gray-800 focus:outline-hidden"
                    href="#contact">Kontak</a>
            </div>
        </div>
    </nav>
</header>
