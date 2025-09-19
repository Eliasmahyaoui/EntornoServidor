<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Vamos a crear un array 
    $nums = [];

   for ($i=0; $i<10 ; $i++) { 
    $nums[$i]= rand(1,100); //con numeros aleatorios del 1 al 100
   }
   //mostramos el array original
   echo "<h3> Array original:</h3>";

   for ($i=0; $i <10 ; $i++) { 
        echo $nums[$i] . " ";
   }
   echo "<br>";

   for ($i = 0; $i < 9; $i++) { // 9 porque el último ya estará en su sitio
    $minIndex = $i;
    
    for ($j = $i + 1; $j < 10; $j++) {
        if ($nums[$j] < $nums[$minIndex]) {
            $minIndex = $j;
        }
    }
    
    // intercambiar si hace falta
    if ($minIndex != $i) {
        $temp = $nums[$i];
        $nums[$i] = $nums[$minIndex];
        $nums[$minIndex] = $temp;
    }
}

echo "Array ordenado: ";
for ($i = 0; $i < 10; $i++) {
    echo $nums[$i] . " ";
}
?>



    ?>

</body>
</html>