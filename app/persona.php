<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    //
    protected $table='personas';
    protected $primarykey='id';
    protected $fillable=['ci','nombre','apellido','direccion','fechaNacimiento','sexo','telefono'];  //le quite esto:  ,'cantidadDisponible'

    public function user(){
        return $this->belongsTo(User::class,'id','id');
    }
}
