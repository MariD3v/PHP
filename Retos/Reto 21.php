<?php 
/* Cálculo de pulsaciones
Realizar un programa que calcule los límites para las pulsaciones del corazón según la edad cuando se hace ejercicio aeróbico. 
La fórmula es:
Límite inferior es (220-edad) * 0.65
Límite superior es (220-edad) * 0.85
Por ejemplo para una persona de 30 años los límites de las pulsaciones sería:
(220-30) * 0.65 = 123 y (220-30) * 0.85 = 161.5
El programa generará una edad y unas pulsaciones de entrada de forma aleatoria y mostrará teniendo en cuenta la edad y las
pulsaciones, diferentes mensajes: “Pulsaciones bajas”, “Pulsaciones normales”, “Pulsaciones altas”.
 */

$edad = rand(1,100);
$pulsaciones = rand (1,200);

$lInf = (220-$edad) * 0.65;
$lSup= (220-$edad) * 0.85;

if ($pulsaciones < $lInf){
    echo "Pulsaciones bajas";
} else if ($pulsaciones > $lSup){
    echo "Pulsaciones altas";
} else {
    echo "Pulsaciones normales";
}