//Qué opciones disponemos tanto para truncar como para redondear, muestra el resultado de PI tanto redondeado a dos decimales como truncado.

<!DOCTYPE html>
<html>
<body>

<?php
//TRUNCAR
$numero1 = 3.1415;
$numero1 = floor($numero1 *100)/100;
echo $numero1;

//REDONDEAR
$numero2 = 3.1415;
$numero2 = round($numero2,2);
printf($numero2);
?> 

</body>
</html>



