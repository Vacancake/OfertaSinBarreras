<?php

use App\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'nombre' => 'Abarrotes y Alimentos',
            ]);
        Categoria::create([
            'nombre' => 'Autos y motos',
            ]);
        Categoria::create([
            'nombre' => 'Deportes y ejercicio',
            ]);
        Categoria::create([
            'nombre' => 'Entretenimiento y tiempo libre',
            ]);
        Categoria::create([
            'nombre' => 'Familia, bebés y niños',
            ]);
        Categoria::create([
            'nombre' => 'Hogar',
            ]);
        Categoria::create([
            'nombre' => 'Jardín y hazlo tu mismo',
            ]);
        Categoria::create([
            'nombre' => 'Ropa y Accesorios',
            ]);
        Categoria::create([
            'nombre' => 'Salud y Belleza',
            ]);
        Categoria::create([
            'nombre' => 'Servicios y suscripciones',
            ]);
        Categoria::create([
            'nombre' => 'Tecnologia',
            ]);
        Categoria::create([
            'nombre' => 'Viajes',
            ]);
        Categoria::create([
            'nombre' => 'Videojuegos',
            ]);
    }
}
