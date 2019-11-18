<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Prducto</title>
    <style type="text/css">
        /*<![CDATA[*/
        input {
            margin-inline-start: 10px;            
        }

        label {
            display: inline-block;
            width: 180px;
            margin-right: 20px;
            text-align: end;
        }

        input[type="text"] {
            margin-bottom: 5px;
        }

        /*]]>*/
    </style>
</head>

<body>

    {!!Form::open(array(
    'url'=>'postNewProducto',
    'method'=>'POST',
    'autocomplete'=>'off'))!!}

    {!!Form::label('nombre', 'Nombre: ') !!}
    {!!Form::text('nombre',null)!!}
    <br>
    {!!Form::label('tipo', 'Tipo de producto: ') !!}
    {!!Form::text('tipo',null)!!}
    <br>
    {!!Form::label('proveedor', 'Proveedor del producto: ') !!}
    {!!Form::text('proveedor',null)!!}
    <br>
    {!!Form::label('precio Unitario', 'Precio Unitario') !!}
    {!!Form::text('precio_unitaria',null)!!}
    <br>
    {!!Form::label('precio de venta') !!}
    {!!Form::text('precio_venta',null)!!}
    <br>

    {!!Form::submit(
    'insertarProducto',
    ['name'=>'insertarProducto',
    'id'=>'insertar-producto',
    'content'=>'<span>Insertar</span>'])!!}

    {!!Form::close()!!}


</body>

</html> 