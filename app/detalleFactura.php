<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalleFactura extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [

        'cantidad',
        'descripcion',
        'subTotal',
        'idFactura',
        'idExamen'

    ];

}
