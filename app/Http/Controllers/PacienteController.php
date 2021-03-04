<?php

namespace App\Http\Controllers;

use App\paciente;
use App\persona;
use App\Acciones;
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
        Acciones::insertar('nuevo paciente :'.$persona->nombre);
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
     *@param bigint $id
     * @param  \App\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $paciente=paciente::findOrfail($id);
        $persona=persona::findOrfail($paciente->idPersona);
        return view('pacientes.edit',['paciente'=>$paciente,'persona'=>$persona]);   
    }

    /**
     * Update the specified resource in storage.
     *@param bigint $id
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $paciente = paciente::FindOrFail($id);
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
        $paciente->update();
        
        
        $personas=Persona::FindOrFail($paciente->idPersona);
        $personas->ci=$request->ci;
        $personas->nombre=$request->nombre;
        $personas->apellido=$request->apellido;
        $personas->direccion=$request->dir;
        $personas->fechaNacimiento=$request->nacimiento;
        $personas->sexo=$request->sexo;
        $personas->telefono=$request->telefono;
        $personas->update();
        Acciones::insertar('Edito un paciente :'.$personas->nombre);
        return redirect()->route('pacientes.index');
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
