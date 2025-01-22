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

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 62</title>
</head>
<body>
    <textarea id="textarea"></textarea>
    <input type="button" onclick="crearComentario()" value="añadir"/>
    <div id="div">
        <h1>Comentarios</h1>
    </div>
    <script>
        function crearComentario(){
            let text = document.getElementById("textarea");
            let div = document.getElementById("div");
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    div.innerHTML += this.responseText;
                }
            };
            xmlhttp.open("POST", "Reto 62 Comentario.php", true);
            xmlhttp.send(text.value);
        }
    </script>
</body>
</html>