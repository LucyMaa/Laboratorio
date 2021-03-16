<?php

namespace App\Http\Controllers;

use App\medico;
use App\persona;
use App\turno;
use App\Acciones;
use App\Exports\TurnosExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;

class TurnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $turno=DB::table('turnos')->select('turnos.*')->orderBy('id','ASC')->get();
     //   $turnoMedicos = persona::select('personas.*','medicos.*')
      //  ->join('medicos', 'personas.id', '=', 'medicos.idPersona')->get();
        return view('turnos.index',['turnos'=>$turno]);
        
    }


    public function exportPdf(){
        $turno=DB::table('turnos')->select('turnos.*')->orderBy('id','ASC')->get();
        $pdf= PDF::loadview('pdf.turnos',['turnos'=>$turno]);
            return $pdf->download('turnos-list.pdf');    

    }
    public function exportExcel(){
        
            return Excel::download(new TurnosExport, 'turnos-list.xlsx');

    }
     /**
     * Display a listing of the resource.
     *@param bigint $id
   
     * @return \Illuminate\Http\Response
     */
    public function registrados($id)
    {
        $personals = persona::select('personas.*','medicos.*')
         ->join('medicos', 'personas.id', '=', 'medicos.idPersona')->where('idTurno',$id)->get();
        //
        //$medicos = turno::with('medicos')->get();
        //$personals= persona::where('id','=',$medicos->idPersona)->get();
      //  $personals=turno::where("id",$id)->with('medicos')->get();
      //  $personals=medico::with('turno','Persona')->get();
      //  $turno=turno::findOrfail($id);
        //$medico = medico::where('idTurno', '=', $id)->union($turno)->first();
        //$persona= persona::where('id','=',$medico->idPersona)->union($medico)->first();
        //$turnoMedicos=$persona;
        return view('turnos.registrados',['personals'=>$personals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('turnos.create');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function asignar()
    {
        
        $turnos=DB::table('turnos')->select('turnos.*')->get();
     
        return view('turnos.asignar',['turnos'=>$turnos]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function asignarStore(Request $request)
    {
        //
        $medico=medico::findOrfail($request->idMedico);
        $medico->idTurno=$request->idTurno;
        $medico->save();
        Acciones::insertar('asigno un turno'.'asignarstore');
        return redirect()->route('turnos.index');
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
        $turno= new turno();
        $turno->nombre=$request->nombre;
        $turno->horaInicio= $request->horaInicio;
        $turno->horaFin= $request->horaFin;
        $turno->save();
        Acciones::insertar('agrego un nuevo  turno : '.$turno->nombre);
        return redirect()->route('turnos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function show(turno $turno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param bigint $id
     * @param  \App\turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $turno=turno::findOrfail($id);
        return view('turnos.edit',['turno'=>$turno]);
    }

    /**
     * Update the specified resource in storage.
     *@param bigint $id
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $turno=turno::findOrfail($id);
        $turno->nombre=$request->nombre;
        $turno->horaInicio=$request->horaInicio;
        $turno->horaFin=$request->horaFin;
        $turno->update();
        Acciones::insertar('Modifico un turno : '. $turno->nombre);
        return redirect()->route('turnos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function destroy(turno $turno)
    {
        //
    }
}
