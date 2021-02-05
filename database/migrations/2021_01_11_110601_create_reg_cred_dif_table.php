<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegCredDifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_cred_dif', function (Blueprint $table) {
            $table->increments('id_reg');            
            $table->string('nombre');
            $table->string('apellido')->nullable();
            $table->string('identificacion');
            $table->string('num_telf');
            $table->string('email');
            $table->string('ciudad');
            $table->string('direccion_consumidor');
            $table->string('entidad')->default('Cooperativa de Ahorro y Crédito Societaria "San Martín" R.L. (CSN)');
            $table->string('ciudad_entidad')->default('Potosi');
            $table->string('direccion_entidad')->default('Calle Topater N°5');
            $table->string('nombre_oficial');
            $table->text('descripcion');
            $table->integer('codigo');
            $table->year('gestion_reclamo');
            $table->date('fecha_reclamo');
            $table->integer('id_tematica')->unsigned(); 
            $table->string('ctcre');
            $table->string('ctidn');
            $table->integer('id_ext')->unsigned()->nullable();
            $table->foreign('id_tematica')->references('id_tematica')->on('tematica');
            $table->foreign('ctcre')->references('ctcre')->on('tipo_credito');
            $table->foreign('id_ext')->references('id_ext')->on('ci_ext');
            $table->foreign('ctidn')->references('ctidn')->on('tipo_identificacion');
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
        Schema::dropIfExists('reg_cred_dif');
    }
}
