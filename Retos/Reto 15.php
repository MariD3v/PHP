<?php 
/* ¿Par o impar?
Haz una página que dado un número aleatorio entero positivo determine si es par o impar. Emplear el operador módulo '%'. */

$numero = rand(1, 100);

if ($numero %2==0){
    echo "$numero es par";
} else {
    echo "$numero es impar";
}