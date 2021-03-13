@extends('Layout')

@section('title','Table')

@section('body')

<div class="container-sm"><br>
    </pre>
    <div class="col-xs-6 text-right">
        <h1>FACTURA</h1>
    </div>
    <hr />
    <pre>
    </pre>
    <div class="row">
        <div class="col-xs-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>NOMBRE: </h4>
                </div>
            </div>
        </div>
        <pre></pre>
        <div class="col-xs-5 col-xs-offset-2 text-right">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>FECHA: {{date('d/m/y')}}</h4>
                </div>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        <h4>#</h4>
                    </th>
                    <th>
                        <h4>EXAMEN</h4>
                    </th>
                    <th>
                        <h4>PRECIO UNITARIO</h4>
                    </th>
                    <th>
                        <h4>SUB-TOTAL</h4>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class=" text-rigth"> 1</td>
                    <td class=" text-right ">HEMOGRAMA</td>
                    <td class=" text-right ">200.00 €</td>
                    <td class=" text-right ">200.00 €</td>
                </tr>
            </tbody>
        </table>
        </pre>
        <h3>TOTAL A PAGAR: </h3>
    </div>
    <div class="d-flex justify-content-center">
    <button id="parte1" type="submit" class="btn btn-outline-success" onclick="javascript:window.print()">Imprimir</button>
  </div>
</div>
<style>
    @import url(http://fonts.googleapis.com/css?family=Bree+Serif);

    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Bree Serif', serif;
    }
</style>
<style type="text/css" media="print">
    @media print {
        #parte1 {
            display: none;
        }
    }
</style>

@endsection