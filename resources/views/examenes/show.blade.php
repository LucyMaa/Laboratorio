@extends('Layout')

@section('title','Table')

@section('body')
<br>
<div class="container" >
<div class="alert alert-dark" role="alert">
  DATOS DEL EXAMEN :
</div>
<ul class="list-group" style="text-align: center;">
    <li class="list-group-item">NOMBRE: {{$examen->nombre}}</li>
    <li class="list-group-item">PRECIO: {{$examen->precio}}</li>
    <li class="list-group-item">DESCRIPCION: {{$examen->descripcion}}</li>
</ul>
</div>

@endsection