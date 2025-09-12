@extends('layouts.front')
@section('title', 'Dashboard')

@section('content')
    @include('components.frontsite.header')
    <main class="bg-slate-50">
        @include('components.frontsite.hero')
        @include('components.frontsite.service')
        @include('components.frontsite.contact')
    </main>
    @include('components.frontsite.footer')
@endsection
