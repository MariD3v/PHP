<?php 
/* Área del triángulo
Haz una página que calcula el área de un triángulo cuya fórmula es a=(b*h)/2. Los datos de la base y la altura serán
aleatorios entre 1 y 15. La página debe mostrar por pantalla la siguiente información:
La base mide 12
La altura mide 10
El área del triángulo es 60
 */

$b = rand(1, 15);
$h = rand(1, 15);
$area = ($b*$h)/2;

echo "La base mide $b<br>La altura mide $h<br>El área del triángulo es $area";