<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class turno extends Model
{
    //
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'horaInicio', 
        'horaFin'
             
    ];

    public function medicos()
    {
        return $this->hasMany(medico::class,'id','idTurno');
    }
}
