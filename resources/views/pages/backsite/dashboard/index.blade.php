@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
    <div class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
            <div class="relative bg-gradient-to-r from-blue-600 to-indigo-700 h-60 rounded-xl overflow-hidden">
                <div class="absolute inset-0">
                    <div class="absolute top-0 -left-48 w-96 h-96 bg-white/10 rounded-full filter blur-3xl opacity-60"></div>
                    <div class="absolute bottom-0 -right-24 w-80 h-80 bg-white/15 rounded-full filter blur-3xl opacity-50">
                    </div>
                </div>

                <div class="relative h-full flex flex-col justify-between p-6 lg:p-8">
                    <div>
                        <h1 class="text-3xl lg:text-4xl font-bold text-white mb-2">
                            Selamat Datang Kembali, {{ $userName }}!
                        </h1>
                        <p class="text-lg text-white/90">
                            Semoga harimu menyenangkan.
                        </p>
                    </div>
                    <div class="flex items-center gap-x-2 text-sm text-white/80">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>{{ $todayDate }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
