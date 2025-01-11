<?php //Todo el código PHP va aqui, esta etiqueda en un html iría en el body

    // Comentario en una linea
    /* Comentario 
    en varias lineas */

//ARCHIVOS PHP

include "archivo.php"; //Así añadimos un archivo php a este archivo

//PRINT Y ECHO

    print "Hola<br>"; //Hace return de 1
    echo "Hola<br>"; //No hace return de nada
    // Si queremos introducir símbolos como $ o " usamos / antes del símbolo.

//DATOS

    $numberVariable=3; // variable númerica, también puede ser NaN o Infinity
    $stringVariable= "Mari";
    $nullVariable = null;
    $boolVariable = true;
    $floatVariable = 2.31;

    define("PI",3.14159); // constante
    echo PI; //usar constante
    define ("cars",["kia","volvo"]); //constante de array
    echo cars[0];
    $maxInt = PHP_INT_MAX; //Constante de maximo valor
    $minInt = PHP_INT_MIN; //Constante de minimo valor

    echo "La longitud de la circunferencia con radio $numberVariable es ".(2*PI**$numberVariable)."<br>"; //En PHP se concatena con . o introduciendo la variable dentro del texto con $
    echo "<br>"; // un salto de línea
    echo "My number is $numberVariable!<br>";  //Concatenación correcta
    echo "My number is " . $numberVariable . "!<br>";  //Concatenación correcta
    
    //para saber si es o no ese tipo de dato.Devuelve un 1 si es true y nada si es false
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
    strstr("hola mari", "m"); //Devuelve la cadena solo a partir del carácter indicado
    $array = explode(" ", "Hola mari"); //Hace un array, utilizadon el separador que elijamos
    substr("Hola mari hellow", 6, 5); //Corta el string en la posición 6 y sigue 5 posiciones más. Si no se pone el fin, cogerá todo hasta el final.

//NUMBERS

    sqrt(64); //raiz cuadrada
    abs(43); //absoluto
    round(0.60); //redondear
    rand(1000, 5000); //Numero ramdon entre 1000 y 5000

//CAST

    $x = 5;
    $x = (string) $x; //Convertir a String
    $x = (int) $x; //Convertir a int
    $x = (float) $x; // Float
    $x = (bool) $x; //Boolean
    $x = (array) $x; //Array
    $x = (object) $x; //Object

//ARRAY

    $cars = array("Volvo","BMW","Toyota");
    $cars[0]; //acceder a un elemento
    count($cars); //longitud de un array
    $texto = implode(" ", $cars); //Convierte un array en un string, eligiendo un separador
    array_unique($cars); //Elimina los elementos duplicados
    var_dump($cars); //Muestra el array sin necesidad de for
    array_push($cars, "KIA", "Lambo"); //Añade valores al array
    array_splice($cars, 1, 1); //Quita valores del array, eligiendo la posición donde empieza a quitar y eligiendo cuantos quitar
    unset($cars[1]); //Quita un valor
    array_pop($cars); //Elimina el último valor
    array_shift($cars); //Elimina el primer valor
    rsort($cars); //Ordena el array descendente
    sort($cars); //Ordena el array ascendentemente
    in_array("Volvo",$cars); //Comprueba si hay un elemento en el array

    foreach($cars as $coche) {
        echo $coche;
    }

//MAPA

    $telefono = array("Maria"=>"679769740", "Miki" => "679769741"); //Se declara como array pero con clave => valor
    $telefono["Maria"]; //Acceder a un value
    $telefono["Panchon"]="679769742"; //Añadir un elemento
    $telefono[]="679769743"; //Cuando no se añade clave a un valor, automanticamente se añade un indice autoincremental

    array_key_exists('usuario', $telefono); //Comprueba si hay una key
    unset($telefono["Maria"]); //Elimina un valor y su clave
    asort($telefono); // Ordena ascendentemente por valor
    ksort($telefono); // Ordena ascendentemente por clave
    arsort($telefono); // Ordena descendentemente por valor
    krsort($telefono); // Ordena descendentemente por clave
    array_reverse($telefono); //Da la vuelta al array
    array_change_key_case($telefono,CASE_UPPER); //Pone las keys en mayus/minus
    array_combine($fname,$age); //Crea un mapa usando 1 array para las keys y 1 array para las values
    array_keys($telefono); //Muestra todas las claves de un array
    array_values($telefono); //Muestra todos los valores de un array
    count($telefono); //Cuenta cuantos elementos hay

    foreach($telefono as $clave => $valor) {
        echo $clave ."->". $valor ;
    }

