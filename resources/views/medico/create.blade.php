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
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- inicio ---------------->
            @yield('body')
            
            <div class="container-sm">
                <form method="POST" action=""><br>
                    @csrf
                    <div class="form-group">
                        <div class="alert alert-secondary" role="alert">
                            INTRODUZCA SUS DATOS :
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">CARNET</span>
                            </div>
                            <input name="carnet" type="number" aria-label="First name" class="form-control" placeholder="######" value="{{old('carnet')}}">
                            <p class="text-danger"> {{$errors->first("carnet")}}</p>
                        </div> <br>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">NOMBRE</span>
                            </div>
                            <input name="nombre" type="text" aria-label="First name" class="form-control" placeholder="INTRODUZCA EL NOMBRE" value="{{old('nombre')}}">
                            <p class="text-danger"> {{$errors->first("nombre")}}</p>
                            <div class="input-group-prepend">
                                <span class="input-group-text">APELLIDO</span>
                            </div>
                            <input name="apellido" type="text" aria-label="First name" class="form-control" placeholder="INTRODUZCA EL APELLIDO" value="{{old('nombre')}}">
                            <p class="text-danger"> {{$errors->first("apellido")}}</p>
                        </div> <br>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">DIRECCION</span>
                            </div>
                            <input name="dir" value="{{old('dir')}}" type="text" class="form-control" aria-label="First name" class="form-control" placeholder="URB. LAS MADRES CALLE 12, CASA 8">
                            <p class="text-danger">{{$errors->first("dir")}}</p>
                        </div><br>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">FECHA DE NACIMIENTO</span>
                            </div><br>
                            <input name="FECHA DE NACIMIENTO" value="{{old('nacimiento')}}" type="date" class="form-control" aria-label="First name" class="form-control" placeholder="#######">
                            <p class="text-danger"> {{$errors->first("telefono")}}</p>
                        </div><br>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">GENERO</span>
                            </div>
                            <input name="sexo" value="{{old('sexo')}}" type="text" class="form-control" aria-label="First name" class="form-control" placeholder="F o M">
                            <p class="text-danger">{{$errors->first("sexo")}}</p>
                        </div><br>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">NUMERO DE TELEFONO</span>
                            </div>
                            <input name="telefono" value="{{old('telefono')}}" type="number" aria-label="First name" class="form-control" placeholder="#######">
                            <p class="text-danger"> {{$errors->first("telefono")}}</p>
                        </div><br>  
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">CARGO</span>
                            </div>
                            <input name="cargo" value="{{old('cargo')}}" type="text" class="form-control" aria-label="First name" class="form-control" placeholder="">
                            <p class="text-danger">{{$errors->first("cargo")}}</p>
                        </div><br>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">ESTADO</span>
                            </div>
                            <input name="estado" value="{{old('estado')}}" type="text" class="form-control" aria-label="First name" class="form-control" placeholder="">
                            <p class="text-danger">{{$errors->first("estado")}}</p>
                        </div><br>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">FECHA DE CONTRATACION</span>
                            </div><br>
                            <input name="fechac" value="{{old('fechac')}}" type="date" class="form-control" aria-label="First name" class="form-control" placeholder="#######">
                            <p class="text-danger"> {{$errors->first("fechac")}}</p>
                        </div><br>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">FECHA DE BAJA</span>
                            </div><br>
                            <input name="fechab" value="{{old('fechab')}}" type="date" class="form-control" aria-label="First name" class="form-control" placeholder="#######">
                            <p class="text-danger"> {{$errors->first("fechab")}}</p>
                        </div><br>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">SUELDO</span>
                            </div>
                            <input name="SUELDO" value="{{old('SUELDO')}}" type="number" aria-label="First name" class="form-control" placeholder="#######">
                            <p class="text-danger"> {{$errors->first("SUELDO")}}</p>
                        </div><br>




                        <div class="form-group">
                            <button id="parte1" type="submit" class="btn btn-outline-success">REGISTRAR!</button> <br><br>
                        </div>
                    </div>
                </form>
            </div>
            <script src="/js/app.js"></script>
            @yield('js')
            @include('layout.controlsidebar')
            @include('layout.footer')