<?php
include("../server/gestor.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de tareas</title>
    <link rel="stylesheet" href="../style/style.css" type="text/css" />
</head>
<body>
<section id="gestor-container">
    <aside>
        <h1 style="color:var(--bg-color); margin-bottom:30px">Información de cuenta</h1>
        <p><?php if(isset($_SESSION['user_name'])){echo $_SESSION['user_name'];}?></p>
        <p style="margin-bottom:30px"><?php if(isset($_SESSION['user_email'])){echo $_SESSION['user_email'];}?></p>
        <form method="GET" action="index.php">
            <a class="button" name="cerrarsesion" href="index.php?cerrarsesion=1">Cerrar sesión</a>
        </form>
        
    </aside>
    <div id="tareas-container">
        <label style="color:var(--bg-color); font-size:27px; font-weight:bold;">Tareas</label>
        <input type="button" value="+" id="abrirForm" class="button"/>
        <form method="POST" action="index.php" style="display:block" id="form">
            <label>Titulo:</label>
            <input type="text" name="titulo" placeholder="Título"/>
            <label>Descripción:</label>
            <input type="text" name="descripcion" placeholder="Descripción"/>
            <label>Fecha de vencimiento:</label>
            <input type="text" name="vencimiento" placeholder="Formato AAAA-MM-DD HH:MM:SS"/>
            <input type="submit" name="crear" value="Crear" class="button"/>
            <p class="parrafoError"><?php if(isset($_GET['error'])){echo $_GET['error'];}?></p>
        </form>
        <div>
            <?php if ($tarea_consulta->num_rows == 0) {echo "<h1>No hay tareas</h1>";} 
                else {while ($tarea = $tarea_consulta -> fetch_assoc()){ ?>
                <form action="index.php" method="POST" class="tarea">
                    <input type="hidden" name="codigo_tarea" value=<?php echo $tarea["codigo_tarea"]?>>
                    <label class="titulo"><?php echo $tarea["titulo"]?></label>
                    <label>Creada: <?php echo $tarea["fecha_creacion"]?></label>
                    <label>Vence: <?php echo $tarea["fecha_vencimiento"]?></label>
                    <input type="submit" name="editar" value ="Editar" class="button"/>
                    <input type="submit" name="borrar" value ="borrar" class="button"/>
                    <p class="descripcion"><?php echo $tarea["descripcion"]?></p>
                    <label>Completada: <?php if($tarea["completada"]==0){echo ("NO");} else {echo ("SI");}?></label> 
                    <input type="submit" name="completar" value ="Completar" class="button"/>
                </form>
            <?php }} ?>
           
        </div>
    </div>
</section>
<script src="../scripts/desplegarForm.js"></script>
</body>
</html>