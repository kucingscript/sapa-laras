@php
    $services = [
        [
            'value' => 'mosque-permit/1',
            'title' => 'Sertifikat Masjid / Musholla',
            'description' => 'Layanan Permohonan Sertifikat Masjid / Musholla',
        ],
        [
            'value' => 'majlis-taklim/1',
            'title' => 'Sertifikat Majelis Taklim',
            'description' => 'Layanan Permohonan Sertifikat Majelis Taklim',
        ],
        [
            'value' => 'islamic-art-insitution/1',
            'title' => 'Lembaga Kesenian Islam',
            'description' => 'Layanan Sertifikat Lembaga Kesenian Islam',
        ],
        [
            'value' => 'hajj-regular-registration/1',
            'title' => 'Pendaftaran Haji Reguler',
            'description' => 'Layanan Pendaftaran Jamaah Haji Reguler',
        ],
        [
            'value' => 'hajj-cancellation/1',
            'title' => 'Pembatalan Haji Reguler',
            'description' => 'Layanan Pembatalan Porsi Jamaah Haji Reguler',
        ],
        [
            'value' => 'hajj-delegation/1',
            'title' => 'Pelimpahan Jamaah Haji',
            'description' => 'Layanan Pelimpahan Porsi Jamaah Haji Reguler',
        ],
        [
            'value' => 'santri-study-abroad/1',
            'title' => 'Santri ke Luar Negeri',
            'description' => 'Layanan Rekomendasi Santri Belajar ke Luar Negeri',
        ],
        [
            'value' => 'pesantren-operational-permit/1',
            'title' => 'Izin Operasional Pesantren',
            'description' => 'Layanan Izin Operasional Pondok Pesantren',
        ],
        [
            'value' => 'madin-operational-permit/1',
            'title' => 'Izin Operasional Madin',
            'description' => 'Layanan Izin Operasional Madrasah Diniyah',
        ],
        [
            'value' => 'lpq-registration/1',
            'title' => 'Tanda Daftar LPQ / TPQ',
            'description' => 'Layanan Tanda Daftar LPQ / TPQ',
        ],
        [
            'value' => 'madrasah-operational-permit/1',
            'title' => 'Izin Operasional Madrasah',
            'description' => 'Layanan Izin Operasional Madrasah (RA,MI,MTs,MA)',
        ],
        [
            'value' => 'waqf-pledge-deed/1',
            'title' => 'Pembuatan Akta Wakaf',
            'description' => 'Layanan Pembuatan Akta Ikrar Wakaf',
        ],
    ];
@endphp

<form x-data="{
    open: false,
    selected: '',
    selectedTitle: 'Silahkan Pilih Layanan',
    services: {{ json_encode($services) }},
    redirectToService() {
        if (this.selected) {
            window.location.href = `/service/${this.selected}`;
        } else {
            alert('Silakan pilih layanan terlebih dahulu untuk melanjutkan.');
        }
    }
}" @submit.prevent="redirectToService" class="my-5">
    <div class="relative flex w-full max-w-2xl mx-auto md:mx-0">
        <div class="relative flex-grow">
            <input type="hidden" name="layanan" x-model="selected">
            <button type="button" @click="open = !open"
                class="relative w-full cursor-pointer rounded-l-md border-y-2 border-l-2 border-secondary bg-white py-3 pl-5 pr-10 text-left shadow-sm focus:outline-none sm:text-sm">
                <span class="block truncate" x-text="selectedTitle"></span>
                <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10 3a.75.75 0 01.53.22l3.5 3.5a.75.75 0 01-1.06 1.06L10 4.81 7.03 7.78a.75.75 0 01-1.06-1.06l3.5-3.5A.75.75 0 0110 3zm-3.72 9.28a.75.75 0 011.06 0L10 15.19l2.97-2.91a.75.75 0 111.06 1.06l-3.5 3.5a.75.75 0 01-1.06 0l-3.5-3.5a.75.75 0 010-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </button>

            <div x-show="open" @click.away="open = false" x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                class="absolute z-50 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                style="display: none;">
                <template x-for="service in services" :key="service.value">
                    <div @click="selected = service.value; selectedTitle = service.title; open = false"
                        class="relative cursor-pointer select-none p-4 text-gray-900 hover:bg-secondary/10">

                        <div class="flex flex-col">
                            <div class="flex justify-between items-center">
                                <span class="font-semibold block truncate"
                                    :class="{ 'font-bold text-secondary': selected === service.value }"
                                    x-text="service.title"></span>

                                <span x-show="selected === service.value"
                                    class="absolute inset-y-0 left-0 flex items-center pl-3 text-secondary">
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.052-.143z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </div>
                            <p class="mt-1 text-sm text-neutral-500" x-text="service.description"></p>
                        </div>
                    </div>
                </template>
            </div>
        </div>

        <button type="submit"
            class="rounded-r-md border-2 border-l-0 border-secondary px-6 py-2 bg-secondary text-white font-semibold hover:bg-secondaryhvr transition-colors focus:outline-none">
            Cari
        </button>
    </div>
</form>
