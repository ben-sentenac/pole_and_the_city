<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('course_schedules')->insert([
            ['course_id' => 1, 'weekday' => 'Monday', 'start_time' => '18:00:00', 'end_time' => '19:30:00'],
            ['course_id' => 1, 'weekday' => 'Wednesday', 'start_time' => '18:00:00', 'end_time' => '19:30:00'],
            ['course_id' => 2, 'weekday' => 'Tuesday', 'start_time' => '17:00:00', 'end_time' => '18:30:00'],
            // Add more course schedules if needed...
        ]);
    }
}
