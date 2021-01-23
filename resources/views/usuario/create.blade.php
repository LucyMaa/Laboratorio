<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Laboratorio')</title>

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/formularioCTC.css">
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
                <div class="container-sm">
                    <form method="POST" action="{{Route('usuario.store')}}"><br>
                        @csrf
                        <div class="form-group">
                            <div class="alert alert-danger" role="alert">
                                INTRODUZCA SUS DATOS :
                            </div>
                           <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">CODIGO ASIGNADO</span>
                                </div>
                                <input name="idPersona" value="{{old('idPersona')}}" type="text" class="form-control" aria-label="First name" class="form-control" placeholder="CODIGO DE LA PERSONA REGISTRADA">
                                <p class="text-danger"> {{$errors->first("idPersona")}}</p>
                            </div><br>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">NOMBRE</span>
                                </div>
                                <input name="name" type="text" aria-label="First name" class="form-control" placeholder="INTRODUZCA EL NOMBRE DEL NUEVO USUARIO" value="{{old('name')}}">
                                <p class="text-danger"> {{$errors->first("name")}}</p>
                                <div class="input-group-prepend">
                                    <span class="input-group-text">CONTRASEÑA</span>
                                </div>
                                <input name="password" value="{{old('password')}}" type="password" class="form-control" aria-label="First name" class="form-control" placeholder="**********">
                                <p class="text-danger"> {{$errors->first("password")}}</p>
                            </div> <br>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">CORREO</span>
                                </div>
                                <input name="email" value="{{old('email')}}" type="email" class="form-control" aria-label="First name" class="form-control" placeholder="nombre@gmail.com">
                                <p class="text-danger"> {{$errors->first("email")}}</p>
                            </div><br>
                          

                            <div class="form-group">
                                <button id="parte1" type="submit" class="btn btn-outline-success">REGISTRAR!</button> <br><br>
                            </div>
                        </div>
                    </form>
                </div>
                <script src="/js/app.js"></script>
                @include('layout.controlsidebar')
                
            </div>
        </div>
    </div>
   
</body>
@include('layout.footer')