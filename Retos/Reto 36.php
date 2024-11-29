<?php
/*Realiza el juego tres en raya
Realiza un programa para jugar a las tres en raya de forma sencilla con un tablero de 3x3, usando “X” y “O” para las tiradas correspondiente a cada jugador. 
Cada jugador deberá elegir la posición de la tirada y el sistema comprobará quién gana (uno de los jugadores hará tres en raya en cualquier
dirección). Una mejora sería que uno de los jugadores fuera la máquina y jugará de forma automática.
Entrada de datos: Se puede crear un array con las tiradas o realizar tiradas de forma aleatoria a una posición libre del tablero. */

function mostrarTablero($tablero) {
    echo "<br>";
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo $tablero[$i][$j] . " ";
        }
        echo "<br>";
    }
    echo "<br>";
}

function comprobarGanador($tablero) {
    // Comprobar filas y columnas
    for ($i = 0; $i < 3; $i++) {
        if ($tablero[$i][0] != "-" && $tablero[$i][0] == $tablero[$i][1] && $tablero[$i][1] == $tablero[$i][2]) {
            return $tablero[$i][0];
        }
        if ($tablero[0][$i] != "-" && $tablero[0][$i] == $tablero[1][$i] && $tablero[1][$i] == $tablero[2][$i]) {
            return $tablero[0][$i];
        }
    }

    // Comprobar diagonales
    if ($tablero[0][0] != "-" && $tablero[0][0] == $tablero[1][1] && $tablero[1][1] == $tablero[2][2]) {
        return $tablero[0][0];
    }
    if ($tablero[0][2] != "-" && $tablero[0][2] == $tablero[1][1] && $tablero[1][1] == $tablero[2][0]) {
        return $tablero[0][2];
    }

    return null;
}

function tableroLleno($tablero) {
    foreach ($tablero as $fila) {
        if (in_array("-", $fila)) {
            return false;
        }
    }
    return true;
}

function movimientoMaquina($tablero) {
    $posicionesLibres = [];
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            if ($tablero[$i][$j] == "-") {
                $posicionesLibres[] = [$i, $j];
            }
        }
    }

    // Elegir una posición aleatoria libre
    if (!empty($posicionesLibres)) {
        $movimiento = $posicionesLibres[array_rand($posicionesLibres)];
        return $movimiento;
    }

    return null;
}

// Inicializar el tablero
$tablero = [
    ["-", "-", "-"],
    ["-", "-", "-"],
    ["-", "-", "-"]
];

$jugadorActual = "X";
$ganador = null;

echo "¡Bienvenido al Tres en Raya!\n";
mostrarTablero($tablero);

while (!$ganador && !tableroLleno($tablero)) {
}