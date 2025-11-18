<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('recipes')->insert([
            'title' => 'Hladni jogurt',
            'slug' => 'hladni-jogurt',
            'description' => 'Jogurt koji je ohlađen',
            'ingredients' => 'Mlijeko, voda, šećer, brašno',
            'steps' => '1. Staviti sve u zdjelu, 2. Pomiješati, 3. Staviti da se ohladi'
        ]);
    }
}
