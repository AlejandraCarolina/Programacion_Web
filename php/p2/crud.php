<?php
    //incluir bd
    include 'db.php';

    //Alta de Vehiculo

    if(isset($_POST['alta_vehiculo'])){
        $num_serie = $_POST['num_serie'];
        $marca = $_POST['marca'];
        $sub_marca = $_POST['sub_marca'];
        $tipo = $_POST['tipo'];
        $modelo = $_POST['modelo'];
        $color = $_POST['color'];
        $capacidad = $_POST['capacidad'];
        $procedencia = $_POST['procedencia'];

    //Guardar valores a la tabla vehiculo

        $sql = "INSERT INTO vehiculo (num_serie, marca, sub_marca, tipo, modelo, color, capacidad, procedencia) VALUES
            ('$num_serie', '$marca', '$sub_marca', '$tipo', '$modelo', '$color', '$capacidad', '$procedencia')";
        $result = $conn->query($sql);
        header("Location: listado_vehiculo.php");
    }
    
    //Cambios en la tabla vehiculo

    if(isset($_POST['cambio_vehiculo'])){
        $id = $_POST['id'];
        $num_serie = $_POST['num_serie'];
        $marca = $_POST['marca'];
        $sub_marca = $_POST['sub_marca'];
        $tipo = $_POST['tipo'];
        $modelo = $_POST['modelo'];
        $color = $_POST['color'];
        $capacidad = $_POST['capacidad'];
        $procedencia = $_POST['procedencia'];

        //query de actualización en la tabla vehiculo
    
        $sql = "UPDATE vehiculo SET num_serie='$num_serie', marca='$marca', sub_marca='$sub_marca', tipo='$tipo', modelo='$modelo', color='$color', 
        capacidad='$capacidad', procedencia='$procedencia' WHERE id=$id";
        $result = $conn->query($sql);
        header("Location: listado_vehiculo.php");
    }
      
    // Borrar vehiculo

    if(isset($_GET['borrar_vehiculo'])){
        $id = $_GET['borrar_vehiculo'];
        $sql = "DELETE FROM vehiculo WHERE id=$id";
        $result = $conn->query($sql);
        header("Location: listado_vehiculo.php");
    }

    // --------------------------------------------------------------------------------------------------------

    //Agregar servicio
    if(isset($_POST['alta_servicio'])){
        $nombre = $_POST['nombre'];
        $costo = $_POST['costo'];

        $query = "INSERT INTO servicios(nombre, costo) VALUES ('$nombre', '$costo')";
        $result = $conn->query($query);

    if(!$result){
        die("No puede eliminarse");
    }

    header('Location: listado_servicio.php');

}

    //Borrar un servicio
    if(isset($_GET['eliminar_servicio'])){
        $id_servicio = $_GET['eliminar_servicio'];

        $query = "DELETE FROM servicios WHERE id_servicios = $id_servicio";
        $result = $conn->query($query);

    if(!$result){
        die("No puede eliminarse");
    }

    header('Location:listado_servicio.php');

}

    //Editar un servicio
    if(isset($_POST['editar_servicios'])){
        $id_servicios = $_POST['id_servicios'];
        $nombre = $_POST['nombre'];
        $costo = $_POST['costo'];

        $query = "UPDATE servicios SET nombre = '$nombre', costo = '$costo' WHERE id_servicios = $id_servicios";
        $result = $conn->query($query);

    if(!$result){
        die("No puede eliminarse");
    }

    header('Location: listado_servicio.php');
}

// Alta taller

    if(isset($_POST['alta_taller'])){
        $fecha = $_POST['fecha'];
        $id_servicio = $_POST['id_servicio'];
        $id_vehiculo = $_POST['id'];

        $query = "INSERT INTO taller(fecha_ingreso, id_servicio, id_vehiculo) VALUES ('$fecha', '$id_servicio', '$id_vehiculo')";
        $result = $conn->query($query);

        if(!$result){
            die("No puede eliminarse");
    }

    header('Location:listado_taller.php');

}

    //Borrar taller
    if(isset($_GET['eliminar_id_taller'])){
        $id_taller = $_GET['eliminar_id_taller'];

         $query = "DELETE FROM taller WHERE id_taller = $id_taller";
        $result = $conn->query($query);

    if(!$result){
        die("No puede eliminarse");
    }

    header('Location:listado_taller.php');

}

    //Editar taller
    if(isset($_POST['editar_taller'])){
        $id_taller = $_POST['id_taller'];
        $fecha = $_POST['fecha'];
        $id_servicio = $_POST['id_servicio'];
        $id_vehiculo = $_POST['id'];

        $query = "UPDATE taller SET fecha_ingreso = '$fecha', id_servicio = '$id_servicio', id_vehiculo = '$id_vehiculo' WHERE id_taller = $id_taller";
        $result = $conn->query($query);

    if(!$result){
        echo $query;
        die("No puede eliminarse");
    }

    header('Location:listado_taller.php');
}
    ?>

