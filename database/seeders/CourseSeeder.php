<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            [
                'name' => 'Bachelor of Science in Computer Engineering',
                'code' => 'BSCpE',
                'description' => 'Computer Engineering undergraduate program',
                'university_id' => 1,
                'department_id' => 1,
                'duration' => '4 years',
                'credits' => 180,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Bachelor of Science in Information Technology',
                'code' => 'BSIT',
                'description' => 'Information Technology undergraduate program',
                'university_id' => 2,
                'department_id' => 2,
                'duration' => '4 years',
                'credits' => 175,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
