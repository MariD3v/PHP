<?php
/*Cálculo de áreas
Haz una página que calcule el área de:
Un triángulo: a=(base*altura)/2
Un cuadrado: a=lado*lado
Un rectángulo: a=base*altura
Los datos de la base y la altura serán aleatorios entre 1 y 30.
La página debe mostrar por pantalla la siguiente información:
Con la base de 2cm y la altura 23cm, el área del triángulo es 23 cm².
Con el lado de 8cm, el área del cuadrado es 64 cm².
Con la base de 21cm y la altura 28cm, el área del rectángulo es 588 cm². */

$baseTriangulo = rand(1,30);
$alturaTriangulo = rand(1,30);
$ladoCuadrado = rand(1,30);
$baseRectangulo = rand(1,30);
$alturaRectangulo = rand(1,30);

$areaTriangulo = ($baseTriangulo*$alturaTriangulo)/2;
$areaCuadrado = ($ladoCuadrado**2);
$areaRectangulo = ($baseRectangulo*$alturaRectangulo);

echo "Con la base $baseTriangulo cm y la altura $alturaTriangulo cm, el área del triangulo es $areaTriangulo cm²<br>";
echo "Con el lado $ladoCuadrado cm, el área del cuadrado es $areaCuadrado cm²<br>";
echo "Con la base $baseRectangulo cm y la altura $alturaRectangulo cm, el área del rectangulo es $areaRectangulo cm²<br>";

