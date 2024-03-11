<?php

//Integrar archivo de conexi+on

include 'db.php';

// Alta de archivo de conexión
    if(isset($_POST['alta_alumno'])){
        $matricula = $_POST['matricula'];
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $email = $_POST['email'];
        $id_carrera = $_POST['id_carrera'];

    //Guardar valores a la tabla alumnos

        $sql = "INSERT INTO alumnos (matricula, nombre, edad, email, id_carrera) VALUES ('$matricula', '$nombre', '$edad', '$email', '$id_carrera')";
        $result = $conn->query($sql);
        header("Location: listado_alumnos.php");
    }

// Baja de alumnos

    if(isset($_GET['eliminar_alumno'])){
        $id = $_GET['eliminar_alumnos'];
        
        $sql = "DELETE FROM alumnos WHERE id=$id";
        $result = $conn->query($sql);
        header("Location: listado_alumnos.php");
    }

//Cambios de alumnos

    if(isset($_POST['cambio_alumno'])){
        $id = $_POST['id'];
        $matricula = $_POST['matricula'];
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $email = $_POST['email'];
        $id_carrera = $_POST['id_carrera']; 

        //query de actualización en la tabla alumnos
    
        $sql = "UPDATE alumnos SET matricula='$matricula', nombre='$nombre',edad='$edad', email='$email', id_carrera='$id_carrera' WHERE id=$id";
        $result = $conn->query($sql);
        header("Location: listado_alumnos.php");

    }

//Alta de carreras

    if(isset($_POST['alta_carrera'])){
        $nombre = $_POST['nombre'];
    
        //Guardar valores a la tabla carreras

        $sql = "INSERT INTO carrera (nombre) VALUES ('$nombre')";
        $result = $conn->query($sql);
        header("Location: listado_carreras.php");
    }

//Baja de carreras
    if(isset($_GET['eliminar_carrera'])){
        $id = $_GET['eliminar_carrera'];
        
        $sql = "DELETE FROM carrera WHERE id=$id";
        $result = $conn->query($sql);
        header("Location: listado_carreras.php");
    }

//Cambios de carreras 

    if(isset($_POST['cambio_carrera'])){
        $id = $_POST['id_carrera'];
        $nombre = $_POST['nombre'];

        //query de actualización en la tabla carreras

        $sql = "UPDATE carrera SET nombre='$nombre' WHERE id_carrera=$id";
        $result = $conn->query($sql);
        header("Location: listado_carreras.php");
    }

//Alta de materia

if(isset($_POST['alta_materia'])){
    $nombre = $_POST['nombre'];

    //Guardar valores a la tabla materias

    $sql = "INSERT INTO materias (nombre) VALUES ('$nombre')";
    $result = $conn->query($sql);
    header("Location: listado_materias.php");
}

//Cambios de materias

if(isset($_POST['cambio_materia'])){
    $id = $_POST['id_materia'];
    $nombre = $_POST['nombre'];

    //query de actualización en la tabla carreras

    $sql = "UPDATE materias SET nombre='$nombre' WHERE id_materia=$id";
    $result = $conn->query($sql);
    header("Location: listado_materias.php");
}


//Asignar materia a carrera
if(isset($_POST['alta_materia_carrera'])){
    $id_materia = $_POST['id_materia']; // Este valor debe ser pasado desde el formulario
    $id_carrera = $_POST['id_carrera'];

    // Verifica que los IDs de materia y carrera existan y sean válidos
    $sql_check_materia = "SELECT * FROM materias WHERE id_materia = $id_materia";
    $sql_check_carrera = "SELECT * FROM carrera WHERE id_carrera = $id_carrera";

    $result_materia = $conn->query($sql_check_materia);
    $result_carrera = $conn->query($sql_check_carrera);

    if($result_materia->num_rows > 0 && $result_carrera->num_rows > 0) {
        // Ambos IDs existen, procede a insertar en la tabla materia_carrera
        $sql_insert = "INSERT INTO materia_carrera (id_materia, id_carrera, unidades) VALUES ($id_materia, $id_carrera,3)";
        $result_insert = $conn->query($sql_insert);
    }
    header("Location: listado_materias.php");
}

// Asignar materias a alumno
if(isset($_POST['asignar_materias_alumno'])){
    $id_alumno = $_POST['id_alumno']; // ID del alumno seleccionado
    $materias = $_POST['materias']; // Array con los IDs de las materias seleccionadas

    // Verificar que el ID del alumno sea válido
    $sql_check_alumno = "SELECT * FROM alumnos WHERE id = $id_alumno";
    $result_check_alumno = $conn->query($sql_check_alumno);

    if($result_check_alumno->num_rows > 0) {
        // ID de alumno válido, proceder a insertar en la tabla alumnos_materias
        foreach($materias as $id_materia) {
            // Verificar que el ID de la materia sea válida
            $sql_check_materia = "SELECT * FROM materias WHERE id_materia = $id_materia";
            $result_check_materia = $conn->query($sql_check_materia);

            if($result_check_materia->num_rows > 0) {
                // ID de materia válida, proceder a insertar en la tabla alumnos_materias
                $sql_insert = "INSERT INTO alumnos_materias (id_alumno, id_materia) VALUES ($id_alumno, $id_materia)";
                $result_insert = $conn->query($sql_insert);
            }
        }
        header("Location: listado_alumnos.php");
    } else {
        echo "ID de alumno no válido.";
    }
}   