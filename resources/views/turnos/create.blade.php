@extends('Layout')
@section('title','REGISTRAR MEDICO')
@section('body')
<link rel="stylesheet" href="/css/formularioCTC.css">
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
    <form method="POST" rol="form" action="{{route('turnos.store')}}"><br>
        @csrf
        <div class="form-group">
            <div class="alert alert-secondary" role="alert">
                INTRODUZCA SUS DATOS :
            </div>
            <div class="input-group">

                <span class="input-group-text">NOMBRE</span>

                <input name="nombre" type="text" tabindex="1" aria-label="First name" class="form-control focusNext" placeholder="######" value="{{old('ci')}}">
                <p class="text-danger"> {{$errors->first("ci")}}</p>
            </div> <br>
            <div class="input-group">

                <span class="input-group-text">HORA INICIO</span>

                <input name="horaInicio" type="time" tabindex="2" aria-label="First name" class="form-control focusNext" placeholder="INTRODUZCA EL NOMBRE" value="{{old('nombre')}}">
                <p class="text-danger"> {{$errors->first("nombre")}}</p>

                <span class="input-group-text">HORA FIN</span>

                <input name="horaFin" type="time" tabindex="3" aria-label="First name" class="form-control focusNext" placeholder="INTRODUZCA EL APELLIDO" value="{{old('apellido')}}">
                <p class="text-danger"> {{$errors->first("apellido")}}</p>
            </div> <br>
           
            <div class="form-group">
                <button id="parte1" type="submit" tabindex="13" class="btn btn-outline-success">REGISTRAR!</button> <br><br>
            </div>
        </div><br>
</div>
</form>
</div>
@endsection