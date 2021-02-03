@extends('Layout')

@section('title','Table')

@section('body')
<div class="container-sm">
    <form method="POST" rol="form" action="{{route('empleados.update',[$administrador->id])}}"><br>
        @csrf
        @method('PUT')
        <div class="form-group" >
            <div class=" alert alert-secondary" role="alert">
            DAR DE BAJA A UN PERSONAL :
        </div>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">FECHA DE BAJA</span>
            </div><br>
            <input name="fechab"  type="date" class="form-control" aria-label="First name" class="form-control" value="{{$administrador->fechaDeBaja}}">
        </div><BR></BR>
        <div class="form-group">
            <!-- Submit Button -->
            <button id="parte1" type="submit" class="btn btn-outline-success">DAR DE BAJA!</button> <br><br>
        </div>
    </form>
</div>
@endsection