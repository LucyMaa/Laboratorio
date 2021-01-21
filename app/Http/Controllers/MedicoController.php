<?php

namespace App\Http\Controllers;

use App\medico;
use App\persona;
use CreateMedicosTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medico = DB::table('personas')
        ->join('medicos', 'personas.id', '=', 'medicos.id')->get();
        //return $medico;
        return view('medico.index',  ['Medicos' => $medico]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('medico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $personas = persona::create([
            'ci' => $request->input('ci'),
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'direccion' => $request->input('dir'),
            'telefono' => $request->input('telefono'),
            'fechaNacimiento' => $request->input('nacimiento'),
            'sexo' => $request->input('sexo'),
            'telefono' => $request->input('telefono')
        ]);
        $medicos = medico::create([
            'cargo' => $request->input('cargo'),
            'estado' => $request->input('estado'),
            'fechaDeContratacion' => $request->input('fechac'),
            'fechaDeBaja' => $request->input('fechab'),
            'sueldo' => $request->input('SUELDO'),
            'idPersona'=>$personas->id,
        ]);
        return redirect()->route('Medico.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function show(medico $medico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function edit(medico $medico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, medico $medico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function destroy(medico $medico)
    {
        //
    }
}
