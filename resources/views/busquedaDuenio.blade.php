<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>resultado busqueda</title>
</head>
<body>
    <table>
        <thead>
            <tr aria-colspan="3">
                Resultado de Busqueda de {{$duenioBuscado->idDuenio}}
            </tr>
            <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Correo</td>
            </tr>
        </thead>
        <body>
            <tr>
                <td>{{$duenioBuscado->nombre}}</td>
                <td>{{$duenioBuscado->apellido}}</td>
                <td>{{$duenioBuscado->correo}}</td>
            </tr>
        </body>
    </table>
    
</body>
</html>