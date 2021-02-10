<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inventario extends Model
{
    //
    protected $primaryKey = 'id';
    protected $fillable = [

        'nombre',
        'descripcion',
        'existencia',
        'minimo'

    ];
    public function proveedores()
    {
        return $this->belongsToMany(proveedor::class, 'proveedor_inventario', 'id_inventario','id_examen')->withPivot('cantidad');
    }

}
