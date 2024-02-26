<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar Propiedad</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div>
        <form action="{{route('apartamento.actualizarPropiedad', $propiedadEncontrada->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="">Piso </label>
                <input type="text" name="piso" value="{{$propiedadEncontrada->piso}}">
            </div>
            <br>
            <div>
                <label for="">Area</label>
                <input type="text" name="area" value="{{$propiedadEncontrada->area}}">
            </div>
            <br>
            <div>
                <label for="">Color</label>
                <input type="text" name="color" value="{{$propiedadEncontrada->color}}">
            </div>
            <br>
            <div>
                <label for="">ID Dueño</label>
                <input type="text" name="idDuenio" value="{{$propiedadEncontrada->idDuenio}}">
            </div>
            <br>
            <div>
                <label for="">Estado</label>
                <input type="text" name="estado" value="{{$propiedadEncontrada->estado}}">
            </div>
            <div>
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
</body>
</html>