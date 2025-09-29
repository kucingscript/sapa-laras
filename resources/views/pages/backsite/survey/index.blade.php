@extends('layouts.app')
@section('title', 'Data Survei')

@section('content')
    <div class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
            <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                <div class="flex flex-col sm:flex-row sm:justify-between sm:items-start gap-4 mb-8">
                    <div>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-gray-200">
                            Data Survei Kepuasan
                        </h2>
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            Kelola semua data hasil survei kepuasan masyarakat.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col" x-data="{ openModalId: null }" @keydown.escape.window="openModalId = null">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div class="rounded-lg overflow-hidden">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                                    <thead class="bg-gray-50 dark:bg-slate-800">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-400">
                                                No</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-400">
                                                Nama Responden</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-400">
                                                Petugas</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase dark:text-neutral-400">
                                                Rata-Rata</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase dark:text-neutral-400">
                                                Tanggal</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase dark:text-neutral-400">
                                                Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                        @forelse ($surveys as $item)
                                            <tr>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                    {{ $loop->iteration + $surveys->firstItem() - 1 }}</td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                    {{ $item->nama_responden }}</td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                    {{ $item->nama_petugas }}</td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-800 dark:text-neutral-200">
                                                    @php
                                                        $totalScore = 0;
                                                        $questionCount = 20;
                                                        for ($i = 1; $i <= $questionCount; $i++) {
                                                            $totalScore += $item->{'penilaian_' . $i};
                                                        }
                                                        $average = $totalScore / $questionCount;
                                                    @endphp
                                                    <span
                                                        class="inline-flex items-center justify-center">{{ number_format($average, 2) }}
                                                        <svg class="w-4 h-4 text-yellow-400 ms-1 -mt-1"
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                    </span>
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-800 dark:text-neutral-200">
                                                    {{ $item->created_at->isoFormat('D MMM YYYY') }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                                    <div class="flex justify-center items-center gap-x-2">
                                                        <button type="button"
                                                            class="p-2 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-blue-800/30"
                                                            @click="openModalId = {{ $item->id }}">
                                                            <svg class="flex-shrink-0 size-5"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z" />
                                                                <circle cx="12" cy="12" r="3" />
                                                            </svg>
                                                        </button>

                                                        <form action="#" method="POST"
                                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="p-2 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:bg-red-100 dark:text-red-500 dark:hover:bg-red-800/30">
                                                                <svg class="flex-shrink-0 size-5"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                    <path d="M3 6h18" />
                                                                    <path
                                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                                                                    <line x1="10" x2="10" y1="11"
                                                                        y2="17" />
                                                                    <line x1="14" x2="14" y1="11"
                                                                        y2="17" />
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>

                                            @include('components.backsite.modal-survey', [
                                                'survey' => $item,
                                            ])

                                        @empty
                                            <tr>
                                                <td colspan="7"
                                                    class="px-6 py-4 text-center text-sm text-gray-500 dark:text-neutral-500">
                                                    Tidak ada data survei untuk ditampilkan.
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            <div class="mt-4">
                                {{ $surveys->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
