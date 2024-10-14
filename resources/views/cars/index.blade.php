<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Concesionario el Rincón</title>
    <link rel="stylesheet" href="http://localhost:8000/css/index.css">
</head>
<body>
    <h1>Concesionario El Rincón</h1>
    <h2>Lista de Coches</h2>

    <table>
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Potencia</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $c)
                <tr>
                    <td>{{ $c->brand }}</td>
                    <td>{{ $c->model }}</td>
                    <td>{{ $c->hp }} CV</td>
                    <td>{{ $c->price }} €</td>
                    <td>
                        <a href="{{ route('cars.edit', $c->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('cars.destroy', $c->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('cars.create') }}" class="btn btn-primary">Añadir un coche</a>
    <a href="{{ route('welcome.index') }}" class="btn btn-primary">Página Principal</a>
</body>
</html>
