<?php
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