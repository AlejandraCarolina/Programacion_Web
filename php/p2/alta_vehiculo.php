<!DOCTYPE html>
<html>
<head>
    <title>Alta de Vehiculos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container mt-5">
        <h2>Agregar Vehículo</h2>
        <br> 
        <form action="crud.php" method="POST" onsubmit="return validar()">
            <div class="form-group">
                <label for="num_serie">Número de serie:</label>
                <input type="text" class="form-control" id="num_serie" name="num_serie" placeholder="Ingrese el número de serie...">
            </div>
            <div class="form-group">
                <label for="marca">Marca:</label>
                <input type="text" class="form-control" id="marca" name="marca" placeholder="Ingrese la marca...">
            </div>
            <div class="form-group">
                <label for="sub_marca">Submarca:</label>
                <input type="text" class="form-control" id="sub_marca" name="sub_marca" placeholder="Ingrese la submarca...">
            </div>
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Ingrese el tipo...">
            </div>
            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Ingrese el modelo...">
            </div>
            <div class="form-group">
                <label for="color">Color:</label>
                <input type="text" class="form-control" id="color" name="color" placeholder="Ingrese el color...">
            </div>
            <div class="form-group">
                <label for="capacidad">Capacidad:</label>
                <input type="text" class="form-control" id="capacidad" name="capacidad" placeholder="Ingrese la capacidad...">
            </div>
            <div class="form-group">
                <label for="procedencia">Procedencia:</label>
                <input type="text" class="form-control" id="procedencia" name="procedencia" placeholder="Ingrese procedencia...">
            </div>
            <input type="submit" class="btn btn-primary" name="alta_vehiculo" value="Agregar Vehículo">
        </form>
    </div>

    <!-- SCRIPT DE VALIDACIONES -->
    <script type="text/javascript">
        function validar() {
            var numserie = document.getElementById("num_serie").value;
            var mar = document.getElementById("marca").value;
            var submarca = document.getElementById("sub_marca").value;
            var tpo = document.getElementById("tipo").value;
            var mod = document.getElementById("modelo").value;
            var col = document.getElementById("color").value;
            var cap = document.getElementById("capacidad").value;
            var pro = document.getElementById("procedencia").value;

            if (numserie == "") {
                Swal.fire("Ingrese número de serie del vehículo");
                return false;
            } else if (mar == "") {
                Swal.fire("Ingrese marca del vehículo");
                return false;
            } else if (submarca == "") {
                Swal.fire("Ingrese submarca del vehículo");
                return false;
            } else if (tpo == "") {
                Swal.fire("Ingrese el tipo del vehículo");
                return false;
            } else if (mod == "") {
                Swal.fire("Ingrese el modelo del vehículo");
                return false;
            } else if (col == "") {
                Swal.fire("Ingrese el color del vehículo");
                return false;
            } else if (cap == "") {
                Swal.fire("Ingrese la capacidad del vehículo");
                return false;
            } else if (pro == "") {
                Swal.fire("Ingrese la procedencia del vehículo");
                return false;
            }
        }
    </script>
</body>
</html>
