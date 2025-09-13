@extends('layouts.app')
@section('title', 'Pembatalan Porsi Haji Reguler')

@section('content')
    <div class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
            <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                <div class="flex flex-col sm:flex-row sm:justify-between sm:items-start gap-4 mb-8">
                    <div>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-gray-200">
                            Pembatalan Porsi Jamaah Haji Reguler
                        </h2>
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            Kelola data persyaratan untuk pembatalan porsi jamaah haji reguler.
                        </p>
                    </div>

                    <div>
                        @if ($data->isNotEmpty())
                            <a href={{ route('backsite.hajj-cancellation.edit', $data->first()->id) }}
                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z" />
                                    <path d="m15 5 4 4" />
                                </svg>
                                Edit Persyaratan
                            </a>
                        @endif
                    </div>
                </div>

                @forelse ($data as $d)
                    <div class="space-y-6">
                        <div class="grid sm:grid-cols-1 lg:grid-cols-2 gap-6">
                            <div class="flex flex-col bg-white shadow-md rounded-xl dark:bg-slate-900 ">
                                <div class="bg-gray-100 rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:bg-slate-800">
                                    <p class="mt-1 text-sm font-bold text-gray-800 dark:text-gray-200">
                                        Persyaratan Layanan
                                    </p>
                                </div>
                                <div class="p-4 md:p-5 space-y-4">
                                    <div>
                                        <ol
                                            class="list-decimal list-inside text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            @foreach ($d->data as $item)
                                                <li>{{ $item }}</li>
                                            @endforeach
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col bg-white shadow-md rounded-xl dark:bg-slate-900">
                                <div class="bg-gray-100 rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:bg-slate-800">
                                    <p class="mt-1 text-sm font-bold text-gray-800 dark:text-gray-200">
                                        Batal Karena Wafat
                                    </p>
                                </div>
                                <div class="p-4 md:p-5 space-y-4">
                                    <div>
                                        <ol
                                            class="list-decimal list-inside text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            @foreach ($d->data2 as $item)
                                                <li>{{ $item }}</li>
                                            @endforeach
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center text-gray-500 dark:text-gray-400">
                            Tidak ada data persyaratan yang ditemukan.
                        </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
