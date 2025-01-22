<!--
Carga de texto de forma dinámica:
● Crea una página web con un botón, que al hacer clic, cargue un fragmento de texto en un párrafo desde el archivo contenido.php.
● Utiliza AJAX para realizar la solicitud con un método GET y actualizar el div en la página mostrando el contenido del párrafo.
-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 60</title>
</head>
<body>
    <input type="button" value="Cargar" onclick="cargar()"/>
    <div></div>
    <script>
        let div = document.getElementsByTagName("div")[0];
        function cargar(){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    div.innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "Reto 60 Contenido.php", true);
            xmlhttp.send();
        }
    </script>
</body>
</html>