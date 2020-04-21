<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->date('fecha_inicio');
            $table->date('fecha_termino')->nullable();

            $table->longText('descripcion');
            $table->double('precio',9,2);
            $table->string('ubicacion');
            $table->mediumText('referencias');

            $table->string('imagen');

            $table->foreignId('categoria_id')->references('id')->on('ofertas');
            //$table->foreignId('usuario_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ofertas');
    }
}
