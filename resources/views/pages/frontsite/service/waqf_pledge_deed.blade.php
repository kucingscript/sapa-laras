@extends('layouts.front')

@section('title', 'Pembuatan Akta Wakaf')

@section('content')
    <div class="bg-slate-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="p-6 sm:p-10">
                    <div class="text-center mb-10">
                        <div class="flex justify-center items-center mb-4">
                            <img src="{{ asset('images/logo.webp') }}" alt="Logo Kemenag" class="h-20 w-auto">
                        </div>
                        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800">Layanan Pembuatan Akta Ikrar Wakaf
                        </h1>
                        <p class="text-gray-500 mt-2 text-base">Berikut adalah dokumen dan prosedur yang perlu Anda lalui
                        </p>
                    </div>

                    <div class="mb-8 grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 flex items-center">
                            <svg class="w-8 h-8 text-blue-600 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div>
                                <h3 class="font-semibold text-gray-700">Waktu Layanan</h3>
                                <p class="text-gray-600">3 Hari Proses</p>
                            </div>
                        </div>
                        <div class="bg-green-50 border border-green-200 rounded-lg p-4 flex items-center">
                            <svg class="w-8 h-8 text-green-600 mr-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-banknote-icon lucide-banknote">
                                <rect width="20" height="12" x="2" y="6" rx="2" />
                                <circle cx="12" cy="12" r="2" />
                                <path d="M6 12h.01M18 12h.01" />
                            </svg>
                            <div>
                                <h3 class="font-semibold text-gray-700">Biaya Layanan</h3>
                                <p class="text-gray-600">Tidak Dipungut Biaya</p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ activeTab: 'wakif' }">
                        <h2 class="text-xl font-semibold text-gray-700 mb-4 border-b-2 border-blue-600 pb-2">
                            Dokumen Persyaratan
                        </h2>
                        <!-- Navigasi Tab Utama -->
                        <div class="border-b border-gray-200">
                            <nav class="-mb-px flex space-x-6" aria-label="Tabs">
                                <a href="#" @click.prevent="activeTab = 'wakif'"
                                    :class="activeTab === 'wakif' ? 'border-blue-600 text-blue-700' :
                                        'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                    class="py-4 px-1 border-b-2 font-medium text-sm">
                                    Pihak Wakif (Pemberi)
                                </a>
                                <a href="#" @click.prevent="activeTab = 'nazhir'"
                                    :class="activeTab === 'nazhir' ? 'border-blue-600 text-blue-700' :
                                        'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                    class="py-4 px-1 border-b-2 font-medium text-sm">
                                    Pihak Nazhir (Penerima)
                                </a>
                                <a href="#" @click.prevent="activeTab = 'objek'"
                                    :class="activeTab === 'objek' ? 'border-blue-600 text-blue-700' :
                                        'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                    class="py-4 px-1 border-b-2 font-medium text-sm">
                                    Objek Wakaf
                                </a>
                                <a href="#" @click.prevent="activeTab = 'saksi'"
                                    :class="activeTab === 'saksi' ? 'border-blue-600 text-blue-700' :
                                        'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                    class="py-4 px-1 border-b-2 font-medium text-sm">
                                    Saksi
                                </a>
                            </nav>
                        </div>

                        <div class="pt-8">
                            <div x-show="activeTab === 'wakif'">
                                <div x-data="{ subTab: 'perseorangan' }">
                                    <h3 class="text-lg font-medium text-gray-800 mb-4">Persyaratan untuk Pihak Wakif</h3>
                                    <nav class="flex space-x-4 mb-4">
                                        <a href="#" @click.prevent="subTab = 'perseorangan'"
                                            :class="subTab === 'perseorangan' ? 'bg-blue-100 text-blue-700' :
                                                'text-gray-600 hover:bg-gray-100'"
                                            class="px-3 py-2 font-medium text-sm rounded-md">Perseorangan</a>
                                        <a href="#" @click.prevent="subTab = 'organisasi'"
                                            :class="subTab === 'organisasi' ? 'bg-blue-100 text-blue-700' :
                                                'text-gray-600 hover:bg-gray-100'"
                                            class="px-3 py-2 font-medium text-sm rounded-md">Organisasi</a>
                                        <a href="#" @click.prevent="subTab = 'badan_hukum'"
                                            :class="subTab === 'badan_hukum' ? 'bg-blue-100 text-blue-700' :
                                                'text-gray-600 hover:bg-gray-100'"
                                            class="px-3 py-2 font-medium text-sm rounded-md">Badan Hukum</a>
                                    </nav>
                                    <div x-show="subTab === 'perseorangan'">
                                        <ul class="space-y-3 text-gray-700 list-decimal list-inside text-base">
                                            @forelse($waqf->wakif_perseorangan as $req)
                                            <li class="pl-2 leading-relaxed">{{ $req }}</li> @empty <p>Data
                                                    tidak tersedia.</p>
                                            @endforelse
                                        </ul>
                                    </div>
                                    <div x-show="subTab === 'organisasi'" style="display: none;">
                                        <ul class="space-y-3 text-gray-700 list-decimal list-inside text-base">
                                            @forelse($waqf->wakif_organisasi as $req)
                                            <li class="pl-2 leading-relaxed">{{ $req }}</li> @empty <p>Data
                                                    tidak tersedia.</p>
                                            @endforelse
                                        </ul>
                                    </div>
                                    <div x-show="subTab === 'badan_hukum'" style="display: none;">
                                        <ul class="space-y-3 text-gray-700 list-decimal list-inside text-base">
                                            @forelse($waqf->wakif_badan_hukum as $req)
                                            <li class="pl-2 leading-relaxed">{{ $req }}</li> @empty <p>Data
                                                    tidak tersedia.</p>
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div x-show="activeTab === 'nazhir'" style="display: none;">
                                <div x-data="{ subTab: 'perseorangan' }">
                                    <h3 class="text-lg font-medium text-gray-800 mb-2">Persyaratan untuk Pihak Nazhir</h3>
                                    <nav class="flex space-x-4 mb-6">
                                        <a href="#" @click.prevent="subTab = 'perseorangan'"
                                            :class="subTab === 'perseorangan' ? 'bg-blue-100 text-blue-700' :
                                                'text-gray-600 hover:bg-gray-100'"
                                            class="px-3 py-2 font-medium text-sm rounded-md">Perseorangan</a>
                                        <a href="#" @click.prevent="subTab = 'organisasi'"
                                            :class="subTab === 'organisasi' ? 'bg-blue-100 text-blue-700' :
                                                'text-gray-600 hover:bg-gray-100'"
                                            class="px-3 py-2 font-medium text-sm rounded-md">Organisasi</a>
                                        <a href="#" @click.prevent="subTab = 'badan_hukum'"
                                            :class="subTab === 'badan_hukum' ? 'bg-blue-100 text-blue-700' :
                                                'text-gray-600 hover:bg-gray-100'"
                                            class="px-3 py-2 font-medium text-sm rounded-md">Badan Hukum</a>
                                    </nav>
                                    <div x-show="subTab === 'perseorangan'">
                                        <ul class="space-y-3 text-gray-700 list-decimal list-inside text-base">
                                            @forelse($waqf->nazhir_perseorangan as $req)
                                            <li class="pl-2 leading-relaxed">{{ $req }}</li> @empty <p>Data
                                                    tidak tersedia.</p>
                                            @endforelse
                                        </ul>
                                    </div>
                                    <div x-show="subTab === 'organisasi'" style="display: none;">
                                        <ul class="space-y-3 text-gray-700 list-decimal list-inside text-base">
                                            @forelse($waqf->nazhir_organisasi as $req)
                                            <li class="pl-2 leading-relaxed">{{ $req }}</li> @empty <p>Data
                                                    tidak tersedia.</p>
                                            @endforelse
                                        </ul>
                                    </div>
                                    <div x-show="subTab === 'badan_hukum'" style="display: none;">
                                        <ul class="space-y-3 text-gray-700 list-decimal list-inside text-base">
                                            @forelse($waqf->nazhir_badan_hukum as $req)
                                            <li class="pl-2 leading-relaxed">{{ $req }}</li> @empty <p>Data
                                                    tidak tersedia.</p>
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div x-show="activeTab === 'objek'" style="display: none;">
                                <h3 class="text-lg font-medium text-gray-800 mb-2">Persyaratan untuk Tanah yang Diwakafkan
                                </h3>
                                <ul class="space-y-3 text-gray-700 list-decimal list-inside text-base">
                                    @forelse($waqf->tanah_diwakafkan as $req)
                                    <li class="pl-2 leading-relaxed">{{ $req }}</li> @empty <p>Data tidak
                                            tersedia.</p>
                                    @endforelse
                                </ul>
                            </div>

                            <div x-show="activeTab === 'saksi'" style="display: none;">
                                <h3 class="text-lg font-medium text-gray-800 mb-2">Persyaratan untuk Saksi</h3>
                                <ul class="space-y-3 text-gray-700 list-decimal list-inside text-base">
                                    @forelse($waqf->saksi as $req)
                                    <li class="pl-2 leading-relaxed">{{ $req }}</li> @empty <p>Data tidak
                                            tersedia.</p>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h2 class="text-xl font-semibold text-gray-700 mb-8 border-b-2 border-blue-600 pb-2">
                            Prosedur Layanan
                        </h2>

                        <div
                            class="space-y-8 relative before:absolute before:inset-0 before:ml-2 before:h-full before:w-0.5 before:bg-gray-200">
                            <div class="relative pl-12">
                                <div class="absolute -left-1.5 mt-1">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 bg-blue-600 rounded-full text-white font-bold">
                                        1</div>
                                </div>
                                <h3 class="font-semibold text-gray-800">Pengajuan Permohonan</h3>
                                <p class="text-gray-600 mt-1">Pemohon menyerahkan berkas permohonan beserta kelengkapan
                                    persyaratan</p>
                            </div>

                            <div class="relative pl-12">
                                <div class="absolute -left-1.5 mt-1">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 bg-blue-600 rounded-full text-white font-bold">
                                        2</div>
                                </div>
                                <h3 class="font-semibold text-gray-800">Verifikasi Berkas</h3>
                                <p class="text-gray-600 mt-1">Petugas menerima dokumen dan melakukan pengecekan kelengkapan
                                    berkas</p>
                            </div>

                            <div class="relative pl-12">
                                <div class="absolute -left-1.5 mt-1">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 bg-blue-600 rounded-full text-white font-bold">
                                        3</div>
                                </div>
                                <h3 class="font-semibold text-gray-800">Pengisian Akta</h3>
                                <p class="text-gray-600 mt-1">Pemohon melakukan pengisian Akta Ikrar Wakaf dihadapan PPAIW
                                </p>
                            </div>

                            <div class="relative pl-12">
                                <div class="absolute -left-1.5 mt-1">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 bg-blue-600 rounded-full text-white font-bold">
                                        4</div>
                                </div>
                                <h3 class="font-semibold text-gray-800">Ikrar Wakaf</h3>
                                <p class="text-gray-600 mt-1">Melakukan ikrar wakaf oleh wakif Kepada nadzir</p>
                            </div>

                            <div class="relative pl-12">
                                <div class="absolute -left-1.5 mt-1">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 bg-blue-600 rounded-full text-white font-bold">
                                        5</div>
                                </div>
                                <h3 class="font-semibold text-gray-800">Akta Ikrar Wakaf</h3>
                                <p class="text-gray-600 mt-1">PPAIW menerbitkan dan menandatangani Akta Ikrar Wakaf</p>
                            </div>

                            <div class="relative pl-12">
                                <div class="absolute -left-1.5 mt-1">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 bg-blue-600 rounded-full text-white font-bold">
                                        6</div>
                                </div>
                                <h3 class="font-semibold text-gray-800">Kelengkapan Surat</h3>
                                <p class="text-gray-600 mt-1">Dokumen AIW dan kelengkapan lainnya disampaikan ke kantor
                                    pertanahan
                                </p>
                            </div>

                            <div class="relative pl-12">
                                <div class="absolute -left-1.5 mt-1">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 bg-blue-600 rounded-full text-white font-bold">
                                        6</div>
                                </div>
                                <h3 class="font-semibold text-gray-800">Penerbitan Sertifikat</h3>
                                <p class="text-gray-600 mt-1">BPN menerbitkan sertifikat atas nama nadzir
                                </p>
                            </div>

                            <div class="relative pl-12">
                                <div class="absolute -left-1.5 mt-1">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 bg-blue-600 rounded-full text-white font-bold">
                                        6</div>
                                </div>
                                <h3 class="font-semibold text-gray-800">Penyerahan Sertifikat</h3>
                                <p class="text-gray-600 mt-1">Sertifikat diserahkan kepada nadzir atau pemohon
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12 text-center">
                        <a href="{{ url('/#service') }}"
                            class="py-3 px-6 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 transition-all">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m15 18-6-6 6-6" />
                            </svg>
                            Kembali ke Daftar Layanan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
