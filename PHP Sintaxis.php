<?php //Todo el código PHP va aqui, esta etiqueda en un html iría en el body

    // Comentario en una linea
    /* Comentario 
    en varias lineas */

    //PRINT Y ECHO
    print "Hola"; //Hace return de 1
    echo "Hola"; //No hace return de nada
    // Si queremos introducir símbolos como $ o " usamos / antes del símbolo.

    //DATOS
    $radio=3; // variable númerica, también puede ser NaN o Infinity
    $maxInt = PHP_INT_MAX; //Constante de maximo valor
    $minInt = PHP_INT_MIN; //Constante de minimo valor
    define("PI",3.14159); // constante
    echo "La longitud de la circunferencia con radio $radio es ".(2*PI*$radio); //En PHP se concatena con . o introduciendo la variable dentro del texto con $
    echo "<br/>"; // un salto de línea
    echo "My radio is $radio!";  //Concatenación correcta
    echo "My radio is " . $radio . "!";  //Concatenación correcta
    
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
    substr("Hola mari hellow", 6, 5); //Corta el string en la posición 6 y sigue 5 posiciones más. Si no se pone el fin, cogerá todo hasta el final.

    //CAST
    $x = 5;
    $x = (string) $x; //Convertir a String
    $x = (int) $x; //Convertir a int
    $x = (float) $x; // Float
    $x = (bool) $x; //Boolean
    $x = (array) $x; //Array
    $x = (object) $x; //Object

    //FUNCIONES Y Alcance de las variables (local, estática y global)

    $variable = 3; //Variable de alcance global

    function myTest() {
        global $variable; //Para acceder a la variable que se encuentra fuera de la función, debemos usar la funcion "global"
        echo "<p>Variable: $variable</p>"; 
    }
    myTest();

    function myTest2() {
        static $variable2 = 3; //Cuando una variable NO es static, se elimina al finalizar la función. Con static, la variable puede usarse fuera de la función 
        echo "<p>Variable: $variable2</p>"; 
    }
    myTest();

    
?>  