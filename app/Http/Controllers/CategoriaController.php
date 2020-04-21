<?php

namespace App\Http\Controllers;

use App\Oferta;
use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function show($id)
    {
        //return $id;
        $ofertas = Oferta::where('categoria_id', 'like', $id)->get();
        $categorias = Categoria::all();
        //return $ofertas;

        return view('Ofertas.ofertas', ['ofertas' => $ofertas, 'categorias' => $categorias]);
        
    }
}
