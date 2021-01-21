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
           {{-- @yield('body') --}}
            <h1 class="mt-5">Lista de Personas</h1>
             @if(!empty($persona)){
                @foreach ($Persona as $i)
                    <p> {{$i->nombre}}</p>
                @endforeach
            @else 
                <p>esta vacio tu registo</p>
             @endif
         </div>
            <script src="/js/app.js"></script>
            @yield('js')
            @include('layout.controlsidebar')
            @include('layout.footer')