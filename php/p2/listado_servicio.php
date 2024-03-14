<?php

    //Conexión de la base de datos
    include "db.php";

    //Consulta para obtener los servicios
    $query = "SELECT * FROM servicios";
    $result = $conn->query($query);
    
?>


<!DOCTYPE html>
<html lang="es">
<head>
        <title>Listado de Servicios</title>
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
                <a class="nav-link active" href="listado_servicio.php">Listado de vehiculos<span class="sr-only">(current)</span></a>
                <a class="nav-link" href="listado_vehiculo.php">Listado de vehiculos</a>
                <a class="nav-link" href="listado_taller.php">Listado del taller</a>
            </div>
        </div>
    </nav>

    <br>
    <div class="container-lg md-5">
        <h2>Servicios</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>ID Servicio</th>
                    <th>Nombre</th>
                    <th>Costo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    
                    // Recorrer tabla
                    while($row = $result->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>".$row['id_servicios']."</td>";
                        echo "<td>".$row['nombre']."</td>";
                        echo "<td>".$row['costo']."</td>";
                     
                    ?>
                    <td>
                        <a href="editar_servicio.php?id_servicios=<?php echo $row['id_servicios']; ?>" class="btn btn-secondary">
                            Editar</a>
                        <a href="crud.php?eliminar_servicio=<?php echo $row['id_servicios']; ?>" class="btn btn-danger" onclick="return mostrarSweetAlert(<?php echo $row['id_servicios']; ?>)">Eliminar</a>
                    </td>
                    </tr>
                    <?php
                    }

                ?>
            </tbody>

        </table>
        <a href="alta_servicio.php" class="btn btn-primary">Agregar Servicio</a>
        <a href="index.php" class="btn btn-info">Regresar</a>
    </div>
  <!-- SCRIPT DE VENTANA EMERGENTE DE BORRAR-->
  <script>
        function mostrarSweetAlert(id_servicios) {
             Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, ¡elimínalo!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "crud.php?eliminar_servicio=" + id_servicios;
            }
        });

        return false;
    }
</script>
</body>
</html>