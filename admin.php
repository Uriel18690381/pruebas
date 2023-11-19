<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <nav>
        <ul>
          <li><a href="admin.php">Inicio</a></li>
          <li><a href="añadir.php">añadir</a></li>
          <li><a href="tbeditar.php">Editar</a></li>
          <li><a href="">Trabajando</a></li>
          <li><a href="">Trabajando</a></li>
        </ul>
      </nav>

      <?php
// Incluir el archivo de conexión
include 'conexion.php';

// Consulta SQL para obtener datos de la base de datos
$sql = "SELECT nombre, apellido, telefono, correo FROM clientes";
$resultado = $conn->query($sql);

// Verificar si la consulta fue exitosa
if ($resultado->num_rows > 0) {
    // Mostrar los datos en una tabla HTML, por ejemplo
    echo "<table border='1'>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Telefono</th>
                <th>Correo</th>
            </tr>";

    // Iterar sobre los resultados y mostrar cada fila
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>" . $fila["nombre"] . "</td>
                <td>" . $fila["apellido"] . "</td>
                <td>" . $fila["telefono"] . "</td>
                <td>" . $fila["correo"] . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión
$conn->close();
?>

</body>
</html>