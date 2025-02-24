<?php 
    include("abre.php");
    $CodigoInscripcion = $_POST['CodigoInscripcion'];
    $Fecha = $_POST['Fecha'];
    $CodigoAlumno = $_POST['CodigoAlumno'];
    $CodigoCarrera = $_POST['CodigoCarrera'];
   

    //aca checa bien el nombre de la bae de datos 
    $consulta = "INSERT INTO inscripcion(CodigoInscripcion, Fecha , CodigoAlumno, CodigoCarrera ) 
    VALUES ('$CodigoInscripcion', '$Fecha', '$CodigoAlumno', '$CodigoCarrera')";
    
//usa la sentencia conexion
    if ($conexion->query($consulta) === TRUE) {
        echo "Registro insertado correctamente";
        header("Location: carrera.html");
    } else {
        echo "Error: " . $conexion->error;
    }

?>