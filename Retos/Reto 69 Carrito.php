<?php
/*Crea una tienda de libros online que permita a los usuarios navegar por un catálogo de libros, agregar libros a su carrito
de compras y ver el contenido del carrito en una página aparte. Utiliza sesiones para almacenar los productos seleccionados en el carrito.

● Mostrar catálogo de libros: Muestra una lista de libros disponibles (puedes usar datos estáticos). Cada libro
debe tener un título, autor, precio y un botón "Agregar al carrito". Ejemplo de catálogo:
Título: "Cien años de soledad". Autor: Gabriel García Márquez.
Precio: 25€ 
Agregar al carrito
Título: "El principito". Autor: Antoine de Saint-Exupéry.
Precio: 12€ 
Agregar al carrito
Título: "Don Quijote de la Mancha". Autor: Miguel de Cervantes Saavedra. Precio: 30€ 
Agregar al carrito
Título: "1984". Autor: George Orwell. Precio: 15€ 
Agregar al carrito
Título: "Harry Potter y la piedra filosofal". Autor: J.K.
Rowling. Precio: 20€ 
Agregar al carrito

● Agregar al carrito: Al hacer clic en el botón "Agregar al carrito", el libro se agrega al carrito de compras almacenado en la sesión.

● Ver carrito: Muestra una página con el contenido del carrito de compras. Debe mostrar el título, autor y precio de cada libro en el 
carrito, así como la cantidad de cada libro. Permite al usuario eliminar libros del carrito o actualizar la cantidad de cada libro.

● Calcular total: Calcula el precio total de los libros en el carrito y lo muestra en la página del carrito.*/

session_start();

if(isset($_POST["añadir1"])){
    if(isset($_SESSION["libro1"])){
        $_SESSION["libro1"] += 1;
    } else {
        $_SESSION["libro1"] = 1;
    }
}

if(isset($_POST["añadir2"])){
    if(isset($_SESSION["libro2"])){
        $_SESSION["libro2"] += 1;
    } else {
        $_SESSION["libro2"] = 1;
    }
}

if(isset($_POST["añadir3"])){
    if(isset($_SESSION["libro3"])){
        $_SESSION["libro3"] += 1;
    } else {
        $_SESSION["libro3"] = 1;
    }
}

if(isset($_POST["añadir4"])){
    if(isset($_SESSION["libro4"])){
        $_SESSION["libro4"] += 1;
    } else {
        $_SESSION["libro4"] = 1;
    }
}

if(isset($_POST["añadir5"])){
    if(isset($_SESSION["libro5"])){
        $_SESSION["libro5"] += 1;
    } else {
        $_SESSION["libro5"] = 1;
    }
}

if(isset($_POST["eliminar1"])){
    if(isset($_SESSION["libro1"]) && $_SESSION["libro1"]>0){
        $_SESSION["libro1"] -= 1;
    }
}

if(isset($_POST["eliminar2"])){
    if(isset($_SESSION["libro2"]) && $_SESSION["libro2"]>0){
        $_SESSION["libro2"] -= 1;
    }
}

if(isset($_POST["eliminar3"])){
    if(isset($_SESSION["libro3"]) && $_SESSION["libro3"]>0){
        $_SESSION["libro3"] -= 1;
    }
}

if(isset($_POST["eliminar4"])){
    if(isset($_SESSION["libro4"]) && $_SESSION["libro4"]>0){
        $_SESSION["libro4"] -= 1;
    }
}

if(isset($_POST["eliminar5"])){
    if(isset($_SESSION["libro5"]) && $_SESSION["libro5"]>0){
        $_SESSION["libro5"] -= 1;
    }
}

$total = 0;

if(isset($_SESSION["libro1"])){
    $total += $_SESSION["libro1"]*25;
}
if(isset($_SESSION["libro2"])){
    $total += $_SESSION["libro2"]*12;
}
if(isset($_SESSION["libro3"])){
    $total += $_SESSION["libro3"]*30;
}
if(isset($_SESSION["libro4"])){
    $total += $_SESSION["libro4"]*15;
}
if(isset($_SESSION["libro5"])){
    $total += $_SESSION["libro5"]*20;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div>
            <p>Título: "Cien años de soledad" Autor: Gabriel García Márquez</p>
            <p>Precio: 25€ </p>
            <p>Cantidad: <?php if(isset($_SESSION["libro1"])){echo $_SESSION["libro1"]." unidades";} else {echo "0 unidades";}?></p>
            <input type="submit" name="añadir1" value="+1">
            <input type="submit" name="eliminar1" value="-1">
        </div>
        <div>
            <p>Título: "El principito" Autor: Antoine de Saint-Exupéry</p>
            <p>Precio: 12€ </p>
            <p>Cantidad: <?php if(isset($_SESSION["libro2"])){echo $_SESSION["libro2"]." unidades";} else {echo "0 unidades";}?></p>
            <input type="submit" name="añadir2" value="+1">
            <input type="submit" name="eliminar2" value="-1">
        </div>
        <div>
            <p>Título: "Don Quijote de la Mancha" Autor: Miguel de Cervantes Saavedra</p>
            <p>Precio: 30€ </p>
            <p>Cantidad: <?php if(isset($_SESSION["libro3"])){echo $_SESSION["libro3"]." unidades";} else {echo "0 unidades";}?></p>
            <input type="submit" name="añadir3" value="+1">
            <input type="submit" name="eliminar3" value="-1">
        </div>
        <div>
            <p>Título: "1984" Autor: George Orwell</p>
            <p>Precio: 15€ </p>
            <p>Cantidad: <?php if(isset($_SESSION["libro4"])){echo $_SESSION["libro4"]." unidades";} else {echo "0 unidades";}?></p>
            <input type="submit" name="añadir4" value="+1">
            <input type="submit" name="eliminar4" value="-1">
        </div>
        <div>
            <p>Título: "Harry Potter y la piedra filosofal" Autor: J.K.</p>
            <p>Precio: 20€ </p>
            <p>Cantidad: <?php if(isset($_SESSION["libro5"])){echo $_SESSION["libro5"]." unidades";} else {echo "0 unidades";}?></p>
            <input type="submit" name="añadir5" value="+1">
            <input type="submit" name="eliminar5" value="-1">
        </div>
        <p>Total: <?php echo $total;?>€</p>
    </form>
</body>
</html>