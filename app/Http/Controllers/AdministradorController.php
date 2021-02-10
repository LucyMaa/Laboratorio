<?php

namespace App\Http\Controllers;

use App\administrador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\persona;


class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $administrador = DB::table('personas')
            ->join('administradors', 'personas.id', '=', 'administradors.idPersona')->get();
        //return $medico;
        return view('empleados.index',  ['administradors' => $administrador]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleados.create');
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

        $administrador = administrador::create([

            'fechaDeContratacion' => $request->input('fechac'),
            'fechaDeBaja' => $request->input('fechab'),
            'sueldo' => $request->input('SUELDO'),
            'idPersona' => $personas->id,
        ]);
        return redirect()->route('empleados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function show($codigo)
    {
        $administrador = administrador::where('id', '=', $codigo)->first();
        $personas = persona::where('id', '=', $administrador->idPersona)->first();
        return view('empleados.show', ['administradores' => $administrador, 'personas' => $personas]);
    }

    /** Show the form for editing the specified resource.
     *
     * @param  \App\administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function edit1($id)
    {
        $administrador = administrador::findOrfail($id);
        $persona = Persona::findOrfail($administrador->idPersona);
        return view('empleados.delete', ['administrador' => $administrador, 'persona' => $persona]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function update1(Request $request, $id)
    {
        $administrador = administrador::FindOrFail($id);
        $administrador->fechaDeBaja = $request->input('fechab');
        $administrador->save();
    }
    //-------------------------------------------------------------------------------------------  
    /** Show the form for editing the specified resource.
     *
     * @param  \App\administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $administrador = administrador::findOrfail($id);
        $persona = Persona::findOrfail($administrador->idPersona);
        return view('empleados.edit', ['administrador' => $administrador, 'persona' => $persona]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $persona = persona::FindOrFail($id);

        $persona->ci = $request->input('ci');
        $persona->nombre=$request->input('nombre');
        $persona->apellido=$request->input('apellido');
        $persona->direccion=$request->input('dir');
        $persona->fechaNacimiento=$request->input('nacimiento');
        $persona->sexo=$request->input('genero');
        $persona->telefono=$request->input('telefono');
        $persona->save();

        $administrador = administrador::FindOrFail($id);
        $administrador->fechaDeContratacion= $request->input('fechac');
        $administrador->sueldo= $request->input('SUELDO');
        $administrador->save();
        session()->flash('alert-success', 'DATOS ACTUALIZADOS CORRECTAMENTE');
        return redirect()->route('empleados.index');
    }

    //-------------------------------------------------------------------------------------------------------------


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function destroy(administrador $administrador)
    {
        //
    }
}
