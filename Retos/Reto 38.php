<?php
/*Crea una función de búsqueda
Crea una función de búsqueda con dos parámetros: el array y el
elemento a buscar en el array. Si encuentra el elemento el
resultado será la posición del elemento en el array, y en caso
negativo devolverá el valor -1. Prueba la función mostrando
mensajes si encuentra el elemento o no.
Nota:no usar ninguna función de búsqueda. */

$palabras_informatica = ["algoritmo", "programación","código", "software", "hardware", 
"base_de_datos", "servidor","cliente", "red", "internet", "web", "sitio_web", "dominio",
"hosting", "URL", "HTML", "CSS", "JavaScript", "PHP","Python", "Java", "C++", "C#", "SQL", 
"NoSQL", "desarrollador", "programador", "ingeniero_software", "tester", "analista", "bug", 
"error", "depuración", "compilación", "ejecución", "sistema_operativo", "Windows",
"Linux", "macOS", "Android", "iOS", "aplicación", "móvil","tableta", "ordenador", "portátil", 
"escritorio","periférico", "impresora", "escáner", "virus", "malware",
"firewall", "seguridad", "cifrado", "inteligencia_artificial", "machine_learning", 
"deep_learning", "big_data","cloud_computing", "virtualización", "contenedor",
"microservicio", "API", "IoT", "ciberseguridad", "hacking","penetration_testing", 
"vulnerabilidad", "exploit","algoritmo_genético", "red_neuronal", "árbol_de_decisión",
"regresión", "clasificación", "usuario", "interfaz","experiencia_de_usuario", "usabilidad", 
"accesibilidad","protocolo", "HTTP", "FTP", "SMTP", "TCP/IP","dominio_público", 
"código_abierto", "licencia", "copyright","patente", "start-up", "escalabilidad", 
"mantenimiento","optimización", "despliegue"];

function buscarArray($array, $palabra){
    $palabra = strtolower($palabra);
    $posicion = -1;
    for ($x = 0; $x <= count($array); $x++) {
        if ($array[$x] == $palabra){
            $posicion = $x;
        } 
    }
    return $posicion;
}

function traductorBuscar($valor){
    if ($valor == -1){
        echo "La palabra no existe en el array<br>";
    } else {
        echo "La palabra se encuentra en la posición $valor<br>";
    }
}
$valor1 = buscarArray($palabras_informatica, "despliegue");
$valor2 = buscarArray($palabras_informatica, "EsCAlABIlidad");
$valor3 = buscarArray($palabras_informatica, "escalabilidad");
$valor4 = buscarArray($palabras_informatica, "hola");

traductorBuscar($valor1);
traductorBuscar($valor2);
traductorBuscar($valor3);
traductorBuscar($valor4);