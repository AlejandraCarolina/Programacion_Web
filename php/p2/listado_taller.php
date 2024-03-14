<?php

    //Conexión de la base de datos
    include "db.php";

    //Consulta para obtener el listado de taller 
    $query = "SELECT T.id_taller, T.fecha_ingreso, V.marca, V.sub_marca, V.modelo, V.num_serie, S.nombre, S.costo FROM taller AS T 
    INNER JOIN servicios AS S ON T.id_servicio = S.id_servicios INNER JOIN vehiculo AS V ON T.id_vehiculo = V.id";
    $result = $conn->query($query);
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
        <title>Listado Taller</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">ALE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link active" href="listado_taller.php">Listado del taller<span class="sr-only">(current)</span></a>
            <a class="nav-link" href="listado_vehiculo.php">Listado de vehiculos</a>
            <a class="nav-link" href="listado_servicio.php">Listado de servicios</a>
            </div>
        </div>
    </nav>

    <br>
    <div class="container-lg md-5">
        <h2>Entrada a Taller</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>ID Taller</th>
                    <th>Fecha Ingreso</th>
                    <th>Vehículo</th>
                    <th>Servicio</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Recorrer tabla
                    while($row = $result->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>".$row['id_taller']."</td>";
                        echo "<td>".$row['fecha_ingreso']."</td>";
                        echo "<td>".$row['num_serie']." ".$row['marca']." ".$row['sub_marca']." ".$row['modelo']."</td>";
                        echo "<td>".$row['nombre']."</td>";
                        echo "<td>".$row['costo']."</td>"; 
                ?>
                    <td>
                        <a href="editar_taller.php?id_taller=<?= $row['id_taller'] ?>" class="btn btn-secondary">
                            Editar
                        </a>
                        <button onclick="mostrarSweet(<?= $row['id_taller'] ?>)" class="btn btn-danger">Eliminar</button>
                
                    </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <a href="alta_taller.php" class="btn btn-primary">Entrar al taller</a>
        <a href="index.php" class="btn btn-info">Regresar</a>
    </div>
    <script>
        function mostrarSweet(id_taller){
            Swal.fire({
                title: "¿Estás seguro?",
                text: "No podrás revertirlo!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Delete"
                }).then((result) => {
                if (result.isConfirmed) { 
                    window.location.href = "crud.php?eliminar_id_taller=" + id_taller;
                }
            });
        }
    </script>
</body>
</html>
