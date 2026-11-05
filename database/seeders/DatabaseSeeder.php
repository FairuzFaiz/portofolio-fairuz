<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. User Admin untuk login dashboard /admin
        User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin Faiz',
                'password' => Hash::make('password'),
            ]
        );

        // Bersihkan tabel projects sebelum seeding agar data tidak duplikat
        Project::truncate();

        // 2. Proyek Web Development Baru (Halloka & Bina Auladi)
        Project::create([
            'title' => 'Halloka - SaaS AI & Bio Link',
            'description' => "Platform bio link cerdas dengan fitur katalog produk instan dan asisten AI chat WhatsApp 24/7.\n\n**Peran Saya (QA - Quality Assurance):**\nBertanggung jawab melakukan pengujian fungsionalitas automasi chat AI, lead capture WhatsApp, pengujian antarmuka mobile responsif, hingga integrasi transaksi katalog WooCommerce.",
            'category' => 'Web Development',
            'tools' => 'WordPress, cPanel, WooCommerce, AI WhatsApp',
            'image' => 'halloka', // Folder public/uploads/halloka
        ]);

        Project::create([
            'title' => 'Sekolah Bina Auladi - Website RA & SDIT',
            'description' => "Website resmi institusi pendidikan Islam terpadu Raudhatul Athfal (RA) dan SDIT Bina Auladi, lengkap dengan sistem SPMB (Sistem Penerimaan Murid Baru) online dan manajemen artikel berita SEO.\n\n**Peran Saya (Fullstack Developer):**\nMengelola struktur kustom tema WordPress, integrasi form SPMB online, hosting & server cPanel, manajemen database, hingga optimasi performa dan SEO web sekolah.",
            'category' => 'Web Development',
            'tools' => 'WordPress, cPanel, SEO, PHP',
            'image' => 'auladi', // Folder public/uploads/auladi
        ]);

        // 3. Proyek Web Development Lainnya
        Project::create([
            'title' => 'UniEarn Platform',
            'description' => "UniEarn adalah platform web interaktif yang menghubungkan mahasiswa dengan proyek freelance dan memudahkan recruiter mencari talenta muda.\n\n**Kontribusi Saya:**\n- Pembuatan tampilan user Recruiter\n- High-fidelity visual desain web\n- Integrasi frontend & video promosi",
            'category' => 'Web Development',
            'tools' => 'Figma, Frontend Tech, Laravel, Git',
            'image' => 'uniearn', // Folder public/uploads/uniearn
        ]);

        Project::create([
            'title' => 'Luxure Personalization Programme',
            'description' => "Platform e-commerce pakaian kustom yang memberikan pengalaman berbelanja personal dengan fitur custom warna, bahan, desain pakaian, dan perhitungan ongkir otomatis.\n\n**Kontribusi Saya:**\n- Frontend development\n- Perancangan kerangka website di Figma\n- Database schema design & bug fixing",
            'category' => 'Web Development',
            'tools' => 'PHP, Frontend Tech, Figma, MySQL',
            'image' => 'luxure', // Folder public/uploads/luxure
        ]);

        Project::create([
            'title' => 'WarasFarm - Website Pertanian Modern',
            'description' => "Aplikasi web katalog dan sistem informasi untuk manajemen operasional serta pemasaran produk pertanian modern WarasFarm.",
            'category' => 'Web Development',
            'tools' => 'Web Development, Canva',
            'image' => 'warasfarm', // Folder public/uploads/warasfarm
        ]);

        // 4. Proyek UI/UX Design
        Project::create([
            'title' => 'Sistem Informasi PT Katiga Veritas',
            'description' => "Perancangan sistem informasi terpusat untuk mengelola data pelatihan K3, database peserta, jadwal, dan penerbitan sertifikat digital dengan verifikasi QR Code.\n\n**Peran Saya:** UI/UX Designer (Figma Prototyping & Design System)",
            'category' => 'UI/UX Design',
            'tools' => 'Figma, Prototyping, Web Technologies',
            'image' => 'katiga', // Folder public/uploads/katiga
        ]);

        // 5. Proyek Graphic Design
        Project::create([
            'title' => 'DKV Universitas Aisyiyah',
            'description' => "Pembuatan materi grafis dinamis, poster promosi akademik, dan feed konten media sosial resmi untuk Program Studi DKV Unisa Bandung.",
            'category' => 'Graphic Design',
            'tools' => 'Canva, Graphic Design, Social Media',
            'image' => 'dkv-unisa', // Folder public/uploads/dkv-unisa
        ]);

        Project::create([
            'title' => 'Mahir Sunat Bandung',
            'description' => "Manajemen konten dan desain grafis kreatif untuk media sosial promosi layanan khitan modern bagi klinik medis Mahir Sunat Bandung.",
            'category' => 'Graphic Design',
            'tools' => 'Canva, Social Media Branding',
            'image' => 'mahir-sunat', // Folder public/uploads/mahir-sunat
        ]);

        Project::create([
            'title' => 'Klinik Cigading Medika',
            'description' => "Perancangan konten visual edukasi kesehatan dan materi promosi klinis untuk Instagram dan media informasi Klinik Cigading Medika.",
            'category' => 'Graphic Design',
            'tools' => 'Canva, Social Media Marketing',
            'image' => 'cimed', // Folder public/uploads/cimed
        ]);

        Project::create([
            'title' => 'Wanten Sunat - Konten Media Sosial',
            'description' => "Pembuatan visual kreatif, materi edukatif anak, dan konten feed promosi layanan khitan untuk Wanten Sunat.",
            'category' => 'Graphic Design',
            'tools' => 'Canva, Creative Content',
            'image' => 'wanten-sunat', // Folder public/uploads/wanten-sunat
        ]);
    }
}
