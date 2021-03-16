@extends('Layout')

@section('title','Table')

@section('body')
<br>
<a type="button" class="btn btn-danger" href="{{ route('Bitacoras.pdf') }}">Descargar PDF</a>
<a type="button" class="btn btn-success" href="{{ route('Bitacoras.excel') }}">Descargar EXCEL</a>
<div class="container-sm">
    <div class="row d-flex justify-content-center">
        <table id="example1" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">CODIGO</th>
                    <th scope="col">EMPLEADO</th>
                    <th scope="col">FECHA Y HORA</th>
                    <th scope="col">ACCIONES</th>
                    <th scope="col">IP</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bitacora as $bitacoras)
                <tr>
                    <td class="" tabindex="0">{{$bitacoras->id}}</td>
                    <td class="" tabindex="0">{{$bitacoras->email}}</td>
                    <td class="" tabindex="0">{{$bitacoras->updated_at }}</td>
                    <td class="" tabindex="0">{{$bitacoras->acciones}}</td>
                    <td class="" tabindex="0">{{$bitacoras->ip}}</td>
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