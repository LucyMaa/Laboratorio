@extends('Layout')
@section('title','REGISTRAR EMPLEADO')
@section('body')
<div class="container-sm">
    <form method="POST" rol="form" action="{{Route('compras.store')}}"><br>
        @csrf
        <div class="form-group">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">PROVEEDOR</label>
                    <select name="id_proveedor" id="inputState" class="form-control">
                        @foreach($proveedores as $proveedor)
                        <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">INVENTARIO</label>
                    <select name="id_inventario" id="inputState" class="form-control">
                        @foreach($inventarios as $inventario)
                        <option value="{{$inventario->id}}">{{$inventario->nombre}}</option>
                        @endforeach

                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">CANTIDAD</label>
                    <input name="cantidad" type="number" class="form-control" id="exampleFormControlInput1" placeholder="">

                </div>
            </div>
          
        </div>
        <button id="parte1" type="submit" class="btn btn-outline-success">REGISTRAR!</button> <br><br>
    </form>

</div>
@endsection