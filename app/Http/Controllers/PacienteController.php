<?php

namespace App\Http\Controllers;

use App\paciente;
use App\persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $paciente = DB::table('personas')
        ->join('pacientes', 'personas.id', '=', 'pacientes.idPersona')->get();
        return view('pacientes.index',['pacientes'=>$paciente]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $persona = new Persona();    
        $persona->ci = $request->ci;
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->direccion = $request->dir;
        $persona->telefono = $request->telefono;
        $persona->fechaNacimiento = $request->nacimiento;
        $persona->sexo = $request->sexo;
        $persona->telefono = $request->telefono;
        $persona->save();

        $paciente=new paciente();
        $paciente->alergias=$request->alergias;
        $paciente->antecedentes_traumaticos=$request->antecedentes_traumaticos;
        $paciente->enfermedades=$request->enfermedades;
        $paciente->estado_civil=$request->estado_civil;
        $paciente->estatura=$request->estatura;
        $paciente->grupo_sanguineo=$request->grupo_sanguineo;
        $paciente->intolerancias=$request->intolerancias;
        $paciente->nombre_contacto_de_emergencia=$request->nombre_contacto_de_emergencia;
        $paciente->numero_contacto_de_emergencia=$request->numero_contacto_de_emergencia;
        $paciente->peso=$request->peso;
        $paciente->idPersona=$persona->id;
        $paciente->save();

        return redirect()->route('pacientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(paciente $paciente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, paciente $paciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(paciente $paciente)
    {
        //
    }
}
