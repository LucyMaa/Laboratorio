<?php

namespace App\Http\Controllers;

use App\inventario;
use App\proveedor;
use App\Acciones;
use App\Exports\ComprasExport;
use App\proveedor_inventario;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;

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

    public function exportPdf(){
        $compras=proveedor::with('inventarios')->get();
        $pdf= PDF::loadview('pdf.compras',  ['compras'=>$compras]);
            return $pdf->download('compras-list.pdf');    

    }
    public function exportExcel(){
        
            return Excel::download(new ComprasExport, 'compras-list.xlsx');

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
        $compras->id_proveedor=$request->id_proveedor;
        $compras->save();
        Acciones::insertar('nuevo proveedor :'.'stre');
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
     * @param bigint $id
     * @param  \App\proveedor_inventario  $proveedor_inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $compra=proveedor_inventario::findOrfail($id);
        $compra->delete();
        Acciones::insertar('nuevo proveedor : '.'destr');
        return redirect()->route('compras.index');
    }
}
