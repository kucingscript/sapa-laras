@extends('layouts.app')
@section('title', 'Madrasah Operational Permit')

@section('content')
    <div class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
            <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                <div class="mb-8">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-gray-200">
                        Izin Operasional Madrasah
                    </h2>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Kelola data persyaratan untuk izin operasional madrasah (RA, MI, MTS, MA/MAK).
                    </p>
                </div>

                <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div class="rounded-lg overflow-hidden dark:border-gray-700">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <thead class="bg-gray-50 dark:bg-gray-700">
                                        <tr>
                                            <th scope="col"
                                                class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                No</th>
                                            <th scope="col"
                                                class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                Persyaratan Layanan</th>
                                            <th scope="col"
                                                class="px-4 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                        @forelse ($data as $d)
                                            <tr>
                                                <td
                                                    class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200 align-top">
                                                    {{ $loop->iteration + ($data->currentPage() - 1) * $data->perPage() }}
                                                </td>
                                                <td class="px-4 py-4 text-sm text-gray-800 dark:text-gray-200 align-top">
                                                    {{ collect($d->data)->implode('. ') }}
                                                </td>
                                                <td
                                                    class="px-4 py-4 whitespace-nowrap text-end text-sm font-medium align-top">
                                                    <div class="flex justify-end space-x-2">
                                                        <a class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400"
                                                            href="#">
                                                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path
                                                                    d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z" />
                                                                <path d="m15 5 4 4" />
                                                            </svg>
                                                            Edit
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3"
                                                    class="px-4 py-4 text-center text-sm text-gray-500 dark:text-gray-400">
                                                    Tidak ada data yang ditemukan.
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
