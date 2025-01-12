<!--  Crea un formulario de login con usuario y contraseña. Al enviar el formulario, verifica las credenciales
(almacenadas en un array).Si las credenciales son correctas, iniciar una sesión y redirigir al usuario a una página de bienvenida.-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 57</title>
</head>
<body>
    <?php
        if(isset($_POST["submit"]) && !empty($_POST["pass"]) && !empty($_POST["user"])){
            session_start();
            if($_POST["user"]== "mari" && $_POST["pass"] == "1234"){
                $_SESSION["user"] = $_POST["user"];
                $_SESSION["pass"] = $_POST["pass"];
                echo ("Bienvenido/a ".$_POST["user"]);
            } else {
                echo ("Error en la autenticación");
            }
        } else {
            echo ("Rellena los campos vacíos");
        }
    ?>
</body>
</html>