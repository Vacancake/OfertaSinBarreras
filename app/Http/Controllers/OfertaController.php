<?php

namespace App\Http\Controllers;

use App\Oferta;
use App\Categoria;

use Illuminate\Http\Request;

class OfertaController extends Controller
{
    public function index()
    {
        $ofertas = Oferta::all();   //$ofertas = DB::table('ofertas')->get();
        $categorias = Categoria::all();    //$categorias = DB::table('categorias')->get();

        return view('Ofertas.ofertas', ['ofertas' => $ofertas, 'categorias' => $categorias]);
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('Ofertas.agregaOferta', ['categorias' => $categorias]);
    }

    public function show($id)
    {
        $oferta = Oferta::where('id', $id)->first();
        return view('Ofertas.mostrarOferta', ['ofertas' => $oferta]);
    }

    public function store(Request $request)
    {
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
        //Oferta::create($request->all());
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
        return redirect()->route('oferta.index');
    }

    //public function edit(){return something} */

}
