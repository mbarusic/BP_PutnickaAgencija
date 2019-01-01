<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::create([
            'name' =>'European trip'
        ]);

        App\Category::create([
            'name' =>'Summer on the Adriatic'
        ]);
    }
}
