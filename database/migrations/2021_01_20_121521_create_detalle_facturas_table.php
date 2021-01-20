<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_facturas', function (Blueprint $table) {
            $table->id();
            $table->Integer('cantidad');
            $table->String('descripcion',150);
            $table->double('subTotal',8,2);
            $table->unsignedBigInteger('idFactura');
            $table->unsignedBigInteger('idExamen');
            $table->foreign('idFactura')->references('id')->on('facturas');
            $table->foreign('idExamen')->references('id')->on('examens');
            
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
        Schema::dropIfExists('detalle_facturas');
    }
}
