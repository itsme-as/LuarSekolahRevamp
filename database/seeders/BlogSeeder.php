<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Blog::create([
            'title' => 'Satu Langkah di Depan Menuju Karir Impian dengan Belajar Bekerja',
            'content' => 'Apakah kamu ingin meningkatkan skill sekaligus mendapatkan peluang karir yang nyata? Sekarang saatnya ambil langkah besar bersama Belajar Bekerja',
            'image' => 'assets/blog1.png',
            'slug' => '/blog/satu-langkah-di-depan-menuju-karir-impian-dengan-belajar-bekerja',
            'tag_id' => 'Marketing',
            'date' => '12 September 2025',
        ]);
        Blog::create([
            'title' => 'Kolaborasi Luarsekolah x CDC Universitas Sriwijaya Career Pathway',
            'content' => 'Luarsekolah bersama Career Development Center (CDC) Univesitas Sriwijaya sukses menyelenggarakan webinar dengan tema "Career Pathway:The Future Starts."',
            'image' => 'assets/blog2.png',
            'slug' => '/blog/kolaborasi-luarsekolah-x-cdc-universitas-sriwijaya-career-pathway',
            'tag_id' => 'Komunitas',
            'date' => '11 September 2025',
        ]);
        Blog::create([
            'title' => 'Kolaborasi Luarsekolah x Kementrian Ekonomi Kreatif',
            'content' => 'Di tengah persaingan dunia kerja yang semakin ketat, persiapan karir menjadi langkah penting bagi mahasiswa maupun fresh graduate untuk lebih percaya diri.',
            'image' => 'assets/blog3.png',
            'slug' => '/blog/kolaborasi-luarsekolah-x-kementrian-ekonomi-kreatif',
            'tag_id' => 'Komunitas',
            'date' => '08 September 2025',
        ]);
        Blog::create([
            'title' => 'Siap  Kerja Lebih Cepat? Ikuti Belajar Bekerja Bootcamp dan Prakerja',
            'content' => 'Persaingan dunia kerja semakin ketat. Perusahaan kini mencari talenta yang siap kerja, punya skill relevan, dan mampu langsung beradaptasi dengan kebutuhan',
            'image' => 'assets/blog4.png',
            'slug' => '/blog/siap-kerja-lebih-cepat-ikuti-belajar-bekerja-bootcamp-dan-prakerja',
            'tag_id' => 'Job Connector',
            'date' => '03 September 2025',
        ]);
    }
}
