<!--Contamos los elementos de un array

Disponemos de un array con una serie de números, de los cuales algunos de ellos están repetidos. 
Se pide escribir un script en PHP que muestre las veces que aparece cada uno de los números en el array. 
Intenta que cuando el número aparece una vez se muestre la palabra «vez», 
mientras que, en los números que aparezcan más de una vez, se muestre la palabra «veces».-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reto 9</title>
</head>
<body>
    <?php
        $array = array(1,2,3,4,5,6,2,3,4,1,2);
        $arrayMap = array();
        for ($i=0; $i< count($array);$i++){
            $arrayMap[$array[$i]] = 0;
        }

        for($i=0; $i< count($array);$i++){
            $arrayMap[$array[$i]] = $arrayMap[$array[$i]]+1;
        }

        foreach($arrayMap as $clave => $valor) {
            if($valor != 1){
                echo $clave ."->". $valor." veces<br>" ;
            } else {
                echo $clave ."->". $valor." vez<br>" ;
            }
            
        }
    ?>
</body>
</html>