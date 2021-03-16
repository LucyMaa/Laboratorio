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
                <th scope="col">TIPO</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($muestras as $muestra)
            <tr>
                <td class="" tabindex="0">{{$muestra->id}}</td>
                <td class="" tabindex="0">{{$muestra->tipo}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>