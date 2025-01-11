<!-- Crea una cookie con una fecha de caducidad determinada (por ejemplo, un minuto después). 
 Y muestra un mensaje diferente dependiendo de si la cookie ha caducado o no.-->
<?php
if(isset($_POST["submit"])){
    setcookie("nombre", $_POST["nombre"], time() + 60, "/");
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 54</title>
</head>
<body>
    <form action="Reto 54.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre"/>
        <input type="submit" name="submit"/>
    </form>
    <form action="Reto 54.php" method="POST">
        <input type="submit" name="comprobar" value="comprobar cookie"/>
    </form>
    <?php 
    if(isset($_POST["comprobar"])){
        if(isset($_COOKIE["nombre"])){
            echo ("Cookie activa");
        } else {
            echo ("Cookie inactiva");
        }
    }
    ?>
</body>
</html>