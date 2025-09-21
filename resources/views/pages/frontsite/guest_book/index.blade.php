@extends('layouts.front')

@section('title', 'Buku Tamu')

@section('content')
    <div class="relative bg-secondary/10 overflow-hidden">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="bg-gradient-to-br from-secondary to-secondaryhvr p-6 sm:p-8 text-center">
                    <div class="flex justify-center items-center mb-4">
                        <img src="{{ asset('images/logo.webp') }}" alt="Logo Kemenag"
                            class="h-20 w-auto bg-white rounded-full p-2 shadow-md">
                    </div>
                    <h1 class="text-2xl sm:text-3xl font-bold text-white">
                        Buku Tamu & Layanan Konsultasi
                    </h1>
                    <p class="text-white/80 mt-2 text-base">
                        Silakan isi formulir di bawah ini untuk memberikan masukan atau meminta konsultasi.
                    </p>
                </div>

                <div class="p-6 sm:p-10">

                    @if ($errors->any())
                        <div class="mb-8 bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg" role="alert">
                            <h3 class="font-bold text-lg mb-2">Oops! Ada beberapa kesalahan:</h3>
                            <ul class="list-disc list-inside space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action={{ route('guest_books.store') }} method="POST" class="space-y-6">
                        @csrf

                        <div>
                            <label for="nama_lengkap" class="block text-sm font-medium text-gray-800 mb-2">
                                Nama Lengkap <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap"
                                class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-secondary focus:ring-secondary focus:ring-2 focus:outline-none"
                                placeholder="Masukkan nama lengkap Anda" required>
                        </div>

                        <div>
                            <label for="jabatan" class="block text-sm font-medium text-gray-800 mb-2">
                                Jabatan/Pekerjaan <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="jabatan" id="jabatan"
                                class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-secondary focus:ring-secondary focus:ring-2 focus:outline-none"
                                placeholder="Contoh: Pegawai Swasta, Pelajar, dll" required>
                        </div>

                        <div>
                            <label for="instansi" class="block text-sm font-medium text-gray-800 mb-2">
                                Unit Kerja/Instansi/Lembaga/Individu <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="instansi" id="instansi"
                                class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-secondary focus:ring-secondary focus:ring-2 focus:outline-none"
                                placeholder="Nama perusahaan, sekolah, atau organisasi Anda" required>
                        </div>

                        <div x-data="{
                            open: false,
                            selected: '',
                            selectedTitle: 'Pilih salah satu...',
                            options: [
                                { value: 'Unit UMUM', title: 'Unit UMUM' },
                                { value: 'Unit KEPEGAWAIAN', title: 'Unit KEPEGAWAIAN' },
                                { value: 'Unit KEUANGAN', title: 'Unit KEUANGAN' },
                                { value: 'Seksi PD PONTREN (Pendidikan Diniyah & Pondok Pesantren)', title: 'Seksi PD PONTREN (Pendidikan Diniyah & Pondok Pesantren)' },
                                { value: 'Seksi BIMAS ISLAM (Bimbingan Masyarakat Islam)', title: 'Seksi BIMAS ISLAM (Bimbingan Masyarakat Islam)' },
                                { value: 'Seksi PENDMA (Pendidikan Madrasah)', title: 'Seksi PENDMA (Pendidikan Madrasah)' },
                                { value: 'Seksi PAIS (Pendidikan Agama Islam)', title: 'Seksi PAIS (Pendidikan Agama Islam)' },
                                { value: 'Seksi PHU (Penyelenggara Haji dan Umroh)', title: 'Seksi PHU (Penyelenggara Haji dan Umroh)' },
                                { value: 'Penyelanggara Zakat & Wakaf', title: 'Penyelanggara Zakat & Wakaf' },
                                { value: 'PJPH (Sertifikasi Produk Halal)', title: 'PJPH (Sertifikasi Produk Halal)' },
                                { value: 'Lainnya', title: 'Lainnya' },
                            ]
                        }" class="relative">
                            <label for="keperluan" class="block text-sm font-medium text-gray-800 mb-2">
                                Keperluan <span class="text-red-500">*</span>
                            </label>

                            <input type="hidden" name="keperluan" x-model="selected">

                            <button type="button" @click="open = !open"
                                class="relative w-full cursor-default rounded-lg bg-white py-3 pl-4 pr-10 text-left border border-gray-200 focus:outline-none focus-visible:border-secondary focus-visible:ring-2 focus-visible:ring-white/75 focus-visible:ring-offset-2 focus-visible:ring-offset-secondary/50 sm:text-sm">
                                <span class="block truncate" x-text="selectedTitle"></span>
                                <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 3a.75.75 0 01.53.22l3.5 3.5a.75.75 0 01-1.06 1.06L10 4.81 7.03 7.78a.75.75 0 01-1.06-1.06l3.5-3.5A.75.75 0 0110 3zm-3.72 9.53a.75.75 0 011.06 0L10 15.19l2.97-2.97a.75.75 0 111.06 1.06l-3.5 3.5a.75.75 0 01-1.06 0l-3.5-3.5a.75.75 0 010-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </button>

                            <div x-show="open" @click.away="open = false"
                                x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0"
                                class="absolute z-10 left-0 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black/5 focus:outline-none sm:text-sm"
                                style="display: none;">
                                <template x-for="option in options" :key="option.value">
                                    <div @click="selected = option.value; selectedTitle = option.title; open = false"
                                        class="relative cursor-pointer select-none py-2 pl-10 pr-4 text-gray-900 hover:bg-gray-100">
                                        <span class="block truncate"
                                            :class="{
                                                'font-medium': selected === option.value,
                                                'font-normal': selected !==
                                                    option.value
                                            }"
                                            x-text="option.title">
                                        </span>
                                        <span x-show="selected === option.value"
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 text-secondary">
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.052-.143z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </div>
                                </template>
                            </div>
                        </div>

                        <div>
                            <label for="deskripsi_keperluan" class="block text-sm font-medium text-gray-800 mb-2">
                                Deskripsi Keperluan <span class="text-red-500">*</span>
                            </label>
                            <textarea id="deskripsi_keperluan" name="deskripsi_keperluan" rows="4"
                                class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-secondary focus:ring-secondary focus:ring-2 focus:outline-none"
                                placeholder="Jelaskan secara singkat keperluan Anda" required></textarea>
                        </div>

                        <div>
                            <label for="nomor_hp" class="block text-sm font-medium text-gray-800 mb-2">
                                Nomor HP (WhatsApp) <span class="text-red-500">*</span>
                            </label>
                            <input type="number" name="nomor_hp" id="nomor_hp"
                                class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-secondary focus:ring-secondary focus:ring-2 focus:outline-none"
                                placeholder="Contoh: 081234567890" required>
                        </div>

                        <div>
                            <label for="pic" class="block text-sm font-medium text-gray-800 mb-2">PIC yang
                                dituju (Contoh: Bu Anjar) <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="pic" id="pic"
                                class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-secondary focus:ring-secondary focus:ring-2 focus:outline-none"
                                placeholder="Sebutkan nama petugas jika ada">
                        </div>

                        <div>
                            <label for="kritik" class="block text-sm font-medium text-gray-800 mb-2">Kritik &
                                Saran untuk Buku Tamu Digital <span class="text-red-500">*</span>
                            </label>
                            <textarea id="kritik" name="kritik" rows="4"
                                class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-secondary focus:ring-secondary focus:ring-2 focus:outline-none"
                                placeholder="Masukan Anda sangat berarti bagi kami"></textarea>
                        </div>

                        <div x-data="{ rating: 0, hoverRating: 0 }" class="mb-4">
                            <label class="block text-sm font-medium text-gray-800 mb-2">
                                Rating Buku Tamu Digital <span class="text-red-500">*</span>
                            </label>
                            <div class="flex items-center space-x-1" @mouseleave="hoverRating = 0">
                                <template x-for="star in [1, 2, 3, 4, 5]" :key="star">
                                    <label :for="'star_' + star" class="cursor-pointer">
                                        <input type="radio" name="rating" :id="'star_' + star" :value="star"
                                            class="sr-only" x-model.number="rating" required>
                                        <svg @mouseover="hoverRating = star"
                                            :class="{
                                                'text-yellow-400': hoverRating >= star || rating >= star,
                                                'text-gray-300': hoverRating < star && rating < star
                                            }"
                                            class="w-10 h-10 transition-colors duration-150" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                    </label>
                                </template>
                            </div>
                        </div>

                        <div class="mt-10 flex justify-end gap-3">
                            <a href="{{ url('/') }}"
                                class="py-3 px-6 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-300 text-gray-800 hover:bg-gray-100 transition-all">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m15 18-6-6 6-6" />
                                </svg>
                                Kembali
                            </a>
                            <button type="submit"
                                class="py-3 px-6 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-secondary text-white hover:bg-secondaryhvr transition-all">
                                Kirim
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
