<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor_inventarios', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedTinyInteger('id_inventario');
            $table->unsignedSmallInteger('id_proveedor');
            $table->integer('cantidad');
            $table->foreign('id_proveedor')->references('id')->on('proveedors');
            $table->foreign('id_inventario')->references('id')->on('inventarios');
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
        Schema::dropIfExists('proveedor_inventarios');
    }
}
