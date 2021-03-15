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
                    <h4>NOMBRE: {{$factura->nombre}} </h4>
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
        <table class="table table-bordered" style="text-align: center;">
            <thead>
                <tr>
                    <th>
                        <h4>#</h4>
                    </th>
                    <th>
                        <h4>CANTIDAD</h4>
                    </th>
                    <th>
                        <h4>EXAMEN</h4>
                    </th>
                    <th>
                        <h4>SUB-TOTAL</h4>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($detalles as $detalle)
                    <td class=" "> 1</td>
                    <td class="">{{$detalle->cantidad}}</td>
                    <td class="">{{$detalle->descripcion}}</td>
                    <td class="">{{$detalle->subTotal}}</td>
                    <td class="d-none">{{$factura->total}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <h3>TOTAL A PAGAR: {{$factura->total}} </h3>
        </pre>

    </div>
    <div class="d-flex justify-content-center">
        <button id="parte1" type="submit" class="btn btn-outline-success" onclick="javascript:window.print()">Imprimir</button>
    </div>
</div>

<style type="text/css" media="print">
    @media print {
        #parte1 {
            display: none;
        }
    }
</style>

@endsection