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

  <br>  <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- inicio ---------------->
            @yield('body')
            <div class="container">
                <a class="btn btn-outline-secondary btn-lg btn-block" href="{{route('persona.create')}}" role="button">AGREGAR PERSONA</a>
                <br>
                <table class=" table table-bordered table-dark" style="text-align: center">
                    <thead> <!--encabezado-->
                        <tr>

                            <th scope="col">CI</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">APELLIDO</th>
                            <th scope="col">FECHA DE NACIMIENTO</th>
                            <th scope="col">DIRECCION</th>
                            <th scope="col">TELEFONO</th>
                            <th scope="col" colspan="3">ACCIONES</th>


                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($persona as $unaPersona)
                    <tr>
                        <td >{{$unaPersona->ci}}</td>
                        <td >{{$unaPersona->nombre}}</td>
                        <td >{{$unaPersona->apellido}}</td>
                        <td >{{$unaPersona->fechaNacimiento}}</td>
                        <td >{{$unaPersona->direccion}}</td>
                        <td >{{$unaPersona->telefono}}</td>
                        <td>
                            {{-- <a href=" " class="btn btn-outline-secondary" style="margin: 10px">Ver</a> --}}
                            <a href="{{route('persona.edit',$unaPersona->id)}}" class="btn btn-outline-secondary">Editar</a>
                            <form action="" method="POST">
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
            @yield('js')
            @include('layout.controlsidebar')
            @include('layout.footer')