@extends('layout')

@section('content')

<div class="row">
        <div class="col-md-6">
             <div class="bloque-oferta"> <!--IMAGEN -->
                <img src="https://www.pexels.com/photo/woman-wearing-red-beret-and-gray-long-sleeve-dress-with-wild-feminist-print-3518091/" width="300">
            </div>
        </div>

        <div class="col-md-6">
            <div class="oferta-bloque">
                <h3>NOMBRE</h3><hr>
                <div class='informacion-oferta'>
                    <p>DESCRIPCION</p>
                    <p>Precio: $</p>
                    
                    <p> 
                        <a class="btn btn-warning btn-block" href="#"> Añadir a lista de deseos </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
