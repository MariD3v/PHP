<?php
/*
Crea un formulario donde el usuario introduzca su nombre y que permita al usuario seleccionar su tema de color preferido
(opciones: fondo blanco, fondo azul y fondo negro con letras blancas). Al enviar el formulario, almacena la preferencia en
una cookie y le lleva a una página de bienvenida con el fondo del color seleccionado y el siguiente texto:
¡Bienvenid@ “NombreUsuario”!
Este es el tema que has seleccionado, espero que sea de tu agrado.
*/
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <style>
        body{
            background-color: <?php if (isset($_COOKIE['tema'])){echo $_COOKIE['tema'];}else {echo "white";}?>;
            color:<?php if (isset($_COOKIE['tema']) && $_COOKIE['tema'] == "black"){echo "white";} else {echo "black";}?>;
        }
    </style>
</head>
<body>
    <?php
    if(isset($_COOKIE['name']) && isset($_COOKIE['tema'])){
        echo "<h2>¡Bienvenid@ ".$_COOKIE['name']."! Este es el tema que has seleccionado, espero que sea de tu agrado.</h2>";
    }
    ?>
</body>
</html>