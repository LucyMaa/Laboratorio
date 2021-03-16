<?php

namespace App\Exports;

use App\muestra;
use Maatwebsite\Excel\Concerns\FromCollection;

class MuestrasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        return muestra::all();
    }
}
