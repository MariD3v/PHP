<!--
Sistema de comentarios simple:
● El funcionamiento será: un usuario escribe un comentario en el textarea y al pulsar el botón se almacenará y aparecerá en el div 
(que al entrar en la página estará vacío).
● Crea una página web con un textarea, un botón y un div.
● Utilizando AJAX realiza una función en javascript enviarComentario() que:
    i. A través de la función POST mande el comentario escrito a guardarComentario.php.
    ii. Y cuando obtenga el comentario muestre en el div.
● En guardarComentario.php:
    i. Obtén el comentario a través del método post.
    ii. Almacena el comentario en un archivo txt llamado comentarios.txt usando file_put_contents().
    iii. Devuelve el comentario.
-->

<?php

    $comentario = file_get_contents("php://input");
        
    if (!empty(trim($comentario))) {
            file_put_contents("comentarios.txt", $comentario . "\n", FILE_APPEND);
            
            echo $comentario;
        } else {
            echo "Error: Comentario vacío";
    }
    