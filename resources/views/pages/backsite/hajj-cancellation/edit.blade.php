@extends('layouts.app')
@section('title', 'Edit Pembatalan Haji')

@section('content')
    <div class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">

            <div class="bg-white rounded-xl shadow-lg p-6 sm:p-8 mt-5 dark:bg-slate-900">
                <h2 class="text-xl sm:text-2xl font-bold text-gray-800 dark:text-gray-200 mb-6">
                    Formulir Edit Persyaratan
                </h2>

                <form action="{{ route('backsite.hajj-cancellation.update', $hajjCancellation->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    @php
                        $dataErrors = [];
                        if ($errors->has('data.*')) {
                            foreach ($errors->get('data.*') as $key => $messages) {
                                $dataErrors[$key] = $messages[0];
                            }
                        }
                    @endphp
                    <div class="mb-10"
                        x-data='{
                        "requirements": {{ json_encode(old('data', $hajjCancellation->data ?? [''])) }},
                        "errors": {{ json_encode($dataErrors) }},
                        "columnName": "data"
                    }'>
                        <label
                            class="block text-base font-medium text-gray-800 dark:text-gray-200 mb-5 border-b-2 border-blue-600 pb-2">
                            Persyaratan Layanan <span class="text-red-600">*</span>
                        </label>

                        <template x-for="(requirement, index) in requirements" :key="index">
                            <div class="mb-3">
                                <div class="flex items-center space-x-2 text-sm">
                                    <input type="text" name="data[]" x-model="requirements[index]"
                                        :class="{ 'border-red-500': errors[columnName + '.' + index] }"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-800 dark:border-gray-700 dark:text-gray-300"
                                        placeholder="Contoh: Surat Permohonan Izin">

                                    <button type="button" @click="requirements.splice(index, 1)"
                                        class="p-2 bg-red-500 text-white rounded-lg hover:bg-red-600"
                                        :disabled="requirements.length === 1">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                        </svg>
                                    </button>
                                </div>
                                <p x-show="errors[columnName + '.' + index]" x-text="errors[columnName + '.' + index]"
                                    class="text-red-500 text-xs mt-1"></p>
                            </div>
                        </template>

                        <button type="button" @click="requirements.push('')"
                            class="mt-2 py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-dashed border-gray-400 bg-gray-50 text-gray-600 hover:bg-gray-100 dark:bg-slate-800 dark:border-gray-600 dark:text-gray-400 dark:hover:bg-slate-700">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            Tambah Persyaratan
                        </button>
                    </div>

                    @php
                        $data2Errors = [];
                        if ($errors->has('data2.*')) {
                            foreach ($errors->get('data2.*') as $key => $messages) {
                                $data2Errors[$key] = $messages[0];
                            }
                        }
                    @endphp
                    <div class="mb-6"
                        x-data='{
                        "requirements2": {{ json_encode(old('data2', $hajjCancellation->data2 ?? [''])) }},
                        "errors": {{ json_encode($data2Errors) }},
                        "columnName": "data2"
                    }'>
                        <label
                            class="block text-base font-medium text-gray-800 dark:text-gray-200 mb-5 border-b-2 border-blue-600 pb-2">
                            Batal Karena Wafat <span class="text-red-600">*</span>
                        </label>

                        <template x-for="(requirement, index) in requirements2" :key="index">
                            <div class="mb-3">
                                <div class="flex items-center space-x-2 text-sm">
                                    <input type="text" name="data2[]" x-model="requirements2[index]"
                                        :class="{ 'border-red-500': errors[columnName + '.' + index] }"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-800 dark:border-gray-700 dark:text-gray-300"
                                        placeholder="Contoh: Surat Permohonan Izin">

                                    <button type="button" @click="requirements2.splice(index, 1)"
                                        class="p-2 bg-red-500 text-white rounded-lg hover:bg-red-600"
                                        :disabled="requirements2.length === 1">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                        </svg>
                                    </button>
                                </div>
                                <p x-show="errors[columnName + '.' + index]" x-text="errors[columnName + '.' + index]"
                                    class="text-red-500 text-xs mt-1"></p>
                            </div>
                        </template>

                        <button type="button" @click="requirements2.push('')"
                            class="mt-2 py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-dashed border-gray-400 bg-gray-50 text-gray-600 hover:bg-gray-100 dark:bg-slate-800 dark:border-gray-600 dark:text-gray-400 dark:hover:bg-slate-700">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            Tambah Persyaratan
                        </button>
                    </div>

                    <div class="mt-8 flex justify-end items-center space-x-4">
                        <a href="{{ route('backsite.hajj-cancellation.index') }}"
                            class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800">
                            Batal
                        </a>
                        <button type="submit"
                            class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-secondary text-white hover:bg-secondaryhvr">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
