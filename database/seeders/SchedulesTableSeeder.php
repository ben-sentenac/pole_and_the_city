<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schedule::insert([
            [
                'course_id' => 1, // Beginner Pole Dance
                'start_time' => now()->addDays(1)->setTime(18, 0),
                'end_time' => now()->addDays(1)->setTime(19, 30),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 2, // Advanced Pole Tricks
                'start_time' => now()->addDays(2)->setTime(20, 0),
                'end_time' => now()->addDays(2)->setTime(21, 30),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
