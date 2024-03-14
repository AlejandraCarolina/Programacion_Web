<?php
    //incluir bd
    include 'db.php';

    //consulta de sql para obtener los datos de la tabla vehiculo
    $sql = "SELECT * FROM vehiculo";
    $result = $conn->query($sql);
?>

<html lang="es">
    <head>
        <title>Listado de Vehiculos</title>
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
                <a class="nav-link active" href="listado_vehiculo.php">Listado de vehiculos<span class="sr-only">(current)</span></a>
                <a class="nav-link" href="listado_taller.php">Listado de taller</a>
                <a class="nav-link" href="listado_servicio.php">Listado de servicios</a>
                </div>
            </div>
        </nav>

        <div class="container mt-5">
            <h1>Listado de Vehículos</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Num Serie</th>
                        <th>Marca</th>
                        <th>Sub Marca</th>
                        <th>Tipo</th>
                        <th>Modelo</th>
                        <th>Color</th>
                        <th>Capacidad</th>
                        <th>Procedencia</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $row['num_serie']; ?></td>
                        <td><?php echo $row['marca']; ?></td>
                        <td><?php echo $row['sub_marca']; ?></td>
                        <td><?php echo $row['tipo']; ?></td>
                        <td><?php echo $row['modelo']; ?></td>
                        <td><?php echo $row['color']; ?></td>
                        <td><?php echo $row['capacidad']; ?></td>
                        <td><?php echo $row['procedencia']; ?></td>
                        <td>
                            <a href="editar_vehiculo.php?id=<?php echo $row['id'];?>" class="btn btn-secondary">Editar</a>
                            <a href="crud.php?borrar_vehiculo=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return mostrarSweetAlert(<?php echo $row['id']; ?>)">Borrar</a>
                            
                        </td>
                    </tr>
                    <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
            <a href="alta_vehiculo.php" class="btn btn-primary">Agregar Vehículo</a>
            <a href="index.php" class="btn btn-primary">Regresar</a>
        </div>
   <!-- SCRIPT DE VENTANA EMERGENTE DE BORRAR-->
   <script>
        function mostrarSweetAlert(id) {
             Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, ¡elimínalo!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "crud.php?borrar_vehiculo=" + id;
            }
        });

        return false;
    }
</script>

    </body>
</html>

