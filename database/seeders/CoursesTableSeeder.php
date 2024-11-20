<?php

namespace Database\Seeders;

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
        DB::table('courses')->insert([
            ['title' => 'Beginner Pole Dance', 'description' => 'An introductory course for beginners.', 'price' => 100.00, 'teacher_id' => 1, 'start_date' => '2024-01-01', 'end_date' => '2024-03-01'],
            ['title' => 'Strength and Conditioning', 'description' => 'Build strength and endurance for pole.', 'price' => 120.00, 'teacher_id' => 2, 'start_date' => '2024-01-15', 'end_date' => '2024-03-15'],
            ['title' => 'Flexibility Training', 'description' => 'Improve your flexibility and range of motion.', 'price' => 90.00, 'teacher_id' => 3, 'start_date' => '2024-02-01', 'end_date' => '2024-04-01'],
            // Add more courses if needed...
        ]);
    }
}
