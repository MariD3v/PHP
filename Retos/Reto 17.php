<?php 
/* Operaciones matemáticas
Realizar un ejercicio que, a partir de dos variables enteras llamadas $num1 y $num2, asigne valor a estas variables de
manera aleatoria y muestre por pantalla los siguientes mensajes en función del valor asignado a las variables. 
Si por ejemplo asignamos los valores 3 y 7 a $num1 y $num2 respectivamente se debe mostrar por pantalla:
El valor de la variable $num1 es: 3
El valor de la variable $num2 es: 7
La suma de 3 y 7 es: 10
El producto de 3 por 7 es: 21
El cociente de dividir 7 entre 3 es: 0.42857142857143
El resto de dividir 7 entre 3 es: 3
 */

$num1 = rand(1, 100);
$num2 = rand(1, 100);
$suma = $num1+$num2;
$producto = $num1*$num2;
$cociente = $num1/$num2;
$resto = $num1%$num2;

echo 'El valor de la variable $num1 es: '.$num1.'<br>';
echo 'El valor de la variable $num2 es: '.$num2.'<br>';
echo 'Su suma es: '.$suma.'<br>';
echo 'Su producto es: '.$producto.'<br>';
echo 'Su cociente es: '.$cociente.'<br>';
echo 'Su resto es: '.$resto.'<br>';