<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/functionselias.inc.php');

    //Generar dos numeros aleatorios para probar
    $a = rand(1, 20);
    $b = rand(1, 20);

    echo 'La suma de ' . $a . '+' . $b . '= ' .  add($a, $b) . "<br>";
    echo 'La resta de ' . $a . '-' . $b . '= ' .  substract($a, $b) . "<br>";
    echo 'La multiplicacion de ' . $a . '*' . $b . '= ' .  multiply($a, $b) . "<br>";
    echo 'La division  de ' . $a . '/' . $b . '= ' .  divide($a, $b) . "<br>";
    echo 'El modulo  de ' . $a . '%' . $b . '= ' .  mod($a, $b) . "<br>";
    echo '¿Son iguales $a y $b ? ' . (areEquals($a, $b) ? 'Sí' : 'No') . "<br>";
    echo '¿Es par $a  ? ' . (even($a, $b) ? 'Sí' : 'No') . "<br>";








    ?>
</body>

</html>