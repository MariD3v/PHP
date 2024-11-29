<?php
/*Valida una cadena que almacena un email
Crea una función booleana para validar una cadena que almacene un email. Ejemplo: nombre.apellido@servidor.com
Los emails válidos serán:
◦ El usuario tendrá dos partes separadas por .
◦ Solamente pueden terminar en: .com, .es
◦ Los servidores de correo válidos serán: gmail, yahoo, hotmail
Nota: Se pueden usar funciones de cadenas. Ejemplo de función explode(). */

$email = "mari.chuli@hotmail.es";

$array1 = explode(".",$email); //$array1[0] = mari $array1[2] = es
$array2 = explode("@",$array1[1]); //$array2[0] = chuli $array2[1] = hotmail

if(count($array1)==3){
    if(($array1[2] == "es" || $array1[2] == "com")&&($array2[1]=="gmail" || $array2[1]=="yahoo" || $array2[1]=="hotmail")){
        echo "Buen formato";
    } else {
        echo "Mal formato";
    }
} else {
    echo "Mal formato";
}
