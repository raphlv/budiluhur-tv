<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\News;
use App\Models\Program;
use App\Models\Ticker;
use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Admin User
        User::create([
            'name' => 'Admin Budi Luhur TV',
            'email' => 'admin@budiluhur.tv',
            'password' => bcrypt('password123'),
        ]);

        // 2. Running Ticker Pengumuman Real Budiluhur TV
        Ticker::create([
            'content' => 'WELCOME TO BUDI LUHUR TV - MEDIA KAMPUS DAN KOMUNITAS KREATIF UNIVERSITAS BUDI LUHUR',
            'link_url' => null,
            'is_active' => true
        ]);
        Ticker::create([
            'content' => 'REGISTRATION CREW BLTV DIBUKA! GABUNG BERSAMA KOMUNITAS KREATIF MEDIA DAN JURNALISTIK SISWA & MAHASISWA.',
            'link_url' => '/contact',
            'is_active' => true
        ]);
        Ticker::create([
            'content' => 'TONTON SIARAN LANGSUNG (LIVE REPORT) KAMPUS HANYA DI BUDILUHUR.TV',
            'link_url' => '/live-report',
            'is_active' => true
        ]);

        // 3. Kategori Sesuai Struktur Asli
        $catMediaKampus = Category::create([
            'name' => 'Media Kampus',
            'slug' => 'media-kampus',
            'description' => 'Siaran informasi resmi, aktivitas akademik, dan liputan khusus civitas akademika Universitas Budi Luhur.'
        ]);

        $catKomunitasKreatif = Category::create([
            'name' => 'Komunitas Kreatif',
            'slug' => 'komunitas-kreatif',
            'description' => 'Wadah kreasi sinematografi, animasi, seni digital, dan karya inovasi siswa/mahasiswa.'
        ]);

        $catPembelajaranMedia = Category::create([
            'name' => 'Pembelajaran Media & Jurnalistik',
            'slug' => 'pembelajaran-media-jurnalistik',
            'description' => 'Konten edukatif seputar broadcast TV, teknik produksi video, riset redaksi, dan dunia jurnalistik.'
        ]);

        $catLiveReport = Category::create([
            'name' => 'Live Report & Event',
            'slug' => 'live-report-event',
            'description' => 'Siaran langsung wisuda, inaugurasi, festival budaya, seminar nasional, dan kompetisi kreatif.'
        ]);

        // 4. Program TV
        $progNews = Program::create([
            'category_id' => $catMediaKampus->id,
            'title' => 'BLTV Campus News & Digest',
            'slug' => 'bltv-campus-news-digest',
            'description' => 'Program berita utama yang menyampaikan kabar akademis, inovasi riset, dan prestasi terkini dari Kampus Budi Luhur.',
            'thumbnail_url' => 'https://images.unsplash.com/photo-1585829365295-ab7cd400c167?w=800&auto=format&fit=crop',
            'broadcast_schedule' => 'Setiap Senin & Kamis, 16.00 WIB',
            'host_name' => 'Tim Redaksi BLTV',
            'status' => 'Active'
        ]);

        $progTalk = Program::create([
            'category_id' => $catPembelajaranMedia->id,
            'title' => 'Kreatif Talk & Media Pod',
            'slug' => 'kreatif-talk-media-pod',
            'description' => 'Bincang interaktif bersama praktisi penyiaran, alumni, dan dosen seputar industri media & teknologi informasi.',
            'thumbnail_url' => 'https://images.unsplash.com/photo-1590602847861-f357a9332bbc?w=800&auto=format&fit=crop',
            'broadcast_schedule' => 'Rabu, 19.00 WIB',
            'host_name' => 'Crew Broadcast BLTV',
            'status' => 'Active'
        ]);

        $progLive = Program::create([
            'category_id' => $catLiveReport->id,
            'title' => 'Live Report Budi Luhur',
            'slug' => 'live-report-budi-luhur',
            'description' => 'Program siaran langsung momen istimewa Universitas Budi Luhur seperti Wisuda, Inaugurasi, dan Festival Budaya.',
            'thumbnail_url' => 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=800&auto=format&fit=crop',
            'broadcast_schedule' => 'Tentatif Event',
            'host_name' => 'Tim OB Van & Crew Lapangan',
            'status' => 'Active'
        ]);

        $progSinema = Program::create([
            'category_id' => $catKomunitasKreatif->id,
            'title' => 'Sinema Komunitas & Karya Siswa',
            'slug' => 'sinema-komunitas-karya-siswa',
            'description' => 'Ajang apresiasi dan pameran film pendek, animasi 3D, serta video dokumenter karya mahasiswa/siswa.',
            'thumbnail_url' => 'https://images.unsplash.com/photo-1485846234645-a62644f84728?w=800&auto=format&fit=crop',
            'broadcast_schedule' => 'Jumat, 20.00 WIB',
            'host_name' => 'Komunitas Kreatif BLTV',
            'status' => 'Active'
        ]);

        // 5. Videos / Broadcasts Real Youtube Stream
        Video::create([
            'program_id' => $progLive->id,
            'title' => 'LIVE REPORT: Procession Wisuda & Inaugurasi Universitas Budi Luhur',
            'slug' => 'live-report-procession-wisuda-inaugurasi-universitas-budi-luhur',
            'description' => 'Siaran langsung resmi Budi Luhur TV dari Grha Budi Luhur Jakarta Selatan.',
            'youtube_id' => 'L_LUpnjgPso',
            'thumbnail_url' => 'https://images.unsplash.com/photo-1523580494863-6f3031224c94?w=800&auto=format&fit=crop',
            'is_live' => true,
            'is_featured' => true,
            'duration' => 'LIVE STREAM',
            'views' => 6420
        ]);

        Video::create([
            'program_id' => $progNews->id,
            'title' => 'BLTV Digest: Inovasi Sains & Mobil Listrik Ramah Lingkungan Karya Budi Luhur',
            'slug' => 'bltv-digest-inovasi-sains-mobil-listrik-budi-luhur',
            'description' => 'Liputan eksklusif mengenai pengembangan teknologi riset terdepan mahasiswa Universitas Budi Luhur.',
            'youtube_id' => 'dQw4w9WgXcQ',
            'thumbnail_url' => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=800&auto=format&fit=crop',
            'is_live' => false,
            'is_featured' => true,
            'duration' => '14:25',
            'views' => 2180
        ]);

        Video::create([
            'program_id' => $progTalk->id,
            'title' => 'Kreatif Talk #05: Menjadi Broadcaster Profesional di Era Digital',
            'slug' => 'kreatif-talk-05-menjadi-broadcaster-profesional',
            'description' => 'Diskusi mendalam bersama praktisi penyiaran nasional dan alumni Budi Luhur.',
            'youtube_id' => 'dQw4w9WgXcQ',
            'thumbnail_url' => 'https://images.unsplash.com/photo-1590602847861-f357a9332bbc?w=800&auto=format&fit=crop',
            'is_live' => false,
            'is_featured' => false,
            'duration' => '22:15',
            'views' => 1140
        ]);

        // 6. News / Artikel Berita
        News::create([
            'category_id' => $catMediaKampus->id,
            'title' => 'Budi Luhur TV: Wadah Media Kampus dan Komunitas Kreatif Siswa',
            'slug' => 'budi-luhur-tv-wadah-media-kampus-dan-komunitas-kreatif',
            'summary' => 'Budi Luhur TV terus berkomitmen menghadirkan tayangan berkualitas serta sarana mengasah bakat broadcast pemuda.',
            'content' => 'JAKARTA - Budi Luhur TV (BLTV) hadir sebagai media resmi kampus dan komunitas kreatif yang berlokasi di Jakarta Selatan. Melalui berbagai program seperti Live Report, News Digest, dan Sinema Kreatif, BLTV memfasilitasi mahasiswa dan siswa untuk memproduksi konten audio visual berkualitas profesional. Selain siaran langsung kegiatan kampus, BLTV juga rutin mengadakan kelas dan workshop penyiaran.',
            'image_url' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800&auto=format&fit=crop',
            'author_name' => 'Tim Redaksi BLTV',
            'is_featured' => true,
            'views' => 1540,
            'published_at' => now()
        ]);

        News::create([
            'category_id' => $catPembelajaranMedia->id,
            'title' => 'Registration Crew BLTV: Kesempatan Bergabung Bersama Tim Media Center',
            'slug' => 'registration-crew-bltv-kesempatan-bergabung-bersama-tim-media-center',
            'summary' => 'Formulir pendaftaran dibuka untuk divisi Camera Operator, Video Editor, Host/Presenter, dan Redaksi.',
            'content' => 'Media Center Budi Luhur TV mengundang seluruh siswa & mahasiswa aktif Universitas Budi Luhur untuk menyalurkan minat di bidang broadcasting dan produksi media digital. Pendaftaran dilakukan secara online melalui menu Teams & Contact pada situs budiluhur.tv.',
            'image_url' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&auto=format&fit=crop',
            'author_name' => 'Divisi HR & Crew BLTV',
            'is_featured' => true,
            'views' => 2980,
            'published_at' => now()->subDays(1)
        ]);
    }
}
