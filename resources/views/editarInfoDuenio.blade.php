<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
</head>
<body>
    <div><h2>Editar Elemento</h2></div>
    <div>
        <form action="{{route('apartamento.actualizarDuenio', $duenioEditado->idDuenio )}}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="">Nombre : </label>
                <input type="text" name="nombre" value="{{$duenioEditado->nombre}}">
            </div>
            <br>
            <div>
                <label for="">Apellido : </label>
                <input type="text" name="apellido" value="{{$duenioEditado->apellido}}">
            </div>
            <br>
            <div>
                <label for="">Correo : </label>
                <input type="text" name="correo" value="{{$duenioEditado->correo}}">
            </div>
            <br>
            {{-- <div>
                <label for="">Telefono :</label>
                <input type="text" name="telefono">
            </div> --}}
            <br>
            <div>
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
</body>
</html>