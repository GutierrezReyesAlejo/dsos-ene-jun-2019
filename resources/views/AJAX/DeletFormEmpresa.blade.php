<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deleter</title>
</head>
<script src="js/jquery.min.js"></script>
<body>

    {!!Form::open(array('url'=>'putDeleteEmpresa/'.$empresa->id,
    'method'=>'PUT',
    'autocomplete'=>'off'))!!}

    {!!Form::label('rfc') !!}
    {!!form::text('rfc',$empresa->rfc)!!}
    <br>
    {!!Form::label('razon social') !!}
    {!!form::text('razon_social',$empresa->razon_social)!!}
    <br>
    {!!Form::label('direccion fiscal') !!}
    {!!form::text('direccion_fiscal',$empresa->direccion_fiscal)!!}
    <br>
    {!!Form::label('apoderado fiscal') !!}
    {!!form::text('apoderado_fiscal',$empresa->apoderado_fiscal)!!}
    <br>
    {!!Form::label('telefono') !!}
    {!!form::text('telefono',$empresa->telefono)!!}
    <br>

    {!!form::submit('eliminar',
    ['name'=>'eliminar_empresa',
    'id'=>'btn-eliminar-empresa',
    'content'=>'<span>Eliminar</span>'])!!}

    {!!Form::close()!!}


</body>

</html> 