<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Size;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $existingSizes = Size::whereIn('size', ['XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL'])->count();

        if($existingSizes === 0) {
            Size::create(['size' => 'XS']);
            Size::create(['size' => 'S']);
            Size::create(['size' => 'M']);
            Size::create(['size' => 'L']);
            Size::create(['size' => 'XL']);
            Size::create(['size' => 'XXL']);
            Size::create(['size' => 'XXXL']);
        }
    }
}
