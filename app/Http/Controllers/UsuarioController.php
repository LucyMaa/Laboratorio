<?php

namespace App\Http\Controllers;

use App\usuario;
use App\Acciones;
use App\Exports\UsuariosExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuarios=usuario::with('persona')->get();
        return view('usuario.index',['usuarios'=>$usuarios]);
    }

    public function exportPdf(){
        $usuarios=usuario::with('persona')->get();
        $pdf= PDF::loadview('pdf.usuarios',['usuarios'=>$usuarios]);
            return $pdf->download('usuarios-list.pdf');    

    }
    public function exportExcel(){
        
            return Excel::download(new UsuariosExport, 'usuarios-list.xlsx');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuario.create');
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
        $usuario=new usuario();
        //$usuario->name=$request->input('name');
        $usuario->email=$request->input('email');
        $usuario->password=Hash::make($request->input('password'));
        $usuario->idPersona=$request->input('idPersona');
        $usuario->save();
        Acciones::insertar('CREO UN USUARIO: '.$usuario->name);
        return redirect()->route('usuario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param bigint $id
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user= usuario::findOrfail($id);
        return view('usuario.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     * @param bigint $id
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user=usuario::findOrfail($id);
        //$user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=$request->input('password');
        $user->idPersona=$request->input('idPersona');
        $user->save();
        Acciones::insertar('MODIFICO UN USUARIO: '.$user->name);
        return redirect()->route('usuario.index');
    }

    public function backup()
    {
        
    }

    /**
     * Remove the specified resource from storage.
     * @param bigint $id
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user=usuario::findOrfail($id);
        Acciones::insertar('ELIMINO UN USUARIO: '.$user->name);
        $user->delete();
        return redirect()->route('usuario.index');
    }
}
