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

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 64</title>
</head>
<body>
<form method="post">
    Name: <input type="text" name="name" onkeyup="validarCampo(this.value,this.name)">
    <span id="errorName"></span><br>
    E-mail: <input type="text" name="email" onkeyup="validarCampo(this.value,this.name)">
    <span id="errorEmail"></span><br>
    Contraseña: <input type="password" name="password" onkeyup="validarCampo(this.value,this.name)">
    <span id="errorPass"></span>
    <input type="submit"/>
</form>
<script>
    function validarCampo(value,name){
        let errorName = document.getElementById("errorName");
        let errorEmail = document.getElementById("errorEmail");
        let errorPass = document.getElementById("errorPass");

        let formData = new FormData();
        formData.append("value", value);
        formData.append("name", name);

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if(name=="name"){
                    errorName.innerHTML = this.responseText;
                } else if(name=="email"){
                    errorEmail.innerHTML = this.responseText;
                }else {
                    errorPass.innerHTML = this.responseText;
                }
            }
        };
        xmlhttp.open("POST", "Reto 64 Formulario.php", true);
        xmlhttp.send(formData);
    }
</script>
</body>
</html>