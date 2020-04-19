<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $ofertas = DB::table('ofertas')->get();
    $categorias = DB::table('categorias')->get();

    return view('Ofertas.ofertas', ['ofertas' => $ofertas, 'categorias' => $categorias]);
})->name('oferta.index');

Route::get('nueva',function() {//Oferta agregar 
    $categorias = DB::table('categorias')->get();


    return view('Ofertas.agregaOferta', ['categorias' => $categorias]);
})->name('oferta.create');

Route::get('oferta_detalles/{id}', function($id) {//Oferta detalles
    $oferta = DB::table('ofertas')
    ->where('id',$id)
    ->first();

    return view('Ofertas.mostrarOferta', ['oferta' => $oferta]);
})->name('oferta.show');

Route::get('oferta/{id}/editar', function ($id) {//Oferta editar
    return 'Aquí podremos editar la oferta: '.$id;
})->name('oferta.edit');

Route::get('usuario_detalles/{id}',function($id) {//Usuario detalles
    return view('Usuarios.mostrarUsuario');
})->name('usuario.show');

Route::get('usuario/{id}/editar', function ($id) {//Usuario editar
    return 'Aquí podremos editar el usuario: '.$id;
})->name('usuario.edit');

Route::get('wishlist', function() {
    return view('Wishlist.wishlist');
})->name('wishlist.show');