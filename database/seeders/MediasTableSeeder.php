<?php

namespace Database\Seeders;

use App\Models\Media;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MediasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Media::insert([
            [
                'type' => 'image',
                'path' => 'media/gallery1.jpg',
                'description' => 'Students practicing during class.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'video',
                'path' => 'media/showcase.mp4',
                'description' => 'Highlights from last year’s showcase.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
