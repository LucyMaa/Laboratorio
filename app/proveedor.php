<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    //
    protected $primaryKey = 'id';
    protected $fillable = [

        'nombre',
        'descripcion',
        'telefono'

    ];
    public function inventarios()
    {
        return $this->belongsToMany(inventario::class, 'proveedor_inventario', 'id_inventario','id_examen')->withPivot('cantidad');
    }
}
