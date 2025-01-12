<!--  Crea una página web que muestre el número de veces que un usuario específico ha visitado el sitio. 
  Funcionalidad:
    a. Primera visita: Al visitar la página por primera vez, se crea una cookie con un identificador único para el usuario. 
    Se inicializa un contador de visitas a 1 en una sesión asociada a ese identificador.
    b. Visitas posteriores: Cada vez que el usuario vuelve a visitar la página, se busca la cookie con su identificador único. 
    Si se encuentra, se incrementa el contador de visitas en la sesión correspondiente y se muestra el número actualizado 
    de visitas en la página.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 59</title>
</head>
<body>
    <?php
    session_start(); 

    if (!isset($_COOKIE["user_id"])) {

        $user_id = uniqid("user_");

        setcookie("user_id", $user_id, time() + (24 * 60 * 60), "/");
        $_SESSION[$user_id] = 1;

        echo "Bienvenido a nuestra página por primera vez. Esta es tu primera visita.";
    } else {
        $user_id = $_COOKIE["user_id"];

        if (isset($_SESSION[$user_id])) {
            $_SESSION[$user_id]++;
        } else {
            $_SESSION[$user_id] = 1;
        }

        echo "Bienvenido nuevamente. Has visitado esta página " . $_SESSION[$user_id] . " veces.";
    }
?>
</body>
</html>