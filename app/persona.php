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

    public function user(){
        return $this->belongsTo(User::class,'id','id');
    }

    public function administradores()
    {
        return $this->hasMany(administrador::class,'idPersona','id');
    }
}
