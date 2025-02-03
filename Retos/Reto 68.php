<?php
/*
Crea un formulario donde el usuario introduzca su nombre y que permita al usuario seleccionar su tema de color preferido
(opciones: fondo blanco, fondo azul y fondo negro con letras blancas). Al enviar el formulario, almacena la preferencia en
una cookie y le lleva a una página de bienvenida con el fondo del color seleccionado y el siguiente texto:
¡Bienvenid@ “NombreUsuario”!
Este es el tema que has seleccionado, espero que sea de tu agrado.
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (empty($_POST["name"])) {
        $nameErr = "Nombre obligatorio";
    } else {
        $name = test_input($_POST["name"]);
    }
    
    if (empty($_POST["tema"])) {
        $temaErr = "Tema obligatorio";
    } else {
        $tema = test_input($_POST["tema"]);
    }

    if(isset($name) && isset($tema)){
        setcookie("tema", $tema, time() + (86400 * 30), "/");
        setcookie("name", $name, time() + (86400 * 30), "/");
    }

    if(isset($_COOKIE['name']) && isset($_COOKIE['tema']) && !empty($name)){
        header('Location: Ejercicio 4 Bienvenida.php');
        
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error"> <?php echo $nameErr;?></span><br>
        Tema:
        <input type="radio" name="tema" <?php if (isset($tema) && $tema=="white") echo "checked";?> value="white">Fondo blanco
        <input type="radio" name="tema" <?php if (isset($tema) && $tema=="blue") echo "checked";?> value="blue">Fondo azul
        <input type="radio" name="tema" <?php if (isset($tema) && $tema=="black") echo "checked";?> value="black">Fondo negro con letras blancas  
        <span class="error"> <?php echo $temaErr;?></span><br>
        <input type="submit" name="submit" value="Submit">  
    </form>
</body>
</html>