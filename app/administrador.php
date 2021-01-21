<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administrador extends Model
{
    protected $table ='persona';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable=[
        'id',
        'fechaentrada',
        'fechasalida',
        'foto',
        'sueldo',
        'fechaDeNacimiento',
        'sexo',
        'telefono'
    ];
}
