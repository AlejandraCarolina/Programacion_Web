<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programación</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #b292e6, #DBC9F5); /* Fondo con gradiente */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .container {
            text-align: center;
        }
        
        .btn {
            margin: 10px;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            color: white;
            background-color: #6c757d;
            border: none;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        
        .btn:hover {
            background-color: #343a40;
        }
        
        .btn-container {
            display: flex;
            justify-content: center;
        }
        
        @media screen and (max-width: 576px) {
            .btn-container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="btn-container">
            <a href="listado_vehiculo.php" class="btn btn-primary">Vehículos</a>
            <a href="listado_servicio.php" class="btn btn-primary">Servicios</a>
            <a href="listado_taller.php" class="btn btn-primary">Taller</a>
        </div>
    </div>
</body>
</html>
