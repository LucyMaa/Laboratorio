@extends('Layout')
@section('title','REGISTRAR EMPLEADO')
@section('body')
<div class="container-sm">
    <form method="POST" rol="form" action="{{Route('inventarios.update',[$inventario->id])}}"><br>
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">NOMBRE</label>
                    <input name="nombre" type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{$inventario->nombre}}">

                </div>
           
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">EXISTENCIAS</label>
                    <input name="existencia" type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{$inventario->existencia}}">

                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">MINIMO</label>
                    <input name="minimo" type="money" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{$inventario->minimo}}">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="form-label">DESCRIPCION</label>
                <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{$inventario->descripcion}}">{{$inventario->descripcion}}</textarea>
            </div>
        </div>
        <button id="parte1" type="submit" class="btn btn-outline-success">ACTUALIZAR!</button> <br><br>
    </form>

</div>
@endsection