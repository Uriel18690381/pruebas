<?php
include 'conexion.php';

if (isset($_GET['id_usuario'])) {
    $id = $_GET['id_usuario'];

    // Eliminar la fila de la base de datos
    $sql = "DELETE FROM clientes WHERE id_usuario = $id";
    $conn->query($sql);

    echo "Fila eliminada correctamente.";
}

// Redirigir a la página de edición después de la eliminación
header("Location: tbeditar.php");
exit();

// Cerrar la conexión
$conn->close();
?>
