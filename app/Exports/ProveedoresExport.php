<?php

namespace App\Exports;

use App\proveedor;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProveedoresExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        return proveedor::all();
    }
}
