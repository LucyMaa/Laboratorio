<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    //
    protected $fillable = [
            'ci' ,
            'nombre',
            'apellido',
            'direccion',
            'telefono' ,
            'fechaNacimiento' ,
            'sexo',
            'telefono',
        
    ];

    public function Medico(){
        return $this->hasOne('App\Medico');
    }
}
