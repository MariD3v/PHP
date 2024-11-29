<?php
/*Calcula y muestra la temperatura media
Escribe un programa en PHP que calcule y muestre la temperatura media en grados centígrados
y las cinco temperaturas más altas y las cinco temperaturas más bajas:
Temperaturas de entrada en grados fahrenheit: 
78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73 */

$arrayTemp= array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$suma = 0;
foreach ($arrayTemp as $value){
    $suma += $value;
}

$mediaFa = $suma/count($arrayTemp);
$mediaCe = round(($mediaFa - 32) * 5 / 9);

echo "La media en Celsium es $mediaCe<br>";

sort($arrayTemp);

echo "Las 5 temperaturas mas bajas son: $arrayTemp[0],$arrayTemp[1],$arrayTemp[2],$arrayTemp[3],$arrayTemp[4]<br>";

rsort($arrayTemp);

echo "Las 5 temperaturas mas altas son: $arrayTemp[0],$arrayTemp[1],$arrayTemp[2],$arrayTemp[3],$arrayTemp[4]";