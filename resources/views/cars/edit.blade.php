@extends('layout')

<link rel="stylesheet" href="http://localhost:8000/css/edit.css">

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <body>
        <div class="form-wrapper">
            <h1>Concesionario El Rincón</h1>
            <h2>Editar Coche</h2>
            <form method="POST" action="{{ route('cars.update', $car->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="brand">Marca</label>
                    <input type="text" name="brand" class="form-control" id="brand" value="{{ $car->brand }}" placeholder="Introduzca la marca del coche">
                </div>
                <div class="form-group">
                    <label for="model">Modelo</label>
                    <input type="text" name="model" class="form-control" id="model" value="{{ $car->model }}" placeholder="Introduzca el modelo del coche">
                </div>
                <div class="form-group">
                    <label for="hp">Potencia</label>
                    <input type="text" name="hp" class="form-control" id="hp" value="{{ $car->hp }}" placeholder="Introduzca la potencia del coche">
                </div>
                <div class="form-group">
                    <label for="price">Precio</label>
                    <input type="text" name="price" class="form-control" id="price" value="{{ $car->price }}" placeholder="Introduzca el precio del coche">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ route('cars.index') }}" class="btn btn-primary">Vuelta a la lista</a>
            </form>
        <div>
    </body>
    </html>
@endsection
