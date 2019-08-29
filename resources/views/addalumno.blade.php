@extends('template')

@section('cuerpo')

<form action="{{route('alumnos.store')}}" method="POST">
@csrf
<label for="">Nombre de alumno</label>
<input type="text" name="nombre" id="id" placeholder="Nombre del alumno">
<br>
<label for="">Curso del alumno</label>
<input type="text" name="curso" placeholder="Curso del alumno">
<br>
<label for="">Edad de alumno</label>
<input type="text" name="edad" placeholder="Edad de alumno">
<input type="submit" value="enviar">
</form>


@endsection