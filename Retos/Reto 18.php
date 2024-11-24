<?php 
/* De € a céntimos
Realizar un programa que genere un número de céntimos aleatorio entre 1000 y 5000 y me muestre por pantalla el
número de euros y céntimos. Ejemplo: 4437 céntimos son 44,37 euros. */

$centimos = rand(1000, 5000);
$euros = $centimos/100;


echo "$centimos céntimos son $euros euros";