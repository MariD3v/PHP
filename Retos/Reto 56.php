<!-- Añade al ejercicio 3 en la segunda página un botón que permita al usuario eliminar una cookie específica.-->
<?php
if(isset($_POST["submit"]) && !empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["edad"])) {
    setcookie("nombre", $_POST["nombre"], time() + (86400 * 30), "/");
    setcookie("apellido", $_POST["apellido"], time() + (86400 * 30), "/");
    setcookie("edad", $_POST["edad"], time() + (86400 * 30), "/");
}
if(!empty($_POST["nombreCookie"]) && isset($_POST["delete"])){
    setcookie($_POST["nombreCookie"], "", time() - 3600, "/");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 56</title>
</head>
<body>
    <form action="Reto 56.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre"/>
        <label>Apellido:</label>
        <input type="text" name="apellido"/>
        <label>Edad:</label>
        <input type="text" name="edad"/>
        <input type="submit" name="submit"/>
    </form>
    <form action="Reto 56.php" method="POST">
        <label>Nombre de cookie:</label>
        <input type="text" name="nombreCookie"/>
        <input type="submit" name="delete" value="Borrar cookie"/>
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
</html>
