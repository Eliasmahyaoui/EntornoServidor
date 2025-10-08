<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    /****
     * Este script debera contener 7 funciones que serviran para sumar, restar, dividir, multiplicar
     * comparar si dos numeros son iguales e indicar si un numero es par 
     */

    function elias_add(float $a,  float $b): float
    {
        return $a + $b;
    }

    function elias_substr(float $a, float $b): float
    {
        return $a - $b;
    }

    function elias_multiply(float $a,  float $b): float
    {
        return $a * $b;
    }

    function elias_divide(float $a,  float $b): float
    {
        return $a / $b;
    }

    function elias_mood(int $a , int $b):int 
    {

        if ($b == 0) {
            echo "Error el divisior no puede ser 0 ";
            
        }

        return $a % $b;
    }


    ?>

</body>

</html>