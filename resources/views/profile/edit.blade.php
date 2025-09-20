@extends('layouts.app')
@section('title', 'Profile')

@section('content')
    <div class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">

            <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">

                <div class="mb-8">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-gray-200">
                        Pengaturan Profil
                    </h2>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Perbarui informasi profil, kata sandi, dan kelola akun Anda.
                    </p>
                </div>

                <div class="space-y-8">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>

                    <hr class="border-gray-200 dark:border-neutral-700">

                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>

                    <hr class="border-gray-200 dark:border-neutral-700">
                </div>
            </div>
        </div>
    </div>
@endsection
