<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear un usuario administrador
        User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@email.co',
            'rol' => 'admin', // Proporcionar un valor para rol
            'address' => 'Dirección del Administrador', // Proporcionar un valor para address
        ]);

        // Crear 10 usuarios adicionales
        User::factory(10)->create([
            'rol' => 'user', // Proporcionar un valor predeterminado para rol
            'address' => 'Dirección de Usuario', // Proporcionar un valor predeterminado para address
        ]);

        // Llamar al seeder de categorías
        $this->call(CategoriaSeeder::class);

        // Llamar al seeder de productos después de que las categorías hayan sido creadas
        $this->call(ProductoSeeder::class);
    }
}
