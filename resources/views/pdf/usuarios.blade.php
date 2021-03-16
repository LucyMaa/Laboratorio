<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table table-bordered table-dark" style="text-align: center" border="1">
                    <thead>
                        <tr>
                            <th scope="col">CODIGO USUARIO</th>
                            <th scope="col">EMAIL </th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">APELLIDO</th>
                            <th scope="col">CI</th>
                            <th scope="col" colspan="3">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                        <tr>
                            <td>
                                <h5>{{$usuario->id}}</h5>
                            </td>
            
                            <td>
                                <h5>{{$usuario->email}}</h5>
                            </td>
                            <td>
                                <h5>{{$usuario->persona->nombre}}</h5>
                            </td>
                            <td>
                                <h5>{{$usuario->persona->apellido}}</h5>
                            </td>
                            <td>
                                <h5>{{$usuario->persona->ci}}</h5>
                            </td>


                        </tr>
                        @endforeach

                    </tbody>
                </table>
</body>
</html>