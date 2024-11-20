<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Container\Attributes\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::insert([
            [
                'title' => 'Beginner Pole Dance',
                'description' => 'Learn the basics of pole dance in a fun and supportive environment.',
                'teacher_id' => 1, // Assuming Jane Doe's ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Advanced Pole Tricks',
                'description' => 'Master advanced tricks and combinations.',
                'teacher_id' => 2, // Assuming John Smith's ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
