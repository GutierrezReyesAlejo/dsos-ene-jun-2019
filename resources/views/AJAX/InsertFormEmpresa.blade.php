<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Prducto</title>
</head>

<body>

    {!!Form::open(array('url'=>'postNewEmpresa','method'=>'POST'
    ,'autocomplete'=>'off'))!!}

    {!!Form::label('rfc') !!}
    {!!form::text('rfc',null)!!}
    <br>
    {!!Form::label('razon social') !!}
    {!!form::text('razon_social',null)!!}
    <br>
    {!!Form::label('direccion fiscal') !!}
    {!!form::text('direccion_fiscal',null)!!}
    <br>
    {!!Form::label('apoderado fiscal') !!}
    {!!form::text('apoderado_fiscal',null)!!}
    <br>
    {!!Form::label('telefono') !!}
    {!!form::text('telefono',null)!!}
    <br>

    {!!form::submit('insertarProducto',['name'=>'insertarProducto','id'=>'insertar-producto'
    ,'content'=>'<span>Insertar</span>'])!!}

    {!!Form::close()!!}


</body>

</html> 