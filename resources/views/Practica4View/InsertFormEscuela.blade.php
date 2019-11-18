<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Insertar</title>
</head>
<body>
    {!!Form::open(array('url'=>'postNewEscuela','method'=>'POST'
        ,'autocomplete'=>'off'))!!}}
        {{!!Form::label('rfc')!!}}
        {{!!Form::text('rfc', null) !!}}
        <br>
        {{!!Form::label('curp')!!}}
        {{!!Form::text('curp', null) !!}}
        <br>
        {{!!Form::label('numero_control')!!}}
        {{!!Form::text('numero_control', null) !!}}
        <br>
        {{!!Form::label('cal1')!!}}
        {{!!Form::text('cal1', null) !!}}
        <br>
        {{!!form::label('cal2')!!}}
        {{!!form::text('cal2', null) !!}}
        <br>
        {{!!form::label('cal3')!!}}
        {{!!form::text('cal3', null) !!}}
        <br>
        {{!!form::label('fecha')!!}}
        {{!!form::date('fecha', null) !!}}
    {!!form::submit('Registrar',['name'=>'grabar','id'=>'grabar'
        ,'content'=>'<span>Registrar</span>'])!!}
</body>
</html>