<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver datos</title>
    <style>
        body{ background-color: grey; }
        label{ align-content: flex-end; }
    </style>
</head>
<body>

    @foreach ($escuelas as $escuela)
        <div class="cuadro" style="height: 3px; background-color: black;"></div>
        {{!!Form::label('id')!!}}
        {{!!Form::text('id', $escuela->id) !!}}
        <br>
        {{!!Form::label('rfc')!!}}
        {{!!Form::text('rfc', $escuela->rfc) !!}}
        <br>
        {{!!Form::label('curp')!!}}
        {{!!Form::text('curp', $escuela->curp) !!}}
        <br>
        {{!!Form::label('numero_control')!!}}
        {{!!Form::text('numero_control', $escuela->num_ctrl) !!}}
        <br>
        {{!!Form::label('cal1')!!}}
        {{!!Form::text('cal1', $escuela->cal1) !!}}
        <br>
        {{!!form::label('cal2')!!}}
        {{!!form::text('cal2', $escuela->cal2) !!}}
        <br>
        {{!!form::label('cal3')!!}}
        {{!!form::text('cal3', $escuela->cal3) !!}}
        <br>
        {{!!form::label('fecha')!!}}
        {{!!form::date('fecha', $escuela->fecha) !!}}
    @endforeach
    
        
        

</body>
</html>