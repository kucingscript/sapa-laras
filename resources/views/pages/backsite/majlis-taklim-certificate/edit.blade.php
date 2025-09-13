@extends('layouts.app')
@section('title', 'Edit Sertifikat Majelis Taklim')

@section('content')
    <div class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">

            <div class="bg-white rounded-xl shadow-lg p-6 sm:p-8 mt-5 dark:bg-slate-900">
                <h2 class="text-xl sm:text-2xl font-bold text-gray-800 mb-1 dark:text-gray-200">Formulir Edit Persyaratan
                </h2>

                <form action="{{ route('backsite.majlis-taklim-certificate.update', $majlisTaklimCertificate->id) }}"
                    method="POST">
                    @csrf
                    @method('PUT')

                    <div x-data="{ requirements: {{ json_encode(old('requirements', $majlisTaklimCertificate->data ?? [''])) }} }">
                        <label class="block text-sm font-medium text-gray-700 mb-5 dark:text-gray-200">
                            Persyaratan Layanan <span class="text-red-600">*</span>
                        </label>

                        <template x-for="(requirement, index) in requirements" :key="index">
                            <div class="flex items-center space-x-2 mb-3 text-sm">
                                <input type="text" name="requirements[]" x-model="requirements[index]"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-800 dark:border-gray-700 dark:text-gray-300"
                                    placeholder="Contoh: Surat Permohonan Izin">

                                <button type="button" @click="requirements.splice(index, 1)"
                                    class="p-2 bg-red-500 text-white rounded-lg hover:bg-red-600"
                                    :disabled="requirements.length === 1">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                    </svg>
                                </button>
                            </div>
                        </template>

                        <button type="button" @click="requirements.push('')"
                            class="mt-2 py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-dashed border-gray-400 bg-gray-50 text-gray-600 hover:bg-gray-100 dark:bg-slate-800 dark:border-gray-600 dark:text-gray-400 dark:hover:bg-slate-700">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            Tambah Persyaratan
                        </button>

                        @error('requirements.*')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-8 flex justify-end items-center space-x-4">
                        <a href="{{ route('backsite.majlis-taklim-certificate.index') }}"
                            class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50">
                            Batal
                        </a>
                        <button type="submit"
                            class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
