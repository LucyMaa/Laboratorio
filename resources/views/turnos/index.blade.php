@extends('Layout')

@section('title','Table')
@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">

@endsection


@section('body')

<div class="container">
    <a class="btn btn-outline-secondary btn-lg btn-block" href="{{route('turnos.create')}}" role="button">AGREGAR NUEVO TURNO</a>
    <a class="btn btn-outline-secondary btn-lg btn-block" href="{{route('turnos.asignar')}}" role="button">ASIGNAR TURNO</a> <br>
    <div class="row d-flex justify-content-center">
        <table id="example1" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">ID TURNO</th>
                    <th scope="col">TURNO</th>
                    <th scope="col">HORAS</th>
                    <th scope="col">ACCIONES</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($turnos as $turno)
                <tr>
                    <td>{{$turno->id}}</td>
                    <td>{{$turno->nombre}}</td>
                    <td>{{$turno->horaInicio}} - {{$turno->horaFin}}</td>
                    <td>
                        <a href="{{route('turnos.edit',[$turno->id])}}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="{{route('turnos.registrados',[$turno->id])}}" class="btn btn-outline-success">Ver registrados</a>
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