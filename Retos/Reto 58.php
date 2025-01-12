<!--  Crea un sistema de carrito de compras que utilice sesiones para almacenar los productos seleccionados.
Permite al usuario agregar y eliminar productos del carrito. Y muestra el contenido del carrito en una página aparte-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 58</title>
</head>
<body>
    <form action="Reto 58.php" method="POST" style="display: flex;">
        <div style="border: 1px solid pink; margin:5px; padding:10px; width:100px;">
            <h1>Aceite</h1>
            <input type="submit" value="+" name="aceiteMas"/>
            <input type="submit" value="-" name="aceiteMenos"/>
        </div>
        <div style="border: 1px solid pink; margin:5px; padding:10px; width:100px;"> 
            <h1>Leche</h1>
            <input type="submit" value="+" name="lecheMas"/>
            <input type="submit" value="-" name="lecheMenos"/>
        </div>
        <div style="border: 1px solid pink; margin:5px; padding:10px; width:100px;">
            <h1>Huevos</h1>
            <input type="submit" value="+" name="huevosMas"/>
            <input type="submit" value="-" name="huevosMenos"/>
        </div>
    </form>
    <form action="Reto 58 Carrito.php" method="POST">
        <input type="submit" value="Ver carrito" name="VerCarrito"/>
    </form>
    <?php
        session_start();

        $array = ["aceite","leche","huevos"];

        foreach($array as $producto){
            if(isset($_POST[$producto."Mas"])){
                if(isset($_SESSION[$producto])){
                    $_SESSION[$producto] += 1;
                } else {
                    $_SESSION[$producto] = 1;
                }
            }
    
            if(isset($_POST[$producto."Menos"])){
                if(isset($_SESSION[$producto]) && $_SESSION[$producto] > 0){
                    $_SESSION[$producto] -= 1;
                } else {
                    $_SESSION[$producto] = 0;
                }
            }
        }
    ?>
</body>
</html>