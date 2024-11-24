<?php
/* Genera un número aleatorio entre 1 y 100
Crea un programa que genere un número aleatorio entre 1 y 100.
Con ese número crear un bucle en el que una variable $i se irá incrementando de uno en uno hasta llegar al número deseado.
Crearemos además una variable $multiplos para almacenar los múltiplos de 2. En cada repetición, el programa comprueba si la variable $i es múltiplo de 2, 
si es así, la variable $multiplos se incrementa en 1.*/

$ramdonNumber = rand(1, 100);

$multiplos = 0;

for ($i = 0; $i<=$ramdonNumber;$i++){
    if ($i%2 == 0){
        $multiplos++;
    }
}

echo $multiplos;