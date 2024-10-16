<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //inserting multiple categories
        //Step 1: create the array of categories
        $categories = [
            ['name' => "Sandwiches"],
            ['name' => "Main Meals"],
            ['name' => "Smoothies and Shakes"],
            ['name' => "Juices and Soda"],
            ['name' => "Hot Drinks"],
        ];

        //Step 2: insert the array using Query Builder
        DB::table('categories')->insert($categories);
    }
}