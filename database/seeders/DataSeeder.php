<?php

namespace Database\Seeders;

use App\Models\HajjCancellation;
use App\Models\HajjDelegation;
use App\Models\HajjRegularRegistration;
use App\Models\MadinOperationalPermit;
use App\Models\MajlisTaklimCertificate;
use App\Models\MosquePermit;
use App\Models\PesantrenOperationalPermit;
use App\Models\SantriStudyAbroad;
use App\Models\WaqfPledgeDeed;
use App\Models\IslamicArtInsitution;
use App\Models\LpqRegistration;
use App\Models\MadrasahOperationalPermit;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MosquePermit::create([
            'data' => [
                "Mengisi Form Pendaftaran Masjid/Musholla",
                "Profil Masjid",
                "Struktur Organisasi Masjid",
                "Gambar Masjid",
                "Surat Keterangan Domisili dari Kelurahan",
                "Peta Lokasi Masjid"
            ]
        ]);

        MajlisTaklimCertificate::create([
            'data' => [
                "Mengisi Form Pendaftaran Majelis Taklim",
                "Surat Keterangan Domisili dari Desa",
                "Susunan Pengurus",
                "Profil Majelis Taklim",
                "Foto Kegiatan"
            ]
        ]);

        IslamicArtInsitution::create([
            'data' => [
                "Mengisi Formulir Pendaftaran Lembaga Kesenian Islam",
                "Profil Lembaga (Sejarah, Visi & Misi)",
                "Susunan Pengurus dan Anggota",
                "Anggaran Dasar/Anggaran Rumah Tangga (AD/ART)",
                "Dokumentasi Kegiatan (Foto/Video)",
                "Surat Keterangan Terdaftar dari Ormas (jika ada)"
            ]
        ]);

        HajjRegularRegistration::create([
            'data' => [
                "Beragama Islam",
                "Berusia paling rendah usia 12 tahun pada saat mendaftar",
                "Memiliki kartu keluarga",
                "Memiliki KTP sesuai domisili atau kartu identitas anak",
                "Memiliki akte lahir/buku nikah/ijazah",
                "Memiliki rekening atas nama Jamaah haji Reguler pada BPS BPIH"
            ]
        ]);

        HajjCancellation::create([
            'data' => [
                "Surat permohonan pembatalan bermaterai Rp. 10.000 dengan menyebutkan alasan pembatalan yang ditujukan kepada Kepala KanKemenag Kab. Pacitan",
                "Bukti asli setoran awal BPIH yang dikeluarkan BPS BPIH",
                "Asli aplikasi transfer setoran awal BPIH ke rekening BPKH Kemenag",
                "Surat Pendaftaran Pergi Haji (SPH)",
                "Asli dan FC buku tabungan yang masih aktif atas nama Jamaah Haji yang bersangkutan",
                "FC KTP dan aslinya",
                "Mencantumkan Nomor HP aktif"
            ]
        ]);

        HajjDelegation::create([
            'meninggal_dunia' => [
                "Salinan akte kelahiran",
                "Bukti asli setoran awal satu setoran lunas Bpih (biaya perjalanan ibadah haji)",
                "Surat kuasa asli penunjukan pelimpahan nomor porsi jamaah Haji meninggal dunia yang ditandatangani oleh suami, istri, ayah, ibu, anak kandung, atau saudara kandung yang diketahui oleh RT, RW, dan Lurah atau Kepala Desa.",
                "Surat asli keterangan tanggungjawab mutlak yang ditandatangani oleh Jamaah haji penerima pelimpahan sebagaimana format terlampir",
                "Salinan KTP, Kartu Keluarga, Akta Kelahiran/Surat kenal lahir, Salinan Akta Nikah atau bukti lain Jamaah penerima pelimpahan nomor porsi dengan menunjukkan aslinya."
            ],
            'sakit_permanen' => [
                "Surat asli keterangan sakit dari rumah sakit pemerintah",
                "Bukti asli setoran awal atau setoran lunas Bpih (biaya perjalanan ibadah haji)",
                "Surat kuasa asli menunjukkan pelimpahan nomor porsi jamaah haji sakit permanen kepada suami, istri, ayah, ibu, anak kandung, atau saudara kandung yang diketahui oleh RT, RW, dan Lurah atau Kepala Desa",
                "Surat asli keterangan tanggungjawab mutlak yang ditandatangani oleh jamaah haji penerima pelimpahan sebagaimana format terlampir",
                "Salinan KTP, Kartu Keluarga, Akta Kelahiran/Surat kenal lahir, Salinan akte nikah, atau bukti lain Jamaah penerima pelimpahan nomor porsi dengan menunjukkan aslinya.",
            ],
        ]);

        SantriStudyAbroad::create([
            'data' => [
                "Surat Permohonan dari Lembaga",
                "Asli dan FC ijazah Terakhir",
                "Fotokopi KTP atau Kartu Pelajar/Santri",
                "Fotokopi Paspor",
                "Fotokopi Kartu keluarga"
            ]
        ]);

        PesantrenOperationalPermit::create([
            'data' => [
                "Surat Permohonan Izin Operasional",
                "Akta Pendirian Yayasan dan SK Kemenkumham",
                "Profil Pondok Pesantren",
                "Susunan Pengurus/pengasuh",
                "Fotokopi KTP Pimpinan Yayasan/Pengasuh",
                "Rekomendasi KUA setempat",
                "Bukti kepemilikan atau penggunaan lahan (sertifikat/akad sewa)",
                "Foto bangunan/ruang belajar, asrama, dan sarana ibadah",
                "Daftar Santri minimal 15 orang",
                "Program kegiatan kepondokan dan pembelajaran",
                "Surat pernyataan kesanggupan menyelenggarakan pesantren sesuai syariat dan ketentuan hukum"
            ]
        ]);

        MadinOperationalPermit::create([
            'data' => [
                "Data lembaga",
                "Data Kepala MDT",
                "Data Santri",
                "Data Pendidik/Uztadz",
                "Data Tenaga kependidikan",
                "Kurikulum",
                "Data Sarana Prasarana",
                "Surat permohonan oleh lembaga",
                "Struktur Organisasi",
                "KTP Pengurus",
                "Surat Domisili",
                "Rekomendasi KUA",
                "Loyal terhadap Pancasila, UUD 1945 dan NKRI"
            ],
            'supporting_data' => [
                "Logo",
                "Foto Gedung",
                "Foto Ruang Belajar",
                "Foto sarana Prasarana",
                "Foto KBM",
                "Foto Papan nama/Plang",
                "Ruang kelas terdapat foto lambang garuda, Presiden, dan wakil Presiden",
                "Tiang bendera dan bendera Indonesia"
            ]
        ]);

        LpqRegistration::create([
            'data' => [
                "Surat Permohonan Tanda Daftar",
                "Profil LPQ",
                "Susunan Pengurus",
                "SK Kepala dan tenaga Pengajar",
                "Data kepala dan Tenaga pengajar",
                "Foto Copy Ijazah Kepala dan tenaga Pengajar",
                "Foto Copy Syahadah kepala atau tenaga pengajar",
                "Data Santri",
                "Surat keterangan tanah (Optional)",
                "Akta Notaris Yayasan (Optional)",
                "Surat Keterangan Domisili Lembaga dan Kelurahan",
                "Denah Lokasi"
            ]
        ]);

        MadrasahOperationalPermit::create([
            'data' => [
                "SK Kemenkumham",
                "Struktur Organisasi",
                "AD/ART",
                "Struktur Manajemen",
                "Kurikulum Madrasah",
                "RKM",
                "Dokumen sarpras",
                "Surat permohonan",
                "Form Pernyataan",
                "Surat Tanah",
                "Akta Notaris"
            ]
        ]);

        WaqfPledgeDeed::create([
            'wakif_perseorangan' => [
                "KTP asli dan digital (foto atau scan)",
                "Surat pernyataan bermaterai bahwa tanah tidak dalam sengketa atau dijaminkan",
                "Surat pernyataan wakaf bersama (jika mewakili suatu kelompok, keluarga, atau lainnya)",
                "Fotokopi dan digital (foto atau scan) dokumen bukti pendukung keterikatan antar para pemilik tanah (jika mewakili suatu kelompok, keluarga, atau lainnya)"
            ],
            'wakif_organisasi' => [
                "Fotokopi dan digital (scan) surat keterangan terdaftar pada instansi yang mengatur tentang organisasi yang masih berlaku",
                "Fotokopi dan digital (scan) surat keputusan pengurus organisasi dari pusat atau cabang yang mewakili pengurusan wakaf atau surat kuasa asli bermaterai dan digital penunjukan perwakilan",
                "KTP asli dan digital (foto atau scan) perwakilan yang ditunjuk",
                "Surat pernyataan bahwa tanah yang dimiliki tidak dalam sengketa atau dijaminkan"
            ],
            'wakif_badan_hukum' => [
                "Fotokopi dan digital (scan) surat pengesahan pendirian badan hukum",
                "Fotokopi dan digital (scan)surat keputusan pengurus badan hukum dari pusat atau cabang yang mewakili kepengurusan wakaf atau surat kuasa asli bermaterai dan digital penunjukan perwakilan",
                "KTP asli dan digital (foto atau scan) perwakilan yang ditunjuk",
                "Surat pernyataan bahwa tanah yang dimiliki tidak sedang dalam sengketa atau dijaminkan"
            ],
            'nazhir_perseorangan' => [
                "KTP asli dan digital (foto atau scan) 3 orang yang ditunjuk",
                "Surat kesediaan menjadi Nazhir (yang ditandatangani 3 nama yang didaftarkan di AIW)",
                "Surat pernyataan bersedia diaudit"
            ],
            'nazhir_organisasi' => [
                "KTP asli dan digital (foto atau scan) perwakilan yang ditunjuk untuk peristiwa ikrar wakaf",
                "Fotokopi dan digital (scan) surat keterangan terdaftar pada instansi yang mengatur organisasi yang masih berlaku",
                "Fotokopi dan digital (scan) surat keputusan pengurus organisasi yang memuat nama perwakilan organisasi atau surat kuasa asli bermaterai dan digital (scan)",
                "Fotokopi dan digital (scan) akta notaris",
                "Fotokopi dan digital (scan) daftar susunan pengurus",
                "Fotokopi dan digital (scan) program kerja pengembangan wakaf",
                "Dokumen asli dan digital (scan) daftar kekayaan yang berasal dari harta wakaf",
                "Dokumen asli dan digital (scan) surat pernyataan bersedia diaudit"
            ],
            'nazhir_badan_hukum' => [
                "KTP asli dan digital (foto atau scan) perwakilan yang ditunjuk untuk peristiwa ikrar wakaf",
                "Fotokopi dan scan surat pengesahan badan hukum yang dikeluarkan oleh Instansi",
                "Fotokopi dan scan surat keputusan pengurus badan hukum yang memuat nama perwakilan atau surat kuasa asli bermaterai",
                "Fotokopi dan scan akta notaris tentang pendirian dan anggaran dasar",
                "Fotokopi dan scan daftar susunan pengurus pusat",
                "Fotokopi dan scan anggaran rumah tangga",
                "Dokumen asli dan scan program kerja dalam pengembangan wakaf",
                "Dokumen asli dan scan daftar kekayaan yang berasal dari harta wakaf",
                "Dokumen asli dan scan surat pernyataan bersedia diaudit"
            ],
            'tanah_diwakafkan' => [
                "Dokumen kepemilikan/kuasa asli dan scan atas bidang tanah yang diwakafkan atas nama wakif",
                "Dokumen dukung asli dan scan perpindahan kepemilikan kuasa tanah jika nama tertulis pada bukti kuasa tanah bukan atas nama wakif"
            ],
            'saksi' => [
                "KTP asli dan digital (foto atau scan) 2 (dua) orang yang ditunjuk sebagai saksi ikrar wakaf"
            ],
        ]);
    }
}
