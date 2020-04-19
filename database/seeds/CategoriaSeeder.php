<?php

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
        DB::table('categorias')->insert([
            'nombre' => 'Abarrotes y Alimentos',
            ]);
        DB::table('categorias')->insert([
            'nombre' => 'Autos y motos',
            ]);
        DB::table('categorias')->insert([
            'nombre' => 'Deportes y ejercicio',
            ]);
        DB::table('categorias')->insert([
            'nombre' => 'Entretenimiento y tiempo libre',
            ]);
        DB::table('categorias')->insert([
            'nombre' => 'Familia, bebés y niños',
            ]);
        DB::table('categorias')->insert([
            'nombre' => 'Hogar',
            ]);
        DB::table('categorias')->insert([
            'nombre' => 'Jardín y hazlo tu mismo',
            ]);
        DB::table('categorias')->insert([
            'nombre' => 'Ropa y Accesorios',
            ]);
        DB::table('categorias')->insert([
            'nombre' => 'Salud y Belleza',
            ]);
        DB::table('categorias')->insert([
            'nombre' => 'Servicios y suscripciones',
            ]);
        DB::table('categorias')->insert([
            'nombre' => 'Tecnologia',
            ]);
        DB::table('categorias')->insert([
            'nombre' => 'Viajes',
            ]);
        DB::table('categorias')->insert([
            'nombre' => 'Videojuegos',
            ]);
    }
}
