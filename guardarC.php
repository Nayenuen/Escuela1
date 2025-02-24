<?php 
    include("abre.php");
    $Codigo = $_POST['Codigo'];
    $Nombre = $_POST['Nombre'];
    $Duracion = $_POST['Duracion'];
   

    //aca checa bien el nombre de la bae de datos 
    $consulta = "INSERT INTO carrera(Codigo, Nombre , Duracion) 
    VALUES ('$Codigo', '$Nombre', '$Duracion')";
    
//usa la sentencia conexion
    if ($conexion->query($consulta) === TRUE) {
        echo "Registro insertado correctamente";
        header("Location: carrera.html");
    } else {
        echo "Error: " . $conexion->error;
    }

?>