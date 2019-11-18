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

    <table border = 1>
        <tr>
            <td>RAZON SOCIAL</td>
            <td>GIRO</td>
            <td>DOMICILIO</td>
            <td>RFC</td>
            <td>ESTADO</td>
            <td>AÑO DE INGRESO</td>
        </tr>

        @foreach ($ferres as $c)
        <tr>
            <td>{{$c->razon_social}}</td>
            <td>{{$c->giro}}</td>
            <td>{{$c->domicilio_fiscal}}</td>
            <td>{{$c->rfc}}</td>
            <td>{{$c->estado}}</td>
            <td>{{$c->anio_ingreso}}</td>
            <td><a href="editFerre/{{ $c->id }}"> [Editar]</td>
            <td><a href="deletFerre/{{ $c->id }}"> [Borrar]</td>            
        </tr>
        @endforeach

    </table>
    

</body>
</html>