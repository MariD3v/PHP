<?php

include("getConnection.php");

session_start();

if(!isset($_SESSION['logged_in'])){
    header('location: login.php');
    exit();
}


//Borrar tareas

if(isset($_POST["borrar"])){
    $codigo_tarea = $_POST["codigo_tarea"];

    $stmt = $conn ->prepare("DELETE FROM tarea WHERE codigo_tarea=?;");
    $stmt->bind_param('i',$codigo_tarea);
    $stmt->execute();
}

//Crear tareas

if(isset($_POST["crear"])){
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $fechac = date("Y-m-d\th:i:s");
    $fechav = $_POST["vencimiento"];
    $completada = 0;
    $codigo_usuario = $_SESSION["user_id"];

    if(strlen($titulo) == 0){
        header('location: index.php?error=Introduce un titulo');
    }else if(strlen($descripcion) == 0){ 
        header('location: index.php?error=Introduce una descripción');
    }else if(strlen($fechav) == 0){ 
        header('location: index.php?error=Introduce una fecha de vencimiento');
    }else{
        $stmt = $conn ->prepare("INSERT INTO tarea (titulo, descripcion,fecha_creacion,fecha_vencimiento,completada,codigo_usuario) VALUES (?,?,?,?,?,?);");
        $stmt->bind_param('ssssii',$titulo,$descripcion,$fechac,$fechav,$completada,$codigo_usuario);
        $stmt->execute();
    }
}

//Mostrar tareas

if(isset($_SESSION["user_id"])){

    $codigo_usuario = $_SESSION["user_id"];

    $stmt = $conn ->prepare("SELECT * FROM tarea WHERE codigo_usuario = ?"); 
    $stmt->bind_param("i",$codigo_usuario);
    $stmt->execute();
    $tarea_consulta = $stmt->get_result();

} else {
    header("location: login.php");
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