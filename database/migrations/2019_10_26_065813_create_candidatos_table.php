<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('foto');
            $table->boolean('estado');

            $table->unsignedInteger('partido_id');
            $table->foreign('partido_id')->references('id')->on('partidos')->onDelete('cascade');

            $table->unsignedInteger('puesto_id');
            $table->foreign('puesto_id')->references('id')->on('puestos')->onDelete('cascade');

            $table->unsignedInteger('eleccione_id'); 
            $table->foreign('eleccione_id')->references('id')->on('elecciones')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidatos');
    }
}
