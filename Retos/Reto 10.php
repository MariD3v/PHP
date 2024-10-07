<!--La letra del DNI

Como sabrás, un DNI está formado por una lista de números (máximo 8) y una letra final. 
Dicha letra no está puesta al azar, sino que depende del número del DNI y puede calcularse mediante una fórmula. 
Para ello, primero hay que dividir el número del DNI entre 23 y quedarse con el resto de la división. 
Con ese valor hay que ir a una tabla y buscar la letra correspondiente. 
El orden de las letras en la tabla es el siguiente: TRWAGMYFPDXBNJZSQVHLCKE. 

Se pide que realices una función que reciba un DNI numérico y devuelva la letra que le corresponde según la fórmula que hemos visto.
En caso de que el DNI contenga ya alguna letra o caracteres no numéricos, o en caso de que su longitud sea mayor que 8, 
la función devolverá como resultado «DNI NO VÁLIDO». Si el DNI es válido (numérico, entre 1 y 8 dígitos), 
entonces devolverá la letra que le corresponda.-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reto 10</title>
</head>
<body>
    <?php
        function dniCalculator($dni){
            $letters = "TRWAGMYFPDXBNJZSQVHLCKE";
            if (is_numeric($dni) && ($dni > 0) && ($dni < 99999999)){
                $posicion = $dni%23;
                echo "La letra es ". $letters[$posicion]."<br>";
            } else {
                echo "Dni no válido<br>";
            }
        }

        dniCalculator(49234341);
        dniCalculator(0);
        dniCalculator(-1);
        dniCalculator(111111111);
        dniCalculator("a");

    ?>
</body>
</html>