<?php 
/* Tres números
Realizar un programa que, a partir de tres variables enteras con valores generados aleatoriamente y llamadas $num1, $num2 y
$num3, muestre por pantalla los tres números ordenados de mayor a menor. Para ello habrá que crear una serie de variables 
adicionales. Si por ejemplo asignamos los valores 15, 94 y 73 a $num1, $num2 y $num3 respectivamente, por pantalla debe mostrarse:
Los números generados son: 15, 94 y 73.
Los números ordenados son: 94, 73 y 15.
 */

 $num1 = rand(1, 100);
$num2 = rand(1, 100);
$num3 = rand(1, 100);

echo "Los numeros generados son $num1, $num2, $num3";

if ($num1 >= $num2){
    if ($num2 >= $num3){
        echo "Los numeros ordenados son $num1, $num2, $num3";
    } else if ($num1 >= $num3){
        echo "Los numeros ordenados son $num1, $num3, $num2";
    } else {
        echo "Los numeros ordenados son $num3, $num1, $num2";
    }
} else if ($num2 >= $num3){
    if ($num3 >= $num1){
        echo "Los numeros ordenados son $num2, $num3, $num1";
    } else {
        echo "Los numeros ordenados son $num2, $num1, $num3";
    }
} else {
    echo "Los numeros ordenados son $num3, $num2, $num1";
}