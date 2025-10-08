<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    //Esto es un arrray asociativo en el que tiene un valor y una clave. 
    // CLAVE nombre, edad, ciudad.  VALOR 'Elias, 27, Valencia.
    $nombres = [
        [
            'nombre' => 'Elias',
            'edad'   => 27,
            'ciudad' => 'Valencia'
        ],
        [   
            'nombre' => 'Ramon',
            'edad'   => 30,
            'ciudad' => 'Barcelona'
        ],

        [
            'nombre' => 'Jaime',
            'edad'   => 24,
            'ciudad' => 'Oviedo'
        ],
    ];



    foreach ($nombres as $persona) {
        foreach ($persona as $key => $value) {
            echo "$value .  ";
        }
    }
    ?>

</body>

</html>