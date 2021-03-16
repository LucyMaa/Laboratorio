@extends('Layout')

@section('title','Table')

@section('body')




<div class="container">
    <section>
        <form method="POST" rol="form" action="{{route('consultas.store')}}"><br>
            @csrf
            <div class="card-header">
                <h3 class="card-title">ENGTREGAR RESULTADOS</h3>
            </div>
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE ANALISIS</th>
                        <th scope="col">analisis</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($analisis as $analisiss)

                    <tr>
                        <td class="" tabindex="0">{{$analisis[0]->id}}</td>
                        <td class="" tabindex="0">{{$analisis[0]->nombre}}</td>
                        <td class="" tabindex="0">{{$analisis[0]->descripcion}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @foreach($analisis as $analisiss)
            <div class="input-group">
                <span class="input-group-text">RANGO MAX</span>
                <input name="max" type="TEXT" tabindex="1" aria-label="First name" class="form-control focusNext" placeholder="######" value="">
            </div> <br>
            <div class="input-group">
                <span class="input-group-text">RANGO MIN</span>
                <input name="min" type="TEXT" tabindex="1" aria-label="First name" class="form-control focusNext" placeholder="######" value="">
            </div> <br>
            <div class="input-group">
                <span class="input-group-text">id</span>
                <input name="id" type="TEXT" tabindex="1" aria-label="First name" class="form-control focusNext" placeholder="######" value="">
            </div> <br>
            @endforeach
            <hr />
            <div class="input-group">
                <span class="input-group-text">OBSERVACIONES</span>
                <input name="OBS" type="TEXT" tabindex="1" aria-label="First name" class="form-control focusNext" placeholder="######" value="">
            </div> <br>
            <div class="input-group">
                <span class="input-group-text">RESULTADO</span>
                <input name="resultado" type="TEXT" tabindex="1" aria-label="First name" class="form-control focusNext" placeholder="######" value="">
            </div> <br>
            <button id="parte1" type="submit" class="btn btn-outline-success">REGISTRAR!</button>
        </form>
    </section>
</div>
@endsection