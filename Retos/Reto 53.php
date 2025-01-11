<!--Crea un formulario que permita al usuario introducir su nombre. Al enviar el formulario, almacenar el nombre en
una cookie. En una página distinta, recupera el nombre de la cookie y muéstralo en un mensaje de bienvenida-->
<?php
setcookie("nombre", $_POST["nombre"], time() + (86400 * 30), "/");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 53</title>
</head>
<body>
    <form action="Reto 53.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre"/>
        <input type="submit"/>
    </form>
    <?php
    if(isset($_COOKIE["nombre"])){
        echo ("BIENVENIDO ". $_COOKIE["nombre"]);
    }
    ?>
</body>
</html>