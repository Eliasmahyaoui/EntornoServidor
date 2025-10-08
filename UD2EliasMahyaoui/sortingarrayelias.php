<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
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


   foreach ($nums as $key) {
    echo $key . " ";
   }
   /*for ($i=0; $i <10 ; $i++) { 
        echo $nums[$i] . " ";
   }*/
   echo "<br>";

   /*Ordenar el array por seleccion directa sin usar ninguna función.*/


   for ($i=0; $i <10; $i++) { 
        for ($j=0; $j <10 ; $j++) { 
            if ($nums[$i] > $nums[$j]) {
                $aux= $nums[$i];
                $nums[$i]= $nums[$j];
                $nums[$j]= $aux;
            }
        }
   }









    for ($i=0; $i < 10 ; $i++) { 
          for ($j=$i+1; $j < 10 ; $j++) { 
                if ($nums[$i] > $nums[$j]) {
                 //intercambiamos
                 $aux = $nums[$i];
                 $nums[$i] = $nums[$j];
                 $nums[$j] = $aux;
                }
          }
    }
    //mostramos el array ordenado
    echo "<h3> Array ordenado:</h3>";
    for ($i=0; $i <10 ; $i++) {
        echo $nums[$i] . " ";
   }    





   

?>


</body>
</html>