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
        $products = [
            [
                'shoe_name' => 'Pike Air Max deluxe',
                'description' => 'Comfortable and stylish Nike sneakers.',
                'price' => 99.99,
                'size' => 9,
                'image' => 'src/img/air-max-90-herenschoenen.png',
                'category' => 'Sneakers',
                'SKU' => '912381',
                'Submerk' => 'Air max',
                'ReleaseDate' => '2024-02-12'
            ],
            [
                'shoe_name' => 'Adidas Stan Smith',
                'description' => 'Classic Adidas sneakers with a clean design.',
                'price' => 89.99,
                'size' => 8,
                'image' => 'src/img/Adidas Orignals Stan.jpg',
                'category' => 'Sneakers',
                'SKU' => '912382',
                'Submerk' => 'Orginals',
                'ReleaseDate' => '2024-01-09'
            ],
            [
                'shoe_name' => 'Salomon XT-6',
                'description' => 'Created by professionals, praised by legends',
                'price' => 119.99,
                'size' => 9,
                'image' => 'src/img/salomon.jpg',
                'category' => 'Sneakers',
                'SKU' => '912383',
                'Submerk' => 'Salomon',
                'ReleaseDate' => '2022-10-20'
            ]
         
        ];

        // Voeg de producten toe aan de database
        DB::table('products')->insert($products);
    }
}
