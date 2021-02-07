@extends('Layout')
@section('title','REGISTRAR EMPLEADO')
@section('body')
<div class="container-sm">
    <form method="POST" rol="form" action="{{Route('examenes.update',[$examen->id])}}"><br>
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">NOMBRE</label>
                    <input name="nombre" type="text" class="form-control" id="exampleFormControlInput1" value="{{$examen->nombre}}" >

                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">PRECIO</label>
                    <input name="precio" type="money" class="form-control" id="exampleFormControlInput1" value="{{$examen->precio}}">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="form-label">DESCRIPCION</label>
                <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{$examen->descripcion}}">{{$examen->descripcion}}</textarea>
            </div>
        </div>
        <button id="parte1" type="submit" class="btn btn-outline-success">ACTUALIZAR!</button> <br><br>
    </form>

</div>
@endsection