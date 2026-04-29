<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AttributeValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attributeValues = [

            /*
            |--------------------------------------------------------------------------
            | Color (attribute_id = 1)
            |--------------------------------------------------------------------------
            */
            [
                'attribute_id' => 1,
                'value' => 'Red',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attribute_id' => 1,
                'value' => 'Blue',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attribute_id' => 1,
                'value' => 'Black',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attribute_id' => 1,
                'value' => 'White',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            /*
            |--------------------------------------------------------------------------
            | Size (attribute_id = 2)
            |--------------------------------------------------------------------------
            */
            [
                'attribute_id' => 2,
                'value' => 'S',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attribute_id' => 2,
                'value' => 'M',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attribute_id' => 2,
                'value' => 'L',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attribute_id' => 2,
                'value' => 'XL',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            /*
            |--------------------------------------------------------------------------
            | Weight (attribute_id = 3)
            |--------------------------------------------------------------------------
            */
            [
                'attribute_id' => 3,
                'value' => '500 gm',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attribute_id' => 3,
                'value' => '1 Kg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attribute_id' => 3,
                'value' => '2 Kg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            /*
            |--------------------------------------------------------------------------
            | Storage (attribute_id = 5)
            |--------------------------------------------------------------------------
            */
            [
                'attribute_id' => 5,
                'value' => '64 GB',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attribute_id' => 5,
                'value' => '128 GB',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attribute_id' => 5,
                'value' => '256 GB',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            /*
            |--------------------------------------------------------------------------
            | RAM (attribute_id = 6)
            |--------------------------------------------------------------------------
            */
            [
                'attribute_id' => 6,
                'value' => '4 GB',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attribute_id' => 6,
                'value' => '8 GB',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attribute_id' => 6,
                'value' => '16 GB',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('attribute_values')->insert($attributeValues);
    }
}
