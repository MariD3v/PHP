<?php
/*  Añadir elementos a un array
Escribe un programa que añada elementos de forma aleatoria a un array mientras su longitud sea menor que 100. Nota: Se puede usar la función array_push().
*/
$array = array();
while (count($array)<100) {
    array_push($array,rand(0,100));
}