@extends('template')

@section('cuerpo')

<div>
  <div class="accordion" id="accordionExample">
    <div class="card">
      <div class="card-header" id="headingOne" >
        <h2 class="mb-0">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Listado de Alumnos
          </button>
        </h2>
      </div>
      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body" style="width: 100%">      
          <a href="{{ route('alumno.form') }}">
          <span class="oi oi-plus"></span> Añadir alumno </a>
          @if ($alumnos->isNotEmpty())
          
            <table class="table table-sm table-hover" style="text-align: center" id="alum">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Curso</th>
                  <th scope="col">Edad</th>
                  <th scope="col">Creado a las:</th>
                  <th scope="col">Actualizado a las:</th>
                  <th scope="col">Operaciones</th>
                </tr>
              </thead>
              <tbody>
              
                <tr v-for="(alumno, index) in alumnos">
                    <td>@{{alumno.id}}</td>
                    <td style="text-align: left">@{{alumno.nombre}}</td>
                    <td>@{{alumno.curso}}</td>
                    <td>@{{alumno.edad}}</td>
                    <td>@{{alumno.created_at}}</td>
                    <td>@{{alumno.updated_at}}</td>
                    <td></td>
                </tr>
                
              </tbody>
            </table>
            {!!$alumnos->render()!!}
          @else
              <div class="alert alert-info">
              <p><span class="oi oi-warning"></span> no hay alumnos registrados</p>
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

    <div class="card">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Listado de Maestros
          </button>
        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
          <a href="#">
          <span class="oi oi-plus"></span> Añadir Maestro </a>
          <table class="table table-sm table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Materia</th>
                <th scope="col">Edad</th>
                <th scope="col"></th>
              </tr>
            </thead>
          </table>
              <div class="alert alert-info">
              <p><span class="oi oi-warning"></span> no hay maestros registrados</p>
              </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection