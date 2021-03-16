@extends('Layout')

@section('title','Table')
@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">

@endsection
@section('body')
<BR></BR>
<div class="container" style="text-align: center;">
    <a class="btn btn-outline-success btn-lg btn-block" href="{{route('pacientes.create')}}" role="button">AGREGAR PACIENTE </a> <br>
    <a type="button" class="btn btn-danger" href="{{ route('Pacientes.pdf') }}">Descargar PDF</a>
<a type="button" class="btn btn-success" href="{{ route('Pacientes.excel') }}">Descargar EXCEL</a>
    <div class="row d-flex justify-content-center">
        <table id="example1" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO</th>
                    <th scope="col">CI</th>
                    <th scope="col">TELEFONO </th>
                    <th scope="col">CODIGO PERSONA </th>
                    <th scope="col">ESTADO </th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pacientes as $paciente)
                <tr>
                    <td class="" tabindex="0">{{$paciente->nombre}}</td>
                    <td class="" tabindex="0">{{$paciente->apellido}}</td>
                    <td class="" tabindex="0">{{$paciente->ci}}</td>
                    <td class="" tabindex="0">{{$paciente->telefono}}</td>
                    <td class="" tabindex="0">{{$paciente->idPersona}}</td>
                    <td class="" tabindex="0">
                        @if ($paciente->estado =='ACTIVO')
                        <span class="badge badge-pill badge-success">ACTIVO</span>
                        @else
                        <span class="badge badge-pill badge-danger">DESACTIVADA</span>
                        @endif
                    </td>
                    <td>
                    <form action="{{route('pacientes.destroy',[$paciente->id])}}" method="POST" id="myform">
                        @csrf
                        @method('DELETE')
                        <button type='submit'><i class="fas fa-trash"></i></button>
                        <a data-toggle="tooltip" data-placement="top" title="EDITAR" href="{{route('pacientes.edit',[$paciente->id])}}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="HISTORIAL MEDICO" href="{{route('historial.index',[$paciente->id])}}">
                            <i class="fas fa-file-medical"></i>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="CONSULTA" href="{{route('consulta.index',[$paciente->id])}}">
                            <i class="fas fa-address-book"></i>
                        </a>
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
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })


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