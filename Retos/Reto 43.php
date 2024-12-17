<?php
/* 
Crea la clase FiguraGeometrica con los atributos:
● Protected Nombre (String).
Los métodos:
● __construct(nombre).
● getNombre().
● calcularArea():
● mostrarInformacion(): muestra “La figura es Nombre”.

Crea la clase Circulo que hereda de FiguraGeometrica que tiene el atributo:
● Private radio (float).
Con los métodos:
● __construct(nombre, radio).
● calcularArea(): a=π*radio²

Crea la clase Rectangulo que hereda de FiguraGeometrica y
contiene los atributos:
● private base (integer).
● private altura (integer).
Los métodos que tiene son:
● __construct(nombre,base,altura).
● calcularArea(): base * altura.

Por último crea un objeto círculo y otro rectángulo. Y
utilizando las funciones creadas en cada clase muestra:
El área del círculo es 23 cm².
El área del rectángulo es 54 cm²
*/

class FiguraGeometrica {
    protected $nombre;

    function __construct(string $nombre) {
    $this->nombre = $nombre;
    }
    function getNombre() {
       return $this->nombre;
    }
    public function calcularArea() { // Método abstracto, debe ser implementado en las subclases
        throw new Exception("El método calcularArea() debe ser implementado en la subclase");
    }

    public function mostrarInformacion() {
        echo "La figura es ". $this->nombre;
    }
}

class Circulo extends FiguraGeometrica{
    private $radio;

    function __construct(string $nombre, float $radio) {
    $this->nombre = $nombre;
    $this->radio = $radio;
    }
    public function calcularArea() {
        return M_PI*$this->radio**2;
    }
}

class Rectangulo extends FiguraGeometrica{
    private $base;
    private $altura;

    function __construct(string $nombre, int $base, int $altura) {
    $this->nombre = $nombre;
    $this->base = $base;
    $this->altura = $altura;
    }
    public function calcularArea() {
        return $this->base*$this->altura;
    }
}

$circulo1 = new Circulo("circulo", 14);
$rectangulo1 = new Rectangulo("rectangulo", 14,10);
$areacirculo = $circulo1->calcularArea();
echo "El area del circulo es $areacirculo";
$arearectangulo = $rectangulo1->calcularArea();
echo "El area del circulo es $arearectangulo";