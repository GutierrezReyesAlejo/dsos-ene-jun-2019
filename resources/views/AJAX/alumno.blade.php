<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<script src="js/jquery.min.js"></script>
<script src="js/cargar_materias.js"></script>


<body>

{!!Form::open(array('url'=>'insertar','method'=>'POST'
  ,'autocomplete'=>'off'))!!}

    {!!Form::label('Nombre del alumno: ') !!}
    <br>
    {!!form::text('nombre_alumno',null)!!}
    <br>
    {!!Form::label('numero de control: ') !!}
    <br>
    {!!form::text('numero_control',null)!!}



<table>
        <tr>
        <td>
        {{ Form::select('idsemestre',$semestre,null,
        ['id' =>'select-semestre','placeholder' => 'SELECCIONE'])
        }}
        </td>
        </tr>

        <tr>
        <td>
        
        <select name="idmateria" id="select-semestre2">
        <option value="">SELECCIONE</option>
        </select>
        </td>
        </tr>
</table>

{!!form::submit('Registrar',['name'=>'grabar','id'=>'grabar'
  ,'content'=>'<span>Registrar</span>'])!!}

    {!!Form::close()!!}
    
</body>
</html>