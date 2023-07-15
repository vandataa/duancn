<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name(),
            'gender'=>'nam',
            'price'=>random_int(1,1000000),
            'image'=>'10-2-1992',
            'description'=>'10-2-1992',
            'brand_id'=>random_int(1,10),
            'category_id'=>random_int(1,10)
        ];
    }
}
