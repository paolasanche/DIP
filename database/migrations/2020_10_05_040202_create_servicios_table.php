<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->bigIncrements('idservicios');
            $table->string('nombre');
            $table->string('tiposervicios');
            $table->string('costo');
            $table->string('detalle');
            $table->biginteger('tiposervicios_id')->unsigned();
            $table->foreign('tiposervicios_id')->references('idtiposervicios')->on('tiposervicios');
            $table->remembertoken();
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
        Schema::dropIfExists('servicios');
    }
}
