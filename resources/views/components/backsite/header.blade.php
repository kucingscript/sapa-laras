 <!-- ========== HEADER ========== -->
 <header
     class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-48 w-full bg-white border-b border-gray-200 text-sm py-2.5 lg:ps-65 dark:bg-neutral-800 dark:border-neutral-700">
     <nav class="px-4 sm:px-6 flex basis-full items-center w-full mx-auto">
         <div class="me-5 lg:me-0 xl:hidden flex items-center w-full">
             <a class="flex items-center gap-x-1" href="#" aria-label="Logo">
                 <img src="{{ asset('images/logo.webp') }}" alt="Logo" class="w-10 h-auto">
                 <span class="text-lg font-bold mt-1 text-red-800 dark:text-white whitespace-nowrap">
                     BerAKHLAK <sup class="text-base -ml-1">></sup>
                 </span>
             </a>
         </div>

         <div class="w-full flex items-center justify-end ms-auto md:justify-between gap-x-1 md:gap-x-3">

             <div class="hidden sm:block">
                 <ol class="flex items-center whitespace-nowrap">
                     @if (request()->routeIs('backsite.dashboard.index'))
                         <li class="text-sm font-semibold text-gray-800 truncate dark:text-neutral-400"
                             aria-current="page">
                             Dashboard
                         </li>
                     @else
                         <li class="flex items-center text-sm text-gray-800 dark:text-neutral-400">
                             <a class="hover:underline" href="{{ route('backsite.dashboard.index') }}">Dashboard</a>
                             <svg class="shrink-0 mx-3 overflow-visible size-2.5 text-gray-400 dark:text-neutral-500"
                                 width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                     stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                             </svg>
                         </li>
                         <li class="text-sm font-semibold text-gray-800 truncate dark:text-neutral-400"
                             aria-current="page">
                             @yield('title')
                         </li>
                     @endif
                 </ol>
             </div>

             <div class="flex flex-row items-center justify-end gap-2">
                 <button type="button"
                     class="hs-dark-mode hs-dark-mode-active:hidden flex items-center gap-x-2 py-2 px-3 bg-white/10 rounded-full text-sm text-dark hover:bg-white/20 focus:outline-hidden focus:bg-white/20"
                     data-hs-theme-click-value="dark">
                     <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round">
                         <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                     </svg>
                     Dark
                 </button>
                 <button type="button"
                     class="hs-dark-mode hs-dark-mode-active:inline-flex hidden items-center gap-x-2 py-2 px-3 bg-white/10 rounded-full text-sm text-white hover:bg-white/20 focus:outline-hidden focus:bg-white/20"
                     data-hs-theme-click-value="light">
                     <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round">
                         <circle cx="12" cy="12" r="4"></circle>
                         <path d="M12 2v2"></path>
                         <path d="M12 20v2"></path>
                         <path d="m4.93 4.93 1.41 1.41"></path>
                         <path d="m17.66 17.66 1.41 1.41"></path>
                         <path d="M2 12h2"></path>
                         <path d="M20 12h2"></path>
                         <path d="m6.34 17.66-1.41 1.41"></path>
                         <path d="m19.07 4.93-1.41 1.41"></path>
                     </svg>
                     Light
                 </button>

                 <!-- Dropdown -->
                 <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                     <button id="hs-dropdown-account" type="button"
                         class="size-9.5 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 focus:outline-hidden disabled:opacity-50 disabled:pointer-events-none dark:text-white"
                         aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                         <img class="shrink-0 size-9.5 rounded-full"
                             src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&color=7F9CF5&background=EBF4FF"
                             alt="Avatar">
                     </button>

                     <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
                         role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-account">
                         <div class="py-3 px-5 bg-gray-100 rounded-t-lg dark:bg-neutral-700">
                             <p class="text-sm text-gray-500 dark:text-neutral-500">Signed in as</p>
                             <p class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                                 {{ Auth::user()->email }}
                             </p>
                         </div>
                         <div class="p-1.5 space-y-0.5">
                             <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300"
                                 href="#">
                                 <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                     height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                     <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                     <circle cx="9" cy="7" r="4" />
                                     <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                     <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                 </svg>
                                 Profile
                             </a>
                             <form method="POST" action="{{ route('logout') }}">
                                 @csrf

                                 <button type="submit"
                                     class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-200">
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
                         </div>
                     </div>
                 </div>
                 <!-- End Dropdown -->
             </div>
         </div>
     </nav>
 </header>
