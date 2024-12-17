<?php
/*Almacena una lista de productos de informática y realiza las funciones especificadas

Crea una estructura para almacenar una lista de productos de informática.
Cada producto tendrá la siguiente información como ejemplo Ratón inalámbrico:
Descripción= ratón inalámbrico
Precio= 15€
Unidades= 50
Colores = negro, azul y blanco
Realiza y prueba las siguientes funciones:
Una función que muestre solamente todos los datos asociados a un producto. 
El nombre se pasará como parámetro.
Una función que muestre para todos los productos, su precio.
Una función que muestre todas las unidades de todos los productos
Una función que muestre toda la estructura con toda la información. */

$raton = array("precio" => 15,"unidades" => 50, "color" => ["negro","azul","blanco"]);
$alfombrilla = array("precio" => 10,"unidades" => 30, "color" => ["azul","rosa"]);
$pantalla = array("precio" => 30,"unidades" => 10, "color" => ["negro"]);
$productos= array("raton" => $raton, "alfombrilla" => $alfombrilla,"pantalla" => $pantalla);

function printProducto($producto, $array){
    foreach($array as $product => $arrayProductos){
        if ($producto == $product){
            echo "<h1>$product:</h1>";
            foreach($arrayProductos as $descripcion => $valueDescripcion){
                if (is_array($valueDescripcion)){
                    echo "$descripcion :";
                    foreach ($valueDescripcion as $valueDescripcion2){
                         echo "$valueDescripcion2 ";
                    }
                } else {
                    echo "$descripcion : $valueDescripcion<br>";
                }
            }
        }
    }
}

function printProductoPrice($array){
    echo "<h1>Precios:</h1>";
    foreach($array as $product => $arrayProductos){
        foreach($arrayProductos as $descripcion => $valueDescripcion){
            if($descripcion == "precio"){
                echo "$product: $valueDescripcion €<br>";
            }
        }
    }
};

function printProductoUnidades($array){
    echo "<h1>Unidades:</h1>";
    foreach($array as $product => $arrayProductos){
        foreach($arrayProductos as $descripcion => $valueDescripcion){
            if($descripcion == "unidades"){
                echo "$product: $valueDescripcion unidades<br>";
            }
        }
    }
};

function printProductos($array){
    echo "<h1>Información de todos los productos:</h1>";
    foreach($array as $product => $arrayProductos){
        echo "<h2>$product:</h2>";
        foreach($arrayProductos as $descripcion => $valueDescripcion){
            if (is_array($valueDescripcion)){
                echo "$descripcion :";
                foreach ($valueDescripcion as $valueDescripcion2){
                     echo "$valueDescripcion2 ";
                }
            } else {
                echo "$descripcion : $valueDescripcion<br>";
            }
        }
    }
}

printProducto("raton",$productos);
printProducto("alfombrilla",$productos);
printProductoPrice($productos);
printProductoUnidades($productos);
printProductos($productos);