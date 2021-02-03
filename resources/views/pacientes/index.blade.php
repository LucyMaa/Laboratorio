<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Laboratorio')</title>

    <link rel="stylesheet" href="/css/app.css">
    @yield('css')


</head>

<body class="hold-transition sidebar-mini">
    @include('layout.navbar')
    @include('layout.sidebar')
    <br>
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- inicio ---------------->
            @yield('body')
            <div class="container">
                <a class="btn btn-outline-success btn-lg btn-block" href="{{route('pacientes.create')}}" role="button">AGREGAR PACIENTE </a>
                <table class="table table-bordered table-dark" style="text-align: center">
                    <thead>
                        <tr>

                            <th scope="col">CODIGO PACIENTE</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">APELLIDO</th>
                            <th scope="col">CI</th>
                            <th scope="col">TELEFONO/th>
                            <th scope="col">CODIFO PERSONA </th>
                            

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
                                <form action="{{route('pacientes.destroy',[$paciente->id]) }}" method="POST">


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

            <script src="/js/app.js"></script>
            @include('layout.controlsidebar')

        </div>
    </div>
    @include('layout.footer')
</body>