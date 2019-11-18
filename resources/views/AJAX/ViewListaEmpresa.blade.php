<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de datos</title>
</head>

<body>

    @foreach ($empresas as $empresa)
        {!!Form::label('id') !!}
        {!!form::text('id',$empresa->id)!!}
        <br>
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
    @endforeach




</body>

</html>