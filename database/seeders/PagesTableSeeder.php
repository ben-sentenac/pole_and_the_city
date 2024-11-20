<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::insert([
            [
                'title' => 'Home',
                'slug' => 'home',
                'content' => json_encode([
                    'welcome_message' => 'Welcome to the Pole Dance School!',
                    'cta_text' => 'Join Us Now',
                    'cta_link' => '/register',
                ]),
                'banner_image' => 'banners/home.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'About Us',
                'slug' => 'about-us',
                'content' => 'Learn more about our mission to inspire and empower through pole dance.',
                'banner_image' => 'banners/about-us.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
