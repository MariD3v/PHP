<?php
/* Muestra la salida
Realiza un programa que muestre la siguiente salida usando iteraciones:
1
12
123
1234
12345 */


$numero = 1;
for ($i = 1; $i<=5;$i++){
    for ($j = 1; $j<=$i;$j++){
        echo $j;
    }
    echo "<br>";
}