@extends('Layout')

@section('title','Table')
@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">

@endsection


@section('body')
<a class="btn btn-outline-secondary btn-lg btn-block" href="{{Route('compras.create')}}" role="button">REGISTRAR COMPRA</a>
<div class="row d-flex justify-content-center" style="text-align:center">
    <table id="example1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">DESCRIPCION</th>
                <th scope="col">CANTIDAD</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($compras as $compra)
            <tr>
                <td class="" tabindex="0">{{$compra->pivot->id}}</td>
                <td class="" tabindex="0">{{$compra->nombre}}</td>
                <td class="" tabindex="0">{{$compra->inventario->nombre}}</td>
                <td class="" tabindex="0">{{$compra->pivot->cantidad}}</td>
                <td>
                    <form action="{{route('compras.destroy',[$compra->pivot->id])}}" method="POST" id="myform">
                        @csrf
                        @method('DELETE')
                        <a href="#" onclick="document.getElementById('myform').submit()">
                            <i class="fas fa-trash"></i>
                        </a>
                        <a href="{{route('compras.edit',[$compra->pivot->id])}}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="{{Route('compras.show',[$compra->pivot->id])}}">
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