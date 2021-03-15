<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->string('fechahora',50)->nullable();
            $table->Integer('nit')->nullable();
            $table->double('total',8,2);
            $table->String('nombre',70);
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
        Schema::dropIfExists('facturas');
    }
}
