<?php

namespace Database\Seeders;

use App\Models\Partnership;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnershipSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Partnership::create([
            'name' => 'partner1',
            'image' => 'assets/partnership/partner1.png',
        ]);
        Partnership::create([
            'name' => 'partner2',
            'image' => 'assets/partnership/partner2.png',
        ]);
        Partnership::create([
            'name' => 'partner3',
            'image' => 'assets/partnership/partner3.png',
        ]);
        Partnership::create([
            'name' => 'partner4',
            'image' => 'assets/partnership/partner4.png',
        ]);
        Partnership::create([
            'name' => 'partner5',
            'image' => 'assets/partnership/partner5.png',
        ]);
        Partnership::create([
            'name' => 'partner6',
            'image' => 'assets/partnership/partner6.png',
        ]);
    }
}
