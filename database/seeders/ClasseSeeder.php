<?php

namespace Database\Seeders;

use App\Models\Classe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Classe::create([
            'name' => 'Kelas Membuat Desain Kemasan Produk dengan Canva',
            'image' => 'assets/kelas/kelas1.png',
            'slug' => 'https://www.luarsekolah.com/kelas/membuat-desain-kemasan-produk-dengan-canva',
            'total_rating' => '4.9',
            'price' => 'Rp 1.200.000',
            'price_discount' => 'Rp 720.000',
            'discount' => 'Diskon 40%',
            'mentor_id' => 'Ahmad Abrar',
            'description' => 'Kelas 1',
            'category_id' => 'Teknologi',
            'tag_id' => 'Teknologi',
        ]);
        Classe::create([
            'name' => 'Kelas Membuat Desain Logo untuk Designer Grafis',
            'image' => 'assets/kelas/kelas2.png',
            'slug' => 'https://www.luarsekolah.com/kelas/membuat-desain-logo-untuk-designer-grafis',
            'total_rating' => '4.9',
            'price' => 'Rp 1.500.000',
            'price_discount' => 'Rp 900.000',
            'discount' => 'Diskon 40%',
            'mentor_id' => 'Mutiara Rahmani',
            'description' => 'Kelas 2',
            'category_id' => 'Desain',
            'tag_id' => 'Desain',
        ]);

        Classe::create([
            'name' => 'Menganalisa prilaku konsumen untuk Spesialis Pemasaran',
            'image' => 'assets/kelas/kelas3.png',
            'slug' => 'https://www.luarsekolah.com/kelas/menganalisa-prilaku-konsumen-untuk-spesialis-pemasaran',
            'total_rating' => '4.9',
            'price' => 'Rp 1.200.000',
            'price_discount' => 'Rp 720.000',
            'discount' => 'Diskon 30%',
            'mentor_id' => 'Bambang Taupiqurrohman',
            'description' => 'Kelas 3',
            'category_id' => 'Pemasaran',
            'tag_id' => 'Pemasaran',
        ]);

        Classe::create([
            'name' => 'Memasarkan di facebook Ads untuk spesialis pemasaran digital',
            'image' => 'assets/kelas/kelas4.png',
            'slug' => 'https://www.luarsekolah.com/kelas/memasarkan-di-facebook-ads-untuk-spesialis-pemasaran-digital',
            'total_rating' => '4.9',
            'price' => 'Rp 1.000.000',
            'price_discount' => 'Rp 700.000',
            'discount' => 'Diskon 30%',
            'mentor_id' => 'Ahmad Abrar',
            'description' => 'Kelas 4',
            'category_id' => 'Pemasaran',
            'tag_id' => 'Pemasaran',
        ]);
    }
}
