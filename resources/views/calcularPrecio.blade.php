<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Precio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div><h2>Calcular precio con parametros insertados aqui</h2></div>
    <br>
    <br>
    <form action="{{route('apartamento.calcularPrecio')}}" method="POST" >
        @csrf
        <div>
            <label>Ingrese el piso: </label>
            <input type="text" name="piso" >
        </div>
        <div>
            <label>Ingrese el area</label>
            <input type="text" name="area">
        </div>
        <button type="submit" class="btn btn-primary btn-sm" >Calcular</button>
    </form>
    {{-- <input>
    <br>
    piso: {{$piso}}
    <br>
    area:{{$area}}
    <br>
    total: {{$total}} --}}
    
</body>
</html>