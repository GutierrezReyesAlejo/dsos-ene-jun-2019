<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">    
    <title>Datos de la base de datos Tienda</title>
    <style>
        label{
            align-content: flex-end;
        }
    </style>
</head>
<body>


    {!!Form::label('[id]: ') !!}
    <fieldset disabled="disabled">
        <br>
        {!!form::text('id',$tienda->id)!!}         

        {!!Form::label('[razon social]: ') !!}
        <br>
        {!!form::text('razon_social',$tienda->razon_social)!!}
        <br>

        {!!Form::label('[RFC]: ') !!}
        <br>
        {!!form::text('rfc',$tienda->rfc)!!}
        <br>

        {!!Form::label('[Nombre del dueño]: ') !!}
        <br>
        {!!form::text('nombre_dueno',$tienda->nombre_dueno)!!}
        <br>

        {!!Form::label('[Direccion del dueño]: ') !!}
        <br>
        {!!form::text('direccion_dueno',$tienda->direccion_dueno)!!} 
        <br>

        {!!Form::label('[Tipo de empresa]: ') !!}
        <br>
        {!!form::text('tipo_empresa',$tienda->tipo_empresa)!!} 
        <br>

        {!!Form::label('[Telefono]: ') !!}
        <br>
        {!!form::text('telefono',$tienda->telefono)!!} 
        <br>

        {!!Form::label('[Fecha de registro]: ') !!}
        <br>
        {!!form::text('fecha_ingreso',$tienda->fecha_ingreso)!!} 
        <br>    
    </fieldset>
        {!!Form::submit('InsertarTienda',['name' => 'grabar','id'=>'grabar','content'=>'<span>Registrar</span>']) !!}
    

    {!!Form::close() !!}

    
</body>
</html>