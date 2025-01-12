<!--  Crea un formulario de login con usuario y contraseña. Al enviar el formulario, verifica las credenciales
(almacenadas en un array).Si las credenciales son correctas, iniciar una sesión y redirigir al usuario a una página de bienvenida.-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 57</title>
</head>
<body>
    <form action="Reto 57 Bienvenida.php" method="POST">
        <label>Usuario:</label>
        <input type="text" name="user"/>
        <label>Contraseña:</label>
        <input type="password" name="pass"/>
        <input type="submit" name="submit"/>
    </form>
</body>
</html>