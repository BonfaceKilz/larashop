<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(['name' => 'Mini skirt black edition', 'title' => 'Mini skirt black edition', 'description' => 'Phasellus purus.  Donec pretium posuere tellus.  Phasellus purus.', 'price' => 35, 'category_id' => 1, 'brand_id' => 1, ]);
        
        DB::table('products')->insert(['name' => 'T-Shirt blue edition', 'title' => 'T-Shirt blue edition', 'description' => 'Phasellus purus.  Donec pretium posuere tellus.  Phasellus purus.', 'price' => 64, 'category_id' => 2, 'brand_id' => 3, ]);
        
        DB::table('products')->insert(['name' => 'Sleeveless Colorblack Scuba', 'title' => 'Sleeveless Colorblack Scuba', 'description' => 'Phasellus purus.  Donec pretium posuere tellus.  Phasellus purus.', 'price' => 13, 'category_id' => 3, 'brand_id' => 2, ]);

    }
}
