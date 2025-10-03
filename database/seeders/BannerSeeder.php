<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Banner::create([
            'image' => 'assets/promo1.png',
            'link' => 'https://pbi.belajarbekerja.com/',
        ]);
        Banner::create([
            'image' => 'assets/promo2.png',
            'link' => 'https://belajarbekerja.com/',
        ]);
        Banner::create([
            'image' => 'assets/promo3.png',
            'link' => 'https://luarsekolah.com/',
        ]);
    }
}
