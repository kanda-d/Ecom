<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Product_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Samsung Galaxy M31',
                'price'=>'20000',
                'description'=>'A Samsung Smartphone with 4gb ram and much mroe things.',
                'category'=>'mobile',
                'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/71OxJeyywSL._SL1500_.jpg',
            ],
            [
                'name'=>'One Plus 5',
                'price'=>'40000',
                'description'=>'A One Plus 5  Smartphone with 4gb ram and much mroe things.',
                'category'=>'mobile',
                'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/71ncRs6HzyL._SL1500_.jpg',
            ],
            [
                'name'=>'Samsung Galaxy M31',
                'price'=>'20000',
                'description'=>'A Samsung Smartphone with 4gb ram and much mroe things.',
                'category'=>'mobile',
                'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/71OxJeyywSL._SL1500_.jpg',
            ],
            [
                'name'=>'One Plus 5',
                'price'=>'40000',
                'description'=>'A One Plus 5  Smartphone with 4gb ram and much mroe things.',
                'category'=>'mobile',
                'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/71ncRs6HzyL._SL1500_.jpg',
            ]
            
            ]);
    }
}
