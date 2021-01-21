<?php

namespace App\Http\Controllers;

use App\persona;
use App\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Esto es del anterior proyecto, lo puse como referencia 
        $usuarios=User::with('persona')->get();
        return view('usuario.index',['usuarios'=>$usuarios]);
        //$inventarios= \App\inventarios::with('combustibless')->get();
        //return view('inventarios.index',['inventarios'=>$inventarios]);  //luego modificar para tetornar una vista con todos los empleados
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return view('inventarios.create');
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
        $usuario=new User();
        $usuario->name=$request->input('name');
        $usuario->email=$request->input('email');
        $usuario->password=$request->input('password');
        $usuario->idPersona=$request->input('idPersona');
        $usuario->save();
        return redirect()->route('usuario.index');
       /* $inventario= new inventarios();
        $inventario->precioCompra=$request->input('precioCompra');
        $inventario->precioVenta=$request->input('precioVenta');
        //$inventario->cantidadDisponible=$request->input('cantidadDisponible');
        $inventario->save();
        $combustible= new combustibles();
        $combustible->Nombre=$request->input('nombre');
        $combustible->id_inventario=$inventario->id;
        $combustible->id_proveedor=1;
        $combustible->save();
        
        return redirect()->route('inventarios.index');
        */
    }

    /**
     * Display the specified resource.
     *@param bigint $id
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       // $users=DB::table('users')->where('idPersona','=',$id)->select('users.*')->first();
       // $persona=persona::findOrfail($id);
        //return view('usuario.edit',['persona'=>$persona],['users'=>$users]);
    }

    /**
     * Show the form for editing the specified resource.
     *@param bigint $id
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
      // $usuario=User::with('persona')->get();

        //$user=DB::table('users')->where('id','=',$codigo)->select('users.*')->first();
        $user= User::findOrfail($id);
        return view('usuario.edit',['user'=>$user]);
         /*
        $tanques=DB::table('tanques')
        ->where('id_combustible','=',$id)
        ->select('tanques.*')
        ->first();
        $inventario= inventarios::findOrfail($id);
        return view('inventarios.edit',['inventario'=>$inventario],['tanques'=>$tanques]);

        */

        
    }

    /**
     * Update the specified resource in storage.
     *@param bigint $id
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //

        $user=User::findOrfail($id);
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=$request->input('password');
        $user->idPersona=$request->input('idPersona');
        $user->save();
        return redirect()->route('usuario.index');
        /*
        DB::table('tanques')
        ->where('id_combustible','=',$id)
        ->update([
             'stock'=>$request->input('cantidadDisponible')  
        ]);

        $inventario= inventarios::findOrfail($id);
        $inventario->precioCompra=$request->input('precioCompra');
        $inventario->precioVenta=$request->input('precioVenta');
        //$inventario->cantidadDisponible=$request->input('cantidadDisponible');
        $inventario->save();
        $combustible= $inventario->combustibless->first();
        $combustible->Nombre=$request->input('nombre');
        $combustible->id_inventario=$inventario->id;
        $combustible->save();
        
        return redirect()->route('inventarios.index');
        */

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user=User::findOrfail($id)->first();
        $user->delete();
        return redirect()->route('usuario.index');
        /*DB::table('inventarios')
        ->where('id','=',$id)
        ->delete();
        return redirect()->route('inventarios.index');
        */
        /*
        $inventario=inventarios::findOrfail($id);
        $inventario->delete();  //CORREGIR LAS TABLAS PARA QUE SE BORRE EN CASCADA
        return redirect()->route('inventarios.index');
        */
    }
}
