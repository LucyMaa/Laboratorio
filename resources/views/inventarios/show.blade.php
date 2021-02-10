@extends('Layout')
@section('title','REGISTRAR EMPLEADO')
@section('body')
<div class="container-sm">
   
        <div class="form-group">

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1" class="form-label">NOMBRE</label>
                <input name="nombre" type="text" readonly class="form-control" id="exampleFormControlInput1" placeholder="" value="{{$inventario->nombre}}">

            </div>



            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1" class="form-label">EXISTENCIAS</label>
                <input name="existencia" readonly type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{$inventario->existencia}}">

            </div>
            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1" class="form-label">MINIMO</label>
                <input name="minimo" readonly type="money" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{$inventario->minimo}}">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlTextarea1" class="form-label">DESCRIPCION</label>
                <textarea name="descripcion" readonly class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{$inventario->descripcion}}">{{$inventario->descripcion}}</textarea>
            </div>
            <div class="form-group col-md-6">
            <button id="parte1" type="submit"  class="btn btn-outline-success">RETROCEDER</button> <br><br>
            </div>
        </div>

  

</div>
@endsection