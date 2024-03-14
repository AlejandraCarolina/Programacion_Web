<?php
    include 'db.php';

    $sql_vehiculos = "SELECT * FROM vehiculo";
    $result_vehiculos = $conn->query($sql_vehiculos);

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Agregar Taller</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <h2>Entrada a Taller</h2>
            <form action="crud.php" method="POST">
                <div class="form-group">
                    <label for="fecha">Fecha de Ingreso: </label>
                    <input type="date" class="form-control" id="fecha" name="fecha" required>
                </div>
                <div class="form-group">
                    <select name="id_servicio">
                        <option value="0">Selecciona un servicio</option>
                        <?php
                            $query = "SELECT * FROM servicios";
                            $result = $conn->query($query);
                            while($row = $result->fetch_assoc()){
                                echo "<option value='".$row['id_servicios']."'>".$row['nombre']."</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <select name="id">
                        <option value="0">Seleccione un vehículo</option>
                        <?php
                            $query1 = "SELECT * FROM vehiculo";
                            $result1 = $conn->query($query1);
                            while($row1 = $result1->fetch_assoc()){
                                echo "<option value='".$row1['id']."'>".$row1['num_serie']." ".$row1['marca']." ".$row1['submarca']." ".$row1['modelo']."</option>";
                            }
                        ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary" name="alta_taller">Agregar al taller</button>
            </form>
        </div>
    </body>
</html>
