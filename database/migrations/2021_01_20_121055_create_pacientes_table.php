<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->String('alergias',100)->nullable();
            $table->String('antecedentes_traumaticos',150)->nullable();
            $table->String('enfermedades',150)->nullable();
            $table->String('estado_civil',20)->nullable();
            $table->float('estatura');
            $table->String('grupo_sanguineo',8)->nullable();
            $table->String('intolerancias',50)->nullable();
            $table->String('nombre contacto de emergencia',100);
            $table->integer('numero contacto de emergencia');
            $table->double('peso',5,2);
            $table->unsignedBigInteger('idPersona');
            $table->foreign('idPersona')->references('id')->on('personas');
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
        Schema::dropIfExists('pacientes');
    }
}
