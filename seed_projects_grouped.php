<?php
use App\Models\Project;
use Illuminate\Support\Facades\DB;

DB::table('projects')->truncate();

$baseDir = public_path('uploads');
$groups = [
    'cimed' => ['Cimed Single Image.png', 'Postingan Hari Raya Klinik.png'],
    'dkv-unisa' => ['DKV Single Image (1).png', 'DKV Single Image (2).png', 'DKV Single Image (3).png', 'DKV Single Image (4).png', 'DKV Single Image (5).png', 'DKV Single Image (6).png', 'Postingan Hari Raya DKV.png'],
    'mahir-sunat' => ['Mahir Single Image (1).png', 'Mahir Single Image (2).png', 'Mahir Single Image (3).png', 'Mahir Single Image (4).png'],
    'wanten-sunat' => ['Single Image Wanten Sunat (1).png', 'Single Image Wanten Sunat (2).png'],
    'warasfarm' => ['Single Image WarasFarm.png'],
    'luxure' => []
];

foreach ($groups as $folder => $files) {
    $dir = $baseDir . '/' . $folder;
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
    foreach ($files as $file) {
        if (file_exists($baseDir . '/' . $file)) {
            rename($baseDir . '/' . $file, $dir . '/' . $file);
        }
    }
}

$projects = [
    [
        'title' => 'UniEarn Platform',
        'category' => 'Web Development',
        'tools' => 'Figma, Frontend Tech',
        'link' => 'https://github.com/Phirkuadrat/UniEarn',
        'image' => 'uploads/uniearn',
        'description' => "UniEarn adalah platform web yang menghubungkan mahasiswa dengan proyek freelance dan memudahkan recruiter mencari talenta muda. Mahasiswa dapat membangun portofolio, berkolaborasi, dan menerima ulasan. Recruiter dapat membuat proyek, memfilter keahlian, dan merekrut secara efisien.\n\n**Kontribusi Saya:**\n- Pembuatan tampilan user Recruiter\n- Membuat High-fidelity desain web\n- Pembuatan video promosi",
        'date' => now(),
    ],
    [
        'title' => 'Sistem Informasi PT Katiga Veritas',
        'category' => 'UI/UX Design',
        'tools' => 'Figma, Web Technologies',
        'link' => 'https://github.com/apahfahri/Veritas-Web-Project',
        'image' => 'uploads/katiga',
        'description' => "Website sistem informasi untuk mengelola data pelatihan secara terpusat, menggantikan proses manual WhatsApp/email. Fitur utama meliputi database peserta, manajemen jadwal, dan penerbitan sertifikat digital dengan QR/barcode yang dapat diverifikasi keasliannya.\n\n**Peran Saya:** UI/UX Designer",
        'date' => now(),
    ],
    [
        'title' => 'Luxure Personalization Programme',
        'category' => 'Web Development',
        'tools' => 'Frontend Tech, Figma',
        'link' => 'https://github.com/fhadzr/Luxure-Personalization-Programme',
        'image' => 'uploads/luxure',
        'description' => "Platform e-commerce untuk Luxure Personalization Programme yang memberikan pengalaman belanja personal, memungkinkan pelanggan mendesain bahan, warna, dan gambar pakaian kustom mereka sendiri. Memiliki fitur transaksi, manajemen produk, hingga perhitungan ongkir otomatis.\n\n**Kontribusi Saya:**\n- Menentukan story point\n- Membuat Desain kerangka website pada figma\n- Membuat database\n- Menghandle bagian frontend web\n- Mengumpulkan source gambar - UI Web\n- Mengatasi report bug dari QA",
        'date' => now(),
    ],
    [
        'title' => 'DKV Universitas Aisyiyah',
        'category' => 'Graphic Design',
        'tools' => 'Canva',
        'link' => '#',
        'image' => 'uploads/dkv-unisa',
        'description' => 'Desain konten dinamis dan profesional untuk DKV Universitas Aisyiyah Bandung.',
        'date' => now(),
    ],
    [
        'title' => 'Mahir Sunat Bandung',
        'category' => 'Graphic Design',
        'tools' => 'Canva',
        'link' => '#',
        'image' => 'uploads/mahir-sunat',
        'description' => 'Manajemen konten dan desain grafis kreatif untuk media sosial Mahir Sunat Bandung.',
        'date' => now(),
    ],
    [
        'title' => 'Klinik Cigading Medika',
        'category' => 'Graphic Design',
        'tools' => 'Canva',
        'link' => '#',
        'image' => 'uploads/cimed',
        'description' => 'Desain konten kesehatan dan pemasaran klinis untuk Klinik Cigading Medika.',
        'date' => now(),
    ],
    [
        'title' => 'Wanten Sunat',
        'category' => 'Graphic Design',
        'tools' => 'Canva',
        'link' => '#',
        'image' => 'uploads/wanten-sunat',
        'description' => 'Visual kreatif dan informatif untuk layanan Wanten Sunat.',
        'date' => now(),
    ],
    [
        'title' => 'WarasFarm',
        'category' => 'Graphic Design',
        'tools' => 'Canva',
        'link' => '#',
        'image' => 'uploads/warasfarm',
        'description' => 'Desain visual untuk kampanye promosi WarasFarm.',
        'date' => now(),
    ],
];

foreach ($projects as $project) {
    Project::create($project);
}

echo "Database grouped and seeded successfully!\n";
