@extends('template')
@section('cuerpo')
    <div class="contact-content">
        <div class="main-contact">
            <h3 class="head">CONTACT</h3>
            <p>WE'RE ALWAYS HERE TO HELP YOU</p>
            <div class="contact-form">
                {!!Form::open(['route'=>'mail.store','method'=>'POST'])!!}
                <div class="col-md-6 contact-left">
                    {!!Form::text('name',NULL,['placeholder' => 'Nombre'])!!}
                    {!!Form::text('email',NULL,['placeholder' => 'Email'])!!}
                </div>
                <div class="col-md-6 contact-right">
                    {!!Form::textarea('mensaje',NULL,['placeholder' => 'Mensaje'])!!}
                </div>
                {!!Form::submit('SEND')!!}
                {!!Form::close()!!}
            </div>
        </div>
    </div>
@endsection