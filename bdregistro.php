<?php
// Incluye el archivo de conexión
include 'conexion.php';

// Verifica si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];
    $correo = $_POST['correo'];

    // Consulta SQL para insertar un nuevo usuario
    $sql = "INSERT INTO usuarios (nombre, contraseña, correo) VALUES ('$nombre', '$contraseña', '$correo')";

    // Ejecutar la consulta y verificar si fue exitosa
    if ($conn->query($sql) === TRUE) {
        echo "Los datos se han insertado correctamente.";

        // Redirigir a la página de la tabla actualizada
        header("Location: login.php");
        exit();
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }
    
}

// Cerrar la conexión
$conn->close();
?>