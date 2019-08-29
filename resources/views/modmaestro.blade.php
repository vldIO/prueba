@extends('template')

@section('cuerpo')

@csrf
<div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form action="{{route('maestros.update', $maestro->id)}}" class="form-horizontal" method="post">
                {!! csrf_field() !!}
                <fieldset>
                    <legend>Editar maestro</legend>
                    <div class="form-group">
                        <label for="nombre" class="col-lg-label">Nombre de maestro</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $maestro->nombre }}">
                        </div>
                    </div>
                     
                    <div class="form-group">
                        <label for="contenido" class="col-lg-label">Materia del maestro</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="materia" id="materia" value="{{ $maestro->materia }}">
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label for="contenido" class="col-lg-label">Edad del maestro</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="edad" id="edad" value="{{ $maestro->edad }}">
                        </div>
                    </div>
 
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancelar</button></a>
                            <button type="submit" class="ntm btn-primary">Actualizar</button>
                        </div>
                    </div>
                    
                </fieldset>
            </form>
        </div>
    </div>
@endsection