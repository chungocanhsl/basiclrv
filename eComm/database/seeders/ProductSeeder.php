<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name' => 'Mox mobile',
            'price' =>'300',
            'description' =>"A smartphone with 8gb ram and much more feature",
            'category' =>"mobile",
            'gallery' => "https://th.bing.com/th/id/R.479c7b1d9c274e3f6c19869b3d366ce3?rik=WlwNLWJHxviMcw&pid=ImgRaw&r=0"
        ],
            [
            'name' => 'Oled tv',
            'price' =>'400',
            'description' =>"A smart TV with much more feature",
            'category' =>"tv",
            'gallery' => "https://binhminhdigital.com/StoreData/images/Product/tivi-lg-65un7400pta.jpg"
                ],
            [
                'name' => 'LCD HD Tv',
                'price' =>'500',
                'description' =>"A tivi with much more feature",
                'category' =>"tv",
                'gallery' => "https://c1.neweggimages.com/NeweggImage/ProductImage/89-136-086-04.jpg"
            ],
            [
                'name' => 'LG fridge',
                'price' =>'500',
                'description' =>"A tivi with much more feature",
                'category' =>"fridge",
                'gallery' => "https://th.bing.com/th/id/R.031ed2d82c46a740efd7924116ee0192?rik=qcPYz5acFKxC7Q&pid=ImgRaw&r=0"
            ]
    ]);
    }
}
