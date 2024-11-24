<?php 
/* Calcula el salario
Haz una página que calcule el salario de un trabajador con un aumento aleatorio entre el 10% y el 20%. La página debe mostrar 
por pantalla la siguiente información:
El sueldo base es de 1200€
El complemento es del 17%
El sueldo final es de 1404€ */

$salarioBase = 1200;
$aleatorio = rand(10, 20);
$sueldoFinal = (($salarioBase*$aleatorio)/100)+$salarioBase;

echo "Salario base: $salarioBase<br>";
echo "El complemento es de: $aleatorio<br>";
echo "Sueldo final: $sueldoFinal";

