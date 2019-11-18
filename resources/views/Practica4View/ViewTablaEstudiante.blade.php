<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Estudiantes</title>
</head>
<body>
    
    <table>
        <tr>
            <td>ID</td>
            <td>RFC</td>
            <td>CURP</td>
            <td>No. Control</td>
            <td>Calificacion 1</td>
            <td>Calificacion 2</td>
            <td>Calificacion 3</td>
            <td>Fecha</td>

        </tr>

        @foreach ($escuelas as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->rfc}}</td>
            <td>{{$c->curp}}</td>
            <td>{{$c->num_ctrl}}</td>
            <td>{{$c->cal1}}</td>
            <td>{{$c->cal2}}</td>
            <td>{{$c->cal3}}</td>
            <td>{{$c->fecha}}</td>
            <td><a href="editFerre/{{ $c->id }}"> [Editar]</td>
            <td><a href="deletFerre/{{ $c->id }}"> [Borrar]</td>            
        </tr>
        @endforeach

    </table>
    
    

</body>
</html>