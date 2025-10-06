<?php

namespace Database\Seeders;

use App\Models\Testimoni;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimoniSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Testimoni::create([
            'name' => 'Andi Pratama',
            'position' => 'Alumni Program Digital Marketing',
            'image' => 'assets/profile1.png',
            'campus' => 'Institut Teknologi Bandung',
            'message' => '“Program ini memberi saya skill baru 
            yang membuat lebih percaya diri di 
            dunia kerja.”',
            'color' => 'bg-teal-500',
        ]);
        Testimoni::create([
            'name' => 'Nagita Safitri',
            'position' => 'Alumni Program UI/UX Design',
            'image' => 'assets/profile2.png',
            'campus' => 'Universitas Gadjah Mada',
            'message' => '“Materinya mudah dipahami dan 
            langsung bisa diterapkan dalam 
            proyek nyata saya.”',
            'color' => 'bg-yellow-400',
        ]);
        Testimoni::create([
            'name' => 'Dimas Prakoso',
            'position' => 'Alumni Program Desain Grafis',
            'image' => 'assets/profile3.png',
            'campus' => 'Universitas Indonesia',
            'message' => '“Materinya terstruktur, praktiknya 
            relevan, dan sangat mendukung 
            karier saya.”',
            'color' => 'bg-red-400',
        ]);
        Testimoni::create([
            'name' => 'Anisa Putri',
            'position' => 'Alumni Program Web Development',
            'image' => 'assets/profile4.png',
            'campus' => 'Universitas Dipenogoro',
            'message' => '“Pengalaman belajarnya lengkap, 
            dari teori sampai praktik langsung 
            yang berguna di kerja.”',
            'color' => 'bg-sky-500',
        ]);
    }
}
