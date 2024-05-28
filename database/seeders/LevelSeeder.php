<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Level::create([
            'name' => 'l1',
            'percentage1' => 5,
            'percentage2' => 10,
        ]);

        Level::create([
            'name' => 'l2',
            'percentage1' => 5,
            'percentage2' => 9,
        ]);

        Level::create([
            'name' => 'l3',
            'percentage1' => 5,
            'percentage2' => 1,
        ]);

        Level::create([
            'name' => 'l4',
            'percentage1' => 5,
            'percentage2' => 1,
        ]);

        Level::create([
            'name' => 'l5',
            'percentage1' => 5,
            'percentage2' => 1,
        ]);

        Level::create([
            'name' => 'l6',
            'percentage1' => 5,
            'percentage2' => 1,
        ]);

        Level::create([
            'name' => 'l7',
            'percentage1' => 5,
            'percentage2' => 1,
        ]);

        Level::create([
            'name' => 'l8',
            'percentage1' => 5,
            'percentage2' => 1,
        ]);
    }
}
