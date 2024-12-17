<?php
/*. Extracción de números de un texto:
a. Escribe una expresión regular para extraer todos los números de una cadena de texto.
b. Prueba tu expresión con diferentes tipos de cadenas */

$texto = " 45 hola 34 ds2 123 1230 12039 asd 91";
$texto2 = " 45 hola 34 ds2asda sd sdg 123 1dfg0 12 dhffgsg h45 h4564 56h356 sdgd f39 asd 91";
$patron = "/[0-9]+/";

preg_match_all($patron, $texto, $coincidencias);
echo "Números: ";
print_r($coincidencias[0]);

preg_match_all($patron, $texto2, $coincidencias);
echo "Números: ";
print_r($coincidencias[0]);