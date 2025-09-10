@section('title', 'Login')

<x-guest-layout>
    <div class="mb-8 text-left">
        <a href="/" class="inline-flex items-center gap-x-3">
            <img src="{{ asset('images/logo.webp') }}" alt="Logo" class="w-16 sm:w-20 h-auto">
            <div class="mt-1">
                <h2 class="text-xl sm:text-2xl font-bold text-gray-900 dark:text-white">
                    Login ke Akun Anda
                </h2>
                <p class="text-sm text-gray-600 dark:text-neutral-400">
                    Selamat datang kembali!
                </p>
            </div>
        </a>
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <div>
            <x-input-label for="email" value="Email" />
            <x-text-input id="email" class="block w-full mt-1 p-2" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" placeholder="mail@email.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <div class="flex items-center justify-between">
                <x-input-label for="password" value="Password" />
            </div>
            <x-text-input id="password" class="block w-full mt-1 p-2" type="password" name="password" required
                autocomplete="current-password" placeholder="Masukkan password Anda" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center">
            <input id="remember_me" type="checkbox"
                class="text-blue-600 border-gray-300 rounded shadow-sm focus:ring-blue-500 dark:border-neutral-600 dark:bg-neutral-700 dark:focus:ring-blue-600 dark:focus:ring-offset-neutral-800"
                name="remember">
            <label for="remember_me" class="ms-2 text-sm text-gray-600 dark:text-neutral-400">
                Ingat saya
            </label>
        </div>

        <div class="pt-2">
            <x-primary-button class="w-full justify-center text-base py-3">
                Login
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
