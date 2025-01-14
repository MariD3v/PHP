<?php

include("getConnection.php");

session_start();

if(isset($_SESSION['logged_in'])){
    header('location: index.php');
    exit();
}

if(isset($_POST['registrarse'])){

    $client_nombre = $_POST['nombre']; 
    $client_email = $_POST['email'];
    $client_pass = $_POST['password'];
    $client_pass_conf = $_POST['password_conf'];

    //Validar los datos
    $regex = '/^[A-z0-9._-]+@[A-z0-9][A-z0-9-]*(\.[A-z0-9_-]+)*\.([A-z]{2,6})$/';

    if (strlen($client_nombre) == 0 || strlen($client_email) == 0 || strlen($client_pass) == 0 || strlen($client_pass_conf) == 0){
        header('location: register.php?error=Rellena los campos vacíos');
        exit();
    } else if (!preg_match($regex, $client_email)) { 
        header('Location: register.php?error_email=Introduce una dirección de correo electrónico válida');
        exit();
    } else if (strlen($client_pass) < 6){ 
        header('location: register.php?error_pass=La contraseña debe contener 6 carácteres o más');
        exit();
    } else if ($client_pass!==$client_pass_conf){ 
        header('location: register.php?error_pass_conf=Las contraseñas no coinciden');
        exit();
    } else {  //Comprobamos que no exista ya un usuario con ese email
        $stmt1= $conn->prepare("SELECT * FROM usuario WHERE email=?"); 
        $stmt1->bind_param('s', $client_email);
        $stmt1->execute();
        $stmt1->store_result();
        
        if ($stmt1->num_rows != 0) {
            header('Location: register.php?error_email=Ya existe una cuenta registrada con este email');
            exit();
        } else { //SI NO HAY ERRORES

            //Insertar el usuario en la base de datos
            $stmt = $conn ->prepare("INSERT INTO usuario (nombre,contraseña,email) VALUES (?,?,?);");
            $stmt->bind_param('sss',$client_nombre,$client_pass,$client_email);
            
            if($stmt->execute()){ //Si se ha registrado correctamente, metemos en la sesion al usuario
                $user_id = $stmt->insert_id;

                $_SESSION['user_id'] = $user_id;
                $_SESSION['user_email'] = $client_email;
                $_SESSION['user_name'] = $client_nombre;
                $_SESSION['logged_in'] = true;

                header('location:index.php');
                exit();
            } else {
                header('Location: register.php?error=No se ha podido crear tu cuenta en este momento');
                exit();
            }
        }
    }
}