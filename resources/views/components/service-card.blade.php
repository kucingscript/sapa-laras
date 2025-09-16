@props(['url', 'image', 'title', 'description'])

<a {{ $attributes->merge(['class' => 'group block bg-white shadow-lg rounded-xl overflow-hidden transition-transform transform hover:-translate-y-1']) }}
    href="{{ $url }}">

    <div class="flex items-center justify-center h-48 bg-secondary/10">
        <img class="h-24 w-24" src="{{ $image }}" alt="{{ $title }}">
    </div>

    <div class="p-5">
        <h3 class="text-lg font-bold text-secondary">
            {{ $title }}
        </h3>
        <p class="mt-2 text-sm text-neutral-600">
            {{ $description }}
        </p>
        <span
            class="mt-4 inline-flex items-center gap-x-1.5 text-sm font-semibold text-secondary decoration-2 group-hover:underline">
            Lebih Lanjut
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2400/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="m9 18 6-6-6-6" />
            </svg>
        </span>
    </div>
</a>
