<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'company' => $this->faker->company(),
            'email' => $this->faker->companyEmail(),
            'price' => $this->faker->randomFloat(2, 10, 1000), 
            'description' => $this->faker->paragraph(3),

        ];
    }
}
