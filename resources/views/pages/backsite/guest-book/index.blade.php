@extends('layouts.app')
@section('title', 'Buku Tamu')

@section('content')
    <div class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
            <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                <div class="flex flex-col sm:flex-row sm:justify-between sm:items-start gap-4 mb-8">
                    <div>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-gray-200">
                            Data Buku Tamu
                        </h2>
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            Kelola semua data masukan dari pengunjung.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col">
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
                                                Nama Lengkap</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-400">
                                                Instansi</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-400">
                                                Keperluan</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase dark:text-neutral-400">
                                                Rating</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase dark:text-neutral-400">
                                                Tanggal</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase dark:text-neutral-400">
                                                Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                        @forelse ($guestBooks as $guestBook)
                                            <tr>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                    {{ $loop->iteration + $guestBooks->firstItem() - 1 }}</td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                    {{ $guestBook->nama_lengkap }}</td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                    {{ $guestBook->instansi }}</td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                    {{ $guestBook->keperluan }}</td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-800 dark:text-neutral-200">
                                                    <div class="flex justify-center items-center">
                                                        {{ $guestBook->rating }}
                                                        <svg class="w-4 h-4 text-yellow-400 ms-1"
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                    </div>
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-800 dark:text-neutral-200">
                                                    {{ $guestBook->created_at->isoFormat('D MMMM YYYY') }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                                    <div class="flex justify-center items-center gap-x-2">
                                                        <button type="button"
                                                            class="hs-tooltip-toggle p-2 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:bg-blue-100 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:bg-blue-800/30"
                                                            data-hs-overlay="#viewModal-{{ $guestBook->id }}">
                                                            <span
                                                                class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                Lihat Detail
                                                            </span>
                                                            <svg class="flex-shrink-0 size-5"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z" />
                                                                <circle cx="12" cy="12" r="3" />
                                                            </svg>
                                                        </button>

                                                        <form
                                                            action="{{ route('backsite.guest-books.destroy', $guestBook->id) }}"
                                                            method="POST"
                                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="hs-tooltip-toggle p-2 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:bg-red-100 disabled:opacity-50 disabled:pointer-events-none dark:text-red-500 dark:hover:bg-red-800/30">
                                                                <span
                                                                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                    Hapus Data
                                                                </span>
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

                                            <div id="viewModal-{{ $guestBook->id }}"
                                                class="hs-overlay hidden px-2 sm:px-0 size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto"
                                                data-hs-overlay-keyboard="true" data-hs-overlay-backdrop="static">

                                                <div
                                                    class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-xl sm:w-full sm:mx-auto">
                                                    <div
                                                        class="flex flex-col bg-white shadow-sm rounded-xl dark:bg-neutral-800">

                                                        <div
                                                            class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                                                            <h3 class="font-bold text-gray-800 dark:text-white">
                                                                Detail Data Tamu
                                                            </h3>
                                                            <button type="button"
                                                                class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
                                                                data-hs-overlay="#viewModal-{{ $guestBook->id }}">
                                                                <span class="sr-only">Close</span>
                                                                <svg class="flex-shrink-0 size-4"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                    <path d="M18 6 6 18" />
                                                                    <path d="m6 6 12 12" />
                                                                </svg>
                                                            </button>
                                                        </div>

                                                        <div class="p-6 overflow-y-auto">
                                                            <div class="space-y-4">
                                                                <div class="grid grid-cols-3 gap-x-4 gap-y-2">
                                                                    <div
                                                                        class="col-span-1 text-sm font-semibold text-gray-500 dark:text-neutral-400">
                                                                        Nama Lengkap</div>
                                                                    <div
                                                                        class="col-span-2 text-sm text-gray-800 dark:text-neutral-200">
                                                                        : {{ $guestBook->nama_lengkap }}</div>

                                                                    <div
                                                                        class="col-span-1 text-sm font-semibold text-gray-500 dark:text-neutral-400">
                                                                        Jabatan</div>
                                                                    <div
                                                                        class="col-span-2 text-sm text-gray-800 dark:text-neutral-200">
                                                                        : {{ $guestBook->jabatan }}</div>

                                                                    <div
                                                                        class="col-span-1 text-sm font-semibold text-gray-500 dark:text-neutral-400">
                                                                        Instansi</div>
                                                                    <div
                                                                        class="col-span-2 text-sm text-gray-800 dark:text-neutral-200">
                                                                        : {{ $guestBook->instansi }}</div>

                                                                    <div
                                                                        class="col-span-1 text-sm font-semibold text-gray-500 dark:text-neutral-400">
                                                                        Nomor HP</div>
                                                                    <div
                                                                        class="col-span-2 text-sm text-gray-800 dark:text-neutral-200">
                                                                        : {{ $guestBook->nomor_hp }}</div>

                                                                    <div
                                                                        class="col-span-1 text-sm font-semibold text-gray-500 dark:text-neutral-400">
                                                                        PIC</div>
                                                                    <div
                                                                        class="col-span-2 text-sm text-gray-800 dark:text-neutral-200">
                                                                        : {{ $guestBook->pic }}</div>

                                                                    <div
                                                                        class="col-span-1 text-sm font-semibold text-gray-500 dark:text-neutral-400">
                                                                        Rating</div>
                                                                    <div
                                                                        class="col-span-2 text-sm text-gray-800 dark:text-neutral-200 flex items-center">
                                                                        :
                                                                        @for ($i = 0; $i < 5; $i++)
                                                                            <svg class="w-4 h-4 ms-1 {{ $i < $guestBook->rating ? 'text-yellow-400' : 'text-gray-300 dark:text-neutral-600' }}"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                fill="currentColor" viewBox="0 0 16 16">
                                                                                <path
                                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                                            </svg>
                                                                        @endfor
                                                                    </div>
                                                                </div>

                                                                <hr class="dark:border-neutral-700">

                                                                <div>
                                                                    <h4
                                                                        class="text-sm font-semibold text-gray-500 dark:text-neutral-400 mb-2">
                                                                        Deskripsi Keperluan</h4>
                                                                    <p
                                                                        class="text-sm text-gray-800 dark:text-neutral-200 bg-gray-50 dark:bg-neutral-900/50 p-3 rounded-lg">
                                                                        {{ $guestBook->deskripsi_keperluan }}</p>
                                                                </div>
                                                                <div>
                                                                    <h4
                                                                        class="text-sm font-semibold text-gray-500 dark:text-neutral-400 mb-2">
                                                                        Kritik & Saran</h4>
                                                                    <p
                                                                        class="text-sm text-gray-800 dark:text-neutral-200 bg-gray-50 dark:bg-neutral-900/50 p-3 rounded-lg">
                                                                        {{ $guestBook->kritik }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <tr>
                                                <td colspan="7"
                                                    class="px-6 py-4 text-center text-sm text-gray-500 dark:text-neutral-500">
                                                    Tidak ada data untuk ditampilkan.
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            <div class="mt-4">
                                {{ $guestBooks->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
