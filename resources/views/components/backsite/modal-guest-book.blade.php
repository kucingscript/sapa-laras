<template x-teleport="body">
    <div x-show="openModalId === {{ $guestBook->id }}" x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-[80] flex items-center justify-center bg-gray-900/70 backdrop-blur-sm"
        @click.self="openModalId = null" style="display: none;">

        <div class="flex flex-col bg-white shadow-sm rounded-xl dark:bg-neutral-800 sm:max-w-xl sm:w-full m-4"
            @click.stop>
            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                <h3 class="font-bold text-gray-800 dark:text-white">Detail Data
                    Tamu</h3>
                <button type="button" @click="openModalId = null"
                    class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700">
                    <span class="sr-only">Close</span>
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>

            <div class="p-6 overflow-y-auto">
                <div class="space-y-4">
                    <div class="grid grid-cols-3 gap-x-4 gap-y-2">
                        <div class="col-span-1 text-sm font-semibold text-gray-500 dark:text-neutral-400">
                            Nama Lengkap</div>
                        <div class="col-span-2 text-sm text-gray-800 dark:text-neutral-200">
                            : {{ $guestBook->nama_lengkap }}</div>
                        <div class="col-span-1 text-sm font-semibold text-gray-500 dark:text-neutral-400">
                            Jabatan</div>
                        <div class="col-span-2 text-sm text-gray-800 dark:text-neutral-200">
                            : {{ $guestBook->jabatan }}</div>
                        <div class="col-span-1 text-sm font-semibold text-gray-500 dark:text-neutral-400">
                            Instansi</div>
                        <div class="col-span-2 text-sm text-gray-800 dark:text-neutral-200">
                            : {{ $guestBook->instansi }}</div>
                        <div class="col-span-1 text-sm font-semibold text-gray-500 dark:text-neutral-400">
                            Nomor HP</div>
                        <div class="col-span-2 text-sm text-gray-800 dark:text-neutral-200">
                            : {{ $guestBook->nomor_hp }}</div>
                        <div class="col-span-1 text-sm font-semibold text-gray-500 dark:text-neutral-400">
                            PIC</div>
                        <div class="col-span-2 text-sm text-gray-800 dark:text-neutral-200">
                            : {{ $guestBook->pic }}</div>
                        <div class="col-span-1 text-sm font-semibold text-gray-500 dark:text-neutral-400">
                            Rating</div>
                        <div class="col-span-2 text-sm text-gray-800 dark:text-neutral-200 flex items-center">
                            :
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-4 h-4 ms-1 {{ $i < $guestBook->rating ? 'text-yellow-400' : 'text-gray-300 dark:text-neutral-600' }}"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            @endfor
                        </div>
                    </div>
                    <hr class="dark:border-neutral-700">
                    <div>
                        <h4 class="text-sm font-semibold text-gray-500 dark:text-neutral-400 mb-2">
                            Deskripsi Keperluan</h4>
                        <p
                            class="text-sm text-gray-800 dark:text-neutral-200 bg-gray-50 dark:bg-neutral-900/50 p-3 rounded-lg">
                            {{ $guestBook->deskripsi_keperluan }}</p>
                    </div>
                    <div>
                        <h4 class="text-sm font-semibold text-gray-500 dark:text-neutral-400 mb-2">
                            Kritik & Saran</h4>
                        <p
                            class="text-sm text-gray-800 dark:text-neutral-200 bg-gray-50 dark:bg-neutral-900/50 p-3 rounded-lg">
                            {{ $guestBook->kritik }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
