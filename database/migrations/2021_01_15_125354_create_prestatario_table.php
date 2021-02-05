<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestatarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestatario', function (Blueprint $table) {
            $table->bigInteger('nro_prestamo');
            $table->integer('nro_socio');
            $table->string('nombre');
            $table->string('ci');
            $table->integer('moneda');
            $table->double('tasa_interes');
            $table->string('nombre_producto');
            $table->primary('nro_prestamo');
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
        Schema::dropIfExists('prestatario');
    }
}
