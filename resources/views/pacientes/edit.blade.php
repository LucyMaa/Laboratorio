@extends('Layout')

@section('title',' EDITAR PACIENTE')
@section('body')
<script>
    document.addEventListener('keypress', function(evt) {

        // Si el evento NO es una tecla Enter
        if (evt.key !== 'Enter') {
            return;
        }

        let element = evt.target;

        // Si el evento NO fue lanzado por un elemento con class "focusNext"
        if (!element.classList.contains('focusNext')) {
            return;
        }

        // AQUI logica para encontrar el siguiente
        let tabIndex = element.tabIndex + 1;
        var next = document.querySelector('[tabindex="' + tabIndex + '"]');

        // Si encontramos un elemento
        if (next) {
            next.focus();
            event.preventDefault();
        }
    });
</script>
<div class="container-sm">
    <form method="POST" rol="form" action="{{Route('pacientes.update',[$paciente->id])}}"><br>
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="alert alert-secondary" role="alert">
                INTRODUZCA SUS DATOS PERSONALES :
            </div>
            <div class="input-group">

                <span class="input-group-text">CARNET</span>
                <input name="ci" type="number" tabindex="1" aria-label="First name" class="form-control focusNext" placeholder="######" value="{{$persona->ci}}">
                <p class="text-danger"> {{$errors->first("ci")}}</p>

                <span class="input-group-text">GENERO</span>
                <select name="sexo" class="custom-select custom-select focusNext" tabindex="2" value="{{$persona->sexo}}">
                    <option hidden selected>{{$persona->sexo}} </option>
                    <option>MASCULINO</option>
                    <option>FEMENINO</option>
                </select>

            </div> <br>
            <div class="input-group">

                <span class="input-group-text">NOMBRE</span>
                <input name="nombre" type="text" tabindex="3" aria-label="First name" class="form-control focusNext" placeholder="INTRODUZCA EL NOMBRE" value="{{$persona->nombre}}">
                <p class="text-danger"> {{$errors->first("nombre")}}</p>

                <span class="input-group-text">APELLIDO</span>
                <input name="apellido" type="text" tabindex="4" aria-label="First name" class="form-control focusNext" placeholder="INTRODUZCA EL APELLIDO" value="{{$persona->apellido}}">
                <p class="text-danger"> {{$errors->first("apellido")}}</p>
            </div> <br>
            <div class="input-group">

                <span class="input-group-text">NUMERO DE TELEFONO</span>
                <input name="telefono" value="{{$persona->telefono}}" type="number" tabindex="5" aria-label="First name" class="form-control focusNext" placeholder="#######">
                <p class="text-danger"> {{$errors->first("telefono")}}</p>

                <span class="input-group-text">FECHA DE NACIMIENTO</span>
                <input name="nacimiento" value="{{$persona->fechaNacimiento}}" type="date" tabindex="6" class="form-control focusNext" aria-label="First name" placeholder="#######">
                <p class="text-danger"> {{$errors->first("nacimiento")}}</p>

            </div><br>

            <div class="input-group">

                <span class="input-group-text">DIRECCION</span>
                <input name="dir" value="{{$persona->direccion}}" type="text" tabindex="7" class="form-control focusNext" aria-label="First name" placeholder="URB. LAS MADRES CALLE 12, CASA 8">
                <p class="text-danger">{{$errors->first("dir")}}</p>

            </div><br>
            <div class="alert alert-secondary" role="alert">
                INTRODUZCA SUS DATOS CLINICOS :
            </div>

            <div class="input-group">
                <span class="input-group-text">ALERGIAS</span>
                <input name="alergias" type="text" tabindex="8" class="form-control focusNext" aria-label="First name" placeholder="" value="{{$paciente->alergias}}">
                <p class="text-danger">{{$errors->first("estado")}}</p>

                <span class="input-group-text">ANTECEDENTES TRAUMATICOS</span>
                <input name="antecedentes_traumaticos" type="text" tabindex="9" class="form-control focusNext" aria-label="First name" placeholder="" value="{{$paciente->antecedentes_traumaticos}}">
                <p class="text-danger">{{$errors->first("estado")}}</p>

            </div><br>

            <div class="input-group">
                <span class="input-group-text">ENFERMEDADES</span>
                <input name="enfermedades" type="text" tabindex="10" class="form-control focusNext" aria-label="First name" class="form-control" placeholder="" value="{{$paciente->enfermedades}}">
                <p class="text-danger">{{$errors->first("estado")}}</p>

                <span class="input-group-text">INTOLERANCIAS</span>
                <input name="intolerancias" type="text" tabindex="11" class="form-control focusNext" aria-label="First name" class="form-control" placeholder="" value="{{$paciente->intolerancias}}">
                <p class="text-danger">{{$errors->first("estado")}}</p>
            </div><br>

            <div class="input-group">
                <span class="input-group-text">ESTADO CIVIL</span>
                <input name="estado_civil" type="text" tabindex="12" class="form-control focusNext" aria-label="First name" class="form-control" placeholder="" value="{{$paciente->estado_civil}}">
                <p class="text-danger">{{$errors->first("estado")}}</p>

                <span class="input-group-text">GRUPO SANGUINEO</span>
                <input name="grupo_sanguineo" type="text" tabindex="13" class="form-control focusNext" aria-label="First name" class="form-control" placeholder="" value="{{$paciente->grupo_sanguineo}}">
                <p class="text-danger">{{$errors->first("estado")}}</p>
            </div><br>

            <div class="input-group">
                <span class="input-group-text">ESTATURA</span>
                <input name="estatura" type="float" tabindex="14" class="form-control focusNext" aria-label="First name" placeholder="" value="{{$paciente->estatura}}">
                <p class="text-danger">{{$errors->first("cargo")}}</p>

                <span class="input-group-text">PESO</span>
                <input name="peso" type="text" tabindex="15" class="form-control focusNext" aria-label="First name" placeholder="" value="{{$paciente->peso}}">
                <p class="text-danger">{{$errors->first("estado")}}</p>

            </div><br>
            <div class="input-group">

                <span class="input-group-text">NOMBRE CONTACTO DE EMERGENCIA</span>
                <input name="nombre_contacto_de_emergencia" type="text" tabindex="16" class="form-control focusNext" aria-label="First name" placeholder="" value="{{$paciente->nombre_contacto_de_emergencia}}">
                <p class="text-danger">{{$errors->first("estado")}}</p>

                <span class="input-group-text">NUMERO CONTACTO DE EMERGENCIA</span>
                <input name="numero_contacto_de_emergencia" type="number" tabindex="17" class="form-control focusNext" aria-label="First name" placeholder="#######" value="{{$paciente->numero_contacto_de_emergencia}}">
                <p class="text-danger"> {{$errors->first("fechac")}}</p>

            </div><br>

            <div class="form-group">
                <button id="parte1" type="submit" tabindex="13" class="btn btn-outline-success">REGISTRAR!</button> <br><br>
            </div>
        </div><br>
    </form>
</div>
@endsection