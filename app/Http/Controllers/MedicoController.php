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
        ->join('medicos', 'personas.id', '=', 'medicos.idPersona')->get();
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

        // $personas = persona::create([
        //     'ci' => $request->input('ci'),
        //     'nombre' => $request->input('nombre'),
        //     'apellido' => $request->input('apellido'),
        //     'direccion' => $request->input('dir'),
        //     'telefono' => $request->input('telefono'),
        //     'fechaNacimiento' => $request->input('nacimiento'),
        //     'sexo' => $request->input('sexo'),
        //     'telefono' => $request->input('telefono')
        // ]);
        
        $medico = new Medico();    
        $medico->cargo = $request->cargo;
        $medico->estado = $request->estado;
        $medico->fechaDeContratacion = $request->fechac;
        $medico->fechaDeBaja = $request->fechab;
        $medico->sueldo = $request->SUELDO;
        $medico->idPersona = $persona->id;
        $medico->save();

        
        
        // $medico = new Medico();
        // $medicos = medico::create([
        //     'cargo' => $request->input('cargo'),
        //     'estado' => $request->input('estado'),
        //     'fechaDeContratacion' => $request->input('fechac'),
        //     'fechaDeBaja' => $request->input('fechab'),
        //     'sueldo' => $request->input('SUELDO'),
        //     'idPersona'=>,
        // ]);
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
    public function edit($id)
    {
        $persona = new Persona();
        $persona = Persona::where('id',$id)->first();
        $medico = new Medico();
        $medico = Medico::where('idPersona',$persona->id)->first();
        return view('medico.edit',['medico'=>$medico,'persona'=>$persona]);        
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
        $medico = new Medico();
        $medico = Medico::FindOrFail($request->id);
        $medico->cargo = $request->cargo;
        $medico->estado = $request->estado;
        $medico->fechaDeContratacion = $request->fechac;
        $medico->fechaDeBaja = $request->fechab;
        $medico->sueldo = $request->SUELDO;
        $medico->update();

        $personas=new Persona();
        $personas=Persona::FindOrFail($request->id);
        $personas->ci=$request->ci;
        $personas->nombre=$request->nombre;
        $personas->apellido=$request->apellido;
        $personas->direccion=$request->dir;
        $personas->fechaNacimiento=$request->nacimiento;
        $personas->sexo=$request->sexo;
        $personas->telefono=$request->telefono;
        $personas->update();

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
