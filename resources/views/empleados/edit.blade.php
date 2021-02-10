@extends('Layout')
@section('title','REGISTRAR ADMINISTRADOR')
@section('body')
<div class="container-sm">
    <form method="POST" rol="form" action="{{route('empleados.update1',[$administrador->id,$persona->id])}}"><br>
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="alert alert-secondary" role="alert">
                INTRODUZCA SUS DATOS PARA EDITAR ADMINISTRADOR :
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">CARNET</span>
                </div>
                <input name="ci" type="number" aria-label="First name" class="form-control" value="{{$persona->ci}}">
            </div> <br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">NOMBRE</span>
                </div>
                <input name="nombre" type="text" aria-label="First name" class="form-control" value="{{$persona->nombre}}">
                <div class="input-group-prepend">
                    <span class="input-group-text">APELLIDO</span>
                </div>
                <input name="apellido" type="text" aria-label="First name" class="form-control" value="{{$persona->apellido}}">
            </div> <br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">DIRECCION</span>
                </div>
                <input name="dir" value="{{$persona->direccion}}" type="text" class="form-control" aria-label="First name" class="form-control">
            </div><br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">FECHA DE NACIMIENTO</span>
                </div><br>
                <input name="nacimiento" value="{{$persona->fechaNacimiento}}" type="date" class="form-control" aria-label="First name" class="form-control">
            </div><br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">GENERO</span>
                </div>
                <input name="genero" value="{{$persona->sexo}}" type="text" class="form-control" aria-label="First name" class="form-control">
            </div><br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">NUMERO DE TELEFONO</span>
                </div>
                <input name="telefono" value="{{$persona->telefono}}" type="number" aria-label="First name" class="form-control" placeholder="#######">
            </div><br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">FECHA DE CONTRATACION</span>
                </div><br>
                <input name="fechac" value="{{$administrador->fechaDeContratacion}}" type="date" class="form-control" aria-label="First name" class="form-control">
            </div><br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">SUELDO</span>
                </div>
                <input name="SUELDO" value="{{$administrador->sueldo}}" type="number" aria-label="First name" class="form-control">
            </div><br>
            <div class="form-group">
                <button id="parte1" type="submit" class="btn btn-outline-success">MODIFICAR!</button> <br><br>
            </div>
        </div>
    </form>
</div>
@endsection