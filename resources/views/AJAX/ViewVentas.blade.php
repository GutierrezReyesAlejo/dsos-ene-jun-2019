<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<script src="js/jquery.min.js"></script>
<script src="js/cargarPrecios.js"></script>

<body>

    {!!Form::label ('nombre') !!}
    {!!form::select(
      'nombre',
      $nombres, 
      null,
      ['id' =>'select-nombre','placeholder' => 'SELECCIONE'])!!}

    {{--<input type="number" name="numeros" id="input-cantidad" placeholder="Cantidad">--}}

    {{--
    <br><select name="idproducto" id="select-precio">
        <option value="">SELECCIONE</option>
    </select><br>
    --}}

    {!!Form::select(
     'precio',
     array('' => 'Seleccione' ), 
     null,
     ['id'=>'select-precio']);!!}
<br>
{!!Form::label ('cantidad') !!}
{!!form::text('cantidad', null)!!}};

<br>
{!!Form::label ('total') !!}
{!!form::text('total', null)!!};
  
<br>

{!!form::submit('Calcular Total',
    ['name'=>'total',
    'id'=>'btn-total',
    'content'=>'<span>Calcular</span>'])!!}



</body>

</html> 