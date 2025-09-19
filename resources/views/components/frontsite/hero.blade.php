<section id="home" class="relative">
    <div aria-hidden="true"
        class="hidden lg:block absolute top-0 end-0 -z-10 size-80 bg-secondary rounded-full blur-3xl opacity-20">
    </div>

    <div aria-hidden="true"
        class="hidden lg:block absolute top-0 start-0 -z-10 size-44 bg-yellow-300 rounded-full blur-3xl opacity-30">
    </div>

    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-8 lg:py-16">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-2 lg:gap-12 items-center">
            <div class="lg:col-span-3 relative z-10 order-2 lg:order-1 text-left">

                <div class="hidden lg:flex flex-row items-center justify-center mb-4 -ml-24">
                    <img class="w-xs h-auto" src="{{ asset('images/customer.webp') }}"
                        alt="Ilustrasi Layanan Publik Wanita">
                    <img class="w-xs h-auto -ml-12" src="{{ asset('images/customer2.webp') }}"
                        alt="Ilustrasi Layanan Publik Pria">
                </div>

                <h1 class="text-2xl lg:text-3xl uppercase font-bold text-secondary leading-tight mt-4">
                    PTSP Kementerian Agama Kab. Pacitan
                </h1>

                <p class="text-black font-bold mt-2 text-base sm:text-lg">
                    SAPA LARAS (Sarana Pelayanan Berkualitas, Ramah dan Sistematis)
                </p>

                <p class="text-black text-sm sm:text-base mt-1">
                    Kami hadir dan berkomitmen melayani masyarakat dengan cinta
                </p>

                @include('components.frontsite.hero-form')

                <img class="w-full sm:w-3/4 h-auto mx-auto lg:mx-0" src="{{ asset('images/tagline.webp') }}"
                    alt="Tagline CERIA">
            </div>

            <div class="lg:col-span-2 relative flex justify-center items-center lg:justify-end order-1 lg:order-2">
                <div
                    class="relative p-2.5 bg-gradient-to-br from-primary to-secondary-light rounded-3xl shadow-2xl transform hover:scale-102 transition-transform duration-500 ease-in-out">
                    <img class="w-full h-[380px] sm:h-[520px] object-cover rounded-2xl border-4 border-white"
                        src="{{ asset('images/ptsp.webp') }}" alt="Petugas PTSP Kemenag Pacitan">

                    <div
                        class="absolute inset-x-2.5 bottom-2.5 h-1/3 bg-gradient-to-t from-gray-900/100 via-gray-900/30 to-transparent rounded-b-2xl">
                    </div>

                    <div
                        class="absolute -top-2 -left-2 size-16 lg:-top-4 lg:-left-4 lg:size-24 bg-yellow-300 rounded-full mix-blend-multiply opacity-60 blur-md">
                    </div>
                    <div
                        class="absolute -bottom-2 -right-2 size-16 lg:-bottom-4 lg:-right-4 lg:size-24 bg-teal-300 rounded-full mix-blend-multiply opacity-60 blur-md">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
