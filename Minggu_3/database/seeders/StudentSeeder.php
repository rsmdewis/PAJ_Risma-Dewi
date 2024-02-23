<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Student::factory(10)->create();

        \App\Models\Student::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'address' => 'Mastrip 163',
        ]);
    }
}
