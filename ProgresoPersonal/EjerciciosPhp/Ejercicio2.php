<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Crea un programa que imprima la fecha y hora actual de la zona horaria America/Lima.
    date_default_timezone_set("Europe/Madrid");

     $fecha= date("d-M-Y");
     $horaActual= date("H:i:s");

     echo "ZONA HORARIA America/Lima: <br>";
     echo  "La fecha . $fecha . y la hora actual es . $horaActual";
    ?>
</body>

</html>