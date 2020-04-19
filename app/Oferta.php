<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $fillable = [
        'nombre', 
        'fecha_inicio', 
        'fecha_termino', 
        'descripcion', 
        'precio', 
        'ubicacion', 
        'referencias', 
        'imagen', 
        'categoria_id'
    ];
}
