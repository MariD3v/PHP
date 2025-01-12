<!--  Crea un sistema de carrito de compras que utilice sesiones para almacenar los productos seleccionados.
Permite al usuario agregar y eliminar productos del carrito. Y muestra el contenido del carrito en una página aparte-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 58 Carrito</title>
</head>
<body>
    <h1>Carrito:</h1>
    <?php
        session_start();

        $array = ["aceite","leche","huevos"];

        if(isset($_POST["VerCarrito"])){
            foreach($array as $producto) {
                if(isset($_SESSION[$producto]) && $_SESSION[$producto]!=0){
                    echo("<h3>".$producto.":".$_SESSION[$producto]."</h3>");
                } else {
                    echo("<h3>".$producto.":0</h3>");
                }
            }
        }
    ?>
</body>
</html>