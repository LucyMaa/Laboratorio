@extends('Layout')

@section('title','Table')
@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">

@endsection


@section('body') <br>
<div class="container">
    <a class="btn btn-outline-secondary btn-lg btn-block" href="{{Route('examenes.create')}}" role="button">AGREGAR EXAMEN</a>
    <a type="button" class="btn btn-danger" href="{{ route('Examenes.pdf') }}">Descargar PDF</a>
<a type="button" class="btn btn-success" href="{{ route('Examenes.excel') }}">Descargar EXCEL</a>
    <div class="row d-flex justify-content-center" style="text-align:center">
        <table id="example1" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">PRECIO</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($examenes as $examen)
                <tr>
                    <td class="" tabindex="0">{{$examen->id}}</td>
                    <td class="" tabindex="0">{{$examen->nombre}}</td>
                    <td class="" tabindex="0">{{$examen->descripcion}}</td>
                    <td class="" tabindex="0">{{$examen->precio}}</td>

                    <td>
                        <form action="{{route('examenes.destroy',[$examen->id])}}" method="POST" id="myform">
                            @csrf
                            @method('DELETE')

                            <button type='submit'><i class="fas fa-trash"></i></button>

                            <a href="{{route('examenes.edit',[$examen->id])}}">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="{{Route('examenes.show',[$examen->id])}}">
                                <i class="fas fa-eye"></i>
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