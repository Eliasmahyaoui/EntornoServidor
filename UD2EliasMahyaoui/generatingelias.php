<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
        
       <?php
        for ($i=1; $i <=5 ; $i++) { 
            echo '<li><a href="#sec'. $i .'">seccion '. $i .'</a></li>';
        }
        ?> 

    </ul>
    
    <article id= "sec1">
        <h1>Negativo-Cero-Positivo</h1>
        <?php
        $numAleatorio = rand(-200,200);

        if ($numAleatorio<=0) {
            echo 'numero negativo';
        }else if ($numAleatorio==0) {
            echo 'cero';
        }else {
           echo 'numero positivo';
        } 
        ?> 
    </article>
    
     <article id ="sec2">
        <h1>Nota</h1>

        <?php
        $notamedia = rand(0,10);
        echo "Nota: $notamedia : ";

    switch ($notamedia) {
        case 0:
        case 1:
        case 2:
            echo "Insuficiente";
            break;
        case 3:
        case 4:
            echo "Necesita mejorar";
            break;
        case 5:
            echo "Aprobado justito";
            break;
        case 6:
            echo "Aprobado";
            break;
        case 7:
            echo "Notable bajo";
            break;
        case 8:
            echo "Notable";
            break;
        case 9:
        case 10:
            echo "Sobresaliente";
            break;
        default:
            echo "Valor no válido";
    }
    ?>
    <article id="sec3">
    <h1> Tabla de multipicar</h1>
    <?php
    $numAleatorio2 = rand(0,100);

    for ($i = 0; $i <= 10; $i++) {
        echo "<h2>Tabla del $i</h2>";
        echo "<ul>";
        for ($j = 0; $j <= 20; $j++) {
            $resultado = $i * $j;
            echo "<li>$i x $j = $resultado</li>";
        }
        echo "</ul>";
    }
    ?>
</article>

    <table>
     <article id= "sec4">
         <h1>tabla de 4 filas y 7 columnas</h1>
        <table>
    <?php
        // Generar número aleatorio de filas y columnas
        $numfilas = 4;  
        $numcolumnas = 7;

        // Recorrer filas
        for ($i = 0; $i < $numfilas; $i++) {
            echo '<tr>'; // Abrir fila
            // Recorrer columnas dentro de la fila
            for ($j = 0; $j < $numcolumnas; $j++) {
                echo "<td>$j</td>"; // Mostrar número de columna
            }

            echo '</tr>'; // Cerrar fila
        }
    ?>
</table>

    </article>
    </table>

     <article id= "sec5">
         <h1>Cálculo del cambio</h1>

         <?php

            //numAleatorio entre 1 y 1000
            $valor= rand(1,1000);

            // intval(mixto $valor, $base=10);

            $billete500 = intval($valor / 500);
            $valor = $valor % 500;

            $billete200 = intval($valor / 200);
            $valor = $valor % 200;

            $billete100 = intval($valor / 100);
            $valor = $valor % 100;

            $billete50 = intval($valor / 50);
            $valor = $valor % 50;

            $billete20= intval($valor / 20);
            $valor = $valor % 20;

             $billete10 = intval($valor / 10);
             $valor = $valor % 10;

    
            echo "Billetes de 500: " . $billete500 . "<br>";
            echo "Billetes de 200: " . $billete200 . "<br>";
            echo "Billetes de 100: " . $billete100 . "<br>";
            echo "Billetes de 50: " . $billete50 . "<br>";
            echo "Billetes de 20: " . $billete20 . "<br>";
            echo "Billetes de 10: " . $billete10 . "<br>";

         ?>
    </article>



    
</body>
</html>