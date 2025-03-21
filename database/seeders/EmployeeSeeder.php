<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'id' => 1,
            'name' => 'Nafsirudin',
            'position' => 'Developer',
        ]);

        Employee::create([
            'id' => 2,
            'name' => 'Putri',
            'position' => 'Designer',
        ]);
    }
}
