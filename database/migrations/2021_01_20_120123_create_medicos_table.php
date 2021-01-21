<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->id();
            $table->String('cargo',50);
            $table->String('estado',30);
            $table->date('fechaDeContratacion');
            $table->date('fechaDeBaja')->nullable();
            $table->double('sueldo',8,2);
            $table->unsignedSmallInteger('idTurno')->nullable();
            $table->unsignedBigInteger('idPersona')->nullable();
            $table->foreign('idTurno')->references('id')->on('turnos');
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
        Schema::dropIfExists('medicos');
    }
}
