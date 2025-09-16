@extends('layouts.front')

@section('title', 'Sertifikat Majelis Taklim')

@section('content')
    <div class="relative bg-secondary/10 overflow-hidden">
        <div class="absolute top-0 right-0 -z-10 size-96 bg-primary/20 rounded-full blur-3xl opacity-50"></div>
        <div class="absolute bottom-0 left-0 -z-10 size-96 bg-secondary/10 rounded-full blur-3xl opacity-50"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">

                <div class="bg-gradient-to-br from-secondary to-secondaryhvr p-6 sm:p-8 text-center">
                    <div class="flex justify-center items-center mb-4">
                        <img src="{{ asset('images/logo.webp') }}" alt="Logo Kemenag"
                            class="h-20 w-auto bg-white rounded-full p-2 shadow-md">
                    </div>
                    <h1 class="text-2xl sm:text-3xl font-bold text-white">
                        Layanan Permohonan Sertifikat Majelis Taklim
                    </h1>
                    <p class="text-white/80 mt-2 text-base">
                        Berikut adalah dokumen dan prosedur yang perlu Anda lalui.
                    </p>
                </div>

                <div class="p-6 sm:p-10">
                    <div class="mb-10 grid grid-cols-1 sm:grid-cols-2 gap-4 border rounded-lg p-4 bg-slate-50">
                        <div class="flex items-center">
                            <svg class="flex-shrink-0 w-8 h-8 text-secondary mr-4" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div class="text-left">
                                <h3 class="font-semibold text-gray-700 text-sm uppercase tracking-wider">Waktu Layanan</h3>
                                <p class="text-secondary font-bold text-lg">1 Hari Proses</p>
                            </div>
                        </div>
                        <div class="border-t sm:border-t-0 sm:border-s pt-4 sm:pt-0 flex items-center sm:pl-4">
                            <svg class="flex-shrink-0 w-8 h-8 text-green-600 mr-4" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect width="20" height="12" x="2" y="6" rx="2" />
                                <circle cx="12" cy="12" r="2" />
                                <path d="M6 12h.01M18 12h.01" />
                            </svg>
                            <div class="text-left">
                                <h3 class="font-semibold text-gray-700 text-sm uppercase tracking-wider">Biaya Layanan</h3>
                                <p class="text-green-600 font-bold text-lg">Tidak Dipungut Biaya</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-12">
                        <h2 class="text-xl font-bold text-secondary mb-4">Dokumen Persyaratan</h2>
                        <ul class="space-y-3 text-gray-700 text-base">
                            @forelse ($majlisTaklim->data as $d)
                                <li class="flex items-start">
                                    <svg class="flex-shrink-0 w-5 h-5 text-secondary mt-1 mr-3"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span>{{ $d }}</span>
                                </li>
                            @empty
                                <p class="text-center text-gray-500">Tidak ada data persyaratan yang tersedia.</p>
                            @endforelse
                        </ul>
                    </div>

                    <div>
                        <h2 class="text-xl font-semibold text-gray-700 mb-8 border-b-2 border-secondary/20 pb-2">
                            Prosedur Layanan
                        </h2>
                        @php
                            $procedures = [
                                [
                                    'title' => 'Pengajuan Permohonan',
                                    'description' =>
                                        'Pemohon menyerahkan berkas permohonan beserta kelengkapan persyaratan',
                                ],
                                [
                                    'title' => 'Verifikasi Berkas',
                                    'description' =>
                                        'Petugas menerima dokumen dan melakukan pengecekan kelengkapan berkas',
                                ],
                                [
                                    'title' => 'Pengajuan Berkas',
                                    'description' => 'Petugas menyerahkan berkas lengkap ke petugas Seksi Bimas',
                                ],
                                [
                                    'title' => 'Verifikasi Lapangan',
                                    'description' =>
                                        'Tim verifikator Seksi Bimas melakukan verifikasi langsung ke lapangan',
                                ],
                                [
                                    'title' => 'Entri Data',
                                    'description' => 'Petugas seksi melakukan entri data pada aplikasi SIMAS',
                                ],
                                [
                                    'title' => 'Penerbitan Sertifikat',
                                    'description' =>
                                        'Jika hasil verifikasi dinyatakan layak, sertifikat/izin majelis taklim diterbitkan',
                                ],
                                [
                                    'title' => 'Disposisi',
                                    'description' => 'Sertifikat/izin majelis taklim didisposisi oleh kepala seksi',
                                ],
                                [
                                    'title' => 'Penyerahan Sertifikat',
                                    'description' => 'Sertifikat/izin majelis taklim diserahkan kepada pemohon',
                                ],
                            ];
                        @endphp
                        <div
                            class="space-y-8 relative before:absolute before:inset-0 before:ml-2.5 before:h-full before:w-0.5 before:bg-gray-200">
                            @foreach ($procedures as $index => $step)
                                <div class="relative ps-12">
                                    <div class="absolute -left-1.5 mt-1">
                                        <div
                                            class="flex items-center justify-center w-8 h-8 bg-secondary rounded-full text-white font-bold">
                                            {{ $index + 1 }}
                                        </div>
                                    </div>
                                    <h3 class="font-semibold text-gray-800">{{ $step['title'] }}</h3>
                                    <p class="text-gray-600 mt-1">{{ $step['description'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="mt-12 text-center">
                        <a href="{{ url('/#service') }}"
                            class="py-3 px-6 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-secondary text-white hover:bg-secondaryhvr transition-all">
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
