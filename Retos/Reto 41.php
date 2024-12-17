<?php
/* 
Crea una clase Persona con los siguientes atributos:
nombre (string), apellido (string), edad (integer).
Y los métodos:
__construct(): que inicializa todos los atributos. 
saludar(): imprime el siguiente mensaje de salida: “Hola mi nombre es “nombre” “apellido” y tengo “edad” años. 
*/

class Persona {
    public $nombre;
    public $apellido;
    public $edad;
    public function __construct(string $nombre,string $apellido,int $edad) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->edad = $edad;
    }
    public function saludar() {
        echo "Hola mi nombre es " . $this->nombre . " " . $this->apellido . "y tengo ".$this->edad." años.";
    }
}