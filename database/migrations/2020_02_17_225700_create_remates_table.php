<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRematesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remates', function (Blueprint $table) {     
            $table->increments('id_remate');
            $table->string('lugar');
            $table->string('juzgado');
            $table->date('fecha_subasta');
            $table->time('hora');
            $table->string('descripcion_bien')->nullable();
            $table->double('monto');
            $table->string('nombre_martillero');
            $table->boolean('condicion')->default(true);                        
            $table->integer('id_departamento')->unsigned();
            $table->foreign('id_departamento')->references('id_departamento')->on('departamentos')->onDelete('cascade');
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
        Schema::dropIfExists('remates');
    }
}
