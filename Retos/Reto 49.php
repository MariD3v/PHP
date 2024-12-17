<?php
/*  Validación de fechas:
a. Crea una expresión regular para validar fechas en formato "DD-MM–AAAA".
b. Prueba tu expresión con diferentes formatos de fechas*/

$patron = "/^(0[1-9]|[12][0-9]|3[01])-(0[1-9]|1[0-2])-[0-9]{4}$/";

$fecha = "12-12-2024";
$fecha1 = "00-12-2024";
$fecha2 = "12-13-20245";

echo preg_match($patron, $fecha); 
echo preg_match($patron, $fecha1); 
echo preg_match($patron, $fecha2); 