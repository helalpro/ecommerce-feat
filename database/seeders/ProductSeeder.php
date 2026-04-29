<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        $products = [
            [
                'user_id' => 1,
                'name' => 'Samsung Galaxy S24',
                'slug' => Str::slug('Samsung Galaxy S24'),
                'description' => 'Latest Samsung flagship smartphone with powerful performance.',
                'sku' => 'SGS24-001',
                'brand_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'user_id' => 1,
                'name' => 'iPhone 15 Pro Max',
                'slug' => Str::slug('iPhone 15 Pro Max'),
                'description' => 'Premium Apple smartphone with titanium body.',
                'sku' => 'IP15PM-002',
                'brand_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'user_id' => 2,
                'name' => 'Xiaomi Redmi Note 13',
                'slug' => Str::slug('Xiaomi Redmi Note 13'),
                'description' => 'Affordable smartphone with excellent battery backup.',
                'sku' => 'XRN13-003',
                'brand_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'user_id' => 2,
                'name' => 'HP Pavilion Laptop',
                'slug' => Str::slug('HP Pavilion Laptop'),
                'description' => 'Powerful laptop for office and personal use.',
                'sku' => 'HPPV-004',
                'brand_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'user_id' => 3,
                'name' => 'Dell Inspiron 15',
                'slug' => Str::slug('Dell Inspiron 15'),
                'description' => 'Reliable laptop with modern features.',
                'sku' => 'DELL15-005',
                'brand_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'user_id' => 3,
                'name' => 'Sony WH-1000XM5 Headphone',
                'slug' => Str::slug('Sony WH-1000XM5 Headphone'),
                'description' => 'Noise cancelling premium wireless headphone.',
                'sku' => 'SONY-006',
                'brand_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'user_id' => 4,
                'name' => 'Apple Watch Series 9',
                'slug' => Str::slug('Apple Watch Series 9'),
                'description' => 'Advanced smartwatch with health tracking.',
                'sku' => 'AWS9-007',
                'brand_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'user_id' => 4,
                'name' => 'Logitech Wireless Mouse',
                'slug' => Str::slug('Logitech Wireless Mouse'),
                'description' => 'Comfortable wireless mouse for daily use.',
                'sku' => 'LOGM-008',
                'brand_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'user_id' => 5,
                'name' => 'Asus ROG Gaming Laptop',
                'slug' => Str::slug('Asus ROG Gaming Laptop'),
                'description' => 'High-performance gaming laptop.',
                'sku' => 'ROG-009',
                'brand_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'user_id' => 5,
                'name' => 'Canon EOS 200D Camera',
                'slug' => Str::slug('Canon EOS 200D Camera'),
                'description' => 'Professional DSLR camera for photography.',
                'sku' => 'CANON-010',
                'brand_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('products')->insert($products);
    }

}
