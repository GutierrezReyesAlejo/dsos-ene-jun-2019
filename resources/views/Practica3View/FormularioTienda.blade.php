<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>

<meta charset="utf-8">
<title></title>

</head>

<body>

{!!Form::open(array('url'=>'InsertarTienda','method'=>'POST','autocomplete'=> 'off')) !!}
    
    {{--
    {!!Form::label('[id]: ') !!}
    <br>
    {!!form::text('id',null)!!} 
    <br>
    --}}
    <fieldset>

        <legend>Datos de la empresa</legend>
        {!!Form::label('[Razon social]: ') !!}    
        {!!form::text('razon_social',null)!!}
        <br>

        {!!Form::label('[RFC]: ') !!}    
        {!!form::text('rfc',null)!!}
        <br>

        <legend>Datos del dueño</legend>
        {!!Form::label('[Nombre del dueño]: ') !!}
        {!!form::text('nombre_dueno',null)!!}
        <br>

        {!!Form::label('[Direccion del dueño]: ') !!}
        {!!form::text('direccion_dueno',null)!!} 
        <br>

        {!!Form::label('[Tipo de empresa]: ') !!}
        {!!form::text('tipo_empresa',null)!!} 
        <br>

        {!!Form::label('[Telefono]: ') !!}
        {!!form::text('telefono',null)!!} 
        <br>

        {!!Form::label('[Fecha de registro]: ') !!}
        {!!form::date('fecha_ingreso',null)!!} 
        <br>    

        {!!Form::submit('InsertarTienda',['name' => 'grabar','id'=>'grabar','content'=>'<span>Registrar</span>']) !!}
    </fieldset>

{!!Form::close() !!}
</body>
</html>