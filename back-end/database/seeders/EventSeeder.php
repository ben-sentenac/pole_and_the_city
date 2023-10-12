<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = [
            null,
            1,
            2,
            3,
        ];

        for ($i = 0; $i <= 20; $i++) {
            Event::factory()->create([
                'category_id' => $categories[rand(0, count($categories) - 1)],
            ]);
        }

    }
}
