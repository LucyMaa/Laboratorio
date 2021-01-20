<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descripcions', function (Blueprint $table) {
            $table->id();
            $table->double('cantidad',8,2);
            $table->unsignedBigInteger('idInventario');
            $table->unsignedBigInteger('idProveedor');
            $table->foreign('idInventario')->references('id')->on('inventarios');
            $table->foreign('idProveedor')->references('id')->on('proveedors');
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
        Schema::dropIfExists('descripcions');
    }
}
