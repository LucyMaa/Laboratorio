<?php

namespace App\Http\Controllers;


use App\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()// listado
    {   //consulta larga
       // $persona = DB::table('persona') -> select('ci') // colocar lo que se quiera mostrar
       // -> where('ci', 1) -> get();

        //consulta corta
        //$persona = Persona::Where('ci',1) -> get(); 
        //return view('persona/index',compact('persona'));

        $persona = Persona::all();
        return view('persona.index',compact('persona'));

     } // compact se usa pa enviar algo(datos) a la vista xd

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('persona/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)// pa guardar a la base :v
    {   //forma larga
        //$persona = new Persona();
        //$persona -> ci = $request -> input('ci'); // poner el nombre del id de la vista
        //$persona -> nombre = $request -> input('nombre'); // seguir con los demas atributos de la tabla
        
        // forma corta.- No se puede cambiar el id en la interfaz
        $persona = new Persona($request -> all());

        $persona -> save();
        return redirect() -> route('persona.index'); 
    }

    /**
     * Display the specified resource.
     *

     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $persona = Persona::where('ci',$id) ->get();
        return view('persona/show',compact('persona'));

    }

    /**
     * Show the form for editing the specified resource.
     *

     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = Persona::where('ci',$id) ->get();
        return view('persona/edit',compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $persona = Persona::where('ci',$id) -> get();
        $persona -> nombre = $request -> input('nombre'); // solo poner los que se modifican
        $persona -> update();
        return  redirect() -> route('persona.index');
    }

    /**
     * Remove the specified resource from storage.
     *

     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Persona::where('ci',$id) -> get();
        $persona -> estado = 0; // poner el atributo estado pa ocultar
        $persona -> update();
        return  redirect() -> route('persona.index');
    }
}
