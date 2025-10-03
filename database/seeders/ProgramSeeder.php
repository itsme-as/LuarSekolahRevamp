<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Program::create([
            'name' => 'Kartu Prakerja',
            'description' => 'Pelajari berbagai kelas program Prakerja',
            'image' => 'assets/program-1.png',
            'link' => 'https://luarsekolah.com/prakerja/',
        ]);
        Program::create([
            'name' => 'Belajar Bekerja',
            'description' => 'Tingkatkan skill dan pengalaman kerja',
            'image' => 'assets/program-2.png',
            'link' => 'https://belajarbekerja.com/',
        ]);
        Program::create([
            'name' => 'Prakerja ISW',
            'description' => 'Kelas Eksklusif dengan harga terjangkau',
            'image' => 'assets/program-3.png',
            'link' => 'https://luarsekolah.com/indonesia-skills-week/',
        ]);
    }
}
