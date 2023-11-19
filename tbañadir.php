<?php
// Incluir el archivo de conexión
include 'conexion.php';

// Verificar si se han enviado datos a través del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    // Puedes agregar más campos según sea necesario

    // Preparar la consulta SQL para insertar datos en la tabla
    $sql = "INSERT INTO clientes (nombre, apellido, telefono, correo) VALUES ('$nombre', '$apellido', '$telefono', '$correo')";

    // Ejecutar la consulta y verificar si fue exitosa
    if ($conn->query($sql) === TRUE) {
        echo "Los datos se han insertado correctamente.";

        // Redirigir a la página de la tabla actualizada
        header("Location: admin.php");
        exit();
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
