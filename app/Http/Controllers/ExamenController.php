<?php

namespace App\Http\Controllers;

use App\examen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $examenes=DB::table('examens')->get();
        return view('examenes.index',['examenes'=>$examenes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('examenes.create');
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
        $examen= new examen();
        $examen->nombre=$request->nombre;
        $examen->descripcion=$request->descripcion;
        $examen->precio=$request->precio;
       // $examen->idConsulta=4;  //CORREGIRLOOOOOOO
        $examen->save();
        return redirect()->route('examenes.index');
    }

    /**
     * Display the specified resource.
     * @param bigint $id
     * @param  \App\examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $examen=examen::findOrfail($id);
        return view('examenes.show',["examen"=>$examen]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param bigint $id
     * @param  \App\examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $examen=examen::findOrfail($id);
        return view('examenes.edit',["examen"=>$examen]);
    }

    /**
     * Update the specified resource in storage.
     * @param bigint $id
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $examen=examen::findOrfail($id);
        $examen->nombre=$request->nombre;
        $examen->precio=$request->precio;
        $examen->descripcion=$request->descripcion;
        $examen->update();
        return redirect()->route('examenes.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param bigint $id
     * @param  \App\examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $examen=examen::findOrfail($id);
        $examen->delete();
        return redirect()->route('examenes.index');
    }
}
