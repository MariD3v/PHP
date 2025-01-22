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

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 61</title>
</head>
<body>
    <div style="border: 1px solid pink; margin:5px; padding:10px; width:100px;">
        <h3>Aceite</h3>
        <input type="submit" value="+" name="Aceite" onclick="añadir(this.name)"/>
    </div>
    <div style="border: 1px solid pink; margin:5px; padding:10px; width:100px;"> 
        <h3>Leche</h3>
        <input type="submit" value="+" name="Leche" onclick="añadir(this.name)"/>
    </div>
    <div style="border: 1px solid pink; margin:5px; padding:10px; width:100px;">
        <h3>Huevos</h3>
        <input type="submit" value="+" name="Huevos" onclick="añadir(this.name)"/>
    </div>
    <h1>Carrito:</h1>
    <div id="carrito"></div>
    <script>   
        function añadir(name){
            let divCarrito =document.getElementById("carrito");
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    divCarrito.innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "Reto 61 Carrito.php?product="+name, true);
            xmlhttp.send();
        }
    </script>
</body>
</html>