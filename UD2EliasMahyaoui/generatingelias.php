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
        <h1>Seccion 1</h1>
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
        <h1>Seccion 2</h1>

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
    <h1>Seccion 3</h1>
    <?php
    $numAleatorio2 = rand(0,100);

    for ($i = 0; $i <= 20; $i++) {
        echo "<h2>Tabla del $i</h2>";
        echo "<ul>";
        for ($j = 0; $j <= 10; $j++) {
            $resultado = $i * $j;
            echo "<li>$i x $j = $resultado</li>";
        }
        echo "</ul>";
    }
    ?>
</article>

    <table>
     <article id= "sec4">
         <h1>Seccion 4</h1>
         <?php
        $numAleaotoriofilas= rand(0,20);
        $numAleatoriocolumnas= rand(0,20);
    



        ?>
    </article>
    </table>

     <article id= "sec5">
        
    </article>



    
</body>
</html>