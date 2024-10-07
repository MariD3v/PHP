<!--Reordenamos una cadena 

Supongamos que tenemos una cadena que contenga una frase con varias palabras separadas por un espacio en blanco. 
Queremos reordenar la cadena alfabéticamente, de forma que la nueva cadena esté formada por las mismas palabras, 
pero ordenadas en orden alfabético de menor a mayor. Por ejemplo, si tenemos la cadena «esto es una cadena», 
el resultado obtenido después de reordenarla alfabéticamente debería ser «cadena es esto una». -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reto 6</title>
</head>
<body>
    <?php
        $frase = "En un lugar de la mancha";
        $fraseArray = explode(" ", $frase);
        sort($fraseArray);
        $fraseOrdenada = implode(" ", $fraseArray);
        echo $fraseOrdenada;
    ?>
</body>
</html>