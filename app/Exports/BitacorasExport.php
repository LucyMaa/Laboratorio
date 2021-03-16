<?php

namespace App\Exports;

use App\bitacora;
use Maatwebsite\Excel\Concerns\FromCollection;

class BitacorasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        return bitacora::all();
    }
}
