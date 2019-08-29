@extends('template')

@section('cuerpo')
<form action="{{route('maestros.store')}}" method="POST">
@csrf
<label for="">Nombre de maestro</label>
<input type="text" name="nombre" placeholder="Nombre del maestro">
<br>
<label for="">Materia de maestro</label>
<input type="text" name="materia" placeholder="Materia del maestro">
<br>
<label for="">Edad de maestro</label>
<input type="text" name="edad" placeholder="Edad del maestro">
<input type="submit" value="enviar">
</form>
@endsection