@extends('layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- <div class="card"> -->
            <h1 class="my-4">Captura de una oferta nueva</h1>
                <form method="POST" action="{{url('ofertas')}}">
                @csrf
                            <label for="nombre">Nombre</label>
                            <input type="text" name ="nombre" class="form-control" id="nombre" placeholder="Nombre del oferta">

                            <label for="fecha_inicio">Fecha Inicio</label>
                            <input type="date" name="fecha_inicio" class="form-control" id="fecha_inicio">
                       
                            <label for="fecha_termino">Fecha Término (opcional)*</label>
                            <input type="date" name="fecha_termino" class="form-control" id="fecha_termino">
                       
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion" class="form-control" id="descripcion" rows="3" ></textarea>
                       
                            <label for="precio">Precio</label>
                            <input type="number" name ="precio" class="form-control" id="precio">
                       
                            <label for="prioridad">Categoria</label>
                            <select class="custom-select mr-sm-2" id="categoria_id" name="categoria_id">
                                @foreach($categorias as $categoria)
                                
                                <option>{{$categoria->id}}</option>

                                @endforeach
                            </select>
                      

                            <label for="precio">Ubicacion</label>
                            <input type="url" name ="ubicacion" class="form-control" id="ubicacion">
                       

                            <label for="referencias">Referencias</label>
                            <textarea name="referencias" class="form-control" id="referencias" rows="3" ></textarea>
                       


                            <label for="foto_oferta">Foto de la Oferta</label>
                            <!-- <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                                <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                            </div> -->

                            <input type="text" name ="imagen" class="form-control" id="imagen" placeholder="Imagen de la oferta">
                       
                        <p> 
                            <button type="submit" class= "btn btn-warning btn-block"> Publicar</button>   
                        </p>
                </form>
            <!-- </div> -->
        </div>
    </div>
</div>

@endsection