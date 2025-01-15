<?php

include("getConnection.php");

session_start();

if(!isset($_SESSION['logged_in'])){
    header('location: login.php');
    exit();
}

//Completar tarea

if(isset($_POST["completar"])){
    $codigo_tarea = $_POST["codigo_tarea"];

    $stmt = $conn ->prepare("SELECT completada FROM tarea WHERE codigo_tarea=?;");
    $stmt->bind_param('i',$codigo_tarea);
    $stmt->execute();
    $completada = $stmt->get_result()->fetch_assoc()["completada"];

    if($completada == 0){
        $stmt = $conn ->prepare("UPDATE tarea SET completada=1 WHERE codigo_tarea=?;");
        $stmt->bind_param('i',$codigo_tarea);
        $stmt->execute();
    }else{
        $stmt = $conn ->prepare("UPDATE tarea SET completada=0 WHERE codigo_tarea=?;");
        $stmt->bind_param('i',$codigo_tarea);
        $stmt->execute();
    }
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

    $regex = '/^\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]) ([01]\d|2[0-3]):([0-5]\d):([0-5]\d)$/';

    if(strlen($titulo) == 0){
        header('location: index.php?error=Introduce un titulo');
    }else if(strlen($descripcion) == 0){ 
        header('location: index.php?error=Introduce una descripción');
    }else if(strlen($fechav) == 0){ 
        header('location: index.php?error=Introduce una fecha de vencimiento');
    }else if(!preg_match($regex, $fechav)){ 
        header('location: index.php?error=Formato incorrecto de fecha de vencimiento');
    }else{
        $stmt = $conn ->prepare("INSERT INTO tarea (titulo, descripcion,fecha_creacion,fecha_vencimiento,completada,codigo_usuario) VALUES (?,?,?,?,?,?);");
        $stmt->bind_param('ssssii',$titulo,$descripcion,$fechac,$fechav,$completada,$codigo_usuario);
        $stmt->execute();
    }
}

//Editar tarea

if(isset($_POST["editar"])){
    $codigo_tarea = $_POST["codigo_tarea"];

    $stmt = $conn ->prepare("SELECT * FROM tarea WHERE codigo_tarea=?;");
    $stmt->bind_param('i',$codigo_tarea);
    $stmt->execute();
    $tarea = $stmt->get_result()->fetch_assoc();

    $_SESSION["codigo_tarea"] = $tarea["codigo_tarea"];
    $_SESSION["titulo"] = $tarea["titulo"];
    $_SESSION["descripcion"] = $tarea["descripcion"];
    $_SESSION["fecha_vencimiento"] = $tarea["fecha_vencimiento"];

    $stmt = $conn ->prepare("DELETE FROM tarea WHERE codigo_tarea=?;");
    $stmt->bind_param('i',$codigo_tarea);
    $stmt->execute();
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