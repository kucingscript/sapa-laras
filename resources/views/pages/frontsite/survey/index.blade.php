@extends('layouts.front')

@section('title', 'Survei Kepuasan Masyarakat')

@section('content')
    <div class="relative bg-secondary/10 overflow-hidden">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="bg-gradient-to-br from-secondary to-secondaryhvr p-6 sm:p-8 text-center">
                    <div class="flex justify-center items-center mb-4">
                        <img src="{{ asset('images/logo.webp') }}" alt="Logo Instansi"
                            class="h-20 w-auto bg-white rounded-full p-2 shadow-md">
                    </div>
                    <h1 class="text-2xl sm:text-3xl font-bold text-white">
                        Survei Kepuasan Masyarakat
                    </h1>
                    <p class="text-white/80 mt-2 text-base">
                        Penilaian Anda sangat berarti untuk meningkatkan kualitas layanan kami.
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

                    <form action="{{ route('surveys.store') }}" method="POST" class="space-y-8">
                        @csrf

                        <div class="space-y-6">
                            <h2 class="text-xl font-bold text-gray-900 border-b-2 border-secondary/20 pb-3">
                                I. Data Responden
                            </h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="nama_responden" class="block text-sm font-medium text-gray-800 mb-2">
                                        Nama Responden <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="nama_responden" id="nama_responden"
                                        class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-secondary focus:ring-secondary focus:ring-2 focus:outline-none"
                                        placeholder="Masukkan nama lengkap Anda" required>
                                </div>
                                <div>
                                    <label for="pekerjaan" class="block text-sm font-medium text-gray-800 mb-2">
                                        Pekerjaan <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="pekerjaan" id="pekerjaan"
                                        class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-secondary focus:ring-secondary focus:ring-2 focus:outline-none"
                                        placeholder="Contoh: Pegawai Swasta, Pelajar" required>
                                </div>
                                <div>
                                    <label for="usia" class="block text-sm font-medium text-gray-800 mb-2">
                                        Usia <span class="text-red-500">*</span>
                                    </label>
                                    <input type="number" name="usia" id="usia"
                                        class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-secondary focus:ring-secondary focus:ring-2 focus:outline-none"
                                        placeholder="Masukkan usia Anda" required min="1">
                                </div>
                                <div>
                                    <label for="nomor_hp" class="block text-sm font-medium text-gray-800 mb-2">
                                        Nomor HP (WhatsApp) <span class="text-red-500">*</span>
                                    </label>
                                    <input type="number" name="nomor_hp" id="nomor_hp"
                                        class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-secondary focus:ring-secondary focus:ring-2 focus:outline-none"
                                        placeholder="Contoh: 081234567890" required>
                                </div>

                                <div x-data="{
                                    open: false,
                                    selected: '',
                                    selectedTitle: 'Pilih nama petugas...',
                                    options: [
                                        { value: 'Andi Saputra', title: 'Andi Saputra' },
                                        { value: 'Budi Santoso', title: 'Budi Santoso' },
                                        { value: 'Citra Lestari', title: 'Citra Lestari' },
                                        { value: 'Dewi Anggraini', title: 'Dewi Anggraini' },
                                        { value: 'Tidak Tahu', title: 'Tidak Tahu / Lupa' }
                                    ]
                                }" class="relative md:col-span-2">
                                    <label for="nama_petugas" class="block text-sm font-medium text-gray-800 mb-2">
                                        Nama Petugas yang Melayani <span class="text-red-500">*</span>
                                    </label>
                                    <input type="hidden" name="nama_petugas" x-model="selected">
                                    <button type="button" @click="open = !open"
                                        class="relative w-full cursor-default rounded-lg bg-white py-3 pl-4 pr-10 text-left border border-gray-200 focus:outline-none focus-visible:border-secondary focus-visible:ring-2 sm:text-sm">
                                        <span class="block truncate" x-text="selectedTitle"></span>
                                        <span
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2"><svg
                                                class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 3a.75.75 0 01.53.22l3.5 3.5a.75.75 0 01-1.06 1.06L10 4.81 7.03 7.78a.75.75 0 01-1.06-1.06l3.5-3.5A.75.75 0 0110 3zm-3.72 9.53a.75.75 0 011.06 0L10 15.19l2.97-2.97a.75.75 0 111.06 1.06l-3.5 3.5a.75.75 0 01-1.06 0l-3.5-3.5a.75.75 0 010-1.06z"
                                                    clip-rule="evenodd" />
                                            </svg></span>
                                    </button>
                                    <div x-show="open" @click.away="open = false" x-transition
                                        class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black/5 focus:outline-none sm:text-sm"
                                        style="display: none;">
                                        <template x-for="option in options" :key="option.value">
                                            <div @click="selected = option.value; selectedTitle = option.title; open = false"
                                                class="relative cursor-pointer select-none py-2 pl-10 pr-4 text-gray-900 hover:bg-gray-100">
                                                <span class="block truncate"
                                                    :class="{
                                                        'font-medium': selected === option
                                                            .value,
                                                        'font-normal': selected !== option.value
                                                    }"
                                                    x-text="option.title"></span>
                                                <span x-show="selected === option.value"
                                                    class="absolute inset-y-0 left-0 flex items-center pl-3 text-secondary"><svg
                                                        class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.052-.143z"
                                                            clip-rule="evenodd" />
                                                    </svg></span>
                                            </div>
                                        </template>
                                    </div>
                                </div>

                                <div class="md:col-span-2">
                                    <label for="alamat" class="block text-sm font-medium text-gray-800 mb-2">
                                        Alamat <span class="text-red-500">*</span>
                                    </label>
                                    <textarea id="alamat" name="alamat" rows="3"
                                        class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-secondary focus:ring-secondary focus:ring-2 focus:outline-none"
                                        placeholder="Masukkan alamat lengkap Anda" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-8">
                            <h2 class="text-xl font-bold text-gray-900 border-b-2 border-secondary/20 pb-3">
                                III. Penilaian Terhadap Unit Layanan
                            </h2>

                            @php
                                function render_rating($name, $label)
                                {
                                    echo '<div x-data="{ rating: 0, hoverRating: 0 }" class="p-4 border border-gray-200 rounded-lg bg-gray-50/50">';
                                    echo '<label class="block text-sm font-medium text-gray-800 mb-2">' .
                                        $label .
                                        ' <span class="text-red-500">*</span></label>';
                                    echo '<div class="flex items-center space-x-1" @mouseleave="hoverRating = 0">';
                                    foreach ([1, 2, 3, 4, 5] as $star) {
                                        echo '<label for="' . $name . '_' . $star . '" class="cursor-pointer">';
                                        echo '<input type="radio" name="' .
                                            $name .
                                            '" id="' .
                                            $name .
                                            '_' .
                                            $star .
                                            '" value="' .
                                            $star .
                                            '" class="sr-only" x-model.number="rating" required>';
                                        echo '<svg @mouseover="hoverRating = ' .
                                            $star .
                                            '" :class="{ \'text-yellow-400\': hoverRating >= ' .
                                            $star .
                                            ' || rating >= ' .
                                            $star .
                                            ', \'text-gray-300\': hoverRating < ' .
                                            $star .
                                            ' && rating < ' .
                                            $star .
                                            ' }" class="w-8 h-8 transition-colors duration-150" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>';
                                        echo '</label>';
                                    }
                                    echo '</div></div>';
                                }
                            @endphp

                            <div>
                                <h3 class="text-base font-semibold text-gray-700 mb-4">A. Prosedur Pelayanan</h3>
                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                                    @php render_rating('penilaian_1', '1. Kemudahan informasi prosedur pelayanan'); @endphp
                                    @php render_rating('penilaian_2', '2. Kesesuaian prosedur dengan proses'); @endphp
                                    @php render_rating('penilaian_3', '3. Kejelasan dan kelengkapan persyaratan'); @endphp
                                </div>
                            </div>

                            <div>
                                <h3 class="text-base font-semibold text-gray-700 mb-4">B. Biaya Pelayanan</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                    @php render_rating('penilaian_4', '4. Kesesuaian biaya dengan informasi'); @endphp
                                    @php render_rating('penilaian_5', '5. Transparansi dan tidak ada biaya tambahan'); @endphp
                                </div>
                            </div>

                            <div>
                                <h3 class="text-base font-semibold text-gray-700 mb-4">C. Waktu Pelayanan</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                    @php render_rating('penilaian_6', '6. Kesesuaian waktu penyelesaian layanan'); @endphp
                                    @php render_rating('penilaian_7', '7. Kecepatan petugas dalam merespon'); @endphp
                                </div>
                            </div>

                            <div>
                                <h3 class="text-base font-semibold text-gray-700 mb-4">D. Produk Pelayanan</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                    @php render_rating('penilaian_8', '8. Kesesuaian jenis produk layanan'); @endphp
                                    @php render_rating('penilaian_9', '9. Keakuratan data pada produk layanan'); @endphp
                                </div>
                            </div>

                            <div>
                                <h3 class="text-base font-semibold text-gray-700 mb-4">E. Perilaku Pelaksana</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                    @php render_rating('penilaian_10', '10. Keramahan dan kesopanan petugas'); @endphp
                                    @php render_rating('penilaian_11', '11. Kesabaran dan empati petugas'); @endphp
                                </div>
                            </div>

                            <div>
                                <h3 class="text-base font-semibold text-gray-700 mb-4">F. Penanganan Pengaduan</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                    @php render_rating('penilaian_12', '12. Ketersediaan mekanisme pengaduan'); @endphp
                                    @php render_rating('penilaian_13', '13. Kecepatan tanggapan pengaduan'); @endphp
                                </div>
                            </div>

                            <div>
                                <h3 class="text-base font-semibold text-gray-700 mb-4">G. Sarana dan Prasarana</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                    @php render_rating('penilaian_14', '14. Kenyamanan dan kebersihan ruang'); @endphp
                                    @php render_rating('penilaian_15', '15. Kelengkapan fasilitas pendukung'); @endphp
                                </div>
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
                                Kirim Survei
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
