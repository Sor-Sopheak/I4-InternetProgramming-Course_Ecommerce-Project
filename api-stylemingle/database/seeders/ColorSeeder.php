<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Color;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $existingColor = Color::whereIn('color', ['red', 'blue', 'purple', 'yellow', 'white', 'gray', 'black', 'orange', 'brown', 'green'])->count();

        if($existingColor === 0) {
            Color::create(['color' => 'red', 'color_code' => '#FF0000']);
            Color::create(['color' => 'blue', 'color_code' => '#0000FF']);
            Color::create(['color' => 'purple', 'color_code' => '#800080']);
            Color::create(['color' => 'yellow', 'color_code' => '#FFFF00']);
            Color::create(['color' => 'white', 'color_code' => '#FFFFFF']);
            Color::create(['color' => 'gray', 'color_code' => '#808080']);
            Color::create(['color' => 'black', 'color_code' => '#000000']);
            Color::create(['color' => 'orange', 'color_code' => '#FFA500']);
            Color::create(['color' => 'brown', 'color_code' => '#A52A2A']);
            Color::create(['color' => 'green', 'color_code' => '#008000']);
        }
    }
}
