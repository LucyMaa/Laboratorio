@extends('Layout')

@section('title','Table')

@section('body')
           



<div class="container">
    <section>
        <form method="POST" rol="form" action="{{route('consultas.store')}}"><br>
            @csrf
            <div class="card-header">
                <h3 class="card-title">INTRODUCIR ANALISIS</h3>
            </div>
            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>                     
                        <th scope="col">ID</th>
                        <th scope="col">RANGO-MIN</th>
                        <th scope="col">RANGO-MAX</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>ID del paciente</td>
                        <td> <input name="idp" class="form-control" type="number" value=""></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>FECHA ULTIMO VIAJE</td>
                        <td> <input name="fecha" class="form-control" type="date"></td>
                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <td>LUGAR DE SU ULTIMO VIAJE</td>
                        <td><input name="viaje" class="form-control" type="text"></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>DIAGNOSTICO</td>
                        <td><input name="di" class="form-control" type="text"></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>MOTIVO</td>
                        <td><input name="motivo" class="form-control" type="text"></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>TRATAMIENTO PSICOLOGICO</td>
                        <td><input name="tratamiento" class="form-control" type="text"></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>MEDICAMENTOS</td>
                        <td><input name="medicamentos" class="form-control" type="text"></td>
                    </tr>
                </Tbody>
            </table>
            <button id="parte1" type="submit" class="btn btn-outline-success">REGISTRAR!</button>
        </form>
    </section>
</div>
@endsection