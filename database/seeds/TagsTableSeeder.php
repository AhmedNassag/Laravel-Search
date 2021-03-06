<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create(['name' => 'mac']);
        Tag::create(['name' => 'dell']);
        Tag::create(['name' => 'hp']);
        Tag::create(['name' => 'lenovo']);
        Tag::create(['name' => 'sony']);
        Tag::create(['name' => 'toshiba']);
        Tag::create(['name' => 'samsung']);
        Tag::create(['name' => 'acer']);
        Tag::create(['name' => 'yeti']);
        Tag::create(['name' => 'playstation']);
    }
}
