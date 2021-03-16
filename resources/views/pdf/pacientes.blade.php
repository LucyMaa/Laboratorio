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
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO</th>
                    <th scope="col">CI</th>
                    <th scope="col">TELEFONO </th>
                    <th scope="col">CODIGO PERSONA </th>
                    <th scope="col">ESTADO </th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pacientes as $paciente)
                <tr>
                    <td class="" tabindex="0">{{$paciente->nombre}}</td>
                    <td class="" tabindex="0">{{$paciente->apellido}}</td>
                    <td class="" tabindex="0">{{$paciente->ci}}</td>
                    <td class="" tabindex="0">{{$paciente->telefono}}</td>
                    <td class="" tabindex="0">{{$paciente->idPersona}}</td>
                    <td class="" tabindex="0">
                        @if ($paciente->estado =='ACTIVO')
                        <span class="badge badge-pill badge-success">ACTIVO</span>
                        @else
                        <span class="badge badge-pill badge-danger">DESACTIVADA</span>
                        @endif
                    </td>
                   
                </tr>
                @endforeach
            </tbody>
        </table>
</body>
</html>