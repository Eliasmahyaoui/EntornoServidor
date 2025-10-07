<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" >
        <select name="Zona_horaria">
        <option value="America/Lima"> "Lima,Perú"</option>
        <option value="Europe/Madrid"> "Madrid, España"</option>             
        <option value="America/New_York"> "Nueva York, Estados Unidos"</option>
        <option value="Europe/Bruselas"> "Bruselas, Belgica"</option>
        </select>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset(Zona_horaria)) {
        # code...
    }
    ?>

</body>
</html>