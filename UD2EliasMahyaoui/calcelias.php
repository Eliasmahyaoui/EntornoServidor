<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculos</title>
</head>
<body>
    <?php
    //Declaramos dos variables num1 y num2
    $num1=10;
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

    //Ahora comprobaremos que numero es mas grande
    if ($num1==$num2) {
        echo "el numero . $num1 .  y el numero $num2 . son iguales";
    }else if ($num1>$num2) {
        echo "el numero . $num1 . es mas grande que . $num2";
    }else{
        echo "el numero . $num2 . es mas grande que . $num1";
    }
         
    

    ?>
</body>
</html>