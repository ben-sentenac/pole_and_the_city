<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            ['title' => 'New Classes Starting Soon', 'slug' => 'new-classes', 'content' => 'Exciting new classes are starting this month!', 'published_at' => now()],
            ['title' => 'How to Choose the Right Pole Shoes', 'slug' => 'choose-pole-shoes', 'content' => 'Tips for finding the right footwear.', 'published_at' => now()],
            // Add more posts if needed...
        ]);
    }
}
