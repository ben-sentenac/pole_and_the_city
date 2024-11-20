<?php

namespace Database\Seeders;

use App\Models\Teacher;
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
        Teacher::insert([
            [
                'name' => 'Jane Doe',
                'photo' => 'teachers/jane.jpg',
                'specialization' => 'Pole Dance Basics',
                'bio' => 'Jane has over 10 years of experience teaching beginners.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'John Smith',
                'photo' => 'teachers/john.jpg',
                'specialization' => 'Advanced Tricks',
                'bio' => 'John is known for his innovative and challenging pole routines.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
