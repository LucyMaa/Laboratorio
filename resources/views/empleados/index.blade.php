@extends('Layout')

@section('title','Table')
@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">

@endsection


@section('body')
<a class="btn btn-outline-secondary btn-lg btn-block" href="{{Route('empleados.create')}}" role="button">AGREGAR EMPLEADO</a>
<div class="row d-flex justify-content-center" style="text-align:center">
    <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>

                <th scope="col">CI</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO</th>
                <th scope="col">DIRECCION</th>
                <th scope="col">FECHA NACIMIENTO</th>
                <th scope="col">SEXO</th>
                <th scope="col">TELEFONO</th>
                <th scope="col">ACCIONES</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($administradors as $administrador)
            <tr>
                <td class="" tabindex="0">{{$administrador->ci}}</td>
                <td class="" tabindex="0">{{$administrador->nombre}}</td>
                <td class="" tabindex="0">{{$administrador->apellido}}</td>
                <td class="" tabindex="0">{{$administrador->direccion}}</td>
                <td class="" tabindex="0">{{$administrador->fechaNacimiento}}</td>
                <td class="" tabindex="0">{{$administrador->sexo}}</td>
                <td class="" tabindex="0">{{$administrador->telefono}}</td>
                <td>
                    <a href="">
                        <i class="fas fa-trash"></i>
                    </a>
                    <a href="">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="">
                        <i class="fas fa-eye"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
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