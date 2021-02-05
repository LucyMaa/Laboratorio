<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    //
    protected $primaryKey = 'id';
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
        return $this->belongsTo(medico::class,'idPersona','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'id','id');
    }

    public function administradores()
    {
        return $this->hasMany(administrador::class,'idPersona','id');
    }
}
