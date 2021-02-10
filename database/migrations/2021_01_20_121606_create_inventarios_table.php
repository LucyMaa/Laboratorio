<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->String('nombre',30);
            $table->String('descripcion',150)->nullable();
            $table->double('existencia',8,2);
            $table->double('minimo',8,2);
            //$table->unsignedBigInteger('idExamen');
           // $table->foreign('idExamen')->references('id')->on('examens');
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
        Schema::dropIfExists('inventarios');
    }
}
