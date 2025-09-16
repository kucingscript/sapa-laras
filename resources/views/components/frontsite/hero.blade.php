<section id="home" class="relative">

    <div aria-hidden="true"
        class="hidden sm:block absolute top-0 end-0 -z-10 size-80 bg-secondary rounded-full blur-3xl opacity-20">
    </div>

    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-4 md:py-16">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4 md:gap-12 items-center">
            <div class="md:col-span-3 relative z-10 order-2 md:order-1 text-left">
                <img class="hidden sm:block w-full h-auto" src="{{ asset('images/panduan.webp') }}"
                    alt="Logo PTSP Kementerian Agama">

                <h1 class="text-3xl sm:text-2xl lg:text-3xl uppercase font-bold text-secondary leading-tight mt-4">
                    PTSP Kementerian Agama Kab. Pacitan
                </h1>

                <p class="text-black font-bold mt-2 text-lg">
                    SAPA LARAS (Standar Panduan Layanan Ramah dan Sistematis)
                </p>

                <p class="text-black text-sm">
                    Kami hadir untuk memberikan pelayanan terbaik kepada Masyarakat Pacitan
                </p>

                @include('components.frontsite.hero-form')

                <img class="hidden sm:block w-3/4 h-auto mx-auto md:mx-0" src="{{ asset('images/tagline.webp') }}"
                    alt="Tagline CERIA">
            </div>

            <div class="md:col-span-2 relative flex justify-center md:justify-end order-1 md:order-2">
                <img class="w-full max-w-xs sm:max-w-md" src="{{ asset('images/person.png') }}" alt="Hero">
            </div>
        </div>
    </div>
</section>
