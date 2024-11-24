<?php
/* Calcula la serie de Fibonacci
Realiza un programa para calcular la serie de Fibonacci de forma iterativa para los primeros 20 números. 
Resultado: 011235813... */

$anterior = 0;
$siguiente = 1;


for ($i = 0; $i<20; $i++){
    echo $anterior." ";
    $resultado = $anterior + $siguiente;
    $anterior = $siguiente;
    $siguiente = $resultado;
}