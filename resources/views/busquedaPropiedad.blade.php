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
                Resultado de Busqueda de {{$propiedadBuscada->id}}
            </tr>
            <tr>
                <td>Piso</td>
                <td>Area</td>
                <td>Color</td>
                <td>ID Dueño</td>
                <td>Estado</td>
            </tr>
        </thead>
        <body>
            <tr>
                <td>{{$propiedadBuscada->piso}}</td>
                <td>{{$propiedadBuscada->area}}</td>
                <td>{{$propiedadBuscada->color}}</td>
                <td>{{$propiedadBuscada->idDuenio}}</td>
                <td>{{$propiedadBuscada->estado}}</td>
            </tr>
        </body>
    </table>
    
</body>
</html>