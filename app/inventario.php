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
        return $this->belongsToMany(proveedor::class, 'proveedor_inventarios', 'id_inventario','id_proveedor')->withPivot('cantidad');
    }

}
