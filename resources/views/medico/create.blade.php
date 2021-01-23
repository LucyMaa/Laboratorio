@extends('Layout')
@section('title','REGISTRAR MEDICO')
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
    <form method="POST" rol="form" action="{{url('Medico/store')}}"><br>
        @csrf
        <div class="form-group">
            <div class="alert alert-secondary" role="alert">
                INTRODUZCA SUS DATOS :
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">CARNET</span>
                </div>
                <input name="ci" type="number" tabindex="1" aria-label="First name" class="form-control focusNext" placeholder="######" value="{{old('ci')}}">
                <p class="text-danger"> {{$errors->first("ci")}}</p>
            </div> <br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">NOMBRE</span>
                </div>
                <input name="nombre" type="text" tabindex="2" aria-label="First name" class="form-control focusNext" placeholder="INTRODUZCA EL NOMBRE" value="{{old('nombre')}}">
                <p class="text-danger"> {{$errors->first("nombre")}}</p>
                <div class="input-group-prepend">
                    <span class="input-group-text">APELLIDO</span>
                </div>
                <input name="apellido" type="text" tabindex="3" aria-label="First name" class="form-control focusNext" placeholder="INTRODUZCA EL APELLIDO" value="{{old('apellido')}}">
                <p class="text-danger"> {{$errors->first("apellido")}}</p>
            </div> <br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">DIRECCION</span>
                </div>
                <input name="dir" value="{{old('dir')}}" type="text" tabindex="4" class="form-control focusNext" aria-label="First name" class="form-control" placeholder="URB. LAS MADRES CALLE 12, CASA 8">
                <p class="text-danger">{{$errors->first("dir")}}</p>
            </div><br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">FECHA DE NACIMIENTO</span>
                </div><br>
                <input name="nacimiento" value="{{old('nacimiento')}}" type="date" tabindex="5" class="form-control focusNext" aria-label="First name" class="form-control" placeholder="#######">
                <p class="text-danger"> {{$errors->first("nacimiento")}}</p>
            </div><br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">GENERO</span>
                </div>
                <select name="sexo" class="custom-select custom-select focusNext" tabindex="6">
                    <option value="MASCULINO" selected>MASCULINO</option>
                    <option value="FEMENINO" ">FEMENINO</option>
                </select>
            </div><br>
            <div class=" input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">NUMERO DE TELEFONO</span>
                        </div>
                        <input name="telefono" value="{{old('telefono')}}" type="number" tabindex="7" aria-label="First name" class="form-control focusNext" placeholder="#######">
                        <p class="text-danger"> {{$errors->first("telefono")}}</p>
            </div><br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">CARGO</span>
                </div>
                <input name="cargo" value="{{old('cargo')}}" type="text" tabindex="8" class="form-control focusNext" aria-label="First name" class="form-control" placeholder="">
                <p class="text-danger">{{$errors->first("cargo")}}</p>
            </div><br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">ESTADO</span>
                </div>
                <input name="estado" value="{{old('estado')}}" type="text" tabindex="9" class="form-control focusNext" aria-label="First name" class="form-control" placeholder="">
                <p class="text-danger">{{$errors->first("estado")}}</p>
            </div><br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">FECHA DE CONTRATACION</span>
                </div><br>
                <input name="fechac" value="{{old('fechac')}}" type="date" tabindex="10" class="form-control focusNext" aria-label="First name" class="form-control" placeholder="#######">
                <p class="text-danger"> {{$errors->first("fechac")}}</p>
            </div><br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">FECHA DE BAJA</span>
                </div><br>
                <input name="fechab" value="{{old('fechab')}}" type="date" tabindex="11" class="form-control focusNext" aria-label="First name" class="form-control" placeholder="#######">
                <p class="text-danger"> {{$errors->first("fechab")}}</p>
            </div><br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">SUELDO</span>
                </div>
                <input name="SUELDO" value="{{old('SUELDO')}}" type="number" tabindex="12" aria-label="First name" class="form-control focusNext" placeholder="#######">
                <p class="text-danger"> {{$errors->first("SUELDO")}}</p>
            </div><br>
            <div class="form-group">
                <button id="parte1" type="submit" tabindex="13" class="btn btn-outline-success">REGISTRAR!</button> <br><br>
            </div>
        </div>
    </form>
</div>
@endsection