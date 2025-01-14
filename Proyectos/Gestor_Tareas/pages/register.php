<?php
include("../server/register.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../style/style.css" type="text/css" />
</head>
<body>
    <main>
        <form method="POST" action="register.php">  
            <div id="regisContainer">
                <h1 id="tituloFormularioRL">Crear cuenta</h1>
                <div>
                    <label>Nombre</label>
                    <input type="text" value="" name="nombre" placeholder="Nombre"/>
                </div>
                <div>
                    <label>Email</label>
                    <input type="text" value="" name="email" placeholder="Email"/>
                    <p id="parrafoError"><?php if(isset($_GET['error_email'])){echo $_GET['error_email'];}?></p>
                </div>
                <div>
                    <label>Contraseña</label>
                    <input type="password" value="" name="password" placeholder="Contraseña"/>
                    <p id="parrafoError"><?php if(isset($_GET['error_pass'])){echo $_GET['error_pass'];}?></p>
                </div>
                <div>
                    <label>Confirma tu contraseña</label>
                    <input type="password" value="" name="password_conf" placeholder="Confirma tu contraseña"/>
                    <p id="parrafoError"><?php if(isset($_GET['error_pass_conf'])){echo $_GET['error_pass_conf'];}?></p>
                </div>
                <div>
                <p id="parrafoError"><?php if(isset($_GET['error'])){echo $_GET['error'];}?></p>
                    <input id="registrarse" type="submit" value="Crear cuenta" name="registrarse"/>
                </div>
                <div>
                    <p>¿Ya tiene una cuenta?</p> 
                    <a href="login.php">Iniciar sesión</a>
                </div>
            </div>
        </form> 
    </main>
</body>
</html>