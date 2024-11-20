<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Find or create the Home page
         $homePage = Page::firstOrCreate(
            ['slug' => 'home'],
            ['title' => 'Home', 'content' => null, 'banner_image' => 'banners/home.jpg']
        );

        // Insert settings for the home page
        Setting::insert([
            [
                'page_id' => $homePage->id,
                'key' => 'welcome_message',
                'value' => 'Welcome to the Pole Dance School!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_id' => $homePage->id,
                'key' => 'cta_text',
                'value' => 'Join Us Now',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_id' => $homePage->id,
                'key' => 'cta_link',
                'value' => '/register',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_id' => $homePage->id,
                'key' => 'featured_image',
                'value' => 'images/home-featured.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_id' => $homePage->id,
                'key' => 'about_section_title',
                'value' => 'Empowering Through Movement',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_id' => $homePage->id,
                'key' => 'about_section_content',
                'value' => 'Our mission is to inspire and empower individuals through the art of pole dancing.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
