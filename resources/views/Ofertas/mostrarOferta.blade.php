@extends('layout')

@section('content')
<hr> <hr><hr>
<div class="row">
        <div class="col-md-6">
            <div class="container">
                <div class="card-img-top img-fluid"> <!--IMAGEN -->
                    <img src= {{$ofertas->imagen}} width="645">
                </div>
            </div>
        </div>

    <div class="col-md-6">
        <div class="container">
            <div class="oferta-bloque">
                <h3>{{$ofertas->nombre}}</h3><hr>
                <div class='informacion-oferta'>
                    <p>{{$ofertas->descripcion}}</p>
                    <p>Precio: ${{number_format ($ofertas->precio,2)}}</p>
                    
                    <p>     
                        <a class="btn btn-success" href="{{route("wishlist.add", $ofertas->id)}}"> Añadir a lista de deseos </a>
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
                        <p>{{$ofertas->fecha_inicio}}</p>
                        <hr>
                        <h5>Termino de Oferta</h5>
                        <p>{{$ofertas->fecha_termino}}</p>
                        <hr>
                        <h5>Ubicacion</h5>
                        <!-- <p>{{$ofertas->ubicacion}}</p> -->
                        <a href="{{$ofertas->ubicacion}}" target="_blank">Encuentra el producto aqui.</a>
                        <hr>
                        <h5>Referencias</h5>
                        <p>{{$ofertas->referencias}}</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-2"></div>
        </div>
    </div>


</div>

<!-- Footer -->
@include('footer')

@endsection
