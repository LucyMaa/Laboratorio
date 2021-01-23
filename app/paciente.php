<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    //
    protected $primaryKey = 'id';
    protected $fillable = [
        'alergias','antecedentes_traumaticos',
        'enfermedades','estado_civil',
        'estatura','grupo_sanguineo',
        'intolerancias','nombre_contacto_de_emergencia',
        'numero_contacto_de_emergencia','peso','idPersona'   
    ];
}
