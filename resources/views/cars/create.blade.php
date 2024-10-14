@extends('layout')

<link rel="stylesheet" href="http://localhost:8000/css/create.css">

@section('content')
    <h2>Añadir un Coche</h2>
    <form method="POST" action="{{ route('cars.store') }}">
        @csrf
        <div class="form-group">
            <label for="brand">Marca</label>
            <input type="text" name="brand" class="form-control" id="brand" placeholder="Introduzca la marca del coche">
        </div>
        <div class="form-group">
            <label for="model">Modelo</label>
            <input type="text" name="model" class="form-control" id="model" placeholder="Introduzca el modelo del coche">
        </div>
        <div class="form-group">
            <label for="hp">Potencia</label>
            <input type="text" name="hp" class="form-control" id="hp" placeholder="Introduzca la potencia del coche">
        </div>
        <div class="form-group">
            <label for="price">Precio</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="Introduzca el precio del coche">
        </div>
        <button type="submit" class="btn btn-primary">Añadir</button>
    </form>

    <a href="{{ route('cars.index') }}" class="btn btn-primary">Vuelta a la lista</a>
@endsection
