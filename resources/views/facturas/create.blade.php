<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body class="bg-light container">
    <h1 class="display-4 text-danger">FACTURA</h1>
    <hr />
    <main>
        <section class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> cabecera de fac</h3>
                    </div>
                    <div class="card-body">
                        <form class="row">
                            <div class="form-group col-md-4">
                                <label for="">NOMBRE</label>
                                <input type="tex" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">APELLIDOS</label>
                                <input type="tex" class="form-control">
                            </div>
                            <div class="form-group col-md-4">FECHA Y HORA<label for=""></label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group col-md-8">DIRECCION<label for=""></label>
                                <input type="tex" class="form-control">
                            </div>
                            <div class="form-group col-md-4">TELEFONO<label for=""></label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="form-group col-md-4">CI<label for=""></label>
                                <input type="number" class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form class="row">
                            <div class="form-group col-md-2">
                                <label for="">CANTIDAD</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="">DESCRIPCION</label>
                                <input type="text"  class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">P. UNIT.</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">P. TOTAL</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-1">
                                <button type="button" class="btn btn-primary" >AGREGAR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>
    </main>
</body>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>