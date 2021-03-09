<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administrador extends Model
{
    //
    protected $primaryKey = 'id';
    protected $fillable = [
        'fechaDeContratacion',
        'fechaDeBaja','sueldo','idPersona'
      ];

    public function Persona(){
        return $this->belongsTo('App\Persona');
    }
}
