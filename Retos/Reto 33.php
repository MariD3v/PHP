<?php
/*Convierte números binarios a decimal
Escribe un programa que convierta números binarios a decimal. La longitud de los números binarios será de 16 dígitos como máximo. 
Nota: no se puede usar funciones para la conversión hay que realizar usando arrays. */

$numBinary = 10100011;

$numArray = str_split($numBinary);
$numArray = array_reverse($numArray) ;

$numDecimal = 0;
for ($i = 0; $i<count($numArray);$i++){
    $numDecimal+=$numArray[$i]*(2**$i);
}

echo "El numero decimal es $numDecimal";