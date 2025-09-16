<section id="service" class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:pt-24 lg:pb-20 mx-auto">

    <div class="text-center mb-12">
        <span class="text-sm font-bold uppercase tracking-wider text-secondary">
            Layanan Kami
        </span>
        <h2 class="mt-2 text-3xl md:text-4xl font-bold text-gray-800">
            Jelajahi Layanan Unggulan
        </h2>
        <p class="mt-3 max-w-2xl mx-auto text-gray-600">
            Kami menyediakan berbagai kemudahan untuk Anda. Pilih layanan yang Anda butuhkan di bawah ini untuk memulai.
        </p>
    </div>

    @php
        $services = [
            [
                'url' => route('service.mosque_permit', 1),
                'title' => 'Sertifikat Masjid / Musholla',
                'description' => 'Layanan Permohonan Sertifikat Masjid / Musholla',
                'image' => asset('images/icons/mosque.webp'),
            ],
            [
                'url' => route('service.majlis_taklim', 1),
                'title' => 'Sertifikat Majelis Taklim',
                'description' => 'Layanan Permohonan Sertifikat Majelis Taklim',
                'image' => asset('images/icons/moon.webp'),
            ],
            [
                'url' => route('service.islamic_art', 1),
                'title' => 'Lembaga Kesenian Islam',
                'description' => 'Layanan Sertifikat Lembaga Kesenian Islam',
                'image' => asset('images/icons/muslim.webp'),
            ],
            [
                'url' => route('service.hajj_regular', 1),
                'title' => 'Pendaftaran Haji Reguler',
                'description' => 'Layanan Pendaftaran Jamaah Haji Reguler',
                'image' => asset('images/icons/kaaba.webp'),
            ],
            [
                'url' => route('service.hajj_cancellation', 1),
                'title' => 'Pembatalan Haji Reguler',
                'description' => 'Layanan Pembatalan Porsi Jamaah Haji Reguler',
                'image' => asset('images/icons/moon2.webp'),
            ],
            [
                'url' => route('service.hajj_delegation', 1),
                'title' => 'Pelimpahan Jamaah Haji',
                'description' => 'Layanan Pelimpahan Porsi Jamaah Haji Reguler',
                'image' => asset('images/icons/islamic.webp'),
            ],
            [
                'url' => route('service.study_abroad', 1),
                'title' => 'Santri ke Luar Negeri',
                'description' => 'Layanan Rekomendasi Santri Belajar ke Luar Negeri',
                'image' => asset('images/icons/hat.webp'),
            ],
            [
                'url' => route('service.ponpes', 1),
                'title' => 'Izin Operasional Pesantren',
                'description' => 'Layanan Izin Operasional Pondok Pesantren',
                'image' => asset('images/icons/quran.webp'),
            ],
            [
                'url' => route('service.madin', 1),
                'title' => 'Izin Operasional Madin',
                'description' => 'Layanan Izin Operasional Madrasah Diniyah',
                'image' => asset('images/icons/book.webp'),
            ],
            [
                'url' => route('service.lpq', 1),
                'title' => 'Tanda Daftar LPQ / TPQ',
                'description' => 'Layanan Permohonan Tanda Daftar LPQ / TPQ',
                'image' => asset('images/icons/crescent.webp'),
            ],
            [
                'url' => route('service.madrasah', 1),
                'title' => 'Izin Operasional Madrasah',
                'description' => 'Layanan Izin Operasional Madrasah (RA,MI,MTs,MA)',
                'image' => asset('images/icons/quran3.webp'),
            ],
            [
                'url' => route('service.waqf', 1),
                'title' => 'Pembuatan Akta Wakaf',
                'description' => 'Layanan Permohonan Pembuatan Akta Ikrar Wakaf',
                'image' => asset('images/icons/islam.webp'),
            ],
        ];
    @endphp

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 items-end gap-6">

        @foreach ($services as $service)
            <x-service-card :url="$service['url']" :image="$service['image']" :title="$service['title']" :description="$service['description']" />
        @endforeach

    </div>
</section>
