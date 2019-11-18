<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">    
    <title>Page Title</title>

</head>
<body>
    {!!Form::label('ID: ')!!}
    <br>
    {!!Form::text('id', $variable->id)!!}
    <br>
    {!!Form::label('Nombre: ')!!}
    <br>
    {!!Form::text('nombre', $variable->nombre)!!}
</body>
</html>