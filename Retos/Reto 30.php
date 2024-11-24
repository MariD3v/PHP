<?php
/* Función para obtener películas
Crea una función a partir del array del ejercicio anterior que reciba un género como parámetro y devuelva un array con las películas asociadas:
Función PeliculasPorGenero(genero)
Devuelve array de títulos de películas.
*/

function PeliculasPorGenero($genero){
    $comedia = array("Forest Gump","Los Simpsons","Amelie");
    $biografica = array("La lista de schindler", "Oppenheimer", "El lobo de wall street");
    $thriller = array("El silencio de los corderos", "Origen", "Seven");
    $romance = array("Nothing hill", "Me before you");
    $peliculas = array("Comedia"=>$comedia,"Biográfica"=>$biografica,"Thriller"=>$thriller,"Romance"=>$romance);

    if (array_key_exists($genero, $peliculas)){
        return $peliculas[$genero];
    }
}

foreach (PeliculasPorGenero("Comedia") as $pelicula){
    echo $pelicula."<br>";
}
