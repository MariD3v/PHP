<?php
/*Crea un array de música
Crea un array con géneros de música (pop, rock, folk, etc) y una lista de canciones
asociadas a cada género(un array cada género asociativo de arrays). 
Crea una tabla en HTML para mostrar por las canciones asociadas. 
Crea otra tabla en HTML con un listado de canciones con su género.
Nota: ver la función array_keys().
Después, crea una función a partir del array anterior que
reciba un género como parámetro y devuelva un array con las canciones asociadas:
Función CancionesPorGenero(array, genero).
Devuelve un array de títulos de canciones. */
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer 2</title>
</head>
<body>
    <table border="1">
    <?php
    $pop = array("Gangster paradise", "In the club", "Only girl of the world");
    $rock = array("Smell like teen spirit", "Bed on roses", "Its my life");
    $clasica = array("sonata1", "sonata2", "amanecer");
    $generos = array("pop" => $pop,"rock" => $rock,"clasica" => $clasica);
    
    echo "<h1>Canciones por género</h1>";
    foreach ($generos as $genero => $arrayCanciones){
        echo "<tr><th>$genero</th>";
        foreach ($arrayCanciones as $cancion){
            echo "<td>$cancion</td>";
        }
    }

    echo "</table><br><h1>Canciones con su género</h1><br><table border=\"1\"><tr><th>Canciones</th><th>Género</th></tr>";
    foreach ($generos as $genero => $arrayCanciones){
        foreach ($arrayCanciones as $cancion){
            echo "<tr><td>$cancion</td><td>$genero</td></tr>";
        }
    }
    echo "</table>";

    function CancionesPorGenero($array, $genero){
        foreach ($array as $generos => $arrayCanciones){
            if ($genero == $generos){
                return $arrayCanciones;
            }
        }
    }
    
    echo "<h1>Canciones del género POP:</h1>";
    $arrayCanciones = CancionesPorGenero($generos,"pop");
    foreach($arrayCanciones as $canciones){
        echo $canciones."<br>";
    }

    ?>
   
</body>
</html>


