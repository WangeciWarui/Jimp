<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departments')->insert([
            [
                'name' => 'College of Engineering',
                'code' => 'COE',
                'university_id' => 1,
                'description' => 'Engineering and Technology Department',
                'head_of_department' => 'Dr. Engineering Head',
                'contact_email' => 'engineering@up.edu.ph',
                'contact_number' => '(02) 8981-8500 ext 3001',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'College of Computer Studies',
                'code' => 'CCS',
                'university_id' => 2,
                'description' => 'Computer Science and IT Department',
                'head_of_department' => 'Dr. Computing Head',
                'contact_email' => 'ccs@dlsu.edu.ph',
                'contact_number' => '(02) 8524-4611 ext 2001',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
