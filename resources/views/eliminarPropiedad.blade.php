<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>Está seguro de eliminar este archivo?</h1>
    <div>
        <table>
            <thead>
                <tr aria-colspan="4">Eliminar</tr>
                <tr>
                    <td>Piso</td>
                    <td>Area</td>
                    <td>Color</td>
                    <td>idDuenio</td>
                </tr>
            </thead>
            <body>
                <tr>
                    <td>{{$propiedadEliminar->piso}}</td>
                    <td>{{$propiedadEliminar->area}}</td>
                    <td>{{$propiedadEliminar->color}}</td>
                    <td>{{$propiedadEliminar->idDuenio}}</td>
                </tr>
            </body>
        </table>
        <br>
        <br>
        <a href="{{route('apartamento.destroy2', $propiedadEliminar->idDuenio)}}">
            <button type="button" class="btn btn-danger">Eliminar</button>
        </a>
        <a href="{{route('apartamento.index')}}">
            <button type="button" class="btn btn-warning">Cancelar</button>
        </a>
    </div>
</body>
</html>