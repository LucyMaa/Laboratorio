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
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">DESCRIPCION</th>
                <th scope="col">TELEFONO</th>
                


            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $proveedor)
            <tr>
                <td class="" tabindex="0">{{$proveedor->id}}</td>
                <td class="" tabindex="0">{{$proveedor->nombre}}</td>
                <td class="" tabindex="0">{{$proveedor->descripcion}}</td>
                <td class="" tabindex="0">{{$proveedor->telefono}}</td>
                

        
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>