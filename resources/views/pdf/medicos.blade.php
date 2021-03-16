<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
            <th scope="col">SEXO</th>
            <th scope="col">TELEFONO</th>
            

        </tr>
    </thead>
    <tbody>
        @foreach ($Medicos as $medico)
        <tr>
            <td class="" tabindex="0">{{$medico->id}}</td>
            <td class="" tabindex="0">{{$medico->nombre}}</td>
            <td class="" tabindex="0">{{$medico->apellido}}</td>
            <td class="" tabindex="0">{{$medico->direccion}}</td>
            <td class="" tabindex="0">{{$medico->ci}}</td>
            <td class="" tabindex="0">{{$medico->sexo}}</td>
            <td class="" tabindex="0">{{$medico->telefono}}</td>
            <td>
                <!-- <a href="">
                    <i class="fas fa-trash"></i>
                </a> -->
                <a href="{{route('Medico.edit',[$medico->id])}}">
                    <i class="fas fa-edit"></i>
                </a>
                <!-- <a href="">
                    <i class="fas fa-eye"></i>
                </a> -->
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>

</html>