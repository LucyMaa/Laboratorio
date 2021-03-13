@extends('Layout')

@section('title','Table')
@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">

@endsection


@section('body')
<a class="btn btn-outline-secondary btn-lg btn-block" href="{{Route('inventarios.create')}}" role="button">AGREGAR AL INVENTARIO</a>
<div class="row d-flex justify-content-center" style="text-align:center">
    <table id="example1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">DESCRIPCION</th>
                <th scope="col">EXISTENCIAS</th>
                <th scope="col">MINIMO</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($inventarios as $inventario)
            <tr>
                <td class="" tabindex="0">{{$inventario->id}}</td>
                <td class="" tabindex="0">{{$inventario->nombre}}</td>
                <td class="" tabindex="0">{{$inventario->descripcion}}</td>
                <td class="" tabindex="0">{{$inventario->existencia}}</td>
                <td class="" tabindex="0">{{$inventario->minimo}}</td>

                <td>
                    <form action="{{route('inventarios.destroy',[$inventario->id])}}" method="POST" id="myform">
                        @csrf
                        @method('DELETE')
                        

                        <button type='submit'><i class="fas fa-trash"></i></button>
                        <a href="{{route('inventarios.edit',[$inventario->id])}}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="{{Route('inventarios.show',[$inventario->id])}}">
                            <i class="fas fa-eye"></i>
                        </a>
                    </form>
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