    <tr>
        <td style="text-align:right"><label for="">Nombre:</label></td>
        <td>
            {!!Form::text('name',null,['placeholder'=>'ingresa el nombre del usuario','size'=>'40'])!!}
        </td>
    </tr>
    <tr>
        <td style="text-align:right"><label for="">Correo:</label></td>
        <td>
            {!!Form::text('email',null,['placeholder'=>'ingresa el correo del usuario','size'=>'40'])!!}
        </td>                                
    </tr>
    <tr>
        <td style="text-align:right"><label for="">Contraseña:</label></td>
        <td>
            {!!Form::password('password',null,['placeholder'=>'ingresa la contraseña','size'=>'40'])!!}
        </td> 
    </tr>