//IF ELSEIF ELSE

    if($numberVariable == 0){
        echo"El número $numberVariable es 0<br>";
    } else if ($numberVariable % 2 ==0){
        echo "El número $numberVariable es par<br>";
    } else {
        echo "El número $numberVariable es impar<br>";
    }

    echo "El número $numberVariable ".($numberVariable % 2 ==0 ? " es par<br>": " es impar<br>"); //Operacion ternaria de if else (En una linea)
    echo "El número $numberVariable ".($numberVariable == 0 ? " es cero<br>" : ($numberVariable % 2 == 0 ? " es par<br>": " es impar<br>")); //Operacion ternaria de if else if else (En una linea)

//MENUS (switch)

    $opcion = 1;
    switch($opcion){
        case 1: 
            echo "Has elegido la opción 1<br>";
        case 2:
            echo "Has elegido la opción 2<br>";
        default:
            echo "No has elegido ni la opción 1 ni la 2<br>";
    }

//BUCLES

    $variable = 0;

    while($variable<=10){
        echo $variable++."<br/>";
    }

    do {
        echo $variable++."<br/>";
    } while($variable<=10);

    for($i=0; $i<10; $i++){
        echo "$i<br/>";
    }

//FUNCIONES Y Alcance de las variables (local, estática y global)

    $variable = 3; //Variable de alcance global

    function myTest() {
        global $variable; //Para poder cambiar una variable y usarla fuera de la función
        echo "<p>Variable: $variable</p><br>"; 
    }
    myTest();

    function myTest2() {
        static $variable2 = 3; //Cuando una variable NO es static, se elimina al finalizar la función. Con static, la variable puede usarse fuera de la función 
        echo "<p>Variable: $variable2</p><br>"; 
    }
    myTest2();

    function sumaVariable() {
        $total=0;
        for($i=0;$i<func_num_args();$i++) { //func_num_args() cuenta cuantos parámetros hemos introducido en la función
            $total=$total+func_get_arg($i);
        }
        return $total;
     }
     echo sumaVariable(1,2,3);
     echo sumaVariable(1,2,3,4,5,13); //Podemos introducir tantos valores como queramos gracias a func_num_args()
    
     function concatena(&$cad1, $cad2, $cad3=null) { //Cuando ponemos & estamos indicando que $cad1 es global, de tal forma que se modifica en todo el archivo
         $cad1=$cad1.$cad2; //si ponemos que cad3 = null, significa que no es necesario meter ese parametro, es opcional al llamar a la funcion
      }
     $cadena1="Hola";
     $cadena2=", mundo";
     concatena($cadena1, $cadena2);
     echo $cadena1; //Si hacemos echo, vemos que ha cambiado

     function concatena4($cad2) {
        $GLOBALS["cadena1"]=$GLOBALS["cadena1"].$cad2; //El array $GLOBALS contiene por defecto todas las variables del archivo, de manera que si queremos acceder a una variable que esté fuera de la función debemos usar GLOBALS
    }
    $cadena1="Hola";
    $cadena2=", mundo";
    concatena4($cadena2); //Hemos cambiado el valor de $cadena1 pasandole el parámetro $cadena2
    echo $cadena1;//Si hacemos echo, vemos que ha cambiado

