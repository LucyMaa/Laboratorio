<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarioExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario_examens', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedTinyInteger('id_inventario');
            $table->unsignedSmallInteger('id_examen');
            $table->date('fecha');
            $table->time('hora');
            $table->foreign('id_inventario')->references('id')->on('inventarios');
            $table->foreign('id_examen')->references('id')->on('examens');
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
        Schema::dropIfExists('inventario_examens');
    }
}
