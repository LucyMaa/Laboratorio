<?php

namespace App\Http\Controllers;

use App\consulta;
use App\consulta_examen;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $consultaExamen=new consulta_examen();
        
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
     * @param  \App\consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function show(consulta $consulta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function edit(consulta $consulta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, consulta $consulta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function destroy(consulta $consulta)
    {
        //
    }
}
