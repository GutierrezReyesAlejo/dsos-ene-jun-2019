<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">    
    <title>Datos de la base de datos Tienda</title>

</head>
<body>
    
    @foreach ($tiendas as $tienda)
        

        {!!Form::label('[id]: ') !!}
        <fieldset disabled="disabled">
        <br>
        {!!form::text('id',$tienda->id)!!} 
        <br>

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
    @endforeach
    
    
   

    <i><pre>
                                                ________
                                            /--/        \
                                        |   \______   |
                                        \ - ---^^- / /
                                                    ||/
                                                    |||
                                                .:'':.
                                            /^/^^\/     \
                                        0___O_\O_/       |
                                        |               /              O
                                        |       .._    /              //
                                        \ ____/   |  |              //
                                                    |  |             //
                                            ^^^^^  |  |            ||
                                        ^^^^^^^^^^|  \         __ /|
                                        ^^^^^^   ^^|   \       /     \
                                        ^^^^^    __|    \____/        |
                                        ^^^    \    /               |
                                                    \-/          (_     \
                                                    |  |\__________\   |
                                                    /|  |          \ \  |
                                            _______| |  |     ______\ \  \
                                        /    ____/   |    /    ____/   \
                                        \(_ /         \   \(_ /        |
                                            \_(____.../       \_(_____/  
    </pre></i>
</body>
</html>