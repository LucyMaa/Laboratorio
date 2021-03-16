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
                <th scope="col">APELLIDO</th>
                <th scope="col">DIRECCION</th>
                <th scope="col">CI</th>
                <th scope="col">ID PERSONA</th>
                <th scope="col">TELEFONO</th>
               

            </tr>
        </thead>
        <tbo dy>
            @foreach ($administradors as $administrador)
            <tr>
                <td class="" tabindex="0">{{$administrador->id}}</td>
                <td class="" tabindex="0">{{$administrador->nombre}}</td>
                <td class="" tabindex="0">{{$administrador->apellido}}</td>
                <td class="" tabindex="0">{{$administrador->direccion}}</td>
                <td class="" tabindex="0">{{$administrador->ci}}</td>
                <td class="" tabindex="0">{{$administrador->idPersona}}</td>
                <td class="" tabindex="0">{{$administrador->telefono}}</td>
            
            </tr>
            @endforeach
            </tbody>
    </table>
</body>
</html>