@extends('Layout')

@section('title','Table')

@section('body')
<br>
<div class="container" >
<div class="alert alert-dark" role="alert">
  DATOS DEL ADMINISTRADOR :
</div>
<ul class="list-group" style="text-align: center;">
    <li class="list-group-item">NOMBRE: {{$personas->nombre}}</li>
    <li class="list-group-item">APELLIDO: {{$personas->apellido}}</li>
    <li class="list-group-item">DIRECCION: {{$personas->direccion}}</li>
    <li class="list-group-item">FECHA DE NACIMIENTO: {{$personas->fechaNacimiento}}</li>
    <li class="list-group-item">GENERO: {{$personas->sexo}}</li>
    <li class="list-group-item">TELEFONO: {{$personas->telefono}}</li>
    <li class="list-group-item">FECHA DE CONTRATACION: {{$administradores->fechaDeContratacion}}</li>
    <li class="list-group-item">FECHA DE BAJA :{{$administradores->fechaDeBaja}}</li>
    <li class="list-group-item">SUELDO: {{$administradores->sueldo}}</li>
</ul>
</div>

@endsection