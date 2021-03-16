<?php

namespace App\Exports;

use App\Medico;
use App\persona;
use Maatwebsite\Excel\Concerns\FromCollection;

class MedicosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return persona::select('personas.*', 'medicos.*')
        ->join('medicos', 'personas.id', '=', 'medicos.idPersona')->get();
    }
}
