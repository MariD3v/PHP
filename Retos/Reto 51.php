<?php
/* Buscar palabras que comiencen con una letra específica:
a. Crea una expresión regular para encontrar todas las palabras que comienzan con la letra "A".
b. Prueba tu expresión con diferentes cadenas que contengan palabras con A. */

$patron = "/\b[Aa][A-Za-z]*\b/";

$cadena1 = "Amigos asistieron al evento de ayer";
$cadena2 = "El sol brilla hoy, pero ayer estaba nublado";

preg_match_all($patron, $cadena1, $coincidencias1); 
preg_match_all($patron, $cadena2, $coincidencias2); 

print_r($coincidencias1);
print_r($coincidencias2);
