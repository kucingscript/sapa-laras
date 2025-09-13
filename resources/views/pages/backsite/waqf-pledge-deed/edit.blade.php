@extends('layouts.app')
@section('title', 'Edit Akta Ikrar Wakaf')

@section('content')
    <div class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">

            <div class="bg-white rounded-xl shadow-lg p-6 sm:p-8 mt-5 dark:bg-slate-900">
                <h2 class="text-xl sm:text-2xl font-bold text-gray-800 dark:text-gray-200 mb-6">
                    Formulir Edit Persyaratan Akta Ikrar Wakaf
                </h2>

                <form action="{{ route('backsite.waqf-pledge-deed.update', $waqfPledgeDeed->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    @php
                        function renderDynamicSection($title, $columnName, $model, $placeholder, $errors)
                        {
                            $itemsArray = old($columnName, $model->{$columnName} ?? ['']);
                            if (empty($itemsArray)) {
                                $itemsArray = [''];
                            }
                            $items = json_encode($itemsArray);

                            $fieldErrors = [];
                            if ($errors->has("{$columnName}.*")) {
                                foreach ($errors->get("{$columnName}.*") as $key => $messages) {
                                    $fieldErrors[$key] = $messages[0];
                                }
                            }
                            $errorsJson = json_encode($fieldErrors);
                            $columnNameJson = json_encode($columnName);

                            echo <<<HTML
                                <div class="mb-10" x-data='{ "items": $items, "errors": $errorsJson, "columnName": $columnNameJson }'>
                                    <label class="block text-base font-medium text-gray-800 dark:text-gray-200 mb-5 border-b-2 border-blue-600 pb-2">
                                        $title <span class="text-red-600">*</span>
                                    </label>

                                    <template x-for="(item, index) in items" :key="index">
                                        <div class="mb-3">
                                            <div class="flex items-center space-x-2 text-sm">
                                                <input type="text" name="{$columnName}[]" x-model="items[index]"
                                                    :class="{ 'border-red-500': errors[columnName + '.' + index] }"
                                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-800 dark:border-gray-700 dark:text-gray-300"
                                                    placeholder="$placeholder">

                                                <button type="button" @click="items.splice(index, 1)"
                                                    class="p-2 bg-red-500 text-white rounded-lg hover:bg-red-600"
                                                    :disabled="items.length === 1">
                                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" /></svg>
                                                </button>
                                            </div>
                                            <p x-show="errors[columnName + '.' + index]" x-text="errors[columnName + '.' + index]" class="text-red-500 text-xs mt-1"></p>
                                        </div>
                                    </template>

                                    <button type="button" @click="items.push('')"
                                        class="mt-2 py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-dashed border-gray-400 bg-gray-50 text-gray-600 hover:bg-gray-100 dark:bg-slate-800 dark:border-gray-600 dark:text-gray-400 dark:hover:bg-slate-700">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg>
                                        Tambah
                                    </button>
                                </div>
                            HTML;
                        }
                    @endphp

                    {{-- Render semua bagian secara dinamis --}}
                    @php
                        renderDynamicSection(
                            'Wakif Perseorangan',
                            'wakif_perseorangan',
                            $waqfPledgeDeed,
                            'Contoh: Surat Permohonan Izin',
                            $errors,
                        );
                        renderDynamicSection(
                            'Wakif Organisasi',
                            'wakif_organisasi',
                            $waqfPledgeDeed,
                            'Contoh: Surat Permohonan Izin',
                            $errors,
                        );
                        renderDynamicSection(
                            'Wakif Badan Hukum',
                            'wakif_badan_hukum',
                            $waqfPledgeDeed,
                            'Contoh: Surat Permohonan Izin',
                            $errors,
                        );
                        renderDynamicSection(
                            'Nazhir Perseorangan',
                            'nazhir_perseorangan',
                            $waqfPledgeDeed,
                            'Contoh: Surat Permohonan Izin',
                            $errors,
                        );
                        renderDynamicSection(
                            'Nazhir Organisasi',
                            'nazhir_organisasi',
                            $waqfPledgeDeed,
                            'Contoh: Surat Permohonan Izin',
                            $errors,
                        );
                        renderDynamicSection(
                            'Nazhir Badan Hukum',
                            'nazhir_badan_hukum',
                            $waqfPledgeDeed,
                            'Contoh: Surat Permohonan Izin',
                            $errors,
                        );
                        renderDynamicSection(
                            'Tanah yang Diwakafkan',
                            'tanah_diwakafkan',
                            $waqfPledgeDeed,
                            'Contoh: Surat Permohonan Izin',
                            $errors,
                        );
                        renderDynamicSection(
                            'Saksi',
                            'saksi',
                            $waqfPledgeDeed,
                            'Contoh: Surat Permohonan Izin',
                            $errors,
                        );
                    @endphp


                    <div class="mt-8 flex justify-end items-center space-x-4">
                        <a href="{{ route('backsite.waqf-pledge-deed.index') }}"
                            class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800">
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
