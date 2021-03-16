<?php

namespace App\Exports;

use App\usuario;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsuariosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        return usuario::with('persona')->get();
    }
}
