<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'OPPO Mobile',
                'price' => '$225',
                'description' => 'A smart phone with 4GB RAM and 64GB ROM',
                'category' => "moblie",
                'gallery' => "https://m.media-amazon.com/images/I/614+W18ms+L.jpg"
    
            ],
            [
                'name' => 'SONY TV',
                'price' => '$658.42',
                'description' => 'Sony Android Bravia 126 cm (50 inches) 4K Ultra HD Smart LED Google TV KD-50X75K (Black) (2022 Model) | with Alexa Compatibility',
                'category' => "tv",
                'gallery' => "https://m.media-amazon.com/images/I/71Q24PwtvaL.jpg"
    
            ],
            [
                'name' => 'LG Refrigerator',
                'price' => '$243.86',
                'description' => 'LG 201 L 5 Star Inverter Direct-Cool Single Door Refrigerator (GL-D211HSEZ, Scarlet Euphoria, Base stand with drawer, Gross Volume- 204 L)',
                'category' => "moblie",
                'gallery' => "https://m.media-amazon.com/images/I/61G4a-2AlWL._AC_UF1000,1000_QL80_.jpg"
    
            ],
            [
                'name' => 'PHP Laravel Book',
                'price' => '$19.50',
                'description' => 'Laravel 9.x | PHP Learning Laravel with Easiest Way: The book will teach you Laravel 9.x step by step.',
                'category' => "book",
                'gallery' => "https://images-na.ssl-images-amazon.com/images/I/61vLCg6RM4L._AC_UL600_SR600,600_.jpg"
    
            ],
            [
                'name' => 'HP Laptop',
                'price' => '$472.34',
                'description' => 'HP 15 Thin & Light Laptop (Intel i3 11th Gen/8GB RAM & 512GB SSD Storage/Win 11 Home + MS Office) X200 Wireless Mouse with 2.4 GHz Wireless connectivity and 18-Month Battery Life',
                'category' => "laptop",
                'gallery' => "https://m.media-amazon.com/images/I/91oF9q-jE5L.jpg"
    
            ]
        ]);
    }
}
