<?php
/*Almacena una lista de bandas de música y realiza las funciones especificadas
Crea una estructura para almacenar una lista de bandas de música. Cada banda tendrá la siguiente información como ejemplo The Beatles:
Cantante1 = John
Cantante2 = Paul
Guitarrista = George
Batería = Ringo
Canciones = Love me do, Hey Jude, Yellow Submarine
Realiza y prueba las siguientes funciones:
● Una función que muestre solamente la lista de canciones de una banda. El nombre de la banda se pasará como parámetro.
● Una función que muestre toda la información para una banda. La función tendrá dos parámetros: lista de bandas y la banda a buscar. 
En el caso que no se pase ningún parámetro para la banda a buscar, mostrará la primera banda de la lista.
● Una función que muestre para todas las bandas, su lista de canciones. 
Se podrá elegir con un parámetro si se desea la lista completa de canciones o un número de canciones determinado.
● Una función que muestre todos los baterías de todas las bandas por defecto si no le pasa otra categoría como: 
cantante1, cantante2 o guitarrista.
● Una función que muestre toda la estructura con toda la información. */

$cancionesBeatles = array("Love me do", "Hey Jude", "Yellow Submarine");
$beatles = array("Cantante1" => "John","Cantante2" => "Paul","Guitarrista" => "George","Batería" => "Ringo", "Canciones" => $cancionesBeatles);

$cancionesNirvana = array("Something in the way", "Smells like teen spirit", "Rape me");
$nirvana = array("Cantante" => "Kurt","Guitarrista" => "Pat","Batería" => "Dave", "Canciones" => $cancionesNirvana);

function cancionesBanda($band){
    echo "Canciones:<br>";
    $songs = $band["Canciones"];
    foreach ($songs as $song){
        echo $song."<br>";
    }
}

cancionesBanda($beatles);
cancionesBanda($nirvana);

function info($listBand, $band = null){

    if($band == null){
        $band = $listBand[0];
    }
    echo "Info:<br>Canciones:<br>";
    $songs = $band["Canciones"];
    foreach ($songs as $song){
        echo $song."<br>";
    }

    $integrantes = $band;
    unset($integrantes["Canciones"]);
    echo "Integrantes:<br>";
    foreach ($integrantes as $cargo => $integrante){
        echo $cargo.":".$integrante."<br>";
    }
}

$listBands = array($beatles, $nirvana);
info($listBands,$beatles);
info($listBands, $nirvana);
info($listBands);

function cancionesBandas($listBand, $number = null){
    if ($number == null){
        foreach ($listBand as $band){
            echo "<br>".cancionesBanda($band);
        }
    } else {
        foreach ($listBand as $band){
            if ($number <= count($band["Canciones"])){
                for ($i = 0;$i<$number;$i++){
                    echo "<br>".$band["Canciones"][$i];
                }
            }
        }
    }
}

cancionesBandas($listBands);
cancionesBandas($listBands,3);
