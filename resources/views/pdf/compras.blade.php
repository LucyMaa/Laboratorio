<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table id="example1" class="table table-bordered table-hover" border="1">
        <thead>
            <tr>
                <th scope="col">COMPRA ID</th>
                <th scope="col">PROVEEDOR</th>
                <th scope="col">INVENTARIO</th>
                <th scope="col">CANTIDAD</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($compras as $compra)
            @foreach ($compra->inventarios as $inventario)
            <tr>
                <td class="" tabindex="0">{{$inventario->pivot->id}}</td>
                <td class="" tabindex="0">{{$compra->nombre}}</td>
                <td class="" tabindex="0">{{$inventario->nombre}}</td>
                <td class="" tabindex="0">{{$inventario->pivot->cantidad}}</td>
            </tr>
            @endforeach
            @endforeach
        </tbody>
    </table>
</body>
</html>