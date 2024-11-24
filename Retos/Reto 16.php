<?php 
/* El mayor
Haz una página que obtenga el mayor de dos números aleatorios enteros positivos.
 */

$n1 = rand(1, 100);
$n2 = rand(1, 100);

if ($n1 > $n2){
    echo "$n1 es mayor";
} else if ($n1 < $n2){
    echo "$n2 es mayor";
} else {
    echo "Son iguales";
}