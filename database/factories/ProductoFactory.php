<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'nombre' => fake()->word(),
            'descripcion' => fake()->text(),
            'precio' => fake()->numberBetween(100000,500000),
            'stock' => fake()->numberBetween(1,100),
            'imagen' => fake()->randomElement(['producto1.jpg', 'producto2.jpg', 'producto3.jpg', 'producto4.jpg', 'producto5.jpg']),
            
        ];
    }
}
