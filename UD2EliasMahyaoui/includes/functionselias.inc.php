
    <div>
        <?php
        /*El script debe contener 7 funciones que servirán para sumar, restar, multiplicar, dividir, 
        calcular el módulo, comparar si dos enteros son iguales e indicar si un número es par.*/

        //1.Suma
        function add( float $a ,float $b)
        {
            
            return $a + $b;
        }
        ?>
        <?php

        //2.Resta 
        function substract(float $a, float $b)
        {

            return $a - $b;
        }
        ?>

        <?php
        //3.Multplicacion
        function multiply( float $a, float $b)
        {

            return $a *  $b;
        }
        ?>

        <?php
        //4.Division
        function divide(float $a, float $b)
        {
            if ($b == 0) {
                echo 'Error division por 0 ';
            }
            return $a % $b;
        }
        ?>
        <?php

        // 5. Módulo
        function mod( int $a, int $b)
        {
            if ($b == 0) {
                return "Error: módulo con divisor 0";
            }
            return $a % $b;
        }
        ?>

        <?php
        //6.¿Son iguales?
        function areEquals( int $a, int $b)
        {

            return $a === $b;
        }
        ?>

        <?php
        function even($a)
        {

            return $a % 2 == 0;
        }
        ?>

    </div>
