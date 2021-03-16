<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <table >
        <thead>

            <tr>
                <th >ID</th>
                <th >NOMBRE</th>
                <th >APELLIDO</th>
                <th >DIRECCION</th>
                <th >CI</th>
                <th >SEXO</th>
                <th >TELEFONO</th>
                <th >ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Medicos as $medico)
            <tr>
                <td >{{$medico->id}}</td>
                <td >{{$medico->nombre}}</td>
                <td >{{$medico->apellido}}</td>
                <td >{{$medico->direccion}}</td>
                <td >{{$medico->ci}}</td>
                <td >{{$medico->sexo}}</td>
                <td >{{$medico->telefono}}</td>
               
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>