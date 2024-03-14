<?php
    include 'db.php';
    $id = $_GET['id'];
    $sql_vehiculo = "SELECT * FROM vehiculo WHERE id = $id";
    $result_vehiculo = $conn->query($sql_vehiculo);
    $row_vehiculo = $result_vehiculo->fetch_assoc();
?>

<html>
    <head>
        <title>Editar Vehículo</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container mt-5">
            <h2>Editar Vehículo</h2>
            <br> 
            <form action="crud.php" method="POST">
                
                <input type="hidden" name="id" value="<?php echo $row_vehiculo['id'] ?>">

                <div class="form-group" >
                    <label for="num_serie">Número de serie:</label>
                    <input type="text" class="form-control" id="num_serie" name="num_serie" value="<?php echo $row_vehiculo['num_serie'] ?>" required>
                </div>
                <div class="form-group" >
                    <label for="marca">Marca:</label>
                    <input type="text" class="form-control" id="marca" name="marca" value="<?php echo $row_vehiculo['marca'] ?>"required>
                </div>
                <div class="form-group" >
                    <label for="sub_marca">Submarca:</label>
                    <input type="text" class="form-control" id="sub_marca" name="sub_marca" value="<?php echo $row_vehiculo['sub_marca'] ?>" required>
                </div>
                <div class="form-group" >
                    <label for="tipo">Tipo:</label>
                    <input type="text" class="form-control" id="tipo" name="tipo" value="<?php echo $row_vehiculo['tipo'] ?>"required>
                </div>
                <div class="form-group" >
                    <label for="modelo">Modelo:</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" value="<?php echo $row_vehiculo['modelo'] ?>" required>
                </div>
                <div class="form-group" >
                    <label for="color">Color:</label>
                    <input type="text" class="form-control" id="color" name="color" value="<?php echo $row_vehiculo['color'] ?>" required>
                </div>
                <div class="form-group" >
                    <label for="capacidad">Capacidad:</label>
                    <input type="text" class="form-control" id="capacidad" name="capacidad" value="<?php echo $row_vehiculo['capacidad'] ?>" required>
                </div>
                <div class="form-group" >
                    <label for="procedencia">Procedencia:</label>
                    <input type="text" class="form-control" id="procedencia" name="procedencia" value="<?php echo $row_vehiculo['procedencia'] ?>" required>
                </div>
                <button type="submit" class="btn btn-primary" name="cambio_vehiculo">Editar Vehículo</button>
                
            </form>
    </body>
</html>