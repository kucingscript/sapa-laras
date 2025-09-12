<section id="contact" class="max-w-[85rem] px-4 sm:px-6 lg:px-8 pb-8 mx-auto">
    <div class="relative p-6 md:p-12 bg-white rounded-2xl shadow-lg overflow-hidden">
        <div class="hidden md:block absolute top-0 end-0 size-36">
            <div
                class="absolute top-8 right-[-40px] transform rotate-45 w-48 h-10 bg-blue-600 flex items-center justify-center">
                <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <polygon
                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                    </polygon>
                </svg>
            </div>
        </div>

        <div class="absolute top-0 end-0 -z-10 size-80 bg-orange-100/50 rounded-full blur-3xl opacity-50">
        </div>
        <div class="absolute bottom-0 start-0 -z-10 size-80 bg-blue-100/50 rounded-full blur-3xl opacity-50">
        </div>

        <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">
            <div>
                <h2 class="text-2xl md:text-4xl font-bold text-gray-800 text-left">
                    Punya Masukan untuk Kami?
                </h2>
                <p class="mt-3 text-gray-600 text-sm sm:text-base text-justify">
                    Sampaikan saran, pertanyaan, dan aduan Anda terhadap pelayanan Kami untuk membantu kami menjadi
                    lebih baik.
                </p>
                <p class="mt-3 text-gray-600 text-sm sm:text-base text-justify">
                    Anda dapat memindai QR code atau menggunakan tautan langsung di bawah ini.
                </p>

                <div class="mt-6 sm:mt-8">
                    <a class="py-3 px-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border-2 border-blue-600 text-blue-600 hover:bg-blue-50 disabled:opacity-50 disabled:pointer-events-none"
                        href="https://s.id/sapumantapkemenagpacitan?s=qr" target="_blank" noreferrer noopener>
                        Buka Formulir
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 7h10v10" />
                            <path d="M7 17 17 7" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="p-5 bg-white rounded-xl shadow-xl">
                    <img src="{{ asset('images/qr.webp') }}" class="w-60 h-60" alt="QR Code untuk Saran dan Aduan">
                </div>
            </div>
        </div>
    </div>
</section>
