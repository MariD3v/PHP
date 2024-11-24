<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 29</title>
</head>
<body>

    <?php
/* Crea un array de películas
Crea un array con géneros de películas (comedia, biográfica, thriller, etc) y una lista de películas asociadas a cada género (un array asociativo de arrays).
Crea una tabla en HTML para mostrar por cada género las películas asociadas.*/

$comedia = array("Forest Gump","Los Simpsons","Amelie");
$biografica = array("La lista de schindler", "Oppenheimer", "El lobo de wall street");
$thriller = array("El silencio de los corderos", "Origen", "Seven");
$romance = array("Nothing hill", "Me before you");
$peliculas = array("Comedia"=>$comedia,"Biográfica"=>$biografica,"Thriller"=>$thriller,"Romance"=>$romance);

echo "<table border=1><tr>";
foreach( $peliculas as $clave => $valor){
    echo "<tr><th>$clave</th>";
    for ($i=0;$i<count($valor);$i++){
        echo "<td>$valor[$i]</td>";
    }
    echo "</tr>";
}
?>

</body>
</html>