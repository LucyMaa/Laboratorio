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
            $table->date('fecha ultimo viaje')->nullable();
            $table->string('lugar ultimo viaje',30)->nullable();
            $table->string('diagnostico',50);
            $table->string('medicamentos en uso',100)->nullable();
            $table->string('motivo',50)->nullable();
            $table->char('tratamiento psicologico');
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
