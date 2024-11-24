<?php
/* Genera un array de números reales
Realiza un programa que genere un array de 20 números reales (decimales), cada elemento representa la venta del día de un comercio. 
Calcular el promedio de venta por día utilizando un bucle. Mostrar el resultado por pantalla. */

$array = array();
$contador = 0;
for ($i = 0; $i<20;$i++){
    $ramdonNumber = rand(100000, 500000)/100;
    array_push($array, $ramdonNumber);
    $contador += $ramdonNumber;
}

$promedio = $contador /20;
echo $promedio;
