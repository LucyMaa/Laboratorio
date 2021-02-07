@extends('Layout')
@section('title','REGISTRAR EMPLEADO')
@section('body')
<div class="container-sm">
    <form method="POST" rol="form" action="{{Route('muestras.store')}}"><br>
        @csrf
        <div class="form-group">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">Tipo</label>
                    <input name="tipo" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">

                </div>
               
            </div>
         
        </div>
        <button id="parte1" type="submit" class="btn btn-outline-success">REGISTRAR!</button> <br><br>
    </form>

</div>
@endsection