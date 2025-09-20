@extends('layouts.front')
@section('title', 'Home')

@section('content')
    @include('components.frontsite.header')
    <main>
        @include('components.frontsite.hero')
        @include('components.frontsite.fliphtml')
        @include('components.frontsite.maklumat')
        @include('components.frontsite.zone-integrity')
        @include('components.frontsite.service')
        @include('components.frontsite.contact')
    </main>
    @include('components.frontsite.footer')
@endsection

@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const header = document.getElementById('main-header');
            const scrollThreshold = 50;

            window.addEventListener('scroll', () => {
                if (window.scrollY > scrollThreshold) {
                    header.classList.add('bg-white', 'shadow-lg');
                } else {
                    header.classList.remove('bg-white', 'shadow-lg');
                }
            });
        })

        document.addEventListener("DOMContentLoaded", () => {
            const activeClasses = ["text-black", "border-secondary"];
            const inactiveClasses = ["text-secondary", "border-transparent"];

            const navLinks = document.querySelectorAll(
                '#navbar-collapse-with-animation a[href*="#"]'
            );

            const updateActiveLink = (targetId) => {
                navLinks.forEach((link) => {
                    if (!link.getAttribute("href").includes("#")) return;

                    link.classList.remove(...activeClasses);
                    link.classList.add(...inactiveClasses);

                    if (link.getAttribute("href").endsWith(`#${targetId}`)) {
                        link.classList.add(...activeClasses);
                        link.classList.remove(...inactiveClasses);
                    }
                });
            };

            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            updateActiveLink(entry.target.getAttribute("id"));
                        }
                    });
                }, {
                    rootMargin: "-40% 0px -60% 0px",
                    threshold: 0,
                }
            );

            navLinks.forEach((link) => {
                const sectionId = link.getAttribute("href").split("#")[1];
                if (sectionId) {
                    const section = document.getElementById(sectionId);
                    if (section) {
                        observer.observe(section);
                    }
                }
            });
        });
    </script>
@endpush
