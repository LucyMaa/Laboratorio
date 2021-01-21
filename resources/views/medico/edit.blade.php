@extends('Layout')
@section('title','REGISTRAR MEDICO')
@section('body')
<div class="container-sm">
    <form method="POST" rol="form" action="url('Medico/update/'.$persona->id)"><br>
        @csrf
        <div class="form-group">
            <div class="alert alert-secondary" role="alert">
                EDITAR SUS DATOS :
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">CARNET</span>
                </div>
                <input name="ci" type="number" aria-label="First name" class="form-control" placeholder="######" value="{{$persona->ci}}">
                <!-- <p class="text-danger"> {{$errors->first("ci")}}</p> -->
            </div> <br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">NOMBRE</span>
                </div>
                <input name="nombre" type="text" aria-label="First name" class="form-control" placeholder="INTRODUZCA EL NOMBRE" value="{{$persona->nombre}}">
                <p class="text-danger"> {{$errors->first("nombre")}}</p>
                <div class="input-group-prepend">
                    <span class="input-group-text">APELLIDO</span>
                </div>
                <input name="apellido" type="text" aria-label="First name" class="form-control" placeholder="INTRODUZCA EL APELLIDO" value="{{$persona->apellido}}">
                <p class="text-danger"> {{$errors->first("apellido")}}</p>
            </div> <br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">DIRECCION</span>
                </div>
                <input name="dir" value="{{$persona->direccion}}" type="text" class="form-control" aria-label="First name" class="form-control" placeholder="URB. LAS MADRES CALLE 12, CASA 8">
                <p class="text-danger">{{$errors->first("dir")}}</p>
            </div><br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">FECHA DE NACIMIENTO</span>
                </div><br>
                <input name="nacimiento" value="{{$persona->fechaNacimiento}}" type="date" class="form-control" aria-label="First name" class="form-control" placeholder="#######">
                <p class="text-danger"> {{$errors->first("nacimiento")}}</p>
            </div><br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">GENERO</span>
                </div>
                <select name="sexo" class="custom-select custom-select ">
                    <option value="" selected>{{$persona->sexo}}</option>
                    <option value="">MASCULINO</option>
                    <option value="">FEMENINO</option>
                </select>
            </div><br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">NUMERO DE TELEFONO</span>
                </div>
                <input name="telefono" value="{{$persona->telefono}}" type="number" aria-label="First name" class="form-control" placeholder="#######">
                <p class="text-danger"> {{$errors->first("telefono")}}</p>
            </div><br>     
            <div class="form-group">
                <button id="parte1" type="submit" class="btn btn-outline-success">REGISTRAR!</button> <br><br>
            </div> 
        </div>
    </form>
</div>
@endsection