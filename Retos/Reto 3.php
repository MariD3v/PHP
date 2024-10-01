<?php

/*Sumamos y restamos días a las fechas 
Dado que una fecha se guarda en formato de tiempo, o se puede convertir a dicho formato en caso de que sea una cadena, 
parece lógico pensar que se puede añadir o restar tiempo a las fechas. 
Es así, aunque no es tan fácil como sumar o restar directamente una cierta cantidad de días a la fecha base. 
En este ejercicio se te pide que averigües cómo se puede sumar o restar una cantidad de tiempo a una fecha y que apliques ese conocimiento
para mostrar por pantalla la fecha de hoy, la de ayer y la de mañana. 
------
Investiga sobre las posibilidades de la función strtotime(). 
En principio sirve para convertir una variable de tipo string a otra de tipo fecha, 
pero la propia función permite realizar operaciones de suma o resta de cantidades de tiempo para obtener una fecha distinta.
Ten en cuenta que, para sumar o restar a la fecha, deberás convertirla a formato tiempo, pero para mostrarla por pantalla necesitarás volverla a convertir a formato cadena.
*/

$fechaHoy = date("Y-m-d");
$fechaMañana = date("Y-m-d", strtotime("+1 day"));
$fechaAyer = date("Y-m-d", strtotime("-1 day"));

echo"Hoy: $fechaHoy<br>";
echo"Mañana: $fechaMañana<br>";
echo"Ayer: $fechaAyer<br>";
?>