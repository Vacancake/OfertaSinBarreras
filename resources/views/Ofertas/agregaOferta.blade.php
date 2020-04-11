@extends('layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- <div class="card"> -->
            <h1 class="my-4">Captura de una oferta nueva</h1>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name ="nombre" value="" class="form-control" id="nombre" placeholder="Nombre del oferta">
                        </div>
                        <div class="form-group">
                            <label for="fecha_inicio">Fecha Inicio</label>
                            <input type="date" name="Fecha_Inicio" value="" class="form-control" id="finicio">
                        </div>
                        <div class="form-group">
                            <label for="fecha_termino">Fecha Término (opcional)*</label>
                            <input type="date" name="Fecha_Termino" value="" class="form-control" id="ftermino">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion" value="" class="form-control" id="descripcion" rows="3" ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="prioridad">Precio</label>
                            <input type="number" name ="precio" value="" class="form-control" id="precio">
                        </div>
                        <div class="form-group">
                            <label for="prioridad">Categoria</label>
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option>Categoria 1</option>
                                <option>Categoria 2</option>
                                <option>Categoria 3</option>
                                <option>Categoria 4</option>
                                <option>Categoria 5</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="precio">Ubicacion</label>
                            <input type="url" name ="ubicacion" value="" class="form-control" id="ubicacion">
                        </div>

                        <div class="form-group">
                            <label for="referencias">Referencias</label>
                            <textarea name="referencias" value="" class="form-control" id="referencias" rows="3" ></textarea>
                        </div>


                        <div class="form-group">
                            <label for="foto_oferta">Foto de la Oferta</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                                <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                            </div>
                        </div>

                        <!-- <button type="submit" class="btn btn-primary">Crear</button> -->
            <!-- </div> -->
        </div>
    </div>
</div>

@endsection