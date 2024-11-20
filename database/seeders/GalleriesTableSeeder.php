<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('galleries')->insert([
            ['name' => 'Classes', 'description' => 'Photos from our various classes'],
            ['name' => 'Workshops', 'description' => 'Images from our special workshops'],
            // Add more galleries if needed...
        ]);
    }
}
