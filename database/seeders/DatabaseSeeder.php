<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Company;
use App\Models\Employee;
use App\Models\Employer;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Work;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            LocationSeeder::class,
            CategorySeeder::class,
        ]);
        Company::factory(50)->create();
        Employer::factory(100)->create();
        Employee::factory(100)->create();
        Work::factory(100)->create();


    }
}
