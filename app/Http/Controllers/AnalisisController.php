<?php

namespace App\Http\Controllers;

use App\analisis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnalisisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $analisis = analisis::where('idExamen', '=', $id)->get();
        //$p = consulta::where('idPaciente', "=", $paciente[0]->id)->get();
        return  view('analisis.index', ['analisis' => $analisis]);
         
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\analisis  $analisis
     * @return \Illuminate\Http\Response
     */
    public function show(analisis $analisis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\analisis  $analisis
     * @return \Illuminate\Http\Response
     */
    public function edit(analisis $analisis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\analisis  $analisis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, analisis $analisis)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\analisis  $analisis
     * @return \Illuminate\Http\Response
     */
    public function destroy(analisis $analisis)
    {
        //
    }
}
