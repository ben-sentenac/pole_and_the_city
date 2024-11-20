<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GalleryImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gallery_images')->insert([
            ['gallery_id' => 1, 'image_id' => 1],
            ['gallery_id' => 1, 'image_id' => 2],
            // Add more gallery-image associations if needed...
        ]);
    }
}
