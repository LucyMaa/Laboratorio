<?php

namespace App\Http\Controllers;

use App\factura;
use App\paciente;
use App\persona;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;


class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $examenes = DB::table('examens')->get();
        return view('facturas.create', ['examenes' => $examenes]);
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
     * @param  \App\factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function show(factura $factura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function edit(factura $factura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, factura $factura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function destroy(factura $factura)
    {
        //
    }
    public function buscador(Request $request)
    {
        $paciente = paciente::findOrfail($request->codigo);
        if ($paciente) {
            $persona = persona::findOrfail($paciente->idPersona);
            $examenes = DB::table('examens')->get();
            return view('facturas.create', ['examenes' => $examenes,'paciente'=>$paciente,'persona'=>$persona]);
            
        }
        if (!$paciente) {
            //return view('clientes/create');
            return 'No existe el paciente';
        }
    }
    /*public function buscador(Request $request)
    {
        $vehiculos = vehiculos::where('placa', $request->nroplaca)->first();
        if ($vehiculos) {
            $clientes = clientes::where('ci', $vehiculos->ci_cliente)->first();
            $combustibles=DB::table('combustibles')->select('combustibles.*')->get();
            return view('facturas.create', compact('vehiculos', 'clientes','combustibles'));
        }
        if (!$vehiculos) {
            return view('clientes/create');
        }
    }*/
    public function prueba(Request $request)
    {
        $resp = [];
        foreach ($request->cantidad as $key => $value) {
            $detalle = new Arr();
            $detalle->cantidad = $request->cantidad[$key];
            $detalle->descripcion = $request->descripcion[$key];
            $detalle->subTotal = $request->subTotal[$key];
            $resp = Arr::add($resp, $key, $detalle);
        }
        return $resp;
    }
}
