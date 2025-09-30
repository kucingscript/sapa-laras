@extends('layouts.front')

@section('title', 'Hasil Survei Kepuasan Masyarakat')

@section('content')
    @include('components.frontsite.header')

    <div class="relative bg-primary overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">

            <div class="text-center mb-12">
                <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 tracking-tight">
                    Hasil Survei Kepuasan Masyarakat
                </h1>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                    Terima kasih atas partisipasi Anda. Berikut adalah rekapitulasi hasil survei yang telah kami terima.
                </p>
            </div>

            <div
                class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl shadow-lg p-6 sm:p-8 mb-12 max-w-2xl mx-auto">
                <div class="flex flex-col sm:flex-row items-center justify-between gap-6">
                    <div class="text-center sm:text-left">
                        <h2 class="text-lg font-semibold text-gray-800">Indeks Kepuasan Keseluruhan</h2>
                        <p class="text-sm text-gray-500">Berdasarkan <span class="font-bold">{{ $totalRespondents }}</span>
                            Responden</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-5xl font-bold text-gray-900">{{ number_format($overallAverage, 2) }}</span>
                        <div class="flex flex-col">
                            <div class="flex">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg class="w-7 h-7 {{ $i < round($overallAverage) ? 'text-yellow-400' : 'text-gray-300' }}"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                    </svg>
                                @endfor
                            </div>
                            <span class="text-xs text-gray-500 mt-1">dari 5 Bintang</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($surveys as $survey)
                    @php
                        $totalScore = 0;
                        for ($i = 1; $i <= 20; $i++) {
                            $totalScore += $survey->{'penilaian_' . $i};
                        }
                        $average = $totalScore / 20;
                        $words = explode(' ', $survey->nama_responden);
                        $initials = '';
                        foreach (array_slice($words, 0, 2) as $word) {
                            $initials .= strtoupper(substr($word, 0, 1));
                        }
                    @endphp
                    <div
                        class="bg-white rounded-2xl shadow-lg p-6 group hover:bg-secondary transition-all duration-300 transform hover:-translate-y-2">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <div
                                    class="w-12 h-12 rounded-full bg-primary/10 text-primary font-bold flex items-center justify-center text-xl group-hover:bg-white/20 group-hover:text-white">
                                    {{ $initials }}
                                </div>
                                <div class="ml-4">
                                    <div
                                        class="text-sm font-semibold text-gray-800 group-hover:text-white transition-colors duration-300">
                                        {{ $survey->nama_responden }}</div>
                                    <div class="text-xs text-gray-500 group-hover:text-white/70">
                                        {{ $survey->created_at->translatedFormat('d F Y') }}</div>
                                </div>
                            </div>
                            <div
                                class="flex items-center bg-yellow-100 text-yellow-800 text-sm font-bold px-2.5 py-1 rounded-full group-hover:bg-white/25 group-hover:text-white">
                                {{ number_format($average, 2) }}
                                <svg class="w-4 h-4 ml-1 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                </svg>
                            </div>
                        </div>

                        <div>
                            <p class="text-sm font-semibold text-gray-700 mb-1 group-hover:text-white">Kritik & Saran:</p>
                            <blockquote
                                class="text-gray-600 text-sm italic border-l-4 border-gray-200 pl-4 py-2 group-hover:text-white/80 group-hover:border-white/30">
                                {{ Str::limit($survey->kritik ?? 'Tidak ada.', 100) }}
                            </blockquote>
                        </div>
                    </div>
                @empty
                    <div class="md:col-span-2 lg:col-span-3 text-center py-12">
                        <p class="text-white/70">Belum ada hasil survei yang tersedia.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
