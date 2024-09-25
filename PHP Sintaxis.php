<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PHP Sintaxis</title>
</head>
<body>
    <?php //Todo el código PHP va aqui

    // Comentario en una linea
    /* Comentario 
    en varias lineas */

    //DATOS
 
    $radio=3; // variable númerica  
    define("PI",3.14159); // constante
    echo "La longitud de la circunferencia con radio $radio es ".(2*PI*$radio); //En PHP se concatena con . o introduciendo la variable dentro del texto con $
    echo "<br/>"; // un salto de línea
    echo "My radio is $radio!";  //Concatenación correcta
    echo "My radio is " . $radio . "!";  //Concatenación correcta

    //Alcance de las variables (local, estática y global)


    
	//Función is_(tipodedato) para saber si es o no ese tipo de dato.Devuelve un 1 si es true y nada si es false
    is_float(4);
    is_integer("a");
    is_string("a"); 
    is_numeric(4); 

    gettype(4); //Obtener el tipo de dato
    var_dump(2); //Obtener el tipo de dato y el dato

    //STRINGS
    strlen("hola"); //Obtenemos el número de carácteres
    str_word_count("Hola mari"); //Obtenemos en número de palabras
    strpos("hola mari como estas", "como"); //busca una palabra, si la encuentra devuelve la posición de la palabra. 
    strtoupper("hola mari"); //devuelve el texto en mayusculas
    strtolower("HOLA MARI"); //devuelve el texto en minus
    str_replace("hola mari", "mari", "miki"); //reemplaza una palabra por otra
    strrev("holi"); //da la vuelta al texto
    trim("hola mari"); //quita los espacios en blanco
    explode(" ", "Hola mari"); //Hace un array, utilizadon el separador que elijamos
    ?>  

</body>
</html>