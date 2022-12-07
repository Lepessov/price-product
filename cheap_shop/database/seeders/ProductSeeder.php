<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\Category;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    private $failures= 0;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


            $category = Category::factory(10)->create();
        Area::factory(5)->has(Shop::factory(10))->create();

    }
}
