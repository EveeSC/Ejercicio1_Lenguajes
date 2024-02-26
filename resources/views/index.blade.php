<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/css/app.css">
</head>
<body>
    <div class="contenedor-principal">
        <div><h1>Pagina Principal</h1></div>
    <br>
    <br>
    <div>
        <a href="{{route('apartamento.ircalcular')}}">
            <button type="button" class="btn btn-primary btn-lg">Calcular Precio de Apartamento</button>
        </a>
    </div>
    <br>
    <br>
    <div>
        <a href="{{route('apartamento.mostrarFormDuenios')}}">
            <button type="button" class="btn btn-primary btn-sm">Agregar a Tabla Dueños</button>
        </a>
        <table style="margin: 1px; border:1px solid;">
            <thead>
                <th>ID Dueño</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th> </th>
                <th> </th>
            </thead>
            <body >
                @foreach ($duenios as $duenio)
                    <tr>
                        <td>
                            {{$duenio->idDuenio}}
                        </td>
                        <td>
                            {{$duenio->nombre}}
                        </td>
                        <td>
                            {{$duenio->apellido}}
                        </td>
                        <td>
                            {{$duenio->correo}}
                        </td>
                        <td>
                            <a href="{{route('apartamento.editar', $duenio->idDuenio)}}">Editar</a>
                        </td>
                        <td>
                            <a href="">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </body>
        </table>
    </div>
    <br>
    <br>
    <div>
        <a href="{{route('apartamento.mostrarFormPropiedades')}}">
            <button type="button" class="btn btn-primary btn-sm">Agregar a Tabla Propiedades</button>
        </a>
        <table style="margin: 1px; border:1px solid;">
            <thead>
                <th>ID</th>
                <th>Piso</th>
                <th>Area</th>
                <th>Color</th>
                <th>ID Dueño</th>
                <th>Estado</th>
            </thead>
            <body >
                @foreach ($propiedades as $propiedad)
                    <tr>
                        <td>
                            {{$propiedad->id}}
                        </td>
                        <td>
                            {{$propiedad->piso}}
                        </td>
                        <td>
                            {{$propiedad->area}}
                        </td>
                        <td>
                            {{$propiedad->color}}
                        </td>
                        <td>
                            {{$propiedad->idDuenio}}
                        </td>
                        <td>
                            {{$propiedad->estado}}
                        </td>
                        <td>
                            <a href="{{route('apartamento.editar2', $propiedad->id)}}">Editar</a>
                        </td>
                        <td>
                            <a href="">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </body>
        </table>
    </div>
    </div>
    <br>
    <br>
    <div>
        <form action="{{ route('apartamento.buscarDuenio') }}" method="GET">
            <label>Ingrese ID Dueño</label>
            <input type="text" name="idDuenio">
            <button type="submit" class="btn btn-info">Buscar</button>
        </form>
        
    </div>
    <br>
    <br>
    <div>
        <form action="{{route('apartamento.buscarPropiedad')}}" method="GET">
            <label>Ingrese codigo de propiedad</label>
            <input type="text" name="idPropiedad">
            <button type="submit" class="btn btn-info">Buscar</button>
        </form>
    </div>
</body>
</html>