<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->date('f_ultimo_viaje')->nullable();
            $table->string('lugar_viaje',30)->nullable();
            $table->string('diagnostico',50)->nullable();;
            $table->string('medicamentos',100)->nullable();
            $table->string('motivo',50)->nullable();
            $table->string('tratamientop',50)->nullable();
            $table->unsignedBigInteger('idPaciente');
            $table->foreign('idPaciente')->references('id')->on('pacientes');
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
        Schema::dropIfExists('consultas');
    }
}
