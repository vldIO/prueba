@extends('layouts.principal')
@section('content')
    <div class="header">
        <div class="top-header">
            <div class="logo">
                <a href="#"><img src="../public/images/bd8.png" alt=""></a>
                <p>movie theater</p>
            </div>
            <div class="clearfix">
            <a href="{!!URL::to('/usuario/create')!!}"><i class="fa fa-plus fa-fw"></i> Registrar nuevo usuario</a>
            </div>
        </div>

        <div class="header-info">
            <h1>big hero 6</h1>
            {!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
                <div class="form-group">
                    {!!Form::label('correo','Correo:')!!}
                    {!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'ingresa tu correo'])!!}
                </div>
                <div class="form-group">
                    {!!Form::label('contraseña','Contraseña:')!!}
                    {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'ingresa tu password'])!!}
                </div>
                {!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
            {!!Form::close()!!}
        </div>
    </div>