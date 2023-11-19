<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionario</title>
</head>
<body>
    <h2>Nuevo usuario</h2>
    <form action="tbañadir.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="apellido">Apellidos:</label>
        <input type="text" id="apellido" name="apellido" required><br>

        <label for="telefono">Telefono:</label>
        <input type="number" id="telefono" name="telefono" required><br>

        <label for="correo">Correo:</label>
        <input type="text" id="correo" name="correo" required><br>

        <!-- Agrega más campos según tus necesidades -->

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
