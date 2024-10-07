<!--Tabla de números

Dibuja una tabla con cuatro columnas en la que la primera columna contenga un número; la segunda columna, 
el doble del número; la tercera, su cuadrado, y la cuarta, su raíz cuadrada. 
La tabla deberá tener 10 filas y mostrar los números del 1 al 10 con sus respectivos dobles, cuadrados y raíces. 
Además, deberá tener una fila de encabezamiento donde se especifique el contenido de cada columna. 
La primera fila y la primera columna deberán distinguirse visualmente del resto con algún efecto o color. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reto 8</title>
</head>
<body>
    <table border= "1">
        <tr style="background-color:darkorchid;">
            <th>Número</th>
            <th>Doble</th>
            <th>Cuadrado</th>
            <th>Raiz</th>
        </tr>"
        <?php
            for ($i=1;$i<=10;$i++){
                $doble = $i*2;
                $cuadrado = $i*$i;
                $raiz = sqrt($i);
                echo "
                    <tr>
                        <td style=\"background-color:lightblue;\">$i</td>
                        <td>$doble</td>
                        <td>$cuadrado</td>
                        <td>$raiz</td>
                    </tr>";
            }
        ?>
    </table>
</body>
</html>