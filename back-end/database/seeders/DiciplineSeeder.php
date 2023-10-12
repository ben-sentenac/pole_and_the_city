<?php

namespace Database\Seeders;

use App\Models\Dicipline;
use Illuminate\Database\Seeder;

class DiciplineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Dicipline::create([
            'name' => 'Pole dance',
            'description' => 'Description de la pole dace',
            'category_id' => 1,
        ]);
        Dicipline::create([
            'name' => 'Body Pole',
            'description' => 'Description de du body pole',
            'category_id' => 1,
        ]);
        Dicipline::create([
            'name' => 'Stretching',
            'description' => 'Description du stretching',
            'category_id' => 1,
        ]);
    }
}
