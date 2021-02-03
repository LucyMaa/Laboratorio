<?php

namespace App\Http\Controllers;

use App\muestra;
use Illuminate\Http\Request;

class MuestraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
     * @param  \App\muestra  $muestra
     * @return \Illuminate\Http\Response
     */
    public function show(muestra $muestra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\muestra  $muestra
     * @return \Illuminate\Http\Response
     */
    public function edit(muestra $muestra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\muestra  $muestra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, muestra $muestra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\muestra  $muestra
     * @return \Illuminate\Http\Response
     */
    public function destroy(muestra $muestra)
    {
        //
    }
}
