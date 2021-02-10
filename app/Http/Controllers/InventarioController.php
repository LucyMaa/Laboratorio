<?php

namespace App\Http\Controllers;

use App\inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $inventarios=inventario::all();
        return view('inventarios.index',['inventarios'=>$inventarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('inventarios.create');
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
        $inventario=new inventario();
        $inventario->nombre=$request->nombre;
        $inventario->descripcion=$request->descripcion;
        $inventario->existencia=$request->existencia;
        $inventario->minimo=$request->minimo;
        $inventario->save();
        return redirect()->route('inventarios.index');
    }

    /**
     * Display the specified resource.
     * @param bigint $id
     * @param  \App\inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $inventario=inventario::findOrfail($id);
        return view('inventarios.show',['inventario'=>$inventario]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param bigint $id
     * @param  \App\inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $inventario=inventario::findOrfail($id);
        return view('inventarios.edit',['inventario'=>$inventario]);
    }

    /**
     * Update the specified resource in storage.
     * @param bigint $id
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $inventario=inventario::findOrfail($id);
        $inventario->nombre=$request->nombre;
        $inventario->descripcion=$request->descripcion;
        $inventario->existencia=$request->existencia;
        $inventario->minimo=$request->minimo;
        $inventario->update();
        return redirect()->route('inventarios.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param bigint $id
     * @param  \App\inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $inventario=inventario::findOrfail($id);
        $inventario->delete();
        return redirect()->route('inventarios.index');
    }
}
