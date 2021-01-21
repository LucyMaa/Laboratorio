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

    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- inicio ---------------->


            @yield('body')
        
        </div>

    </div>
<script src="/js/app.js"></script>
@yield('js')

</body>

@include('layout.controlsidebar')
@include('layout.footer')
