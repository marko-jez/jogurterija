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
        DB::table('products')->insert([
            'name' => 'Grčki jogurt mix',
            'description' => 'Premium grčki jogurt s raznim dodacima.',
            'price' => 5.99,
            'image' => 'greek.jpg'
        ],
        [
            'name' => 'Fit smoothie',
            'description' => 'Voćni smoothie s jogurtom.',
            'price' => 4.50,
            'image' => 'smoothie.jpg',
        ]
    );
    }
}
