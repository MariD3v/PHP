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

<?php
    $valor1 = isset($_POST["valor1"]) ? floatval($_POST["valor1"]) : 0;
    $valor2 = isset($_POST["valor2"]) ? floatval($_POST["valor2"]) : 0;
    $operacion = isset($_POST["select"]) ? $_POST["select"] : "";

    if($operacion == "sumar"){
        echo $valor1+$valor2;
    } else if($operacion == "restar"){
        echo $valor1-$valor2;
    } else if ($operacion == "dividir"){
        echo $valor1/$valor2;
    } else {
        echo $valor1*$valor2;
    }
