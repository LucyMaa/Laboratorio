@extends('Layout')

@section('title','Table')

@section('body')
<div class="container">
    <hr />
    <h1 style="text-align: center;" class="display-4 text">HISTORIAL</h1>
    <hr />
    <section class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DATOS PERSONALES</h3>
                </div>
                <div class="card-body">
                    <form class="row">
                        <div class="form-group col-md-4">
                            <label for="">NOMBRE</label>
                            <input id="nombre" type="tex" class="form-control" value="{{$paciente->nombre}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">APELLIDOS</label>
                            <input id="apellido" type="text" class="form-control" value="{{$paciente->apellido}}">
                        </div>
                        <div class="form-group col-md-4">FECHA DE NACIMIENTO<label for=""></label>
                            <input id="FECHA" type="DATE" class="form-control" value="{{$paciente->fechaNacimiento}}">
                        </div>
                        <div class="form-group col-md-8">DIRECCION<label for=""></label>
                            <input id="dir" type="text" class="form-control" value="{{$paciente->direccion}}">
                        </div>
                        <div class="form-group col-md-4">TELEFONO<label for=""></label>
                            <input id="telefono" type="number" class="form-control" value="{{$paciente->telefono}}">
                        </div>
                        <div class="form-group col-md-4">SEXO<label for=""></label>
                            <input id="sexo" type="text" class="form-control" value="{{$paciente->sexo}}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="card-header">
            <h3 class="card-title">PATOLOGIAS</h3>
        </div>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">DESCRIPCION</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>ALERGIA</td>
                    <td>{{$paciente->alergias}}</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>ANTECEDENTES</td>
                    <td>{{$paciente->antecedentes_traumaticos}}</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>ENFERMEDADES</td>
                    <td>{{$paciente->enfermedades}}</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>ESTATURA</td>
                    <td>{{$paciente->estatura}}</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>GRUPO SANGUINEO</td>
                    <td>{{$paciente->grupo_sanguineo}}</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>INTOLERANCIA</td>
                    <td>{{$paciente->intolerancias}}</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>PESO</td>
                    <td>{{$paciente->peso}}</td>
                </tr>
            </Tbody>
        </table>
    </section>
    <section>
        <div class="card-header">
            <h3 class="card-title">CONSULTAS</h3>
        </div>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">FECHA</th>
                    <th scope="col">MEDICAMENTO</th>
                    <th scope="col">MOTIVO</th>
                    <th scope="col">TRATAMIENTO</th>
                    <th scope="col">DIAGNOSTICO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($p as $p)
                    <th scope="row">1</th>
                    <td>{{$p->created_at}}</td>
                    <td>{{$p->medicamentos}}</td>
                    <td>{{$p->motivo}}</td>
                    <td>{{$p->tratamientop}}</td>
                    <td>{{$p->diagnostico }}</td>
                </tr>
                @endforeach
            </Tbody>
        </table>
    </section>
</div>
@endsection