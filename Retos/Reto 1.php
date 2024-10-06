<!--Qué opciones disponemos tanto para truncar como para redondear, muestra el resultado de PI tanto redondeado a dos decimales como truncado.-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 1</title>
</head>
<body>
<?php
    $PI = 3.1415;

    //TRUNCAR
    $numeroTruncate = floor($PI *100)/100;
    echo $numeroTruncate;

    //REDONDEAR
    $numeroRound = round($PI,2);
    printf($numeroRound);
    ?> 
</body>
</html>



