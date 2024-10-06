<!--Escribimos una cadena al revés sin strrev() 

Dada una variable que contenga una cadena de varios caracteres, 
¿de qué forma se podría escribir al revés (empezando desde la última letra y acabando en la primera) sin hacer uso de la función strrev()? -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reto 5</title>
</head>
<body>
    <?php
        $texto = "Hola";
    	$alReves = "";

        for ($i = 0; $i < strlen($texto); $i++){
            $alReves = $texto[$i] . $alReves;     
        }

        echo $alReves;
    ?>
</body>
</html>
