@forelse ($data as $d)
    <div class="space-y-6">
        <div class="grid grid-cols-1 gap-6">
            <div
                class="flex flex-col bg-white shadow-md rounded-xl dark:bg-slate-900 border border-transparent dark:border-gray-700">
                <div class="bg-gray-100 rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:bg-slate-800">
                    <p class="mt-1 text-sm font-bold text-gray-800 dark:text-gray-200">
                        Persyaratan Layanan
                    </p>
                </div>
                <div class="p-4 md:p-5 space-y-4">
                    <div>
                        <ol class="list-decimal list-inside text-sm text-gray-600 dark:text-gray-400 space-y-1">
                            @foreach ($d->data as $item)
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

<div class="mt-5">
    {{ $data->links() }}
</div>
