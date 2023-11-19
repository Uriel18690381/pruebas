<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form action="bdlogin.php" method="post">
        <label for="nombre">Nombre de Usuario:</label>
        <input type="text" id="nombre" name="nombre"><br>

        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña"><br>

        <input type="submit" value="Iniciar Sesión" name="btniniciar">
    </form>
    <p>¿No tienes una cuenta? <a href="registro.php">Crear nueva cuenta</a></p>
</body>
</html>