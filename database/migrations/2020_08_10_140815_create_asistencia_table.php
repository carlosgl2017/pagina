<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencia', function (Blueprint $table) {
            $table->increments('id_asistencia');
            $table->date('fecha_asistencia');
            $table->integer('id_incentivo')->nullable(); 
            $table->boolean('recepcion')->dafault(false); 
            $table->integer('nro_socio')->unsigned(); 
            $table->integer('id_evento')->unsigned(); 
            $table->integer('id_estado')->unsigned(); 
            $table->foreign('nro_socio')->references('nro_socio')->on('socio'); 
            $table->foreign('id_evento')->references('id_evento')->on('evento'); 
            $table->foreign('id_estado')->references('id_estado')->on('estado'); 
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
        Schema::dropIfExists('asistencia');
    }
}
