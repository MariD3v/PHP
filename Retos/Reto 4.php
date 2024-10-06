<!--Define como variable un radio cualquiera, mayor que 0. Usa la constante PI y aplica la formula:
    -Longitud de circulo = 2*PI*r
    -Superficie de circulo = r**2*PI
    -Volumen esfera = 4/3 *PI*r**3

Imprime los resultados con h1, h2 y h3 en html-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reto 4</title>
</head>
<body>
    <?php
        $radio = 3;
        define("PI",3.14159);

        echo "<h1>La longitud de la circunferencia con radio $radio es ".(2*PI*$radio)."</h1>";
        echo "<h2>La superficie de la circunferencia con radio $radio es ".(PI*($radio**2))."</h2>";
        echo "<h3>El volumen de la circunferencia con radio $radio es ".((4/3)*PI*($radio**3))."</h3>";
    ?>
</body>
</html>

