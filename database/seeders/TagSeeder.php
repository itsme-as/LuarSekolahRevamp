<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Tag::create([
            'name' => 'Marketing',
        ]);
        Tag::create([
            'name' => 'Job Connector',
        ]);
        Tag::create([
            'name' => 'Komunitas',
        ]);
        Tag::create([
            'name' => 'Informasi',
        ]);
        Tag::create([
            'name' => 'Promo',
        ]);
    }
}
