<?php 
    include("abre.php");
    $Codigo = $_POST['Codigo'];
    $Nombre = $_POST['Nombre'];
    $Apellidos = $_POST['Apellidos'];
    $Edad = $_POST['Edad'];
    $Telefono = $_POST['Telefono'];

    //aca checa bien el nombre de la bae de datos 
    $consulta = "INSERT INTO alumno(Codigo, Nombre , Apellidos, Edad , Telefono) 
    VALUES ('$Codigo', '$Nombre', '$Apellidos', '$Edad', '$Telefono')";
    
//usa la sentencia conexion
    if ($conexion->query($consulta) === TRUE) {
        echo "Registro insertado correctamente";
        header("Location: carrera.html");
    } else {
        echo "Error: " . $conexion->error;
    }

?>