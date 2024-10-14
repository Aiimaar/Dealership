<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concesionario El Rincón</title>
    <link rel="stylesheet" href="http://localhost:8000/css/welcome.css">
</head>
<body>
    <div class="hero">
        <img src="http://localhost:8000/img/dealer.jpg" alt="Imagen de Concesionario">
        <div class="overlay">
            <h1>Concesionario El Rincón</h1>
            <p>Bienvenido a nuestro concesionario, donde encontrarás los mejores coches.</p>
            <a href="{{ route('cars.index') }}" class="btn btn-primary">Ver lista de coches</a>
        </div>
    </div>

    <div class="contact-map-section">
        <div class="contact-info">
            <h2>Contacto</h2>
            <p><strong>Teléfono:</strong> +34 600 123 456</p>
            <p><strong>Dirección:</strong> Luis Gonzalez Perez, 11, Gran Canaria</p>
            <p><strong>Correo:</strong> contacto@elrincon.com</p>
        </div>
        <div class="map">
            <h2>Donde encontrarnos</h2>
            <img src="http://localhost:8000/img/ubi.png" alt="Mapa de Google">
        </div>
    </div>
</body>
</html>
