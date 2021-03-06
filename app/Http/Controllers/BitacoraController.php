<?php

namespace App\Http\Controllers;

use App\bitacora;
use App\Exports\BitacorasExport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;

class BitacoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bitacora = bitacora::all();
        return view('bitacoras.index', compact('bitacora'));
    }

    public function exportPdf(){
        $bitacora = bitacora::all();
        $pdf= PDF::loadview('pdf.bitacoras',  compact('bitacora'));
            return $pdf->download('bitacoras-list.pdf');    

    }
    public function exportExcel(){
        
            return Excel::download(new BitacorasExport, 'bitacoras-list.xlsx');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //return view('bitacoras.create');
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
     * @param  \App\bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function show(bitacora $bitacora)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function edit(bitacora $bitacora)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bitacora $bitacora)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function destroy(bitacora $bitacora)
    {
        //
    }
}
