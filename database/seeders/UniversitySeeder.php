<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('universities')->insert([
            [
                'name' => 'University of the Philippines',
                'address' => 'Diliman, Quezon City',
                'contact_number' => '(02) 8981-8500',
                'email' => 'info@up.edu.ph',
                'website' => 'https://up.edu.ph',
                'description' => 'The national university of the Philippines',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'De La Salle University',
                'address' => 'Taft Avenue, Manila',
                'contact_number' => '(02) 8524-4611',
                'email' => 'info@dlsu.edu.ph',
                'website' => 'https://dlsu.edu.ph',
                'description' => 'A leading private research university',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
