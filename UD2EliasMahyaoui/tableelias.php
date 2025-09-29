<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas</title>
</head>
<body>
    
    <table>
    <?php
     //Muestra una tabla de multiplicar de 10*10;

     //Variables
        $filas=10;
        $columnas=10;

     //Primera tenemos que hacer las filas 
        for ($i=1; $i <=$filas; $i++) { 
            echo"<tr>$i </tr>";
            //Despues hacemos las columnas
            for ($j=1; $j <=$columnas ; $j++) {
                $resultado = $i * $j; 
                echo "<td> $resultado </td>";
        
       }
    }

    ?>
    </table>
</body>
</html>