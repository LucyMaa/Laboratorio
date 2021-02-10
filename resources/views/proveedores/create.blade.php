@extends('Layout')
@section('title','REGISTRAR EMPLEADO')
@section('body')
<div class="container-sm">
    <form method="POST" rol="form" action="{{Route('proveedores.store')}}"><br>
        @csrf
        <div class="form-group">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">NOMBRE</label>
                    <input name="nombre" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">

                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">TELEFONO</label>
                    <input name="telefono" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">

                </div>
            </div>
            
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="form-label">DESCRIPCION</label>
                <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
        <button id="parte1" type="submit" class="btn btn-outline-success">REGISTRAR!</button> <br><br>
    </form>

</div>
@endsection