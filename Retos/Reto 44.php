<?php
/* Crear una página PHP que muestre información detallada sobre la solicitud actual, incluyendo:
● Método HTTP: GET o POST.
● URL completa: Incluyendo el protocolo, dominio, ruta y parámetros.
● Dirección IP del cliente.
● Navegador del usuario.
*/
$metodo_http = $_SERVER['REQUEST_METHOD'];
$protocolo = $_SERVER['SERVER_PROTOCOL'];
$dominio = $_SERVER['HTTP_HOST'];
$uri = $_SERVER['REQUEST_URI'];
$url_completa = "$protocolo://$dominio$uri";
$ip_cliente = $_SERVER['REMOTE_ADDR'];
$navegador_usuario = $_SERVER['HTTP_USER_AGENT'];

echo $metodo_http."<br>".$url_completa."<br>".$ip_cliente."<br>".$navegador_usuario;

