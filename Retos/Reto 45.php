<?php
/* Crear un formulario HTML básico que permita al usuario enviar su nombre y correo electrónico a través de un método POST. 
Utiliza $_REQUEST para capturar estos datos y muestra un mensaje indicando el nombre y el correo
introducidos y en caso de no haberse introducido que indique que no se han introducido.
*/

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_REQUEST['nombre'];
    $correo = $_REQUEST['correo'];
    echo "<p>Nombre: " . $nombre . "</p>";
    echo "<p>Correo Electrónico: " . $correo . "</p>";
} 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 45</title>
</head>
<body>
    <form method="POST">
        <label>Nombre</label>
        <input type="text" name="nombre" required/>
        <label>Correo electrónico</label>
        <input type="email" name="correo" required/>
        <input type="submit" />
    </form>
    
</body>
</html>