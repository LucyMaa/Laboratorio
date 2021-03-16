<?php

namespace App\Http\Controllers;

use App\consulta;
use App\consulta_examen;
use App\paciente;
use Illuminate\Http\Request;

class ConsultaExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $paciente = paciente::where('id', "=", $id)->first();
       return view('Consulta.registrar', ['pacientes' => $paciente]);
       
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $consulta = new consulta();
         $consulta->diagnostico = $request->di;
         $consulta->f_ultimo_viaje = $request->fecha;
         $consulta->lugar_viaje = $request->viaje;
         $consulta->motivo = $request->motivo;
         $consulta->tratamientop = $request->tratamiento;
         $consulta->medicamentos = $request->medicamentos;
         $consulta->idPaciente = $request->idp;
         $consulta->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\consulta_examen  $consulta_examen
     * @return \Illuminate\Http\Response
     */
    public function show(consulta_examen $consulta_examen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\consulta_examen  $consulta_examen
     * @return \Illuminate\Http\Response
     */
    public function edit(consulta_examen $consulta_examen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\consulta_examen  $consulta_examen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, consulta_examen $consulta_examen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\consulta_examen  $consulta_examen
     * @return \Illuminate\Http\Response
     */
    public function destroy(consulta_examen $consulta_examen)
    {
        //
    }
}
