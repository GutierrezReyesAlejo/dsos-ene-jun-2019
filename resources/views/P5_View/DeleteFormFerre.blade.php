<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    {!!Form::open(array('url'=>'putDeletFerre/'.$ferre->id,'method'=>'PUT',
    'autocomplete'=> 'off')) !!}
    <fieldset>
        <legend>Datos Generales</legend>
        {{!!Form::label('id')!!}}
        {{!!Form::text('id', $ferre->id) !!}}
        <br>
        {{!!Form::label('razon_social')!!}}
        {{!!Form::text( 'razon_social', $ferre->razon_social) !!}}
        <br>
        {{!!Form::label('giro')!!}}
        {{!!Form::text( 'giro', $ferre->giro) !!}}
        <br>        
        {{!!Form::label('domicilio_fiscal')!!}}
        {{!!Form::text( 'domicilio_fiscal', $ferre->domicilio_fiscal) !!}}
        <br>
        {{!!Form::label('rfc')!!}}
        {{!!Form::text('rfc', $ferre->rfc) !!}}
        <br>
        {{!!Form::label('estado')!!}}
        {{!!Form::text('estado', $ferre->estado) !!}}
        <br>        
        {{!!form::label('Año Ingreso')!!}}
        {{!!form::date('anio_ingreso', $ferre->anio_ingreso) !!}}
        
        {!!Form::submit('eliminar',
        ['name' => 'eliminar','id'=>'grabar','content'=>'<span>Eliminar</span>']) !!},

        {!!Form::submit('borrarsuave',
        ['name' => 'eliminar','id'=>'grabar2','content'=>'<span>Borrar suave</span>']) !!},
        
    </fieldset>
    {!!Form::close() !!}
    


</body>
</html>