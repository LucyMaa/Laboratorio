<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['only'=>'showLoginForm']);
    }

    public function showLoginForm()
    {
        return  view('Login.login');
    }
    public function login()
    {   
        $datos = [
            'email' => 'email|required|string',
            'password' => 'required|string'
        ];

        $mensaje = [
            'email.email' => 'Inserte un email valido',
            'email.required' => 'Inserte su email  ',
            'email.string' => 'Inserte un email valido',
            'password.required' => 'Inserte su contraseña',
        ];
        $credentials = $this->validate(request(), $datos, $mensaje);
        
        if (Auth::attempt($credentials)) {
            return view('home');
        }
        echo '<script language="javascript">alert("Error de autentificacion");window.location.href="/"</script>';
    }
    public function logout()
    {
        Auth::logout();  
        return redirect('/');
    }
}
