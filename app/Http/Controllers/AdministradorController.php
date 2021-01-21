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
            'idPersona'=>$personas->id,
        ]);
        return redirect()->route('empleados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function show(administrador $administrador)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function edit(administrador $administrador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, administrador $administrador)
    {
        //
    }

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
