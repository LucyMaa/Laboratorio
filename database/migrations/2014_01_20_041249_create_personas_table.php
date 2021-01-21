<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->String('ci',15);     
            $table->String('nombre',50);
            $table->String('apellido',80);
            $table->String('direccion',150);
            $table->date('fechaNacimiento');        
            $table->char('sexo');
            $table->Integer('telefono')->nullable();
    
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
        Schema::dropIfExists('personas');
    }
}
