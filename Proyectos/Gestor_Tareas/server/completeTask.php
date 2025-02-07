<?php
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