<?php

include("getConnection.php");

session_start();

if(!isset($_SESSION['logged_in'])){
    header('location: login.php');
    exit();
}

//Completar tarea
include("completeTask.php");
//Borrar tareas
include("deleteTask.php");
//Crear tareas
include("createTask.php");
//Editar tarea
include("editTask.php");
//Mostrar tareas
include("viewTask.php");
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