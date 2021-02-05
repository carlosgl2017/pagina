<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReclamoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamo', function (Blueprint $table) {
            $table->increments('id_reclamo');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('ci');
            $table->string('nombre_rep_legal')->nullable();
            $table->string('numero_testimonio')->nullable();
            $table->string('direccion');
            $table->string('email');
            $table->string('celular');
            $table->string('fecha_reclamo');
            $table->string('monto');
            $table->string('origen_reclamo')->nullable();
            $table->string('descripcion');
            $table->string('codigo'); 
            $table->integer('id_ext')->unsigned();
            $table->integer('id_tipo_reclamante')->unsigned();
            $table->integer('id_tipo_reclamo')->unsigned();           
            $table->foreign('id_ext')->references('id_ext')->on('ci_ext');
            $table->foreign('id_tipo_reclamante')->references('id_tipo_reclamante')->on('tipo_reclamante');
            $table->foreign('id_tipo_reclamo')->references('id_tipo_reclamo')->on('tipo_reclamo');
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
        Schema::dropIfExists('reclamo');
    }
}
