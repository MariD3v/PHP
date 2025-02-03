<?php
/*
Crea un formulario con método POST que incluya los campos y las siguientes reglas de validación:
1. Nombre (dato requerido, sólo puede contener datos y espacios).
2. Correo electrónico (dato requerido, que contenga un email válido con @ y .).
3. Contraseña (dato requerido, con al menos 8 caracteres, una mayúscula, una minúscula y un número).
4. Teléfono (dato opcional, sólo contiene 6 dígitos).
5. Género (dato requerido).
Hay que validar el formulario, añadiendo la función test_input para evitar posibles ataques.
Si un campo es requerido y no se ha rellenado, hay que mostrar un error, indicando que el campo es requerido.
Por último, se debe mostrar por pantalla los valores introducidos.
*/

    $nameErr = $emailErr = $genderErr = $passwordErr = $telephoneErr = "";
    $name = $email = $gender = $password = $telephone = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Nombre obligatorio";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Solo se permiten letras y espacios";
        }
    }
    
    if (empty($_POST["email"])) {
        $emailErr = "Email obligatorio";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Formato inválido";
        }
    }
        
    if (empty($_POST["password"])) {
        $passwordErr = "Contraseña obligatoria";
    } else {
        $password = test_input($_POST["password"]);
        if (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])[A-Za-z0-9]{8,}$/i",$password)) {
        $passwordErr = "Contraseña no válida";
        }
    }

    if (empty($_POST["telephone"])) {
        $telephone = "";
    } else {
        $telephone = test_input($_POST["telephone"]);
        if (!preg_match("/^[0-9]{6}$/i",$telephone)) {
            $telephoneErr = "Telefono no válido";
        }
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Género obligatorio";
    } else {
        $gender = test_input($_POST["gender"]);
    }
    }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de formularios</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error"> <?php echo $nameErr;?></span><br>
        E-mail: <input type="text" name="email" value="<?php echo $email;?>">
        <span class="error"> <?php echo $emailErr;?></span><br>
        Contraseña: <input type="password" name="password" value="<?php echo $password;?>">
        <span class="error"> <?php echo $passwordErr;?></span><br>
        Telefono: <input type="text" name="telephone" value="<?php echo $telephone;?>">
        <span class="error"><?php echo $telephoneErr;?></span><br>
        Gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
        <span class="error"> <?php echo $genderErr;?></span><br>
        <input type="submit" name="submit" value="Submit">  
    </form>

    <?php
    echo "<h2>Inputs:</h2>".$name."<br>".$email."<br>".$password."<br>".$telephone."<br>".$gender;
    ?>
</body>
</html>

