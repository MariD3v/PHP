<!--
Validación de un formulario en tiempo real:
● Crea un formulario de registro con los campos: nombre, correo electrónico y contraseña.
● Utiliza AJAX para validar cada campo mientras que el usuario escribe, sin necesidad de enviar el formulario. 
Para realizar este apartado hay:
    i. Crear una función en javascript ValidarCampo(campo), que detecte cuando se escribe algo en el texto y a través de un
    método POST envíe ese campo a un archivo.php que realice la validación siguiente:
    1. Nombre: sólo puede contener letras y debe tener mínimo 3 caracteres.
    2. Correo electrónico: tiene que tener el formato de correo electrónico:
        a. Nombre: puede contener números y letras.
        b. Tiene que tener @.
        c. Los dominios permitidos son: gmail y outlook.
        d. Las extensiones de dominio permitidas son: .es y .com
● Muestra los mensajes de error debajo de cada campo.
-->

<?php

if(isset($_POST["name"]) && isset($_POST["value"])){
    if($_POST["name"] == "name"){
        $regex = "/^[a-zA-Z]{3,}$/";
        if(!preg_match($regex, $_POST["value"])){
            echo "Nombre inválido";
        }
    }
    if($_POST["name"] == "email"){
        $regex = "/^[a-zA-Z0-9]+@(gmail|outlook)(.es|.com)$/";
        if(!preg_match($regex, $_POST["value"])){
            echo "Email inválido";
        }
    }
    if($_POST["name"] == "password"){
        if($_POST["value"] != ""){
            echo "Introduce una contraseña";
        }
    }
}