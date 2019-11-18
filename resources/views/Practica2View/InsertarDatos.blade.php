<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>

<meta charset="utf-8">
<title></title>

</head>

<body>

{!!Form::open(array('url'=>'insertar','method'=>'POST','autocomplete'=> 'off')) !!}
    
    {!!Form::label('ID: ') !!}
    <br>
    {!!form::text('id',null)!!} 
    <!--$variable esta en el controlador    -->
    <br>
    {!!Form::label('Nombre: ') !!}
    <br>
    {!!form::text('nombre',null)!!} 
    <!--$variable esta en el controlador    -->
    <br>
    {!!Form::label('Apellido Paterno: ') !!}
    <br>
    {!!form::text('apellido_paterno',null) !!}
    <br>
    {!!Form::label('Apellido Materno: ') !!}
    <br>
    {!!form::text('apellido_materno',null) !!}
    <br>
    {!!Form::label('Edad: ') !!}
    <br>
    {!!form::text('edad',null) !!}
    <br>
    {!!Form::label('Direccion: ') !!}
    <br>
    {!!form::text('direccion',null) !!}
    <br>
    {!!Form::label('Telefono: ') !!}
    <br>
    {!!form::text('telefono',null) !!}

    {!!Form::submit('Registrar',['name' => 'grabar','id'=>'grabar','content'=>'<span>Registrar</span>']) !!}

    {!!Form::close() !!}
</body>
</html>