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
      ];

    public function Persona(){
        return $this->belongsTo('App\Persona');
    }
}
