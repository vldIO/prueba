@extends('template')

@section('cuerpo')
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne" >
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Listado de Maestros
        </button>
      </h2>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body" style="width: 100%">      
        <a href="{{ route('maestro.form') }}">
        <span class="oi oi-plus"></span> Añadir Maestro </a>
        @if ($maestros->isNotEmpty())
        <table class="table table-sm table-hover" style="text-align: center">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Materia</th>
              <th scope="col">Edad</th>
              <th scope="col">Creado a las:</th>
              <th scope="col">Actualizado a las:</th>
              <th scope="col">Operaciones</th>
            </tr>
          </thead>
          <tbody>
          @foreach($maestros as $maestro)
            <tr>
                <td>{{$maestro->id}}</td>
                <td style="text-align: left">{{$maestro->nombre}}</td>
                <td>{{$maestro->materia}}</td>
                <td>{{$maestro->edad}}</td>
                <td>{{$maestro->created_at}}</td>
                <td>{{$maestro->updated_at}}</td>
                <td><a href="{!! action('MaestroController@edit', $maestro->id) !!}"><span class="oi oi-pencil"></span> </a>
                <a href="{!! action('MaestroController@destroy', $maestro->id) !!}" method="POST">
                <span class="oi oi-trash"></span></a> </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        @else
            <div class="alert alert-info">
            <p><span class="oi oi-warning"></span> no hay maestros registrados</p>
            </div>
        @endif
        @if (session('status'))
            <div class="alert alert-success">
            <span class="oi oi-circle-check"></span> {{ session('status') }}
            </div>
        @elseif (session('stat'))
            <div class="alert alert-danger">
            <span class="oi oi-circle-x"></span> {{ session('stat') }}
            </div>
        @endif
      </div>
    </div>
  </div>


@endsection