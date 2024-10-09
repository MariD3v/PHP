<?php
$usuarios = array("Mari"=>"Mari123", "Miki" => "Miki123", "Urus"=>"Urus123");

if(array_key_exists($_POST['usuario'], $usuarios)){
    if($usuarios[$_POST['usuario']]==$_POST["contraseña"]){
        echo "Bienvenido/a";
    } else {
        echo "Contraseña incorrecta";
    }
} else {
    echo "Usuario no encontrado";
}

?>