//CLASES Y OBJETOS
    class Car {
        public $color;
        public $model;
        public function __construct(string $color,string $model) {
        $this->color = $color;
        $this->model = $model;
        }
        public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }
    
    $myCar = new Car("red", "Volvo");
    var_dump($myCar);
    $myCar->message();

    foreach ($myCar as $x => $y){
        echo "$x = $y";
    }

//TIEMPO Y FECHA

    $fechaHoy = date("l, Y-m-d\th:i:s"); //con date obtenemos en el formato que queramos una fecha l=dia de la semana
    $fechaMañana = date("Y-m-d", strtotime("+1 day")); //con strtotime podemos sumar o restar fechas
    $fecha = mktime(10,15,12,10,3,2019); //Otra forma de poner una fecha
    $date = date_create("2013-03-15"); //Otra forma de poner una fecha
    $date2 = date_create("2013-01-10");
    $diff= date_diff($date, $date2); //Calcula la diferencia entre 2 fechas

    for($dia=strtotime($fechaHoy), $cont=1;$cont<=10;$dia=strtotime("+1day",$dia), $cont++) {
        echo date("d-m-Y",$dia)."<br/>";
    }

//EXPRESIONES REGULARES

    preg_match("/patrón/", $texto); //Busca si el patrón existe en el texto. Devuelve 1 si encuentra coincidencias, 0 si no.
    preg_match_all("/patrón/", $texto); //Busca todas las coincidencias del patrón en el texto. Devuelve un array con las coincidencias.
    preg_replace("/patrón/", "reemplazo", $texto); //Reemplaza todas las coincidencias del patrón en el texto con el texto de reemplazo.
    preg_split("/patrón/", $texto); //Divide el texto en un array usando el patrón como delimitador.
    preg_filter("/patrón/", "reemplazo", $texto); //Similar a preg_replace pero solo devuelve el texto si hubo reemplazos.

    //MODIFICADORES COMUNES
    // i: Ignora mayúsculas y minúsculas.
    // m: Modo multilinea (afecta ^ y $ para que consideren líneas individuales).
    // s: Permite que el punto (.) coincida con caracteres de nueva línea.
    // u: Interpreta el patrón como UTF-8.

    //EJEMPLOS
    preg_match("/^Hola/i", "hola mundo"); //Coincide "Hola" al inicio de la cadena, ignorando mayúsculas.
    preg_match("/mundo$/", "Hola mundo"); //Coincide "mundo" al final de la cadena.
    preg_match("/\d+/", "Tengo 45 años"); //Coincide con uno o más dígitos.
    preg_match("/[a-zA-Z]/", "123abc"); //Coincide con cualquier letra (mayúscula o minúscula).
    preg_match("/[^0-9]/", "123abc"); //Coincide con cualquier carácter que no sea un dígito.
    preg_match("/\bpalabra\b/", "palabra clave"); //Coincide con la palabra exacta delimitada por espacios o signos de puntuación.
    preg_match("/palabra\w*/", "palabra123"); //Coincide "palabra" seguido de cualquier cantidad de caracteres alfanuméricos.

    //VALIDACIÓN
    preg_match("/^[a-zA-Z0-9]{5,10}$/", "usuario123"); //Valida entre 5 y 10 caracteres alfanuméricos.
    preg_match("/^\d{3}-\d{2}-\d{4}$/", "123-45-6789"); //Valida un formato de número como SSN.
    preg_match("/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i", "correo@ejemplo.com"); //Valida un correo electrónico.

//SESIONES

    session_start();

    session_unset(); // Eliminar todas las variables de sesion

    session_destroy();// Destruir la sesion

    $_SESSION["favcolor"] = "yellow"; //Crear una variable en la sesion ["clave"] = "valor";
    print_r($_SESSION);

//COOKIES

    $cookie_name = "user";
    $cookie_value = "John Doe";

    //Crear cookie
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

    setcookie("user", "", time() - 3600); // Borrar la cookie poniendo fecha antigua

    if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' no esta creada";
    } else {
    echo "Cookie '" . $cookie_name . "' esta creada!<br>";
    echo "Valor: " . $_COOKIE[$cookie_name];
    }
?>  
