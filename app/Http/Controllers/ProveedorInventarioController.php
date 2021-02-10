<?php

namespace App\Http\Controllers;

use App\inventario;
use App\proveedor;
use App\proveedor_inventario;
use Illuminate\Http\Request;

class ProveedorInventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $compras=proveedor::with('inventarios')->get();
        return view('compras.index',['compras'=>$compras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $proveedores=proveedor::all();
        $inventarios=inventario::all();
        return view('compras.create',['proveedores'=>$proveedores,'inventarios'=>$inventarios]);
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
        $compras=new proveedor_inventario();
        $compras->cantidad=$request->cantidad;
        $compras->id_inventario=$request->id_inventario;
        $compras->id_inventario=$request->id_inventario;
        $compras->save();
        return redirect()->route('compras.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\proveedor_inventario  $proveedor_inventario
     * @return \Illuminate\Http\Response
     */
    public function show(proveedor_inventario $proveedor_inventario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\proveedor_inventario  $proveedor_inventario
     * @return \Illuminate\Http\Response
     */
    public function edit(proveedor_inventario $proveedor_inventario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\proveedor_inventario  $proveedor_inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, proveedor_inventario $proveedor_inventario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\proveedor_inventario  $proveedor_inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(proveedor_inventario $proveedor_inventario)
    {
        //
    }
}