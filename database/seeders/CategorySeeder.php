<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "name"=>[
                "uz"=>"Stol",
                "ru"=>"Стол"
            ],
        ]);

        Category::create([
            "name"=>[
                "uz"=>"Divan",
                "ru"=>"Диван"
            ],
        ]);

        Category::create([
            "name"=>[
                "uz"=>"Kreslo",
                "ru"=>"Кресло"
            ],
        ]);




    }
}
