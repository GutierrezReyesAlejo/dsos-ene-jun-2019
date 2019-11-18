<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {!!Form::open(array('url'=>'postNewFerre','method'=>'post',
    'autocomplete'=> 'off')) !!}
    <fieldset>
        <legend>Datos Generales</legend>
        {{!!Form::label('razon_social')!!}}
        {{!!Form::text( 'razon_social', null) !!}}
        <br>
        {{!!Form::label('giro')!!}}
        {{!!Form::text( 'giro', null) !!}}
        <br>        
        {{!!Form::label('domicilio_fiscal')!!}}
        {{!!Form::text( 'domicilio_fiscal', null) !!}}
        <br>
        {{!!Form::label('rfc')!!}}
        {{!!Form::text('rfc', null) !!}}
        <br>
        {{!!Form::label('estado')!!}}
        {{!!Form::text('estado', null) !!}}
        <br>        
        {{!!form::label('Año Ingreso')!!}}
        {{!!form::date('anio_ingreso', null) !!}}
        
        {!!Form::submit('Enviar',
        ['name' => 'nuevo','id'=>'grabar','content'=>'<span>Eliminar</span>']) !!},


    </fieldset>
    {!!Form::close() !!}
    


</body>
</html>