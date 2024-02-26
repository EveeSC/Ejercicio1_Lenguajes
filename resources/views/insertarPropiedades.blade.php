<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar Propiedades</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div><h2>Agregar Elemento</h2></div>
    <div>
        <form action="{{route('apartamento.insertarPropiedad')}}" method="POST">
            @csrf
            <div>
                <label for="">Piso </label>
                <input type="text" name="piso">
            </div>
            <br>
            <div>
                <label for="">Area </label>
                <input type="text" name="area">
            </div>
            <br>
            <div>
                <label for="">Color </label>
                <input type="text" name="color">
            </div>
            <br>
            <div>
                <label for="">ID Duenio</label>
                <input type="text" name="idDuenio">
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
</body>
</html>