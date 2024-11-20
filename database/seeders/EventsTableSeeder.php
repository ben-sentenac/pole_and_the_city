<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::insert([
            [
                'title' => 'Pole Dance Showcase',
                'description' => 'An evening of performances by our talented students and teachers.',
                'start_time' => now()->addWeeks(2)->setTime(18, 0),
                'end_time' => now()->addWeeks(2)->setTime(20, 0),
                'location' => 'Main Studio',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Open House',
                'description' => 'Visit our studio, meet our teachers, and try out a class for free.',
                'start_time' => now()->addWeeks(1)->setTime(10, 0),
                'end_time' => now()->addWeeks(1)->setTime(15, 0),
                'location' => 'Main Studio',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
