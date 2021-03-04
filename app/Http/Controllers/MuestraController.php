<?php

namespace App\Http\Controllers;

use App\muestra;
use Illuminate\Http\Request;
use App\Acciones;

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
        
        $muestras=muestra::all();
        return view('muestras.index',['muestras'=>$muestras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('muestras.create');
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
        $muestra=new muestra();
        $muestra->tipo=$request->tipo;
        $muestra->save();
        Acciones::insertar('nueva muestra :'.$muestra->tipo);
        return redirect()->route('muestras.index');
    }

    /**
     * Display the specified resource.
     * @param bigint $id
     * @param  \App\muestra  $muestra
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $muestra=muestra::findOrfail($id);
        return view('muestras.show',['muestra'=>$muestra]);
    }

    /**
     * Show the form for editing the specified resource.
     *@param bigint $id;
     * @param  \App\muestra  $muestra
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $muestra=muestra::findOrfail($id);
        return view('muestras.edit',['muestra'=>$muestra]);
    }

    /**
     * Update the specified resource in storage.
     * @param bigint $id;
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\muestra  $muestra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $muestra=muestra::findOrfail($id);
        $muestra->tipo=$request->tipo;
        $muestra->update();
        Acciones::insertar('edito la muestra :'.$muestra->tipo);
        return redirect()->route('muestras.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param bigint $id;
     * @param  \App\muestra  $muestra
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $muestra=muestra::findOrfail($id);
        $muestra->delete();
        Acciones::insertar('elimino la muestra :'.$muestra->tipo);
        return redirect()->route('muestras.index');
    }
}
