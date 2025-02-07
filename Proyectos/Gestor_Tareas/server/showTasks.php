<?php
//Mostrar tareas

session_start();

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