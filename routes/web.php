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
    return view('Ofertas.ofertas');
})->name('oferta.index');

Route::get('nueva',function() {//Oferta agregar 
    return view('Ofertas.agregaOferta');
})->name('oferta.create');

Route::get('oferta_detalles/{id}', function($id) {//Oferta detalles
    return view('Ofertas.mostrarOferta');
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