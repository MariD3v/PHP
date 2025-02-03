<?php
/* Sistema de gestión de productos y categorías (2 puntos)
Crea las siguientes clases:
● Producto:
    ○ Atributos:
    ■ nombre (string)
    ■ descripcion (string)
    ■ precio (float)
    ■ categoria (objeto de la clase Categoria)
    ○ Métodos:
    ■ Constructor: inicializa todos los atributos.
    ■ calcular_precio_con_iva(): Calcula el precio del producto con IVA (21%). Devuelve el precio con IVA.
    ■ mostrar_informacion(): Muestra la información del producto (nombre, descripción, precio).

● Categoría:
    ○ Atributos:
    ■ nombre (string)
    ■ descripcion (string)
    ■ productos (array de objetos de la clase Producto)
    ○ Métodos:
    ■ Constructor para inicializar los atributos nombre y descripcion.
    ■ agregar_producto(): Agrega un nuevo producto a la categoría.
    ■ calcular_precio_total_productos(): Calcula el precio total de todos los productos de la categoría (sin IVA).
    ■ mostrar_productos(): Muestra la información de todos los productos de la categoría.

    Crea los siguientes objetos:
● Crea las categorías:
    ○ "Electrónica" con descripción "Productos electrónicos y gadgets".
    ○ "Ropa" con descripción "Prendas de vestir para todas las ocasiones".
● Crea los productos:
    ○ “Smartphone" con descripción "Teléfono inteligente de última generación", precio 800€ y categoría "Electrónica".
    ○ "Portátil" con descripción "Ordenador portátil de alto rendimiento", precio 1200€ y categoría "Electrónica".
    ○ "Camiseta" con descripción "Camiseta de algodón de manga corta", precio 20€ y categoría "Ropa".
    ○ "Pantalón" con descripción "Pantalón vaquero para hombre", precio 40€ y categoría "Ropa".
● Muestra la siguiente información:
    1. Muestra la información de todos los productos, incluyendo el precio con IVA. Ejemplo de salida:
    Smartphone: Teléfono inteligente de última generación - 800€ (968€ con IVA)
    Portátil: Ordenador portátil de alto rendimiento - 1200€ (1452€ con IVA)
    Camiseta: Camiseta de algodón de manga corta - 20€ (24.2€ con IVA)
    Pantalón: Pantalón vaquero para hombre - 40€ (48.4€ con IVA)
    2. Calcula y muestra el precio total de los productos de cada categoría.
    Precio total de los productos de la categoría Electrónica: 2000€
    Precio total de los productos de la categoría Ropa: 60€
    3. Muestra la información de todos los productos de cada categoría.
    Productos de la categoría Electrónica:
    Smartphone: Teléfono inteligente de última generación - 800€
    Portátil: Ordenador portátil de alto rendimiento - 1200€
*/


    class Producto{
        public $nombre;
        public $descripcion;
        public $precio;
        public $categoria;  

        function __construct(string $nombre, string $descripcion, float $precio, Categoria $categoria) {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->categoria = $categoria;
        }
        public function calcular_precio_con_iva() { 
            return ($this->precio*0.21)+$this->precio;
        }

        public function mostrarInformacion() {
            echo "<br>".$this->nombre.": ".$this->descripcion." - ".$this->precio."€";
        }

        public function get_precio() {
            return $this->precio;
          }
    }
    class Categoria{
        public $nombre;
        public $descripcion;
        public $productos;

        function __construct(string $nombre, string $descripcion, array $productos) {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->productos = $productos;
        }
        public function agregar_producto($producto) {
            array_push($this->productos, $producto); 
        }
        public function calcular_precio_total_productos() {
            echo "<br>Precio total de los productos de la categoría ".$this->nombre.": ";
            $precioTotal = 0;
            foreach($this->productos as $producto) {
                $precioTotal += $producto->get_precio();
            }
            echo $precioTotal."€";
        }        
        public function mostrar_productos() {
            echo "<br>Productos de ".$this->nombre." :";
            foreach($this->productos as $producto) {
                $producto->mostrarInformacion();
            }
        }
    }
    $electronica = new Categoria("Electrónica", "Productos electrónicos y gadgets",[]);
    $ropa = new Categoria("Ropa", "Prendas de vestir para todas las ocasiones",[]);

    $smartphone = new Producto("Smartphone", "Teléfono inteligente de última generación",800,$electronica);
    $portatil = new Producto("Portátil", "Ordenador portátil de alto rendimiento",1200,$electronica);
    $camiseta = new Producto("Camiseta", "Camiseta de algodón de manga corta",20,$ropa);
    $pantalon = new Producto("Pantalón", "Pantalón vaquero para hombre",40,$ropa);

    $electronica->agregar_producto($smartphone);
    $electronica->agregar_producto($portatil);
    $ropa->agregar_producto($camiseta);
    $ropa->agregar_producto($pantalon);

    //Mostrar informacion de productos
    $smartphone->mostrarInformacion();
    echo " (con IVA ".$smartphone->calcular_precio_con_iva()."€)";
    $portatil->mostrarInformacion();
    echo " (con IVA ".$portatil->calcular_precio_con_iva()."€)";
    $camiseta->mostrarInformacion();
    echo " (con IVA ".$camiseta->calcular_precio_con_iva()."€)";
    $pantalon->mostrarInformacion();
    echo " (con IVA ".$pantalon->calcular_precio_con_iva()."€)";

    //Precio total
    $electronica->calcular_precio_total_productos();
    $ropa->calcular_precio_total_productos();

    //Mostrar informacion de productos por categoria
    $electronica->mostrar_productos();
    $ropa->mostrar_productos();
?>