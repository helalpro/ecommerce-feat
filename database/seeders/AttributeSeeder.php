<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        $attributes = [
            [
                'name' => 'Color',
                'slug' => Str::slug('Color'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Size',
                'slug' => Str::slug('Size'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Weight',
                'slug' => Str::slug('Weight'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Material',
                'slug' => Str::slug('Material'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Storage',
                'slug' => Str::slug('Storage'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'RAM',
                'slug' => Str::slug('RAM'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Processor',
                'slug' => Str::slug('Processor'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Battery',
                'slug' => Str::slug('Battery'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Display Size',
                'slug' => Str::slug('Display Size'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Warranty',
                'slug' => Str::slug('Warranty'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('attributes')->insert($attributes);
    }
}
