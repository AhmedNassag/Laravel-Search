<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'computers']);
        Category::create(['name' => 'accessories']);
        Category::create(['name' => 'gifts']);
    }
}
