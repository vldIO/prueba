@extends('template')
@section('cuerpo')

<div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form action="{{route('alumnos.update',$alumno->id)}}" class="form-horizontal" method="PUT">
                @csrf
            
                <fieldset>
                    <legend>Editar alumno</legend>
                    <div class="form-group">
                        <label for="nombre" class="col-lg-label">Nombre de alumno</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $alumno->nombre }}">
                        </div>
                    </div>
                     
                    <div class="form-group">
                        <label for="contenido" class="col-lg-label">Curso del alumno</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="curso" id="curso" value="{{ $alumno->curso }}">
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label for="contenido" class="col-lg-label">Edad de alumno</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="edad" id="edad" value="{{ $alumno->edad }}">
                        </div>
                    </div>
 
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit" class="ntm btn-primary">Actualizar</button>
                        </div>
                    </div>
                    
                </fieldset>
            </form>
        </div>
    </div>
@endsection