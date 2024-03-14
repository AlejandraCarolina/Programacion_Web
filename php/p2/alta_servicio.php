<!DOCTYPE html>
<html>
    <head>
        <title>Agregar Servicio</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <div class="container mt-5">
            <h2>Agregar Servicio</h2>
            <form action="crud.php" method="POST" onsubmit="return validar()">
                <div class="form-group">
                    <label for="nombre">Nombre: </label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="form-group">
                    <label for="costo">Costo: </label>
                    <input type="number" class="form-control" id="costo" name="costo">
                </div>
                <button type="submit" class="btn btn-primary" name="alta_servicio">Agregar Servicio</button>
        </div>
        <script type="text/javascript">
        function validar() {
            var nom = document.getElementById("nombre").value;
            var cos = document.getElementById("costo").value;
         

            if (nom == "") {
                Swal.fire("Ingrese el nombre del servicio");
                return false;
            }  else if (cos == "") {
                Swal.fire("Ingrese el costo del servicio");
                return false;
            } 
        }
    </script>
    </body>
</html>