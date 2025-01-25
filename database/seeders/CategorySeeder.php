<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'Education','Healthcare','Business Administration',
            'Communications','Agriculture',
            'Sales field',
            'Part-time employees','Law',
            'Casual employment',
            'Seasonal workers'
        ];

        foreach ($objs as $obj) {
            Category::create([
                'name' => $obj,
            ]);
        }
    }
}
