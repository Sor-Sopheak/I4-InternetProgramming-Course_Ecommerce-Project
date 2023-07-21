<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;    

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition()
    {
        // $ctgId = Category::pluck('id')->toArray();
        // return [
        //     'product_name' => $this->faker->sentence(),
        //     // 'category_id' => Category::factory(),
        //     'category_id' => $this->faker->randomElement($ctgId),
        //     'image' => $this->faker->imageUrl(400, 600, 'product', true),
        //     'description' => $this->faker->paragraph(),
        //     'price' => $this->faker->randomFloat(2, 6, 25) // before dot, 6 - 25
        //   ];
    }
}
