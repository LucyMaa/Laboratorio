<?php

namespace App;
use App\bitacora;
class Acciones {
    public static function insertar($accion)
    {  
         if (!empty($_SERVER['HTTP_CLIENT_IP'])) {

        $ip = $_SERVER['HTTP_CLIENT_IP'];

    } else {

        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

        } else {

            $ip = $_SERVER['REMOTE_ADDR'];
        }
    }
        $bitacora= new bitacora();
        $bitacora->email= auth()->user()->email;
        $bitacora->acciones= $accion;
        $bitacora->ip=$ip;
        $bitacora->save();

    }
}