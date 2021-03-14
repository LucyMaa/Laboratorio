@extends('Layout')

@section('title','Table')

@section('body')
<style>
    .contenedor-boton {
        align-items: center;
        display: flex;
        justify-content: center;
    }
</style>
<div class="bg-light container">
    <h1 class="display-4 text-danger">FACTURA</h1>
    <hr />
    <main>
        <section class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DATOS DE LA FACTURA</h3>
                    </div>
                    <div class="card-body">
                        <form class="row">
                            <div class="form-group col-md-4">
                                <label for="">NOMBRE</label>
                                <input id="nombreFactura" type="tex" class="form-control">
                            </div>
                           
                            <div class="form-group col-md-4">
                                <label for="">FECHA</label>
                                <input id="fecha"  class="form-control" value="{{date('d/m/y')}}" disabled="disabled">
                            </div>
                            <div class="form-group col-md-4">HORA<label for=""></label>
                                <input id="hora"  class="form-control" value="{{ date('H:i:s') }}" disabled="disabled">
                            </div>
                            <div class="form-group col-md-4">NIT/CI<label for=""></label>
                                <input id="nit" type="number" class="form-control">
                            </div>
                            <div class="form-group col-md-4">TELEFONO<label for=""></label>
                                <input id="telefonoFactura" type="number" class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DATOS DEL PACIENTE</h3>
                    </div>
                    <div class="card-body">
                        <form class="row">
                            <div class="form-group col-md-4">
                                <label for="">NOMBRE</label>
                                <input id="nombre" type="tex" class="form-control" value="{{$persona->nombre}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">APELLIDOS</label>
                                <input id="apellido" type="tex" class="form-control" value="{{$persona->apellido}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">FECHA  DE NACIMIENTO</label>
                                <input id="fecha" type="date" class="form-control" value="{{$persona->fechaNacimiento}}">
                            </div>                           
                            <div class="form-group col-md-4">SEXO<label for=""></label>
                                <input id="sexo" type="text" class="form-control" value="{{$persona->sexo}}">
                            </div>
                            <div class="form-group col-md-4">DIRECCION<label for=""></label>
                                <input id="direccion" type="text" class="form-control" value="{{$persona->direccion}}">
                            </div>
                            <div class="form-group col-md-4">TELEFONO<label for=""></label>
                                <input id="telefono" type="number" class="form-control" value="{{$persona->telefono}}">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="row mt-4">
            <div class="col">
            
                <div class="card">
                    <div class="card-body">
                        <form class="row">
                            <div class="form-group col-md-2">
                                <label for="">CANTIDAD</label>
                                <input class="form-control monto" onkeyup="multi();" id="cantidad" type="number">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="">T. EXAMEN</label>
                                <select id="des" class="form-control">
                                    @foreach($examenes as $examen)
                                    <option>
                                        {{$examen->nombre}} Bs. {{$examen->precio}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">P. UNIT.</label>
                                <input class="form-control monto" onkeyup="multi();" id="pu" type="number" class="form-control" value="">
                            </div>
                            <div class="form-group col-md-2">
                                <label>SUB-TOTAL</label>
                                <span name="pt" id="pt" class="form-control monto" onkeyup="multi();" type="text">
                            </div>
                        </form>
                        <div class="tab tab">
                            <button class="btn btn-primary" onclick="addHtmlTableRow();">AGREGAR</button>
                            <button class="btn btn-primary" onclick="editHtmlTbleSelectedRow();">EDITAR</button>
                            <button class="btn btn-primary" onclick="removeSelectedRow();">ELIMINAR</button>
                        </div>
                    </div>

                </div>
                <form METHOD="POST" ACTION="{{Route('factura.store',[$paciente->id])}}">
                    @csrf
                    <table name="tabla" id="table" class="table text-center ">
                        <thead>
                            <tr>
                                <th>cantidad</th>
                                <th>T. Examen </th>
                                <th>P. unitario</th>
                                <th>Sub-total</th>
                            </tr>
                        </thead>
                    </table>
                    <button class="btn btn-primary" TYPE="SUBMIT" VALUE="Enviar">enviar</button>
                    <div class="d-flex flex-row-reverse">
                        <div class="flex-column col-md-2" style="text-align: right;">
                            <label>Total</label>
                            <span name="total" id="total" class="form-control total" type="text">0</span>
                        </div>
                    </div>
                </form>
            </div>

        </section>
    </main>
</div>

<script>
    function multi() {
        var total = 1;
        var change = false; //
        $(".monto").each(function() {
            if (!isNaN(parseFloat($(this).val()))) {
                change = true;
                total *= parseFloat($(this).val());

            }
        });
        // Si se modifico el valor , retornamos la multiplicación
        // caso contrario 0
        total = (change) ? total : 0;
        document.getElementById('pt').innerHTML = total;

    }
    var rIndex,
        table = document.getElementById("table");

    // check the empty input
    function checkEmptyInput() {
        var isEmpty = false,
            cantidad = document.getElementById("cantidad").value,
            des = document.getElementById("des").value,
            pu = document.getElementById("pu").value;
        pt = document.getElementById("pt").value;
        if (cantidad === "") {
            alert("First Name Connot Be Empty");
            isEmpty = true;
        } else if (des === "") {
            alert("Last Name Connot Be Empty");
            isEmpty = true;
        } else if (pu === "") {
            alert("Age Connot Be Empty");
            isEmpty = true;
        }
        return isEmpty;
    }

    // add Row
    function addHtmlTableRow() {
        // get the table by id
        // create a new row and cells
        // get value from input text
        // set the values into row cell's
        if (!checkEmptyInput()) {
            var newRow = table.insertRow(table.length),
                cantidad = document.getElementById("cantidad").value,
                des = document.getElementById("des").value,
                pu = document.getElementById("pu").value,
                pt = document.getElementById("pt").innerHTML,
                total = document.getElementById("total").innerHTML;

            var fila = '<tr>' +
                '<td><input class="form-control" type="text" name="cantidad[]" value="' + cantidad + '" readonly ></td>' +
                '<td><input class="form-control" type="text" name="descripcion[]" value="' + des + '" readonly></td>' +
                '<td><input class="form-control" type="text" name="precioU[]" value="' + pu + '" readonly></td>' +
                '<td><input class="form-control" type="text" name="subTotal[]" value="' + pt + '" readonly></td>' +
                '</tr>';

            $('#table').append(fila);
            document.getElementById('total').innerHTML = (parseFloat(total)+parseFloat(pt));

            selectedRowToInput();
        }
    }

    function selectedRowToInput() {
        for (var i = 1; i < table.rows.length; i++) {
            table.rows[i].onclick = function() {
                // get the seected row index
                rIndex = this.rowIndex;
                document.getElementById("cantidad").value = this.cells[0].innerHTML;
                document.getElementById("des").value = this.cells[1].innerHTML;
                document.getElementById("pu").value = this.cells[2].innerHTML;
                document.getElementById("pt").value = this.cells[3].innerHTML;

            };
        }
    }
    selectedRowToInput();

    function editHtmlTbleSelectedRow() {

        var i = 0;
        var cantidad = document.getElementById("cantidad").value,
            descripcion = document.getElementById("descripcion").value,
            pu = document.getElementById("pu").value;
        pt = document.getElementById("pt").value;
        if (!checkEmptyInput()) {
            table.rows[rIndex].cells[0].innerHTML = cantidad;
            table.rows[rIndex].cells[1].innerHTML = descripcion;
            table.rows[rIndex].cells[2].innerHTML = pu;
            table.rows[rIndex].cells[3].innerHTML = pt;
        }
    }


    function removeSelectedRow() {
        table.deleteRow(rIndex);
        // clear input text
        document.getElementById("cantidad").value = "";
        document.getElementById("descripcion").value = "";
        document.getElementById("pu").value = "";
        document.getElementById("pt").value = "";
    }

    $('#des').change(function() {
        var val = $("#des option:selected").text();
        alert(val);
    });
</script>

@endsection