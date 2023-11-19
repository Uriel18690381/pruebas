<?php
include 'conexion.php';

// Obtener los datos actuales de la tabla
$sql = "SELECT * FROM clientes";
$resultado = $conn->query($sql);

// Verificar si la consulta fue exitosa
if ($resultado->num_rows > 0) {
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Datos</title>
    </head>
    <body>
        <h2>Editar Datos</h2>
        <form action="guardar_cambios.php" method="post">
            <table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <!-- Agrega más columnas según tu tabla -->
                    <th>Acciones</th>
                </tr>
                <?php
                while ($fila = $resultado->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $fila['id_usuario']; ?></td>
                        <td><input type="text" name="nombre[]" value="<?php echo $fila['nombre']; ?>"></td>
                        <td><input type="text" name="apellido[]" value="<?php echo $fila['apellido']; ?>"></td>
                        <td><input type="number" name="telefono[]" value="<?php echo $fila['telefono']; ?>"></td>
                        <td><input type="text" name="correo[]" value="<?php echo $fila['correo']; ?>"></td>
                        <!-- Agrega más columnas según tu tabla -->
                        <td><a href="eliminar_fila.php?id_usuario=<?php echo $fila['id_usuario']; ?>">Eliminar</a></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <br>
            <input type="submit" value="Guardar Cambios">
        </form>
        <br>
        <a href="admin.php">Regresar a la tabla</a>
    </body>
    </html>
    <?php
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión
$conn->close();
?>
