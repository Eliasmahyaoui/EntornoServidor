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
        <?php
        $notamedia = rand(0,10)
        ?> 

    </article>

     <article id="sec3">
        
    </article>

     <article id= "sec4">
        
    </article>

     <article id= "sec5">
        
    </article>



    
</body>
</html>