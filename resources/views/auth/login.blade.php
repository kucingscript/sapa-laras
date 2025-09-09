<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-neutral-900">
        <div class="w-full max-w-md p-6 mx-4 bg-white rounded-lg shadow-md sm:p-8 dark:bg-neutral-800">

            <div class="mb-8 text-center">
                <a href="/" class="inline-block">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-20 h-auto mx-auto">
                </a>
                <h2 class="mt-4 text-2xl font-bold text-gray-900 dark:text-white">
                    Login ke Akun Anda
                </h2>
                <p class="mt-1 text-sm text-gray-600 dark:text-neutral-400">
                    Selamat datang kembali! Silakan masukkan data Anda.
                </p>
            </div>


            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <div>
                    <x-input-label for="email" value="Email" />
                    <x-text-input id="email" class="block w-full mt-1" type="email" name="email"
                        :value="old('email')" required autofocus autocomplete="username" placeholder="contoh@email.com" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <x-input-label for="password" value="Password" />
                        @if (Route::has('password.request'))
                            <a class="text-sm text-blue-600 hover:underline dark:text-blue-500"
                                href="{{ route('password.request') }}">
                                Lupa password?
                            </a>
                        @endif
                    </div>
                    <x-text-input id="password" class="block w-full mt-1" type="password" name="password" required
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
                    <x-primary-button class="w-full justify-center">
                        Login
                    </x-primary-button>
                </div>

                @if (Route::has('register'))
                    <p class="text-sm text-center text-gray-600 dark:text-neutral-400">
                        Belum punya akun?
                        <a href="{{ route('register') }}"
                            class="font-medium text-blue-600 hover:underline dark:text-blue-500">
                            Daftar di sini
                        </a>
                    </p>
                @endif
            </form>
        </div>
    </div>
</x-guest-layout>
