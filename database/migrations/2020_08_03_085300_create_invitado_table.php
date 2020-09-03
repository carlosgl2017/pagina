<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvitadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitado', function (Blueprint $table) {
            $table->increments('id_invitado');
            $table->integer('nro_socio');
            $table->integer('id_evento');
            $table->foreign('nro_socio')->references('nro_socio')->on('socio');
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
        Schema::dropIfExists('invitado');
    }
}
