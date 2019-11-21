@extends('layouts/admin')
@section('content')

<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Datos de Usuario</div>
                <div class="panel-body">
                    {!!Form::open(['route'=>'usuario.store', 'mehtod'=>'POST'])!!}
                        @csrf
                        <table class="table table-hover">
                            @include('usuario.forms.usr')
                            <tr>
                                <td></td>
                                <td><button class="btn btn-primary">Registrar</button></td>
                            </tr>
                        </table>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>

                    
@endsection