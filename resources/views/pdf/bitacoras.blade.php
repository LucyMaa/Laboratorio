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
                    <th scope="col">CODIGO</th>
                    <th scope="col">EMPLEADO</th>
                    <th scope="col">FECHA Y HORA</th>
                    <th scope="col">ACCIONES</th>
                    <th scope="col">IP</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bitacora as $bitacoras)
                <tr>
                    <td class="" tabindex="0">{{$bitacoras->id}}</td>
                    <td class="" tabindex="0">{{$bitacoras->email}}</td>
                    <td class="" tabindex="0">{{$bitacoras->updated_at }}</td>
                    <td class="" tabindex="0">{{$bitacoras->acciones}}</td>
                    <td class="" tabindex="0">{{$bitacoras->ip}}</td>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</body>
</html>