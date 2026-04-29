<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productAttributes = [

            /*
            |--------------------------------------------------------------------------
            | Product 1
            |--------------------------------------------------------------------------
            | Samsung Galaxy S24
            */
            [
                'product_id' => 1,
                'attribute_id' => 1, // Color
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 1,
                'attribute_id' => 5, // Storage
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 1,
                'attribute_id' => 6, // RAM
                'created_at' => now(),
                'updated_at' => now(),
            ],

            /*
            |--------------------------------------------------------------------------
            | Product 2
            |--------------------------------------------------------------------------
            | iPhone 15 Pro Max
            */
            [
                'product_id' => 2,
                'attribute_id' => 1, // Color
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 2,
                'attribute_id' => 5, // Storage
                'created_at' => now(),
                'updated_at' => now(),
            ],

            /*
            |--------------------------------------------------------------------------
            | Product 3
            |--------------------------------------------------------------------------
            | Xiaomi Redmi Note 13
            */
            [
                'product_id' => 3,
                'attribute_id' => 1, // Color
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 3,
                'attribute_id' => 6, // RAM
                'created_at' => now(),
                'updated_at' => now(),
            ],

            /*
            |--------------------------------------------------------------------------
            | Product 4
            |--------------------------------------------------------------------------
            | HP Pavilion Laptop
            */
            [
                'product_id' => 4,
                'attribute_id' => 5, // Storage
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 4,
                'attribute_id' => 6, // RAM
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 4,
                'attribute_id' => 7, // Processor
                'created_at' => now(),
                'updated_at' => now(),
            ],

            /*
            |--------------------------------------------------------------------------
            | Product 5
            |--------------------------------------------------------------------------
            | Dell Inspiron 15
            */
            [
                'product_id' => 5,
                'attribute_id' => 5, // Storage
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 5,
                'attribute_id' => 6, // RAM
                'created_at' => now(),
                'updated_at' => now(),
            ],

            /*
            |--------------------------------------------------------------------------
            | Product 6
            |--------------------------------------------------------------------------
            | Sony Headphone
            */
            [
                'product_id' => 6,
                'attribute_id' => 1, // Color
                'created_at' => now(),
                'updated_at' => now(),
            ],

            /*
            |--------------------------------------------------------------------------
            | Product 7
            |--------------------------------------------------------------------------
            | Apple Watch
            */
            [
                'product_id' => 7,
                'attribute_id' => 1, // Color
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 7,
                'attribute_id' => 8, // Battery
                'created_at' => now(),
                'updated_at' => now(),
            ],

            /*
            |--------------------------------------------------------------------------
            | Product 8
            |--------------------------------------------------------------------------
            | Logitech Mouse
            */
            [
                'product_id' => 8,
                'attribute_id' => 1, // Color
                'created_at' => now(),
                'updated_at' => now(),
            ],

            /*
            |--------------------------------------------------------------------------
            | Product 9
            |--------------------------------------------------------------------------
            | Asus ROG
            */
            [
                'product_id' => 9,
                'attribute_id' => 5, // Storage
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 9,
                'attribute_id' => 6, // RAM
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 9,
                'attribute_id' => 7, // Processor
                'created_at' => now(),
                'updated_at' => now(),
            ],

            /*
            |--------------------------------------------------------------------------
            | Product 10
            |--------------------------------------------------------------------------
            | Canon Camera
            */
            [
                'product_id' => 10,
                'attribute_id' => 1, // Color
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('product_attributes')->insert($productAttributes);
    }
}
