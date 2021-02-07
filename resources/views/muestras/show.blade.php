@extends('Layout')

@section('title','Table')

@section('body')
<br>
<div class="container" >
<div class="alert alert-dark" role="alert">
  DATOS DE LA MUESTRA :
</div>
<ul class="list-group" style="text-align: center;">
    <li class="list-group-item">TIPO: {{$muestra->tipo}}</li>
   
</ul>
</div>

@endsection