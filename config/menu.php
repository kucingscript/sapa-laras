<?php

return [
    'items' => [
        [
            'label' => 'Dashboard',
            'route' => 'backsite.dashboard.index',
            'icon' =>
            '<svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="7" height="9" x="3" y="3" rx="1" /><rect width="7" height="5" x="14" y="3" rx="1" /><rect width="7" height="9" x="14" y="12" rx="1" /><rect width="7" height="5" x="3" y="16" rx="1" /></svg>',
        ],
        [
            'label' => 'Buku Tamu',
            'route' => 'backsite.guest-books.index',
            'icon' =>
            '<svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-user-icon lucide-book-user"><path d="M15 13a3 3 0 1 0-6 0"/><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20"/><circle cx="12" cy="8" r="2"/></svg>',
        ],
        [
            'label' => 'Survey Kepuasan',
            'route' => 'backsite.surveys.index',
            'icon' =>
            '<svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-notebook-pen-icon lucide-notebook-pen"><path d="M13.4 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-7.4"/><path d="M2 6h4"/><path d="M2 10h4"/><path d="M2 14h4"/><path d="M2 18h4"/><path d="M21.378 5.626a1 1 0 1 0-3.004-3.004l-5.01 5.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z"/></svg>',
        ],
        [
            'label' => 'Layanan',
            'icon' => '<svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-list"><rect width="7" height="7" x="3" y="3" rx="1" /><rect width="7" height="7" x="3" y="14" rx="1" /><path d="M14 4h7" /><path d="M14 9h7" /><path d="M14 15h7" /><path d="M14 20h7" /></svg>',
            'children' => [
                [
                    'label' => 'Sertifikat Masjid / Musholla',
                    'route' => 'backsite.mosque-permit.index',
                ],
                [
                    'label' => 'Sertifikat Majelis Taklim',
                    'route' => 'backsite.majlis-taklim-certificate.index',
                ],
                [
                    'label' => 'Sertifikat Lembaga Kesenian Islam',
                    'route' => 'backsite.islamic-art-insitution.index',
                ],
                [
                    'label' => 'Pendaftaran Haji Reguler',
                    'route' => 'backsite.hajj-regular-registration.index',
                ],
                [
                    'label' => 'Pembatalan Porsi Haji Reguler',
                    'route' => 'backsite.hajj-cancellation.index',
                ],
                [
                    'label' => 'Pelimpahan Porsi Haji Reguler',
                    'route' => 'backsite.hajj-delegation.index',
                ],
                [
                    'label' => 'Rekomendasi Izin Belajar ke Luar Negeri',
                    'route' => 'backsite.santri-study-abroad.index',
                ],
                [
                    'label' => 'Izin Operasional Ponpes',
                    'route' => 'backsite.pesantren-operational-permit.index',
                ],
                [
                    'label' => 'Izin Operasional Madin',
                    'route' => 'backsite.madin-operational-permit.index',
                ],
                [
                    'label' => 'Tanda Daftar LPQ/TPQ',
                    'route' => 'backsite.lpq-registration.index',
                ],
                [
                    'label' => 'Izin Operasional Madrasah',
                    'route' => 'backsite.madrasah-operational-permit.index',
                ],
                [
                    'label' => 'Pembuatan Akta Ikrar Waqaf',
                    'route' => 'backsite.waqf-pledge-deed.index',
                ],
            ],
        ],
    ],
];
