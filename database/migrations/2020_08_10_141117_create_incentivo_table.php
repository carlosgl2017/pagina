<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncentivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incentivo', function (Blueprint $table) {
            $table->increments('id_incentivo');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('foto');
            $table->integer('id_evento')->unsigned();
            $table->foreign('id_evento')->references('id_evento')->on('evento'); 
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
        Schema::dropIfExists('incentivo');
    }
}
