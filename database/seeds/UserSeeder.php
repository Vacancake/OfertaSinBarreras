<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Daniel Hernandez',
            'email' => 'daniel123@hotmail.com',
            'password' => 'danielr123'
        ]);
        DB::table('users')->insert([
            'name' => 'Amilcar Mora',
            'email' => 'amilcar123@hotmail.com',
            'password' => 'amilcar123'
        ]);
        DB::table('users')->insert([
            'name' => 'Guadalupe Sanchez',
            'email' => 'guadalupe123@hotmail.com',
            'password' => 'guadalupe123'
        ]);
        DB::table('users')->insert([
            'name' => 'Alejandro Leyva',
            'email' => 'alejandro123@hotmail.com',
            'password' => 'alejandro123'
        ]);
        DB::table('users')->insert([
            'name' => 'Luis Perez',
            'email' => 'luis123@hotmail.com',
            'password' => 'luis123'
        ]);
    }
}
