<?php
//Crear tareas

session_start();

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
