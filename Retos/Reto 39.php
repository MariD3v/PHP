<?php
/*Valida una cadena que almacena una página web

Crea una función booleana para validar una cadena que almacena una página web.

Las webs válidas tendrán:
◦ El protocolo utilizado: http o https
◦ Los signos ://
◦ El subdominio: www
◦ Un dominio: .iesgoya. (puede ser el que sea, pero tiene que estar entre dos .)
◦ Una extensión: .es o .com
Nota: Se pueden usar funciones de cadenas. Ejemplo de función explode(). */

function validarURL($url){
    
    $validado = "false";
    
    $arrayURL = explode(".",$url);
    
    if(($arrayURL[0]=="https://www" || $arrayURL[0]=="http://www") && ((count($arrayURL))>=3) && ($arrayURL[count($arrayURL)-1]== "es/" || $arrayURL[count($arrayURL)-1]== "com/") && (strlen($arrayURL[1])>0)){
        $validado = "true";
    }
    return $validado;
}

$url1 = "https://www.iesgoya.com/";
$url2 = "http://www.iesgoya.instituto.es/";
$url3 = "http://www.holi.es/";
$url4 = "http://www.es/";
$url5 = "http://www..es/";

echo validarURL($url1);
echo validarURL($url2);
echo validarURL($url3);
echo validarURL($url4);
echo validarURL($url5);