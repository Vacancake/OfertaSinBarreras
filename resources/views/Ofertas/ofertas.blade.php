@extends('layout')

@section('content')
      <!-- Page Content -->
<div class="container">

<div class="row">

  <div class="col-lg-3">

    <h1 class="my-4">Oferta Sin Barreras</h1>
    <div class="list-group">
      @foreach($categorias as $categoria)

      <a href="#" class="list-group-item">{{$categoria->nombre}}</a>

      @endforeach
    </div>

    <hr>

    <div class="agregar-oferta">
      <p>
          <a class="btn btn-warning btn-block" href="{{ route('oferta.create') }}"> Publicar Oferta </a>
      </p>
    </div>

  </div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-9">

    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <!-- Imagenes del Carrusel -->
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block img-fluid" src="http://lorempixel.com/900/350/technics/2" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="http://lorempixel.com/900/350/technics/5" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="http://lorempixel.com/900/350/technics/1" alt="Third slide">
        </div>
      </div>
      <!-- Flechas Atras - Adelante -->
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="row">

      @foreach($ofertas as $oferta)

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="{{ route('oferta.show', $oferta->id)}}"><img class="card-img-top" src="{{$oferta->imagen}}" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="{{ route('oferta.show', $oferta->id)}}">{{$oferta -> nombre}}</a>
            </h4>
            <h5>$ {{number_format ($oferta->precio,2)}}</h5>
            <p class="card-text">Desde: {{$oferta -> fecha_inicio}}</p>
          </div>
        </div>
      </div>

      @endforeach



    </div>
    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->
@endsection
