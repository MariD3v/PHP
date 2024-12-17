<?php
/*Validación de contraseñas:
a. Crea una expresión regular que exija una contraseña con al menos 8 caracteres, una mayúscula, una minúscula y un número.
b. Prueba tu expresión con diferentes formatos de contraseñas válidas e inválidas.
*/

$patron = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])[A-Za-z0-9]{8,}$/";

$contraseña1 = "Password123";
$contraseña2 = "password123"; 
$contraseña3 = "PASSWORD123"; 
$contraseña4 = "Pass123";     
$contraseña5 = "Passw0rd";    

echo preg_match($patron, $contraseña1);
echo preg_match($patron, $contraseña2);
echo preg_match($patron, $contraseña3);
echo preg_match($patron, $contraseña4);
echo preg_match($patron, $contraseña5);