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
    {!!Form::open(array('url'=>'putEscuela/'.$escuela->id,'method'=>'PUT','autocomplete'=> 'off')) !!}
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
        
        {!!Form::submit('actualizarEscuela',
        ['name' => 'grabar','id'=>'grabar','content'=>'<span>Registrar</span>']) !!},

        
    </fieldset>
    {!!Form::close() !!}
    


</body>
</html>