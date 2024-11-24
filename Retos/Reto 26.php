<?php
/* Ordenar array de números
Realiza un programa que ordene un array de números de menor a mayor y en orden inverso:
Crea una función para ordenar el array que permita elegir con un parámetro el tipo de ordenamiento (por defecto si no se pasa el tipo de ordenación, 
será en orden ascendente). Se creará también una función para mostrar el array.
Nota: Se puede usar la función sort() o crear una función para ordenar implementando el algoritmo de la burbuja.*/

function order($array, $orden="asc"){
    if ($orden == "desc"){
        rsort($array); 
        foreach($array as $number) {
            echo $number."<br>";
        }
    } else if ($orden == "asc"){
        sort($array);
        foreach($array as $number) {
            echo $number."<br>";
        }
    } else {
        echo "Order invalid";
    }
};

$arrayn = array(1,324,2,4,5,23,212,4,12,3,4,452);
order($arrayn);
order($arrayn,"desc");
order($arrayn,"asc");
