<?php
/*Verificación de DNI:
a. Escribe una expresión regular para validar un DNI:
    i. Que tenga 8 dígitos.
    ii. Que acabe con una letra.
b. Prueba tu expresión con DNIs válidos e inválidos. */

$patron = "/^[0-9]{8}[A-Za-z]$/";

$dni1 = "12345678Z";
$dni2 = "1234567A"; 
$dni3 = "123456789A";
$dni4 = "12345678z"; 
$dni5 = "abcdefghiJ";

echo preg_match($patron, $dni1); 
echo preg_match($patron, $dni2);  
echo preg_match($patron, $dni3); 
echo preg_match($patron, $dni4);  
echo preg_match($patron, $dni5); 
