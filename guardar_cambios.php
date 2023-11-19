<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos enviados por el formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    // Ajusta según las columnas de tu tabla

    // Iterar sobre los datos y actualizar la base de datos
    for ($i = 0; $i < count($nombre); $i++) {
        // Obtener el ID de la fila actual
        $id = $i +3; // Ajusta según la estructura de tu tabla
        
        // Preparar la consulta SQL utilizando consultas preparadas
        $sql = "UPDATE clientes SET nombre = ?, apellido = ?, telefono = ?, correo = ? WHERE id_usuario = ?";
    
        // Preparar la declaración
        $stmt = $conn->prepare($sql);
    
        // Vincular los parámetros
        $stmt->bind_param("ssssi", $nombre[$i], $apellido[$i], $telefono[$i], $correo[$i], $id);
    
        // Ejecutar la consulta y verificar si fue exitosa
        if ($stmt->execute()) {
            echo "Datos actualizados correctamente para el ID $id.<br>";
        } else {
            echo "Error al actualizar datos para el ID $id: " . $stmt->error . "<br>";
        }
    
        // Cerrar la declaración
        $stmt->close();
    }

    echo "Cambios guardados correctamente.";
}

header("Location: admin.php");
exit();

// Cerrar la conexión
$conn->close();
?>
