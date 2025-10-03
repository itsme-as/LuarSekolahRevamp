<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Faq::create([
            'icon' => 'fa-solid fa-cart-shopping',
            'question' => 'Pembelian pelatihan',
            'answer' => 'https://pbi.belajarbekerja.com/',
        ]);
        Faq::create([
            'icon' => 'fa-solid fa-comments',
            'question' => 'Rating dan Ulasan',
            'answer' => 'https://pbi.belajarbekerja.com/',
        ]);
        Faq::create([
            'icon' => '<i></i>',
            'question' => 'Cara Membeli Pelatihan',
            'answer' => 'https://pbi.belajarbekerja.com/',
        ]);
        Faq::create([
            'icon' => '<i></i>',
            'question' => 'Sertifikat dan Status Aktif di Dashboard Prakerja',
            'answer' => 'https://pbi.belajarbekerja.com/',
        ]);
        Faq::create([
            'icon' => '<i></i>',
            'question' => 'Kode Voucher',
            'answer' => 'https://pbi.belajarbekerja.com/',
        ]);
        Faq::create([
            'icon' => '<i></i>',
            'question' => 'Intensif Prakerja',
            'answer' => 'https://pbi.belajarbekerja.com/',
        ]);
        Faq::create([
            'icon' => '<i></i>',
            'question' => 'Akun',
            'answer' => 'https://pbi.belajarbekerja.com/',
        ]);
        Faq::create([
            'icon' => '<i></i>',
            'question' => 'Kontak Mitra',
            'answer' => 'https://pbi.belajarbekerja.com/',
        ]);
        Faq::create([
            'icon' => '<i></i>',
            'question' => 'Live Session',
            'answer' => 'https://pbi.belajarbekerja.com/',
        ]);
        Faq::create([
            'icon' => '<i></i>',
            'question' => 'Kontak Kartu Prakerja',
            'answer' => 'https://pbi.belajarbekerja.com/',
        ]);
    }
}
