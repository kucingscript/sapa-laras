@php
    if (!function_exists('render_stars')) {
        function render_stars($rating)
        {
            for ($i = 0; $i < 5; $i++) {
                $class = $i < $rating ? 'text-yellow-400' : 'text-gray-300 dark:text-neutral-600';
                echo '<svg class="w-5 h-5 flex-shrink-0 ' .
                    $class .
                    '" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" /></svg>';
            }
        }
    }
@endphp

<template x-teleport="body">
    <div x-show="openModalId === {{ $survey->id }}" x-transition @click.self="openModalId = null"
        class="fixed inset-0 z-[80] flex items-center justify-center bg-gray-900/70 backdrop-blur-sm"
        style="display: none;">

        <div class="flex flex-col bg-white shadow-sm rounded-xl dark:bg-neutral-800 sm:max-w-2xl sm:w-full m-4"
            @click.stop>
            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                <h3 class="font-bold text-gray-800 dark:text-white">Detail Hasil Survei</h3>
                <button type="button" @click="openModalId = null"
                    class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 dark:text-white dark:hover:bg-neutral-700">
                    <span class="sr-only">Close</span>
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>

            <div class="p-6 overflow-y-auto space-y-6 max-h-[90vh]">
                <div class="grid grid-cols-2 sm:grid-cols-2 gap-x-6 gap-y-2 text-sm">
                    <div class="font-semibold text-gray-500 dark:text-neutral-400">Nama Responden</div>
                    <div class="text-gray-800 dark:text-neutral-200">: {{ $survey->nama_responden }}</div>
                    <div class="font-semibold text-gray-500 dark:text-neutral-400">Pekerjaan</div>
                    <div class="text-gray-800 dark:text-neutral-200">: {{ $survey->pekerjaan }}</div>
                    <div class="font-semibold text-gray-500 dark:text-neutral-400">Usia</div>
                    <div class="text-gray-800 dark:text-neutral-200">: {{ $survey->usia }} Tahun</div>
                    <div class="font-semibold text-gray-500 dark:text-neutral-400">Nomor HP</div>
                    <div class="text-gray-800 dark:text-neutral-200">: {{ $survey->nomor_hp }}</div>
                    <div class="font-semibold text-gray-500 dark:text-neutral-400">Nama Petugas</div>
                    <div class="text-gray-800 dark:text-neutral-200">: {{ $survey->nama_petugas }}</div>
                </div>

                <hr class="dark:border-neutral-700">

                <div class="space-y-4">
                    <h4 class="text-lg font-bold text-gray-800 dark:text-white mb-3">Rincian Penilaian</h4>
                    <div class="space-y-3 text-sm">
                        @php
                            $questions = [
                                'A. PROSEDUR PELAYANAN' => [
                                    1 => 'Kemudahan informasi prosedur pelayanan',
                                    2 => 'Kesesuaian prosedur dengan proses',
                                    3 => 'Kejelasan dan kelengkapan persyaratan',
                                ],
                                'B. BIAYA PELAYANAN' => [
                                    4 => 'Kesesuaian biaya dengan informasi',
                                    5 => 'Transparansi dan tidak ada biaya tambahan',
                                ],
                                'C. WAKTU PELAYANAN' => [
                                    6 => 'Kesesuaian waktu penyelesaian layanan',
                                    7 => 'Kecepatan petugas dalam merespon',
                                ],
                                'D. PRODUK PELAYANAN' => [
                                    8 => 'Kesesuaian jenis produk layanan',
                                    9 => 'Keakuratan data pada produk layanan',
                                ],
                                'E. PERILAKU PELAKSANA' => [
                                    10 => 'Keramahan dan kesopanan petugas',
                                    11 => 'Kesabaran dan empati petugas',
                                ],
                                'F. PENANGANAN PENGADUAN' => [
                                    12 => 'Ketersediaan mekanisme pengaduan',
                                    13 => 'Kecepatan tanggapan pengaduan',
                                ],
                                'G. SARANA DAN PRASARANA' => [
                                    14 => 'Kenyamanan dan kebersihan ruang',
                                    15 => 'Kelengkapan fasilitas pendukung',
                                ],
                            ];
                        @endphp

                        @foreach ($questions as $category => $list)
                            <div class="mt-4">
                                <p class="font-semibold text-gray-600 dark:text-neutral-300">{{ $category }}</p>
                                @foreach ($list as $num => $q)
                                    <div
                                        class="flex justify-between items-center gap-4 py-2 border-b border-gray-200/80 dark:border-neutral-700/60">
                                        <p class="text-gray-600 dark:text-neutral-400">{{ $num }}.
                                            {{ $q }}</p>
                                        <div class="flex items-center space-x-1">
                                            {{ render_stars($survey->{'penilaian_' . $num}) }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
