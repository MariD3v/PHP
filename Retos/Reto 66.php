<?php
/*
Crea una página PHP que muestre información sobre la solicitud actual, incluyendo:
● URL completa: protocolo, dominio, ruta y parámetros.
● Dirección IP del cliente.
● Navegador del usuario.

Además, crea las siguientes funciones:

1. Una función que valide si un número de teléfono tiene un formato específico: Contiene 9 dígitos 
Y que extraiga los teléfonos del siguiente texto:
Para contactarnos, puedes llamarnos al 912345678 o al 900123456. También puedes enviarnos un WhatsApp al 612345678 o al 600123456. 
Si prefieres un contacto más directo, puedes llamarnos a nuestra línea de atención al cliente 24 horas: 800123456. 
¡Esperamos tu llamada!

2. Una función que extraiga todas las direcciones de correo del siguiente texto:
Si deseas ponerte en contacto con nuestro equipo de ventas, puedes escribirnos a ventas@tiendaonline.es. Para
consultas sobre facturación, por favor, dirígete a facturacion@tiendaonline.es. Si tienes alguna pregunta
sobre nuestros productos o servicios, no dudes en contactarnos a servicios@tiendaonline.es. 
Y para cualquier otra consulta, puedes escribirnos a consultas@tiendaonline.es. ¡Estaremos encantados de atenderte!

3. Una función que extraiga las fechas con formato DD-MM-AAAA del siguiente texto:
La reunión está programada para el 15-03-2024. Sin embargo, es posible que tengamos que posponerla al 22-03-2024. 
Por favor, confirmen su asistencia antes del 10-03-2024. La presentación del proyecto será el 05-04-2024. ¡Gracias por su colaboración!
Por último, llama a las funciones y que se muestre en la página los textos y los datos extraídos de ellos. 
*/


$protocolo = $_SERVER['SERVER_PROTOCOL'];
$dominio = $_SERVER['HTTP_HOST'];
$uri = $_SERVER['REQUEST_URI'];
$url_completa = "$protocolo://$dominio$uri";

$ip_cliente = $_SERVER['REMOTE_ADDR'];
$navegador_usuario = $_SERVER['HTTP_USER_AGENT'];

echo "Solicitud actual: <br>Url: ".$url_completa." IP : ".$ip_cliente." Navegador: ".$navegador_usuario;

function validarTelefono($texto){
    preg_match_all("/[0-9]{9}/", $texto, $coincidencias); 
    print_r($coincidencias[0]);

}

$texto1 = "Para contactarnos, puedes llamarnos al 912345678 o al 900123456. También puedes enviarnos un WhatsApp al 612345678 o al 600123456. Si prefieres un contacto más directo, puedes llamarnos a nuestra línea de atención al cliente 24 horas: 800123456. ¡Esperamos tu llamada!";
validarTelefono($texto1);

function validarCorreo($texto){
    preg_match_all("/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}/i", $texto,$coincidencias);
    print_r($coincidencias[0]);
}

$texto2 = "Si deseas ponerte en contacto con nuestro equipo de ventas, puedes escribirnos a ventas@tiendaonline.es. Para consultas sobre facturación, por favor, dirígete a facturacion@tiendaonline.es. Si tienes alguna preguntasobre nuestros productos o servicios, no dudes en contactarnos a servicios@tiendaonline.es. Y para cualquier otra consulta, puedes escribirnos a consultas@tiendaonline.es. ¡Estaremos encantados de atenderte!";
validarCorreo($texto2);

function validarFecha($texto){
    preg_match_all("/(0[1-9]|[12][0-9]|3[01])-(0[1-9]|1[0-2])-[0-9]{4}/", $texto,$coincidencias);
    print_r($coincidencias[0]);
}

$texto3 = "La reunión está programada para el 15-03-2024. Sin embargo, es posible que tengamos que posponerla al 22-03-2024. Por favor, confirmen su asistencia antes del 10-03-2024. La presentación del proyecto será el 05-04-2024. ¡Gracias por su colaboración!Por último, llama a las funciones y que se muestre en la página los textos y los datos extraídos de ellos.";
validarFecha($texto3);

?>