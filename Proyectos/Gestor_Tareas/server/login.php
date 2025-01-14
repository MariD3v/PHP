<?php

include("getConnection.php");

session_start();

if(isset($_SESSION['logged_in'])){
    header('location: index.php');
    exit();
}

if (isset($_POST['iniciar_sesion'])){ 

    $client_name = $_POST['name'];
    $client_email = $_POST['email'];
    $client_pass = $_POST['password'];

    if(strlen($client_email) == 0){
        header('location: login.php?errorEma=Introduce un email');
    }else if(strlen($client_pass) == 0){ 
        header('location: login.php?errorPass=Introduce una contraseña');
    }else if(strlen($client_name) == 0){ 
        header('location: login.php?errorName=Introduce un nombre');
    }else{
        $stmt = $conn->prepare("SELECT codigo_usuario, nombre, contraseña, email FROM usuario WHERE email = ? AND contraseña = ? AND nombre = ? LIMIT 1");

        $stmt->bind_param('sss',$client_email,$client_pass,$client_name);
    
        if ($stmt->execute()){
            $stmt->bind_result($codigo_usuario,$nombre,$contraseña, $email);
            $stmt->store_result();
    
            if($stmt->num_rows() == 1){
                $row = $stmt->fetch();
    
                $_SESSION['user_id'] = $codigo_usuario;
                $_SESSION['user_name'] = $nombre;
                $_SESSION['user_email'] = $email;
                $_SESSION['logged_in'] = true;
    
                header('location:index.php');
                exit();
            } else {
                header('location: login.php?error=El email o contraseña introducido no es correcto');
                exit();
            }
    
        } else {
            header('location: login.php?error=Algo ha ido mal');
            exit();
        }
    }
}