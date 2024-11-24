<?php 
/* Día de la semana
Haz una página que dado un número aleatorio del 1 al 7 indique a qué día de la semana corresponde. La página debe mostrar por pantalla:
El 4º día de la semana es Jueves. */

$dia = rand(1, 7);
$dias = array("lunes","martes","miercoles","jueves","viernes","sabado","domingo");
$diaLetra = $dias[$dia-1];

echo "El $dia º día de la semana es $diaLetra.";