<!--Inicio y final de una cadena

Tenemos una cadena de la que no sabemos exactamente el contenido ni la longitud, pero sí que sabemos que acaba con un punto. 
¿Cómo podríamos mostrar por pantalla la primera letra y la última de la cadena, sin tener en cuenta el punto final? 
Es decir, en caso de que la cadena sea «Bienvenido a mi página web.» deberíamos mostrar la «B» y la «b». Queremos, además, que ambas letras salgan en negrita.-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reto 7</title>
</head>
<body>
    <?php
        $frase = "En un lugar de la mancha.";
        echo "Primera letra:<b>".$frase[0]."</b><br>Segunda letra:<b>".$frase[strlen($frase)-2]."</b>";
    ?>
</body>
</html>