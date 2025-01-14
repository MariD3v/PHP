<?php
include("../server/login.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../style/style.css" type="text/css" />
</head>
<body>
    <main>
        <form method="POST" action="login.php">
            <div id="loginContainer">
                <h1 id="tituloFormularioRL">Iniciar sesión</h1>
                <div>
                    <label>Nombre</label>
                    <input type="text" value="" name="name" placeholder="Name"/>
                    <p class="parrafoError"><?php if(isset($_GET['errorName'])){echo $_GET['errorName'];}?></p>
                </div>
                <div>
                    <label>Email</label>
                    <input type="text" value="" name="email" placeholder="Email"/>
                    <p class="parrafoError"><?php if(isset($_GET['errorEma'])){echo $_GET['errorEma'];}?></p>
                </div>
                <div>
                    <label>Contraseña</label>
                    <input type="password" value="" name="password" placeholder="Contraseña"/>
                    <p class="parrafoError"><?php if(isset($_GET['errorPass'])){echo $_GET['errorPass'];}?></p>
                </div>
                <div>
                    <p class="parrafoError"><?php if(isset($_GET['error'])){echo $_GET['error'];}?></p>
                    <input id="login" type="submit" value="Iniciar sesión" name="iniciar_sesion"/>
                </div>
                <div>
                    <p>¿Eres nuevo?</p> 
                    <a href="register.php">Crear cuenta</a>
                </div>
            </div>
        </form> 
    </main>
</body>
</html>