<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'name'=>'Walton Fridge',
                'price'=>'45500',
                'category'=>'Refrigerator',
                'gallery'=>'https://waltonbd.com/image/cache/catalog/refrigerator-and-freezer/non-frost-refrigerator/wni-6a9-gdsd-dd/1i-364x364.jpg',
                'description'=>'A smart fridge for your Home'
            ],
            [
                'name'=>'Walton Laptop',
                'price'=>'95500',
                'category'=>'Computers',
                'gallery'=>'https://waltonbd.com/image/cache/catalog/Computer/Laptop/Karonda/karonda-gx510h/Karonda-GX510H-1-364x364.png',
                'description'=>'A smart Laptop with 4GB Ram and Much more features'
            ],
            [
                'name'=>'Walton Camera',
                'price'=>'12500',
                'category'=>'Security Camera',
                'gallery'=>'https://waltonbd.com/image/cache/catalog/Computer/cctv/wh21b/WH21B%20F-364x364.png',
                'description'=>'Secure Your Home with walton CCTV Camera'
            ],
            [
                'name'=>'Walton LED TV',
                'price'=>'13500',
                'category'=>'Television',
                'gallery'=>'https://waltonbd.com/image/cache/catalog/tv/june-2022/wd24l22/000-364x364.jpg',
                'description'=>'A Smart LD TV with  Exciting features'
            ]
        ]);
    }
}
