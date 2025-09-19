<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Declaramos dos variables num1 y num2
    $num1=3;
    $num2=5;
    //Declaramos todas las variables de sum,rest,mult,div 
    // y le damos el valor correspondiente
    $sum= ($num1 + $num2);
    $resta= ($num1 - $num2);
    $mult= ($num1 * $num2);
    $div= ($num1 % $num2);

    //Mostramos por pantalla
    echo "La suma es: $sum .<br>";
    echo "La resta es: $resta .<br>";
    echo "La multipicaciones: $mult .<br>";
    echo "La division es: $div .<br>";
    ?>
</body>
</html>