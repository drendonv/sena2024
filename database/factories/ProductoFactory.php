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
            'nombre' => $this->faker->word(),
            'descripcion' => $this->faker->text(),
            'precio' => $this->faker->numberBetween(100000, 500000),
            'stock' => $this->faker->numberBetween(1, 100),
            'imagen' => 'images/default.jpg', // Se puede ajustar según sea necesario
        ];
    }
}
