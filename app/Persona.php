<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table ='persona';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable=[
        'id',
        'ci',
        'nombre',
        'apellido',
        'direccion',
        'fechaDeNacimiento',
        'sexo',
        'telefono'
    ];

}
