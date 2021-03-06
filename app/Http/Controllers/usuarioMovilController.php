<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class usuarioMovilController extends Controller
{
    //enlace del login movil
    public function esUsuario(Request $request)
    {
        $email = $request->email; // el input de los formularios
        $password = $request->password;

        $resultado = DB::table('users')->where('email', $email)
            ->first();

        if (is_null($resultado)) {
            return json_encode("Error");
        } else {
            if ($request->password == $resultado->password) { // comparamos contresañas
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
                            where('personas.id', $idPersona) ->get();
                            return response()->json($resultadoPersona, 200);                    
    }
}
