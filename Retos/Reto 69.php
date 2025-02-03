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

if(isset($_POST["enviar"])){
    header('Location: Ejercicio 5 Carrito.php');
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
            <input type="submit" name="añadir1" value="añadir a la cesta">
        </div>
        <div>
            <p>Título: "El principito" Autor: Antoine de Saint-Exupéry</p>
            <p>Precio: 12€ </p>
            <input type="submit" name="añadir2" value="añadir a la cesta">
        </div>
        <div>
            <p>Título: "Don Quijote de la Mancha" Autor: Miguel de Cervantes Saavedra</p>
            <p>Precio: 30€ </p>
            <input type="submit" name="añadir3" value="añadir a la cesta">
        </div>
        <div>
            <p>Título: "1984" Autor: George Orwell</p>
            <p>Precio: 15€ </p>
            <input type="submit" name="añadir4" value="añadir a la cesta">
        </div>
        <div>
            <p>Título: "Harry Potter y la piedra filosofal" Autor: J.K.</p>
            <p>Precio: 20€ </p>
            <input type="submit" name="añadir5" value="añadir a la cesta">
        </div>
        <input type="submit" name="enviar" value="Ver carrito">
    </form>
</body>
</html>