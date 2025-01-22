<!--
Simulación de un carrito de compras:
● Crea una página web con un listado de productos. Cada producto tendrá un botón para “agregar al carrito”.
● Utiliza AJAX para agregar productos al carrito y muestra debajo una lista de los productos añadidos al carrito. 
Para ello tendrás que:
Crear un script en javascript donde:
    1. Crear un array para almacenar los productos.
    2. Realizar la petición GET para enviar el id del producto a agregarAlCarrito.php.
    3. Añadir el producto al carrito.
    4. Mostrar el producto en la lista.
Crear agregarAlCarrito.php donde:
    1. Se inicia un array de sesión para almacenar los productos del carrito.
    2. Se añaden los productos al array, cuando se recibe su id.
    3. Se genera la lista de productos a mostrar.
-->

<?php
    session_start();

    $product = $_REQUEST["product"];
    if(isset($_SESSION[$product])) {
        $_SESSION[$product] += 1;
    } else {
        $_SESSION[$product] = 1;
    }

    if(!isset($_SESSION["Leche"])){
        $_SESSION["Leche"]=0;
    }
    if(!isset($_SESSION["Huevos"])){
        $_SESSION["Huevos"]=0;
    }
    if(!isset($_SESSION["Aceite"])){
        $_SESSION["Aceite"]=0;
    }

    $array = array("Leche"=>$_SESSION["Leche"],"Huevos"=>$_SESSION["Huevos"],"Aceite"=>$_SESSION["Aceite"]);
    foreach($array as $clave => $valor) {
        echo $clave .": ". $valor."<br>" ;
    }

