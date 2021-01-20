<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultados', function (Blueprint $table) {
            $table->id();
            $table->String('observacion',100);
            $table->String('resultado',150)->nullable();
            $table->unsignedBigInteger('idMuestra');
            $table->unsignedBigInteger('idAnalisis');
            $table->foreign('idMuestra')->references('id')->on('muestras');
            $table->foreign('idAnalisis')->references('id')->on('analises');
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
        Schema::dropIfExists('resultados');
    }
}
