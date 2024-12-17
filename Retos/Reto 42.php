<?php
/* 
Crea la clase Empleado con los siguientes atributos:
● nombre (string).
● apellido (string).
● puesto (string).
● salario (float).
● antiguedad (integer).

Implementa los métodos:
● __construct(): que inicialice todos los atributos.
● calcular_sueldo_anual(): calcula el saldo anual basándose en el salario mensual, devuelve el sueldo anual.
● aumentar_antiguedad(): incrementa la antiguedad en un año.

Crea la clase Departamento con los siguientes atributos:
● nombre (string).
● jefe (Empleado).
● empleados (array de objetos de Empleado).

Y los métodos:
● __construct(): Constructor para inicializar los atributos nombre y jefe.
● agregar_empleado(): agrega un nuevo empleado al departamento.
● calcular_sueldo_total(): calcula el sueldo total de todos los empleados del departamento a partir del sueldo anual de cada uno.
● mostrar_empleados(): muestra el número de empleados que tiene ese departamento.

Tras crear estas clases, crea los siguientes empleados:
● Juan Pérez con puesto de desarrollador, salario de 2500€ y antigüpuesto 2 años.
● María López puesto de desarrollador, salario de 2500€ y antigüpuesto de 3 años.
Crea el departamento de Desarrollo con María como jefe.
Agrega como empleados a María y a Juan.
Calcula el sueldo total del departamento de Desarrollo anualmente y muestralo por pantalla.
Muestra el número de empleados del departamento de desarrollador.
*/

class Empleado {
    public $nombre;
    public $apellido;
    public $puesto;
    public $salario;
    public $antiguedad;
    public function __construct(string $nombre,string $apellido,string $puesto, float $salario, int $antiguedad) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->puesto = $puesto;
    $this->salario = $salario;
    $this->antiguedad = $antiguedad;
    }
    public function calcularSueldoAnual() {
       return $this->salario*12;
    }
    public function aumentarAntiguedad() {
        return $this->antiguedad+1;
     }
}

class Departamento{
    public $nombre;
    public $jefe;
    public $empleados;
    public function __construct(string $nombre,Empleado $jefe) {
    $this->nombre = $nombre;
    $this->jefe = $jefe;
    $this->empleados = [];
    }

    public function agregarEmpleado(Empleado $emple){
        array_push($this->empleados,$emple);
    }

    public function calcularSueldoTotal(){
        $cont = 0;
        foreach($this->empleados as $emple) {
            $cont += $emple->calcularSueldoAnual(); ;
        }

        return $cont;
    }

    public function mostrarEmpleados(){
        return count($this->empleados);
    }
}

$empleado1 = new Empleado("Juan", "Perez", "desarrollador", 2500, 2);
$empleado2 = new Empleado("Maria", "Lopez", "desarrollador", 2500, 3);

$departamento1 = new Departamento("desarrollo", $empleado2);
$departamento1->agregarEmpleado($empleado1);
$departamento1->agregarEmpleado($empleado2);
echo $departamento1->calcularSueldoTotal();
echo $departamento1->mostrarEmpleados();