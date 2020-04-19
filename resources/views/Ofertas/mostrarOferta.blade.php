@extends('layout')

@section('content')
<hr> <hr><hr>
<div class="row">
        <div class="col-md-6">
            <div class="container">
                <div class="bloque-oferta"> <!--IMAGEN -->
                    <img src= {{$oferta->imagen}} width="400">
                </div>
            </div>
        </div>

    <div class="col-md-6">
        <div class="container">
            <div class="oferta-bloque">
                <h3>{{$oferta->nombre}}</h3><hr>
                <div class='informacion-oferta'>
                    <p>{{$oferta->descripcion}}</p>
                    <p>Precio: ${{$oferta->precio}}</p>
                    
                    <p>     
                        <a class="btn btn-success" href="#"> Añadir a lista de deseos </a>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>

            <div class="col-lg-8">
                <div class="card card-outline-secondary my-4">
                    <div class="card-header">
                        Otros Detalles
                    </div>
                    <div class="card-body">
                        <h5>Inicio de Oferta</h5>
                        <p>{{$oferta->fecha_inicio}}</p>
                        <hr>
                        <h5>Termino de Oferta</h5>
                        <p>{{$oferta->fecha_termino}}</p>
                        <hr>
                        <h5>Ubicacion</h5>
                        <p>{{$oferta->ubicacion}}</p>
                        <hr>
                        <h5>Referencias</h5>
                        <p>{{$oferta->referencias}}</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-2"></div>
        </div>
    </div>


</div>

@endsection
