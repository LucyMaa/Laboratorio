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
                            <input id="nombre" type="tex" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">APELLIDOS</label>
                            <input id="apellido" type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">FECHA DE NACIMIENTO<label for=""></label>
                            <input id="FECHA" type="DATE" class="form-control">
                        </div>
                        <div class="form-group col-md-8">DIRECCION<label for=""></label>
                            <input id="dir" type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">TELEFONO<label for=""></label>
                            <input id="telefono" type="number" class="form-control">
                        </div>
                        <div class="form-group col-md-4">SEXO<label for=""></label>
                            <input id="sexo" type="text" class="form-control">
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
                    <td>Otto</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>ANTECEDENTES</td>
                    <td>Otto</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>ENFERMEDADES</td>
                    <td>Otto</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>ESTATURA</td>
                    <td>Otto</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>GRUPO SANGUINEO</td>
                    <td>Otto</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>INTOLERANCIA</td>
                    <td>Otto</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>PESO</td>
                    <td>Otto</td>
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
                    <th scope="col">HORA</th>
                    <th scope="col">EXAMEN</th>
                    <th scope="col">MOTIVO</th>
                    <th scope="col">DIAGNOSTICO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>ALERGIA</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>Otto</td>
                </tr>
            </Tbody>
        </table>
    </section>
</div>
@endsection