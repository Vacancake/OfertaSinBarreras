<?php

use App\Oferta;
use App\Categoria;
use Illuminate\Http\Request;
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
// ---------------------------RUTAS OFERTAS ---------------------------
Route::get('/', function () {                                           //Oferta index
    $ofertas = Oferta::all();   //$ofertas = DB::table('ofertas')->get();
    $categorias = Categoria::all();    //$categorias = DB::table('categorias')->get();

    return view('Ofertas.ofertas', ['ofertas' => $ofertas, 'categorias' => $categorias]);
})->name('oferta.index');



Route::get('oferta_detalles/{id}', function($id) {                      //Oferta detalles
     $oferta = Oferta::where('id', $id)->first();

    return view('Ofertas.mostrarOferta', ['ofertas' => $oferta]);
})->name('oferta.show');

Route::get('oferta/{id}/editar', function ($id) {                       //Oferta editar
    return 'Aquí podremos editar la oferta: '.$id;
})->name('oferta.edit');

Route::get('nueva',function() {                                         //Oferta form 
    $categorias = Categoria::all();
    return view('Ofertas.agregaOferta', ['categorias' => $categorias]);
})->name('oferta.create');

Route::post('ofertas', function(Request $request) {                     //Oferta añadir
    //return $request;
    
    $request->validate([
        'nombre' =>'required|max:255',
        'fecha_inicio' =>'required|date|after:today',
        'fecha_termino' => 'nullable|date|after:today',
        'precio' =>'required',
        'descripcion' =>'required',
        'categoria_id' =>'required',
        'ubicacion' =>'required|max:255',
        'referencias' =>'required',
        'imagen' =>'required||max:255',
        ]);
    //return $request;
    Oferta::create([
        'nombre' => $request->input('nombre'),
        'fecha_inicio' => $request->input('fecha_inicio'),
        'fecha_termino' => $request->input('fecha_termino'),
        'precio' => $request->input('precio'),
        'descripcion' => $request->input('descripcion'),
        'categoria_id' => $request->input('categoria_id'),//categoria
        'ubicacion' => $request->input('ubicacion'),
        'referencias' => $request->input('referencias'),
        'imagen' => $request->input('imagen'),
        
        ]);
        
    //return "Aqui vamos a agregar la oferta";
    return redirect()->route('oferta.index');
});

Route::get('usuario_detalles/{id}',function($id) {//Usuario detalles
    return view('Usuarios.mostrarUsuario');
})->name('usuario.show');

Route::get('usuario/{id}/editar', function ($id) {//Usuario editar
    return 'Aquí podremos editar el usuario: '.$id;
})->name('usuario.edit');

Route::get('wishlist', function() {
    return view('Wishlist.wishlist');
})->name('wishlist.show');