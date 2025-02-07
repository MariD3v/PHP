<?php

include("getConnection.php");

session_start();

if(!isset($_SESSION['logged_in'])){
    header('location: login.php');
    exit();
}

//Cerrar sesión

if(isset($_GET['cerrarsesion'])){ 
    if(isset($_SESSION['logged_in'])){
        unset($_SESSION['user_id']);
        unset($_SESSION['logged_in']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);

        header('location: login.php');
        exit();
    }
}