@extends('Layout')
@section('title','REGISTRAR EMPLEADO')
@section('body')
<div class="container-sm">
    
        @csrf
        @method('PUT')
        <div class="form-group">

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1" class="form-label">NOMBRE</label>
                <input name="nombre" readonly type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{$proveedor->nombre}}">

            </div>



            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1" class="form-label">TELEFONO</label>
                <input name="telefono" readonly type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{$proveedor->telefono}}">

            </div>
          

            <div class="form-group col-md-6">
                <label for="exampleFormControlTextarea1" class="form-label">DESCRIPCION</label>
                <textarea name="descripcion" readonly class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{$proveedor->descripcion}}">{{$proveedor->descripcion}}</textarea>
            </div>
            <div class="form-group col-md-6">
            <a id="parte1" type="submit" href="{{route('proveedores.index')}}" class="btn btn-outline-success">RETROCEDER</a> <br><br>
            </div>
        </div>

   

</div>
@endsection