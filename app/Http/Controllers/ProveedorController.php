<?php

namespace App\Http\Controllers;

use App\proveedor;
use App\Acciones;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $proveedores=proveedor::all();
        return view('proveedores.index',['proveedores'=>$proveedores]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('proveedores.create');
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
        $proveedor=new proveedor();
        $proveedor->nombre=$request->nombre;
        $proveedor->telefono=$request->telefono;
        $proveedor->descripcion=$request->descripcion;
        $proveedor->save();
        Acciones::insertar('creo nuevo proveedor :'.$proveedor->nombre);
        return redirect()->route('proveedores.index');
    }

    /**
     * Display the specified resource.
     * @param bigint $id
     * @param  \App\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $proveedor=proveedor::findOrfail($id);
        return view('proveedores.show',['proveedor'=>$proveedor]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param bigint $id
     * @param  \App\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $proveedor=proveedor::findOrfail($id);
        return view('proveedores.edit',['proveedor'=>$proveedor]);
    }

    /**
     * Update the specified resource in storage.
     * @param bigint $id
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $proveedor=proveedor::findOrfail($id);
        $proveedor->nombre=$request->nombre;
        $proveedor->telefono=$request->telefono;
        $proveedor->descripcion=$request->descripcion;
        $proveedor->update();
        Acciones::insertar('modifico proveedor :'.$proveedor->nombre);
        return redirect()->route('proveedores.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param bigint $id
     * @param  \App\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $proveedor=proveedor::findOrfail($id);
        $proveedor->delete();
        Acciones::insertar('elimino proveedor :'.$proveedor->nombre);
        return redirect()->route('proveedores.index');
    }
}
