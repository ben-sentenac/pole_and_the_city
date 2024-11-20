<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            ['url' => 'https://example.com/images/class1.jpg', 'description' => 'Beginner class in action'],
            ['url' => 'https://example.com/images/class2.jpg', 'description' => 'Advanced choreography session'],
            // Add more images if needed...
        ]);
    }
}
