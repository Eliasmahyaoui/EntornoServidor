<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    
    <?php
    //Crea un array de 10 numeros enteros aleatorios entre el 1 y el 100 .rand(1,100).

    //creamos el array vacio
    $array= [];



    //Array con numeros aleatorios del 1 al 100
    for ($i=0; $i < 10 ; $i++) { 
        $array[]= rand(1,100);
    }

    //Mostramos el array (siempre mostramos arrays con for each)
    foreach ($array as $numero) {
        echo $numero . " ";
    }
    
    ?>

</body>

</html>