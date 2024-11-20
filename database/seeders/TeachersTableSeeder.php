<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teachers')->insert([
            ['name' => 'Alice Teacher', 'bio' => 'Experienced pole dance instructor.', 'profile_picture_url' => 'https://example.com/alice.jpg'],
            ['name' => 'Bob Teacher', 'bio' => 'Specializes in strength training for pole dancers.', 'profile_picture_url' => 'https://example.com/bob.jpg'],
            ['name' => 'Charlie Teacher', 'bio' => 'Focuses on flexibility and acrobatics.', 'profile_picture_url' => 'https://example.com/charlie.jpg'],
            ['name' => 'Dan Teacher', 'bio' => 'Passionate about beginner-friendly pole routines.', 'profile_picture_url' => 'https://example.com/dan.jpg'],
            ['name' => 'Ella Teacher', 'bio' => 'Expert in advanced choreography and technique.', 'profile_picture_url' => 'https://example.com/ella.jpg'],
        ]);
    }
}
