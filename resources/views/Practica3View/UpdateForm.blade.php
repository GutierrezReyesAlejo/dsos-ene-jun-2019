<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Editando...</title>
</head>
{!!Form::open(array('url'=>'putTienda/'.$tienda->id,'method'=>'put','autocomplete'=> 'off')) !!}
    
    <fieldset>
        {!!Form::label('[id]: ') !!}
        <br>
        {!!form::text('id',$tienda->id)!!} 
        <br>
        <legend>Empresa</legend>
    
        {!!Form::label('[Razon social]: ') !!}    
        {!!form::text('razon_social',$tienda->razon_social)!!}
        <br>

        {!!Form::label('[RFC]: ') !!}    
        {!!form::text('rfc',$tienda->rfc)!!}
        <br>
        
        <h3>Datos del dueño</h3>

        {!!Form::label('[Nombre del dueño]: ') !!}
        {!!form::text('nombre_dueno',$tienda->nombre_dueno)!!}
        <br>

        {!!Form::label('[Direccion del dueño]: ') !!}
        {!!form::text('direccion_dueno',$tienda->direccion_dueno)!!} 
        <br>

        {!!Form::label('[Tipo de empresa]: ') !!}
        {!!form::text('tipo_empresa',$tienda->tipo_empresa)!!} 
        <br>

        {!!Form::label('[Telefono]: ') !!}
        {!!form::text('telefono',$tienda->telefono)!!} 
        <br>

        {!!Form::label('[Fecha de registro]: ') !!}
        {!!form::date('fecha_ingreso',$tienda->fecha_ingreso)!!} 
        <br>    

        {!!Form::submit('InsertarTienda',['name' => 'grabar','id'=>'grabar','content'=>'<span>Save</span>']) !!}
    </fieldset>

{!!Form::close() !!}
<body>

</body>
</html>