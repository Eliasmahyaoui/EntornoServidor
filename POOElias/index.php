<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/persona.inc.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //creamos los objetos 
    $liam = new Persona(19,' liam','liam@gmail', 'Francia');
    
   echo $liam->mail;
   echo $liam->__get('mail');

   $liam->age=20;
   $liam->__set('age',20);
   echo $liam->nameFirstLetterUC();
   $liam->country ='Chiquitistan';
   $liam->country ='Italia';
    ?>
</body>

</html>