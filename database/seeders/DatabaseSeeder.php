<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Producto;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Eliminar todos los productos existentes
        Producto::truncate();

        // Crear 5 usuarios
        User::factory(5)->create();
        
        // Lista de imágenes específicas y nombres de productos
        $productos = [
            ['nombre' => 'Producto A', 'imagen' => 'producto1.jpg'],
            ['nombre' => 'Producto B', 'imagen' => 'producto2.jpg'],
            ['nombre' => 'Producto C', 'imagen' => 'producto3.jpg'],
            ['nombre' => 'Producto D', 'imagen' => 'producto4.jpg'],
            ['nombre' => 'Producto E', 'imagen' => 'producto5.jpg']
        ];
        
        // Crear 5 productos con nombres específicos
        foreach ($productos as $producto) {
            Producto::factory()->create([
                'nombre' => $producto['nombre'],
                'imagen' => $producto['imagen']
            ]);
        }
    }
}
