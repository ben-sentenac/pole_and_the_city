<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pages')->insert([
            ['title' => 'About Us', 'slug' => 'about-us', 'content' => 'Information about the pole dance school.'],
            ['title' => 'Contact', 'slug' => 'contact', 'content' => 'Contact information and form.'],
            ['title' => 'FAQ', 'slug' => 'faq', 'content' => 'Frequently Asked Questions.'],
            // Add more pages if needed...
        ]);
    }
}
