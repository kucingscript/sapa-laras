@if (session('alert'))
    @php
        $alert = session('alert');
        $type = $alert['type'] ?? 'info';
        $title = $alert['title'] ?? '';
        $message = $alert['message'] ?? '';

        $styleConfig = [
            'success' => [
                'bg' => 'bg-teal-50 border-teal-200 dark:bg-teal-800/30 dark:border-teal-700',
                'icon' => 'text-teal-500',
                'title' => 'text-teal-800 dark:text-teal-500',
                'text' => 'text-teal-700 dark:text-gray-300',
            ],
            'error' => [
                'bg' => 'bg-red-50 border-red-200 dark:bg-red-800/30 dark:border-red-700',
                'icon' => 'text-red-500',
                'title' => 'text-red-800 dark:text-red-500',
                'text' => 'text-red-700 dark:text-gray-300',
            ],
        ][$type];
    @endphp

    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-2"
        x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform translate-y-2"
        class="fixed top-8 right-8 z-[100] w-full max-w-sm p-4 rounded-xl border {{ $styleConfig['bg'] }}"
        role="alert">
        <div class="flex">
            <div class="flex-shrink-0">
                @if ($type === 'success')
                    <svg class="flex-shrink-0 size-4 {{ $styleConfig['icon'] }} mt-0.5"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                        <path d="m9 12 2 2 4-4"></path>
                    </svg>
                @elseif($type === 'error')
                    <svg class="flex-shrink-0 size-4 {{ $styleConfig['icon'] }} mt-0.5"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" x2="12" y1="8" y2="12"></line>
                        <line x1="12" x2="12.01" y1="16" y2="16"></line>
                    </svg>
                @endif
            </div>
            <div class="ms-3">
                <h3 class="font-semibold {{ $styleConfig['title'] }}">
                    {{ $title }}
                </h3>
                <p class="text-sm {{ $styleConfig['text'] }}">
                    {{ $message }}
                </p>
            </div>
            <div class="ps-3 ms-auto">
                <div class="-mx-1.5 -my-1.5">
                    <button @click="show = false" type="button"
                        class="inline-flex bg-transparent rounded-lg p-1.5 text-gray-500 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-gray-300 dark:hover:bg-slate-700 dark:text-gray-400">
                        <span class="sr-only">Dismiss</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endif
