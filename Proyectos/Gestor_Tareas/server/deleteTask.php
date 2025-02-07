<?php
//Borrar tareas

if(isset($_POST["borrar"])){
    $codigo_tarea = $_POST["codigo_tarea"];

    $stmt = $conn ->prepare("DELETE FROM tarea WHERE codigo_tarea=?;");
    $stmt->bind_param('i',$codigo_tarea);
    $stmt->execute();
}


