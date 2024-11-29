<?php
/*Crea un script en PHP:
Crea un script en PHP que muestre las capitales de los países ordenadas por país:
Ejemplo de salida para un país:
La capital de SPAIN es MADRID */

$capitaleseuropa = array("Italy"=>"Rome","Luxembourg"=>"Luxembourg","Belgium"=>"Brussels","Denmark"=>"Copenhagen","Finland"=>"Helsinki",
"France"=>"Paris","Slovakia"=>"Bratislava","Slovenia"=>"Ljubljana","Germany"=>"Berlin","Greece"=>"Athens","Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam","Portugal"=>"Lisbon","Spain"=>"Madrid","Sweden"=>"Stockholm","UnitedKingdom"=>"London","Cyprus"=>"Nicosia","Lithuania"=>"Vilnius",
"CzechRepublic"=>"Prague","Estonia"=>"Tallin","Hungary"=>"Budapest","Latvia"=>"Riga","Malta"=>"Valetta","Austria"=>"Vienna","Poland"=>"Warsaw");

ksort($capitaleseuropa);

foreach ($capitaleseuropa as $pais => $capital){
    echo "La capital de $pais es $capital<br>";
}