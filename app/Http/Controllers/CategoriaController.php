<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Oferta;
use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function show($id)
    {
        $date = Carbon::now();
        $ofertas = Oferta::whereDate('fecha_termino', '>=', $date)
                            ->where('categoria_id', 'like', $id) 
                            ->get();

        $categorias = Categoria::all();

        return view('Ofertas.ofertas', ['ofertas' => $ofertas, 'categorias' => $categorias]);
        
    }
}

