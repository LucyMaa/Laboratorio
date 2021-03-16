<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class usuarioMovilController extends Controller
{
    //enlace del login movil
    public function esUsuario(Request $request)
    {
        $email = $request->email; // el input de los formularios
        $password = $request->password;

        $resultado = DB::table('usuarios')->where('email', $email)
            ->first();

        if (is_null($resultado)) {
            return json_encode("Error");
        } else {
            if(Hash::check($request->password, $resultado->password)){
                return response()->json($resultado, 200);
            }
            return json_encode(0);
        }
    }

    //perfil Paciente
    public function getPaciente($idPersona)
    {
        $resultadoPersona = DB::table('personas') -> 
                            join('pacientes','personas.id','pacientes.idPersona') ->
                            where('personas.id', $idPersona) ->first();
                            return response()->json($resultadoPersona, 200);                    
    }
    public function allUser(){
        $resultado = DB::table('usuarios')->get();
        return response()->json($resultado, 200);
    }
    public function examen(){
        $examen = DB::table('examens')-> get();
        return response()->json($examen, 200);
    }

    //lista de examnes
    public function miConsulta($idPaciente){
        $paciente = DB::table('pacientes')->
                        //join('facturas','pacientes.id','facturas.idPaciente') ->
                        //join('detalle_facturas','facturas.id','detalle_facturas.idFactura') ->
                        join('consultas','pacientes.id','consultas.idPaciente') ->
                        where('pacientes.id',$idPaciente)->get();
        return response()->json($paciente, 200);
    }
    public function getResultadoDeExamen($idExamen){
        $resultadoExamen = DB::table('examens') ->
                               join('analises','examens.id','analises.idExamen') ->
                               join('resultados','analises.id','resultados.idAnalisis') ->
                        where('examens.id',$idExamen)->get();
        return response()->json($resultadoExamen, 200);                  
    }
}
