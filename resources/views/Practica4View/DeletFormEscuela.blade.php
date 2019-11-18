<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{ background-color: grey; }
        label{ align-content: flex-end; }
    </style>
</head>
<body>
    {!!Form::open(array('url'=>'putDeletEscuela/'.$escuela->id,'method'=>'PUT',
    'autocomplete'=> 'off')) !!}
    <fieldset>
        <legend>Datos Generales</legend>
        {{!!Form::label('id')!!}}
        {{!!Form::text('id', $escuela->id) !!}}
        <br>
        {{!!Form::label('rfc')!!}}
        {{!!Form::text('rfc', $escuela->rfc) !!}}
        <br>
        {{!!Form::label('curp')!!}}
        {{!!Form::text('curp', $escuela->curp) !!}}
        <br>
        {{!!Form::label('numero_control')!!}}
        {{!!Form::text('numero_control', $escuela->num_ctrl) !!}}
        <br>
        {{!!Form::label('cal1')!!}}
        {{!!Form::text('cal1', $escuela->cal1) !!}}
        <br>
        {{!!form::label('cal2')!!}}
        {{!!form::text('cal2', $escuela->cal2) !!}}
        <br>
        {{!!form::label('cal3')!!}}
        {{!!form::text('cal3', $escuela->cal3) !!}}
        <br>
        {{!!form::label('fecha')!!}}
        {{!!form::date('fecha', $escuela->fecha) !!}}
        
        {!!Form::submit('eliminar',
        ['name' => 'eliminar','id'=>'grabar','content'=>'<span>Eliminar</span>']) !!},

        {!!Form::submit('borrarsuave',
        ['name' => 'eliminar','id'=>'grabar2','content'=>'<span>Borrar suave</span>']) !!},

        
    </fieldset>
    {!!Form::close() !!}
    


</body>
</html>