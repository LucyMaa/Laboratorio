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
                <a class="btn btn-outline-success btn-lg btn-block" href="{{route('usuario.create')}}" role="button">AGREGAR USUARIO</a>
                <table class="table table-bordered table-dark" style="text-align: center">
                    <thead>
                        <tr>

                            <th scope="col">CODIGO USUARIO</th>
                           
                            <th scope="col">EMAIL </th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">APELLIDO</th>
                            <th scope="col">CI</th>

                            <th scope="col" colspan="3">ACCIONES</th>


                        </tr>
                    </thead>
                    <tbody>

                        @foreach($usuarios as $usuario)
                        <tr>
                            <td>
                                <h5>{{$usuario->id}}</h5>
                            </td>
            
                            <td>
                                <h5>{{$usuario->email}}</h5>
                            </td>
                            <td>
                                <h5>{{$usuario->persona->nombre}}</h5>
                            </td>
                            <td>
                                <h5>{{$usuario->persona->apellido}}</h5>
                            </td>
                            <td>
                                <h5>{{$usuario->persona->ci}}</h5>
                            </td>

                            <td>
                                <a href="{{route('usuario.edit',[$usuario->id])}}" class="btn btn-outline-success">Editar</a>
                                <!-- <a href="{{route('usuario.show',[$usuario->id]) }}" class="btn btn-outline-success" style="margin: 10px">Ver</a>  -->
                                <form action="{{route('usuario.destroy',[$usuario->id]) }}" method="POST">


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