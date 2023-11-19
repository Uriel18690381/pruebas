<?php
include 'conexion.php';
//verifica que los campos estan vacios
if (!empty($_POST["btniniciar"])) {
    //Si los campos estan vacios manda el mansaje
    if (empty($_POST["nombre"]) and empty($_POST["contraseña"])) {
        echo "Los campos estan vacios";
    } else {
        
        $nombre = $_POST["nombre"];
        $contraseña = $_POST["contraseña"];

        $sql = $conn->query("SELECT * FROM usuarios where nombre = '$nombre' and contraseña = '$contraseña'");
        if ($datos = $sql -> fetch_object()) {
            header("location:admin.php");
        } else {
            header("location:login.php");
        }
        
    }
    
}


?>