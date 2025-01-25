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
        $employers = Employer::factory(100)->create();
        $employees = Employee::factory(150)->create();
        $works = Work::factory(100)->create();

        $employers->each(function ($employer) use ($works) {
            $employer->works()->attach($works->pluck('id'));
        });

        $employees->each(function ($employee) use ($works) {
            $employee->works()->attach($works->pluck('id'));
        });

        $works->each(function ($work) use ($employers) {
            $work->employers()->attach($employers->pluck('id'));
        });

        $works->each(function ($work) use ($employees) {
            $work->employees()->attach($employees->pluck('id'));
        });
    }
}
