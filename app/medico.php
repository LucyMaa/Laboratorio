<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medico extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'cargo',
        'estado', 
        'fechaDeContratacion',
        'fechaDeBaja',
        'sueldo',
        'idPersona',
        'idTurno'    
    ];

    public function Persona(){
        return $this->belongsTo(Persona::class,'idPersona','id');
    }
    public function turno(){
        return $this->belongsTo(turno::class,'idTurno','id');
    }
}
