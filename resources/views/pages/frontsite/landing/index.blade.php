@extends('layouts.front')
@section('title', 'Home')

@section('content')
    @include('components.frontsite.header')
    <main>
        @include('components.frontsite.hero')
        @include('components.frontsite.maklumat')
        @include('components.frontsite.zone-integrity')
        @include('components.frontsite.service')
        @include('components.frontsite.contact')
    </main>
    @include('components.frontsite.footer')
@endsection

@push('script')
    <script>
        const header = document.getElementById('main-header');
        const scrollThreshold = 50;

        window.addEventListener('scroll', () => {
            if (window.scrollY > scrollThreshold) {
                header.classList.add('bg-white', 'shadow-lg');
            } else {
                header.classList.remove('bg-white', 'shadow-lg');
            }
        });
    </script>
@endpush
