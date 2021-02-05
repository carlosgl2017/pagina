<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroSolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_solicitud', function (Blueprint $table) {
            $table->increments('id_registro');
            $table->integer('idtipord')->unsigned();
            $table->bigInteger('nro_prestamo')->unsigned();
            $table->integer('codigo');
            $table->foreign('idtipord')->references('idtipord')->on('tipo_rp'); 
            $table->foreign('nro_prestamo')->references('nro_prestamo')->on('prestatario'); 
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
        Schema::dropIfExists('registro_solicitud');
    }
}
