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
    public function run()
    {
        $categories = [
            ["name" => ucfirst("Culture"), "created_at" => now(), "updated_at" => now()],
            ["name" => ucfirst("Food"), "created_at" => now(), "updated_at" => now()],
            ["name" => ucfirst("Community"), "created_at" => now(), "updated_at" => now()],
            ["name" => ucfirst("Nigh life"), "created_at" => now(), "updated_at" => now()],
            ["name" => ucfirst("Wellness"), "created_at" => now(), "updated_at" => now()],
            ["name" => ucfirst("Outdoors"), "created_at" => now(), "updated_at" => now()],
            ["name" => ucfirst("Day Trips"), "created_at" => now(), "updated_at" => now()],
            ["name" => ucfirst("Education"), "created_at" => now(), "updated_at" => now()],
        ];

        Category::insert($categories);
    }
}
