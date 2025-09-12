@extends('layouts.front')

@section('title', 'Izin Operasional Ponpes')

@section('content')
    <div class="bg-slate-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="p-6 sm:p-10">
                    <div class="text-center mb-10">
                        <div class="flex justify-center items-center mb-4">
                            <img src="{{ asset('images/logo.webp') }}" alt="Logo Kemenag" class="h-20 w-auto">
                        </div>
                        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800">Layanan Izin Operasional Pondok Pesantren
                        </h1>
                        <p class="text-gray-500 mt-2 text-base">Berikut adalah dokumen dan prosedur yang perlu Anda
                            lalui</p>
                    </div>

                    <div class="mb-10 grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 flex items-center">
                            <svg class="w-8 h-8 text-blue-600 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div>
                                <h3 class="font-semibold text-gray-700">Waktu Layanan</h3>
                                <p class="text-gray-600">20 Hari Proses</p>
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

                    <div class="mb-10">
                        <h2 class="text-xl font-semibold text-gray-700 mb-4 border-b-2 border-blue-600 pb-2">
                            Dokumen Persyaratan
                        </h2>
                        <ul class="space-y-3 text-gray-700 list-decimal list-inside text-base">
                            @forelse ($ponpes->data as $d)
                                <li class="pl-2 leading-relaxed">{{ $d }}</li>
                            @empty
                                <p class="text-center text-gray-500">Tidak ada data persyaratan yang tersedia.</p>
                            @endforelse
                        </ul>
                    </div>

                    <div>
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
                                <p class="text-gray-600 mt-1">Pemohon layanan melakukan pendaftaran dan log in ke aplikasi
                                    <a class="text-blue-600" href="https://sitren.kemenag.go.id" target="_blank" noopenner
                                        noreferrer>sitren.kemenag.go.id</a>
                                </p>
                            </div>

                            <div class="relative pl-12">
                                <div class="absolute -left-1.5 mt-1">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 bg-blue-600 rounded-full text-white font-bold">
                                        2</div>
                                </div>
                                <h3 class="font-semibold text-gray-800">Pengisian Formulir</h3>
                                <p class="text-gray-600 mt-1">Pemohon mengisi formulir digital dan mengunggah berkas yang
                                    diysratkan pada aplikasi SITREN</p>
                            </div>

                            <div class="relative pl-12">
                                <div class="absolute -left-1.5 mt-1">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 bg-blue-600 rounded-full text-white font-bold">
                                        3</div>
                                </div>
                                <h3 class="font-semibold text-gray-800">Verifikasi Lapangan</h3>
                                <p class="text-gray-600 mt-1">Tim verifikator PD Pontren melakukan verifikasi langsung ke
                                    lapangan</p>
                            </div>

                            <div class="relative pl-12">
                                <div class="absolute -left-1.5 mt-1">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 bg-blue-600 rounded-full text-white font-bold">
                                        4</div>
                                </div>
                                <h3 class="font-semibold text-gray-800">Verifikasi Berkas</h3>
                                <p class="text-gray-600 mt-1">Petugas seksi melakukan verifikasi dokumen online dan
                                    melakukan penilaian kelayakan</p>
                            </div>

                            <div class="relative pl-12">
                                <div class="absolute -left-1.5 mt-1">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 bg-blue-600 rounded-full text-white font-bold">
                                        5</div>
                                </div>
                                <h3 class="font-semibold text-gray-800">Verifikator Kanwil</h3>
                                <p class="text-gray-600 mt-1">Tim verifikator Kanwil melakukan penilaian kelayakan</p>
                            </div>

                            <div class="relative pl-12">
                                <div class="absolute -left-1.5 mt-1">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 bg-blue-600 rounded-full text-white font-bold">
                                        6</div>
                                </div>
                                <h3 class="font-semibold text-gray-800">Verifikator Pusat</h3>
                                <p class="text-gray-600 mt-1">Tim verifikator pusat melakukan penilaian kelayakan
                                </p>
                            </div>

                            <div class="relative pl-12">
                                <div class="absolute -left-1.5 mt-1">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 bg-blue-600 rounded-full text-white font-bold">
                                        7</div>
                                </div>
                                <h3 class="font-semibold text-gray-800">Verifikasi Kelayakan</h3>
                                <p class="text-gray-600 mt-1">Verifikasi dinyatakan layak, maka dilakukan penyusunan
                                    rekomendasi dan pembuatan SK Izin operasional
                                </p>
                            </div>

                            <div class="relative pl-12">
                                <div class="absolute -left-1.5 mt-1">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 bg-blue-600 rounded-full text-white font-bold">
                                        8</div>
                                </div>
                                <h3 class="font-semibold text-gray-800">Penerbitan Surat</h3>
                                <p class="text-gray-600 mt-1">Surat rekomendasi dan SK izin operasional terbit, pemohon
                                    menyerahkan berkas lengkap yang diunggah pada SITREN
                                </p>
                            </div>

                            <div class="relative pl-12">
                                <div class="absolute -left-1.5 mt-1">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 bg-blue-600 rounded-full text-white font-bold">
                                        9</div>
                                </div>
                                <h3 class="font-semibold text-gray-800">Penyerahan Surat</h3>
                                <p class="text-gray-600 mt-1">Surat rekomendasi dan izin operasional diserahkan kepada
                                    pemohon
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
