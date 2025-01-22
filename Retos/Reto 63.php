<!--
Calculadora:
● Crea una web donde el usuario pueda ingresar números y seleccionar una operación (suma, resta, multiplicación y división).
i. Crea dos input para intentar los números y un select con las 4 operaciones posibles.
ii. Añade un botón “calcular”.
● Utiliza AJAX para enviar los datos a un script PHP y obtener el resultado.
i. Crea un script javascript con una función calcular():
    1. Abre una petición POST para pasar los 3 parámetros.
    2. Obtiene un resultado que se mostrará en un div.
ii. Crea el archivo calcular.php:
    1. Obtiene las variables POST.
    2. Realiza un switch con los diferentes casos y operaciones.
    3. Devuelve el resultado.
-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 63</title>
</head>
<body>
    <input type="number" id="valor1"/>
    <input type="number" id="valor2"/>
    <select>
        <option value="sumar">Sumar</option>
        <option value="restar">Restar</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
    </select>
    <input type="button" value="Calcular" onclick="calcular()"/>
    <h3>Resultado</h3>
    <div id="div"></div>
    <script>
        function calcular(){
            let select =document.getElementsByTagName("select")[0].value;
            let valor1 =document.getElementById("valor1").value;
            let valor2 =document.getElementById("valor2").value;
            let div=document.getElementById("div");

            if (valor1 === "" || valor2 === "") {
                div.innerHTML = "Por favor, ingrese ambos números.";
            } else {
                let formData = new FormData();
                formData.append("valor1", valor1);
                formData.append("valor2", valor2);
                formData.append("select", select);

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        div.innerHTML = this.responseText;
                    }
                };
            xmlhttp.open("POST", "Reto 63 Calculadora.php", true);
            xmlhttp.send(formData);
            }
        }
    </script>
</body>
</html>