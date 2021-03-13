@extends('Layout')

@section('title','Table')
@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">

@endsection
@section('body')
<div class="container">
    <a class="btn btn-outline-success btn-lg btn-block" href="{{route('pacientes.create')}}" role="button">AGREGAR PACIENTE </a>
    <div class="row d-flex justify-content-center">
        <table id="example1" class="table table-bordered table-hover">
            <tr>
                <th scope="col">CODIGO PACIENTE</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO</th>
                <th scope="col">CI</th>
                <th scope="col">TELEFONO </th>
                <th scope="col">CODIGO PERSONA </th>
                <th scope="col" colspan="3">ACCIONES</th>
            </tr>
            </thead>
            <tbody>
                @foreach($pacientes as $paciente)
                <tr>
                    <td>
                        <h5>{{$paciente->id}}</h5>
                    </td>
                    <td>
                        <h5>{{$paciente->nombre}}</h5>
                    </td>
                    <td>
                        <h5>{{$paciente->apellido}}</h5>
                    </td>
                    <td>
                        <h5>{{$paciente->ci}}</h5>
                    </td>
                    <td>
                        <h5>{{$paciente->telefono}}</h5>
                    </td>
                    <td>
                        <h5>{{$paciente->idPersona}}</h5>
                    </td>
                    <td>
                        <a href="{{route('pacientes.edit',[$paciente->id])}}" class="btn btn-outline-success">Editar</a>
                        <!-- <a href="{{route('pacientes.show',[$paciente->id]) }}" class="btn btn-outline-success" style="margin: 10px">Ver</a>  -->
                        <form action="{{route('pacientes.destroy',[$paciente->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type='submit' class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
@section('js')

<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example1').DataTable({
            responsive: true,
            autoWith: false,
            language: {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "Nada encontrado - Disculpa",
                "info": "Mostrando la página _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });
    });
</script>


@endsection