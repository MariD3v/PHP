<?php
/* Validación de correo electrónico:
a. Crea una expresión regular para validar una dirección de correo electrónico. Tiene que tener el formato:
    nombre@dominio.extensionDominio
    1. Nombre: puede contener números y letras, pero no puede estar vacío.
    2. @ tiene que haber uno siempre.
    3. Los dominios permitidos son: gmail, outlook y yahoo.
    4. Extensión de dominio permitidos: .es y .com.
b. Prueba tu expresión con diferentes formatos de correo válidos e inválidos. */

$patron = "/^[a-zA-Z0-9]+@(gmail||outlook|yahoo)\.(com|es)$/";

$correo1 = "maria@gmail.com";
$correo2 = "maria@.com";
$correo3 = "@gmail.com";
$correo4 = "maria@gmail";

echo preg_match($patron, $correo1);
echo preg_match($patron, $correo2);
echo preg_match($patron, $correo3);
echo preg_match($patron, $correo4);