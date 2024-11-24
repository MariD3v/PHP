<?php
/* Crea una función de búsqueda
Crea un array de números aleatorios del 1 al 100. Crea una función de búsqueda con dos parámetros: el array y el elemento a buscar en el array. 
Si encuentra el elemento el resultado será la posición del elemento en el array, y en caso negativo devolverá el valor -1. 
Prueba la función mostrando mensajes si encuentra el elemento o no.Nota:no usar ninguna función de búsqueda.*/

function search($array, $element){
   for ($i = 0; $i< count($array);$i++){
        if ($array[$i]==$element){
            return $i;
        }
    } 
    return -1;
}

function mensagge($number){
    if ($number == -1){
        echo "No se ha encontrado<br>";
    } else {
        echo "Se ha encontrado en la posición: $number <br>";
    }
}

$arrayn = array();

for ($i = 0; $i<20;$i++){
    $ramdonNumber = rand(1, 100);
    array_push($arrayn, $ramdonNumber);
}

mensagge(search($arrayn,20));
