<!--  Crea un formulario para que el usuario introduzca su nombre, apellido y edad. Almacena estos datos en tres
cookies diferentes. En una página siguiente, recupera las cookies y muestra los datos del usuario.-->
<?php
if(isset($_POST["submit"])){
    setcookie("nombre", $_POST["nombre"], time() + (86400 * 30), "/");
    setcookie("apellido", $_POST["apellido"], time() + (86400 * 30), "/");
    setcookie("edad", $_POST["edad"], time() + (86400 * 30), "/");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 55</title>
</head>
<body>
    <form action="Reto 55.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre"/>
        <label>Apellido:</label>
        <input type="text" name="apellido"/>
        <label>Edad:</label>
        <input type="text" name="edad"/>
        <input type="submit" name="submit"/>
    </form>
    <?php
        if(isset($_COOKIE["nombre"])){
            echo ("Nombre: ". $_COOKIE["nombre"]);
        }
        if(isset($_COOKIE["apellido"])){
            echo (" Apellido: ". $_COOKIE["apellido"]);
        }
        if(isset($_COOKIE["edad"])){
            echo (" Edad: ". $_COOKIE["edad"]);
        }
    ?>
</body>