@extends('Layout')

@section('title','Table')
@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">

@endsection


@section('body')

<div class="container">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <div class="alert alert-secondary" role="alert">
        PERSONAL EN EL TURNO:
    </div>
    <div class="row d-flex justify-content-center">
        <table id="example1" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">CI</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO</th>
                    <th scope="col">DIRECCION</th>
                    <th scope="col">FECHA NACIMIENTO</th>
                    <th scope="col">SEXO</th>
                    <th scope="col">TELEFONO</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($personals as $personal)
                <tr>
                    <td class="" tabindex="0">{{$personal->ci}} </td>
                    <td class="" tabindex="0">{{$personal->nombre}} </td>
                    <td class="" tabindex="0">{{$personal->apellido}} </td>
                    <td class="" tabindex="0">{{$personal->direccion}}</td>
                    <td class="" tabindex="0">{{$personal->fechaNacimiento}}</td>
                    <td class="" tabindex="0">{{$personal->sexo}}</td>
                    <td class="" tabindex="0">{{$personal->telefono}}</td>
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