@extends('layouts.front')

@section('title', 'Detail Persyaratan Layanan')

@section('content')

    <div class="bg-gray-50 py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                <div class="p-6 sm:p-10">
                    <!-- Header Dokumen -->
                    <div class="text-center mb-8">
                        <div class="flex justify-center items-center mb-4">
                            <img src="{{ asset('images/logo.webp') }}" alt="Logo Kemenag" class="h-16 w-auto">
                        </div>
                        {{-- Judul bisa dibuat dinamis jika Anda menambahkan kolom 'title' di database --}}
                        <h1 class="text-2xl font-bold text-gray-800">Persyaratan Rekomendasi Izin Pendirian Masjid</h1>
                        <p class="text-gray-500 mt-1">Berikut adalah dokumen yang perlu Anda siapkan:</p>
                    </div>

                    <!-- [DIUBAH] Daftar Persyaratan dari JSON -->
                    <ul class="space-y-3 text-gray-700 list-decimal list-inside">
                        @forelse ($mosquePermit->data as $requirement)
                            <li class="pl-2">{{ $requirement }}</li>
                        @empty
                            <p class="text-center text-gray-500">Tidak ada data persyaratan yang tersedia.</p>
                        @endforelse
                    </ul>

                    <!-- Tombol Kembali -->
                    <div class="mt-10 text-center">
                        <a href="{{ route('landing') }}#service"
                            class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50">
                            Kembali ke Layanan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
