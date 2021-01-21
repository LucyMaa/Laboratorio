<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table ='personas';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable=[
        'id',
        'ci',
        'nombre',
        'apellido',
        'direccion',
        'fechaNacimiento',
        'sexo',
        'telefono'
    ];

}
